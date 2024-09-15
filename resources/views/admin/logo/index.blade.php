@extends('admin.layouts.main')

@section('content')
    <div class="container">
        <h1>Company Logo Management</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($logo)
            <div class="card mb-3">
                <div class="card-header">
                    <h3>{{ $logo->company_name }}</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' . $logo->logo_image) }}" alt="Company Logo" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <h5>Company Name: {{ $logo->company_name }}</h5>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.logo.edit') }}" class="btn btn-primary">Edit Logo</a>
                </div>
            </div>
        @else
            <div class="alert alert-warning">
                No logo has been set. Please add a company logo and name.
            </div>
            <a href="{{ route('admin.logo.edit') }}" class="btn btn-primary">Add Logo</a>
        @endif
    </div>
@endsection
