@extends('admin.layouts.main')

@section('content')
<div class="container">
    <h2 class="mb-4">Cash Flow Transactions</h2>

    <a href="{{ route('admin.cashflows.create') }}" class="btn btn-primary mb-4">Add Transaction</a>

    <!-- Summary Cards -->
    <div class="row mb-4">
        <!-- Inward Cash -->
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Inward Cash</div>
                <div class="card-body">
                    <h5 class="card-title">Nrs.{{ number_format($totalInwardCash, 2) }}</h5>
                </div>
            </div>
        </div>
        <!-- Outward Cash -->
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">Outward Cash</div>
                <div class="card-body">
                    <h5 class="card-title">Nrs.{{ number_format($totalOutwardCash, 2) }}</h5>
                </div>
            </div>
        </div>
        <!-- Inward Bank -->
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Inward Bank</div>
                <div class="card-body">
                    <h5 class="card-title">Nrs.{{ number_format($totalInwardBank, 2) }}</h5>
                </div>
            </div>
        </div>
        <!-- Outward Bank -->
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">Outward Bank</div>
                <div class="card-body">
                    <h5 class="card-title">Nrs.{{ number_format($totalOutwardBank, 2) }}</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Closing Balances -->
    <div class="row mb-4">
        <!-- Closing Balance Cash -->
        <div class="col-md-6">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">Closing Balance - Cash</div>
                <div class="card-body">
                    <h5 class="card-title">Nrs.{{ number_format($closingBalanceCash, 2) }}</h5>
                </div>
            </div>
        </div>
        <!-- Closing Balance Bank -->
        <div class="col-md-6">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">Closing Balance - Bank</div>
                <div class="card-body">
                    <h5 class="card-title">Nrs.{{ number_format($closingBalanceBank, 2) }}</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Transaction Table -->
    @if($cashFlows->isEmpty())
        <p>No transactions found.</p>
    @else
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>Source</th>
                        <th>Amount</th>
                        <th>Balance</th>
                        <th>Date</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cashFlows as $cashFlow)
                        <tr>
                            <td>{{ $cashFlow->id }}</td>
                            <td>
                                @if($cashFlow->type === 'inward')
                                    <span class="badge bg-success">Inward</span>
                                @else
                                    <span class="badge bg-danger">Outward</span>
                                @endif
                            </td>
                            <td>{{ ucfirst($cashFlow->source) }}</td>
                            <td>Nrs.{{ number_format($cashFlow->amount, 2) }}</td>
                            <td>Nrs.{{ number_format($cashFlow->balance, 2) }}</td>
                            <td>{{ \Carbon\Carbon::parse($cashFlow->date)->format('Y-m-d') }}</td>
                            <td>{{ $cashFlow->category ?? '-' }}</td>
                            <td>{{ $cashFlow->description ?? '-' }}</td>
                            <td>
                                <a href="{{ route('admin.cashflows.edit', $cashFlow->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.cashflows.destroy', $cashFlow->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this transaction?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination Links -->
        <div class="d-flex justify-content-center">
            {{ $cashFlows->links('vendor.pagination.bootstrap-5') }}
        </div>
    @endif
</div>
@endsection
