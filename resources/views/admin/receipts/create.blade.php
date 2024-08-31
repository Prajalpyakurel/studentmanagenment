@extends('admin.layouts.main')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h2>Create Receipt</h2>
        <form action="{{ route('admin.receipts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="name">Student Name:</label>
                <input type="text" class="form-control" id="name" name="name" readonly>
            </div>

            <div class="form-group">
                <label for="remaining_fee">Remaining Fee:</label>
                <input type="text" class="form-control" id="remaining_fee" name="remaining_fee" readonly>
            </div>

            <div class="form-group">
                <label for="amount_received">Amount Received:</label>
                <input type="number" class="form-control" id="amount_received" name="amount_received" required>
            </div>

            <div class="form-group">
                <label for="payment_date">Payment Date:</label>
                <input type="date" class="form-control" id="payment_date" name="payment_date" required>
            </div>

            <div class="form-group">
                <label for="payment_method">Payment Method:</label>
                <select class="form-control" id="payment_method" name="payment_method" required>
                    <option value="cash">Cash</option>
                    <option value="bank">Bank</option>
                </select>
            </div>

            <div class="form-group bank-details" style="display:none;">
                <label for="bank_name">Bank Name:</label>
                <input type="text" class="form-control" id="bank_name" name="bank_name">
            </div>

            <div class="form-group bank-details" style="display:none;">
                <label for="transaction_id">Transaction ID:</label>
                <input type="text" class="form-control" id="transaction_id" name="transaction_id">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#phone').on('input', function() {
                var phone = $(this).val();

                if (phone.length >= 10) {
                    $.ajax({
                        url: '/admin/receipts/student-by-phone/' + phone,
                        method: 'GET',
                        success: function(response) {
                            if (response.name) {
                                $('#name').val(response.name);
                                $('#remaining_fee').val(response.remaining_fee);
                            } else {
                                $('#name').val('');
                                $('#remaining_fee').val('');
                            }
                        },
                        error: function() {
                            $('#name').val('');
                            $('#remaining_fee').val('');
                            alert('Student not found');
                        }
                    });
                }
            });

            $('#payment_method').change(function() {
                if ($(this).val() === 'bank') {
                    $('.bank-details').show();
                } else {
                    $('.bank-details').hide();
                }
            });
        });
    </script>
@endsection
