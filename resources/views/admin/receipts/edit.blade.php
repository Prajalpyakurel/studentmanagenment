@extends('layouts.app')

@section('content')
    <h1>Edit Receipt</h1>
    <form action="{{ route('admin.receipts.update', $receipt->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="admission_id">Admission</label>
            <select name="admission_id" class="form-control" required>
                @foreach ($admissions as $admission)
                    <option value="{{ $admission->id }}" {{ $receipt->admission_id == $admission->id ? 'selected' : '' }}>
                        {{ $admission->name }} ({{ $admission->phone }})
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="amount_received">Amount Received</label>
            <input type="number" name="amount_received" class="form-control" value="{{ $receipt->amount_received }}" required>
        </div>
        <div class="form-group">
            <label for="payment_date">Payment Date</label>
            <input type="date" name="payment_date" class="form-control" value="{{ $receipt->payment_date->format('Y-m-d') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Receipt</button>
    </form>
@endsection
