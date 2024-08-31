@extends('admin.layouts.main')

@section('content')
<div class="container">
    <h2 class="mb-4">Add Cash Flow Transaction</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.cashflows.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="type">Transaction Type:</label>
            <select class="form-control" id="type" name="type" required>
                <option value="inward">Inward</option>
                <option value="outward">Outward</option>
            </select>
        </div>

        <div class="form-group">
            <label for="source">Source:</label>
            <select class="form-control" id="source" name="source" required>
                <option value="cash">Cash</option>
                <option value="bank">Bank</option>
            </select>
        </div>

        <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="number" class="form-control" id="amount" name="amount" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="category">Category (Optional):</label>
            <input type="text" class="form-control" id="category" name="category">
        </div>

        <div class="form-group">
            <label for="description">Description (Optional):</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>

        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ now()->toDateString() }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Save Transaction</button>
    </form>
</div>
@endsection
