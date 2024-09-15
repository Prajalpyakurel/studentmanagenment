@extends('admin.layouts.main')

@section('content')
    <div class="container">
        <h1>Add New Client</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.clients.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Client Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="link">Client Website Link</label>
                <input type="url" name="link" id="link" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="logo">Client Logo</label>
                <input type="file" name="logo" id="logo" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Create Client</button>
        </form>
    </div>
@endsection
