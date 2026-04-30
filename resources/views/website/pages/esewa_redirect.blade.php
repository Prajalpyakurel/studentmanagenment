<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Redirecting to eSewa...</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: #f8fffe;
            color: #2d6a4f;
        }

        .logo {
            font-size: 48px;
            margin-bottom: 16px;
        }

        h2 {
            font-size: 20px;
            margin-bottom: 8px;
        }

        p {
            color: #666;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border: 4px solid #e0f0ea;
            border-top-color: #60cc8a;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
            margin: 20px auto;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <div class="logo">🔒</div>
    <h2>Redirecting to eSewa Payment</h2>
    <p>Please wait, do not close this tab...</p>
    <div class="spinner"></div>
    <p style="font-size:13px; color:#aaa;">Booking #{{ $booking->id }} — Nrs
        {{ number_format($booking->amount_paid, 2) }}</p>

    {{-- Auto-submit POST form to eSewa --}}
    <form id="esewaForm" action="{{ $esewaUrl }}" method="POST" style="display:none;">
        @foreach($params as $key => $value)
            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
        @endforeach
    </form>

    <script>
        // Auto-submit after brief delay so user sees the loading screen
        setTimeout(() => document.getElementById('esewaForm').submit(), 1200);
    </script>
</body>

</html>