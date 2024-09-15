@extends('admin.layouts.main')

@section('content')
    <div class="container">
        <h1>Edit Client</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Client Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $client->name }}" required>
            </div>

            <div class="form-group">
                <label for="link">Client Website Link</label>
                <input type="url" name="link" id="link" class="form-control" value="{{ $client->link }}" required>
            </div>

            <div class="form-group">
                <label for="logo">Client Logo</label>
                <input type="file" name="logo" id="logo" class="form-control">
                @if($client->logo)
                    <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}" style="width: 50px;">
                @endif
            </div>

            <button type="submit" class="btn btn-success">Update Client</button>
        </form>
    </div>
@endsection
