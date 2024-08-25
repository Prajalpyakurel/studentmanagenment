@extends('layouts.app')

@section('content')
    <h1>Receipt Details</h1>
    <p><strong>Admission:</strong> {{ $receipt->admission->name }} ({{ $receipt->admission->phone }})</p>
    <p><strong>Amount Received:</strong> ${{ $receipt->amount_received }}</p>
    <p><strong>Payment Date:</strong> {{ $receipt->payment_date->format('Y-m-d') }}</p>
    <a href="{{ route('admin.receipts.edit', $receipt->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('admin.receipts.destroy', $receipt->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('admin.receipts.index') }}" class="btn btn-primary">Back to List</a>
@endsection
