@extends('admin.layouts.main')

@section('content')
    <h1>Services</h1>

    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">Add New Service</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Photo</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td><img src="{{ asset('storage/' . $service->photo) }}" width="100" alt="Service Photo"></td>
                    <td>{{ $service->title }}</td>
                    <td>
                        <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
