@extends('admin.layouts.main')

@section('content')
    <div class="container">
        <h1>Clients</h1>
        <a href="{{ route('admin.clients.create') }}" class="btn btn-primary mb-3">Add Client</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Logo</th>
                    <th>Link</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>
                            @if($client->logo)
                                <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}" style="width: 50px;">
                            @else
                                No logo
                            @endif
                        </td>
                        <td><a href="{{ $client->link }}" target="_blank">{{ $client->link }}</a></td>
                        <td>
                            <a href="{{ route('admin.clients.edit', $client->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
