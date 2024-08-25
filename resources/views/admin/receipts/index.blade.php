@extends('layouts.app')

@section('content')
<div class="container">
    <h2>All Receipts</h2>
    <a href="{{route('admin.receipts.create')}}">create Recipt</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Phone</th>
                <th>Name</th>
                <th>Amount Received</th>
                <th>Payment Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($receipts as $receipt)
                <tr>
                    <td>{{ $receipt->id }}</td>
                    <td>{{ $receipt->phone }}</td>
                    <td>{{ $receipt->admission->name }}</td>
                    <td>{{ $receipt->amount_received }}</td>
                    <td>{{ $receipt->payment_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
