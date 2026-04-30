<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class EsewaPaymentController extends Controller
{

    private function esewaBaseUrl(): string
    {
        return config('esewa.env', 'sandbox') === 'production'
            ? 'https://epay.esewa.com.np/api/epay/main/v2/form'
            : 'https://rc-epay.esewa.com.np/api/epay/main/v2/form';
    }

    private function esewaVerifyUrl(): string
    {
        return config('esewa.env', 'sandbox') === 'production'
            ? 'https://epay.esewa.com.np/api/epay/transaction/status/'
            : 'https://rc-epay.esewa.com.np/api/epay/transaction/status/';
    }

    /**
     * Step 1: User fills the booking form and clicks "Pay with eSewa"
     * Creates a PENDING booking, then redirects to eSewa payment page.
     */
    public function initiate(Request $request, Course $course)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'notes' => 'nullable|string',
        ]);

        if ($course->availableSeat <= 0) {
            return redirect()->back()->with('error', 'Sorry, no available seats for this course.');
        }

        // Generate a unique transaction UUID for this payment attempt
        $transactionUuid = 'IMS-' . strtoupper(Str::random(12)) . '-' . time();

        // Create pending booking — seat NOT deducted yet (only on payment success)
        $booking = CourseBooking::create([
            'course_id'              => $course->id,
            'user_id'                => Auth::id(),
            'name'                   => $request->name,
            'email'                  => $request->email,
            'phone'                  => $request->phone,
            'notes'                  => $request->notes,
            'status'                 => 'pending',
            'payment_method'         => 'esewa',
            'payment_status'         => 'unpaid',
            'esewa_transaction_uuid' => $transactionUuid,
            'amount_paid'            => $course->price,
        ]);

        // Build HMAC-SHA256 signature required by eSewa v2 API
        $amount          = number_format($course->price, 2, '.', '');
        $taxAmount       = '0';
        $totalAmount     = $amount;
        $productCode     = config('esewa.product_code', 'EPAYTEST');
        $secretKey       = config('esewa.secret_key', '8gBm/:&EnhH.1/q');

        $signatureString = "total_amount={$totalAmount},transaction_uuid={$transactionUuid},product_code={$productCode}";
        $signature       = base64_encode(hash_hmac('sha256', $signatureString, $secretKey, true));

        $params = [
            'amount'           => $amount,
            'tax_amount'       => $taxAmount,
            'total_amount'     => $totalAmount,
            'transaction_uuid' => $transactionUuid,
            'product_code'     => $productCode,
            'product_service_charge' => '0',
            'product_delivery_charge' => '0',
            'success_url'      => route('esewa.success'),
            'failure_url'      => route('esewa.failure'),
            'signed_field_names' => 'total_amount,transaction_uuid,product_code',
            'signature'        => $signature,
        ];

        // Pass params to a redirect view (auto-submitting POST form to eSewa)
        return view('website.pages.esewa_redirect', [
            'esewaUrl' => $this->esewaBaseUrl(),
            'params'   => $params,
            'booking'  => $booking,
        ]);
    }

    /**
     * Step 2: eSewa redirects here on SUCCESS
     * Verifies the payment server-side, then confirms booking.
     */
    public function success(Request $request)
    {
        // eSewa v2 sends base64-encoded JSON in 'data' param
        $data = $request->input('data');

        if (!$data) {
            return redirect()->route('home')->with('error', 'Payment verification failed. No data received.');
        }

        try {
            $decoded = json_decode(base64_decode($data), true);
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Payment data could not be decoded.');
        }

        $transactionUuid = $decoded['transaction_uuid'] ?? null;
        $refId           = $decoded['transaction_code'] ?? null;
        $status          = $decoded['status'] ?? null;
        $totalAmount     = $decoded['total_amount'] ?? null;

        if (!$transactionUuid || $status !== 'COMPLETE') {
            return redirect()->route('home')->with('error', 'Payment was not completed.');
        }

        // Find the pending booking
        $booking = CourseBooking::where('esewa_transaction_uuid', $transactionUuid)->first();

        if (!$booking) {
            Log::error('eSewa success: booking not found for UUID ' . $transactionUuid);
            return redirect()->route('home')->with('error', 'Booking not found.');
        }

        if ($booking->payment_status === 'paid') {
            // Already processed (duplicate callback)
            return redirect()->route('course.detail', $booking->course_id)
                ->with('success', 'Your booking is already confirmed!');
        }

        // Server-side verification with eSewa API
        $verified = $this->verifyWithEsewa($transactionUuid, $totalAmount, $booking->course->price);

        if (!$verified) {
            $booking->update(['payment_status' => 'failed']);
            return redirect()->route('course.detail', $booking->course_id)
                ->with('error', 'Payment verification failed. Please contact support.');
        }

        // ✅ Payment verified — confirm booking and deduct seat
        $course = $booking->course;

        if ($course->availableSeat <= 0) {
            $booking->update(['payment_status' => 'failed', 'status' => 'cancelled']);
            return redirect()->route('course.detail', $booking->course_id)
                ->with('error', 'No seats available. Payment will be refunded within 3-5 business days.');
        }

        $booking->update([
            'status'          => 'confirmed',
            'payment_status'  => 'paid',
            'esewa_ref_id'    => $refId,
            'paid_at'         => now(),
        ]);

        $course->availableSeat -= 1;
        $course->save();

        Log::info('eSewa payment confirmed', ['booking_id' => $booking->id, 'ref_id' => $refId]);

        return redirect()->route('booking.confirmation', $booking->id);
    }

    /**
     * Step 3: eSewa redirects here on FAILURE / CANCEL
     */
    public function failure(Request $request)
    {
        $data = $request->input('data');
        if ($data) {
            try {
                $decoded = json_decode(base64_decode($data), true);
                $transactionUuid = $decoded['transaction_uuid'] ?? null;
                if ($transactionUuid) {
                    CourseBooking::where('esewa_transaction_uuid', $transactionUuid)
                        ->update(['payment_status' => 'failed']);
                }
            } catch (\Exception $e) {
                Log::warning('eSewa failure callback decode error: ' . $e->getMessage());
            }
        }

        return redirect()->route('home')
            ->with('error', 'Payment was cancelled or failed. Please try again.');
    }

    /**
     * Verify payment server-side using eSewa status API
     */
    private function verifyWithEsewa(string $transactionUuid, string $totalAmount, float $expectedAmount): bool
    {
        try {
            $productCode = config('esewa.product_code', 'EPAYTEST');
            $url = $this->esewaVerifyUrl() . '?' . http_build_query([
                'product_code'     => $productCode,
                'transaction_uuid' => $transactionUuid,
                'total_amount'     => $totalAmount,
            ]);

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 15);
            $response = curl_exec($ch);
            curl_close($ch);

            $result = json_decode($response, true);

            return isset($result['status']) && $result['status'] === 'COMPLETE'
                && isset($result['total_amount'])
                && (float)str_replace(',', '', $result['total_amount']) >= $expectedAmount;
        } catch (\Exception $e) {
            Log::error('eSewa verification error: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Booking confirmation page shown after successful payment
     */
    public function confirmation(CourseBooking $booking)
    {
        // Ensure only the booking owner can see this
        if (Auth::id() !== $booking->user_id) {
            abort(403);
        }

        return view('website.pages.booking_confirmation', compact('booking'));
    }
}
