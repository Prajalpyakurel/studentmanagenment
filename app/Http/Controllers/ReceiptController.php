<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use App\Models\Admission;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function index()
    {
        $receipts = Receipt::with('admission')->get(); // Fetch all receipts with related admission details
        return view('admin.receipts.index', compact('receipts'));
    }

    public function create()
    {
        return view('admin.receipts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required|exists:admissions,phone',
            'amount_received' => 'required|numeric',
            'payment_date' => 'required|date',
        ]);

        $admission = Admission::where('phone', $request->phone)->first();

        if (!$admission) {
            return back()->withErrors(['phone' => 'No admission found for this phone number.']);
        }

        // Create the receipt
        Receipt::create([
            'phone' => $request->phone,
            'amount_received' => $request->amount_received,
            'payment_date' => $request->payment_date,
        ]);

        // Update the remaining fee in the admission record
        $admission->remaining_fee -= $request->amount_received;
        $admission->save();

        return redirect()->route('admin.receipts.create')->with('success', 'Receipt created successfully.');
    }

    public function getStudentByPhone($phone)
    {
        $admission = Admission::where('phone', $phone)->first();

        if (!$admission) {
            return response()->json(['error' => 'Student not found'], 404);
        }

        return response()->json([
            'name' => $admission->name,
            'remaining_fee' => $admission->remaining_fee,
        ]);
    }
}
