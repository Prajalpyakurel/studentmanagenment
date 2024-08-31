@extends('admin.layouts.main')

@section('content')
<div class="container">
    <h2 class="mb-4">Cash Flows</h2>

    <a href="{{ route('admin.cashflows.create') }}" class="btn btn-primary mb-3">Add Cash Flow</a>

    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Cash Balance</div>
                <div class="card-body">
                    <h3>Nrs.{{ number_format($cashBalance->balance ?? 0, 2) }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Bank Balance</div>
                <div class="card-body">
                    <h3>Nrs.{{ number_format($bankBalance->balance ?? 0, 2) }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            @if($cashFlows->isEmpty())
                <p>No cash flows found.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Type</th>
                                <th>Source</th>
                                <th>Amount</th>
                                <th>Balance</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cashFlows as $cashFlow)
                                <tr>
                                    <td>{{ $cashFlow->id }}</td>
                                    <td>{{ ucfirst($cashFlow->type) }}</td>
                                    <td>{{ ucfirst($cashFlow->source) }}</td>
                                    <td>Nrs.{{ number_format($cashFlow->amount, 2) }}</td>
                                    <td>Nrs.{{ number_format($cashFlow->balance, 2) }}</td>
                                    <td>{{ $cashFlow->date->format('Y-m-d') }}</td>
                                    <td>{{ $cashFlow->description }}</td>
                                    <td>
                                        <a href="{{ route('admin.cashflows.edit', $cashFlow->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.cashflows.destroy', $cashFlow->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center">
                    {{ $cashFlows->links('vendor.pagination.bootstrap-5') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
