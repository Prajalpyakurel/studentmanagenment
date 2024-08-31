@extends('admin.layouts.main')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Cash Flow Record</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cashflows.update', $cashFlow->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="type" class="form-control" required>
                <option value="inward" {{ $cashFlow->type == 'inward' ? 'selected' : '' }}>Inward</option>
                <option value="outward" {{ $cashFlow->type == 'outward' ? 'selected' : '' }}>Outward</option>
            </select>
        </div>

        <div class="form-group">
            <label for="source">Source</label>
            <select name="source" id="source" class="form-control" required>
                <option value="cash" {{ $cashFlow->source == 'cash' ? 'selected' : '' }}>Cash</option>
                <option value="bank" {{ $cashFlow->source == 'bank' ? 'selected' : '' }}>Bank</option>
            </select>
        </div>

        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" name="amount" id="amount" class="form-control" value="{{ $cashFlow->amount }}" required>
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" id="date" class="form-control" value="{{ $cashFlow->date }}" required>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" name="category" id="category" class="form-control" value="{{ $cashFlow->category }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control">{{ $cashFlow->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
