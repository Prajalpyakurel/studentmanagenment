@extends('admin.layouts.main')

@section('content')
<div class="container">
    <h2 class="mb-4">All Receipts</h2>

    <a href="{{ route('admin.receipts.create') }}" class="btn btn-primary mb-3">Create Receipt</a>

    <!-- Optional: Search Form -->
    <form method="GET" action="{{ route('admin.receipts.index') }}" class="mb-3">
        <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Search by phone or name" value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>

    <div class="card">
        <div class="card-body">
            @if($receipts->isEmpty())
                <p>No receipts found.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Phone</th>
                                <th>Name</th>
                                <th>Amount Received</th>
                                <th>Payment Date</th>
                                <th>Payment Method</th> <!-- New Column -->
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($receipts as $receipt)
                                <tr>
                                    <td>{{ $receipt->id }}</td>
                                    <td>{{ $receipt->phone }}</td>
                                    <td>{{ $receipt->admission->name }}</td>
                                    <td>Nrs.{{ number_format($receipt->amount_received, 2) }}</td>
                                    <td>{{ $receipt->formatted_payment_date }}</td>
                                    <td>{{ ucfirst($receipt->payment_method) }}</td> <!-- Display Payment Method -->
                                    <td>
                                        <a href="{{ route('admin.receipts.edit', $receipt->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination Links -->
                <div class="d-flex justify-content-center">
                    {{ $receipts->links('vendor.pagination.bootstrap-5') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
