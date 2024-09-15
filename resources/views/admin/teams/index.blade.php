@extends('admin.layouts.main')

@section('content')
    <h1>Our Team</h1>

    <a href="{{ route('admin.teams.create') }}" class="btn btn-primary">Add New Team Member</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Designation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $team)
                <tr>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->designation }}</td>
                    <td>
                        <a href="{{ route('admin.teams.edit', $team->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.teams.destroy', $team->id) }}" method="POST" style="display:inline;">
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
