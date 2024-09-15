@extends('admin.layouts.main')

@section('content')
    <div class="container">
        <h1>Update Company Logo and Name</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('admin.logo.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="company_name" class="form-label">Company Name</label>
                <input type="text" name="company_name" class="form-control" value="{{ $logo->company_name ?? '' }}" required>
            </div>

            <div class="mb-3">
                <label for="logo_image" class="form-label">Company Logo</label>
                <input type="file" name="logo_image" class="form-control">

                @if(isset($logo->logo_image))
                    <div class="mt-2">
                        <img src="{{ asset('storage/'.$logo->logo_image) }}" alt="Company Logo" width="150">
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
