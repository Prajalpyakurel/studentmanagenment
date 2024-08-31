@extends('admin.layouts.main')

@section('content')
<div class="container">
    <h2 class="mb-4">Add Cash Flow</h2>

    <form action="{{ route('admin.cashflows.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="type">Type:</label>
            <select name="type" id="type" class="form-control" required>
                <option value="inward">Inward</option>
                <option value="outward">Outward</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="source">Source:</label>
            <select name="source" id="source" class="form-control" required>
                <option value="cash">Cash</option>
                <option value="bank">Bank</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="amount">Amount:</label>
            <input type="number" name="amount" id="amount" class="form-control" step="0.01" required>
        </div>

        <div class="form-group mb-3">
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="category">Category:</label>
            <input type="text" name="category" id="category" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add Cash Flow</button>
    </form>
</div>
@endsection
