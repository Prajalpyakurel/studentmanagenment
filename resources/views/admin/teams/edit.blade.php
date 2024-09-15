@extends('admin.layouts.main')

@section('content')
    <h1>Edit Team Member</h1>

    <form action="{{ route('admin.teams.update', $team->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $team->name }}" required>
        </div>

        <div class="form-group">
            <label for="designation">Designation</label>
            <input type="text" name="designation" class="form-control" value="{{ $team->designation }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update Team Member</button>
    </form>
@endsection
