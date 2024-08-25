@extends('layouts.app')

@section('content')
    <h1>Admission Details</h1>
    <p><strong>Name:</strong> {{ $admission->name }}</p>
    <p><strong>Phone:</strong> {{ $admission->phone }}</p>
    <p><strong>Course:</strong> {{ $admission->course->title }}</p>
    <p><strong>Total Fee:</strong> ${{ $admission->total_fee }}</p>
    <p><strong>Remaining Fee:</strong> ${{ $admission->remaining_fee }}</p>
    <p><strong>Payment History:</strong></p>
    <ul>
        @foreach ($admission->receipts as $receipt)
            <li>
                <strong>Amount:</strong> ${{ $receipt->amount_received }} |
                <strong>Date:</strong> {{ $receipt->payment_date->format('Y-m-d') }}
            </li>
        @endforeach
    </ul>
    <a href="{{ route('admin.admissions.edit', $admission->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('admin.admissions.index') }}" class="btn btn-primary">Back to List</a>
@endsection
