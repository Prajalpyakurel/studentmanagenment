@extends('admin.layouts.main')

@section('content')
<div class="container">
    <h2>Edit Receipt</h2>
    <form action="{{ route('admin.receipts.update', $receipt->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $receipt->phone }}" readonly>
        </div>

        <div class="form-group">
            <label for="name">Student Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $admission->name }}" readonly>
        </div>

        <div class="form-group">
            <label for="remaining_fee">Remaining Fee:</label>
            <input type="text" class="form-control" id="remaining_fee" name="remaining_fee" value="{{ $admission->remaining_fee }}" readonly disabled>
        </div>

        <div class="form-group">
            <label for="amount_received">Amount Received:</label>
            <input type="number" class="form-control" id="amount_received" name="amount_received" value="{{ $receipt->amount_received }}" required>
        </div>

        <div class="form-group">
            <label for="payment_date">Payment Date:</label>
            <input type="date" class="form-control" id="payment_date" name="payment_date" value="{{ $receipt->payment_date->format('Y-m-d') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
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
});
</script>
@endsection
