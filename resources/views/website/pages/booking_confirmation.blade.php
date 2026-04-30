@extends('website.layouts.index')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=DM+Sans:wght@300;400;500;600&display=swap');

        .confirm-wrap {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 20px;
            background: linear-gradient(135deg, #f0fff6 0%, #e8f5fe 100%);
        }

        .confirm-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            padding: 50px 40px;
            max-width: 540px;
            width: 100%;
            text-align: center;
            animation: slideUp 0.5s ease;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .success-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #22c55e, #16a34a);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            font-size: 36px;
            box-shadow: 0 8px 24px rgba(34, 197, 94, 0.3);
        }

        .confirm-card h1 {
            font-family: 'DM Serif Display', serif;
            font-size: 28px;
            color: #1a1a2e;
            margin-bottom: 8px;
        }

        .confirm-card .subtitle {
            color: #64748b;
            font-size: 15px;
            margin-bottom: 32px;
        }

        .details-grid {
            background: #f8fafc;
            border-radius: 12px;
            padding: 20px 24px;
            text-align: left;
            margin-bottom: 28px;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #e2e8f0;
            font-size: 14px;
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-row .label {
            color: #64748b;
        }

        .detail-row .value {
            font-weight: 600;
            color: #1a1a2e;
        }

        .badge-paid {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #dcfce7;
            color: #16a34a;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }

        .ref-box {
            background: #eff6ff;
            border: 1px dashed #93c5fd;
            border-radius: 10px;
            padding: 14px 20px;
            margin-bottom: 28px;
            font-size: 13px;
            color: #1e40af;
        }

        .ref-box strong {
            display: block;
            font-size: 18px;
            letter-spacing: 1px;
            margin-top: 4px;
        }

        .btn-home {
            display: inline-block;
            background: linear-gradient(135deg, #22c55e, #16a34a);
            color: #fff;
            padding: 14px 36px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .btn-home:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(34, 197, 94, 0.3);
            color: #fff;
        }
    </style>

    <div class="confirm-wrap">
        <div class="confirm-card">
            <div class="success-icon">✓</div>
            <h1>Booking Confirmed!</h1>
            <p class="subtitle">Your payment was successful and your seat is reserved.</p>

            <div class="details-grid">
                <div class="detail-row">
                    <span class="label">Course</span>
                    <span class="value">{{ $booking->course->title }}</span>
                </div>
                <div class="detail-row">
                    <span class="label">Student Name</span>
                    <span class="value">{{ $booking->name }}</span>
                </div>
                <div class="detail-row">
                    <span class="label">Email</span>
                    <span class="value">{{ $booking->email }}</span>
                </div>
                <div class="detail-row">
                    <span class="label">Phone</span>
                    <span class="value">{{ $booking->phone ?? 'N/A' }}</span>
                </div>
                <div class="detail-row">
                    <span class="label">Amount Paid</span>
                    <span class="value">Nrs {{ number_format($booking->amount_paid, 2) }}</span>
                </div>
                <div class="detail-row">
                    <span class="label">Payment</span>
                    <span class="value"><span class="badge-paid">✓ eSewa Paid</span></span>
                </div>
                <div class="detail-row">
                    <span class="label">Booking Date</span>
                    <span class="value">{{ $booking->paid_at->format('M d, Y h:i A') }}</span>
                </div>
            </div>

            <div class="ref-box">
                eSewa Reference ID
                <strong>{{ $booking->esewa_ref_id ?? 'N/A' }}</strong>
            </div>

            <a href="{{ route('home') }}" class="btn-home">Back to Home</a>
        </div>
    </div>
@endsection