@extends('admin.layouts.main')

@section('content')
    <h1>Admissions</h1>
    <div class="row">
        <div class="col-2">
            <a href="{{ route('admin.admissions.create') }}" class="btn btn-primary">Add Admission</a>
        </div>
        <div class="col-6">
            <!-- Search Form -->
            <form action="{{ route('admin.admissions.index') }}" method="GET" class="mb-4">
                <div class="input-group">
                    <input type="text" name="search" class="form-control"
                        placeholder="Search admissions by name, phone, or course" value="{{ request()->input('search') }}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>

    </div>



    <div class="row gap-3">
        <div class="card col-2 d-flex align-items-center justify-content-center pt-3 bg-warning">
            <div class="card-body text-center" style="color: white;">
                <strong>Total Fee:</strong> <br>
                Nrs.{{ number_format($total_fee, 2) }}<br>
            </div>
        </div>
        <div class="card col-3 d-flex align-items-center justify-content-center pt-3 bg-danger">
            <div class="card-body text-center" style="color: rgb(255, 255, 255);">
                <strong>Total Remaining Fee:</strong>
                Nrs.{{ number_format($total_remaining_fee, 2) }}<br>
            </div>
        </div>
        <div class="card col-2 d-flex align-items-center justify-content-center pt-3 bg-success">
            <div class="card-body text-center" style="color: white;">
                <strong>Total Paid Fee:</strong>
                Nrs.{{ number_format($total_paid_fee, 2) }}<br>
            </div>
        </div>

    </div>


    <!-- Display the total sums -->
    {{-- <div class="mb-3">
        <strong>Total Fee:</strong> Nrs.{{ number_format($total_fee, 2) }}<br>
        <strong>Total Remaining Fee:</strong> Nrs.{{ number_format($total_remaining_fee, 2) }}<br>
        <strong>Total Paid Fee:</strong> Nrs.{{ number_format($total_paid_fee, 2) }}
    </div> --}}

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Total Fee</th>
                <th>Remaining Fee</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admissions as $admission)
                <tr>
                    <td>{{ $admission->name }}</td>
                    <td>{{ $admission->phone }}</td>
                    <td>{{ $admission->course->title }}</td>
                    <td>Nrs.{{ number_format($admission->total_fee, 2) }}</td>
                    <td>Nrs.{{ number_format($admission->remaining_fee, 2) }}</td>
                    <td>
                        <a href="{{ route('admin.admissions.show', $admission->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('admin.admissions.edit', $admission->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.admissions.destroy', $admission->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
   <!-- Pagination Links -->

    </table>
    <div class="d-flex justify-content-center">
        {{ $admissions->links('vendor.pagination.bootstrap-5') }}
    </div>
@endsection
