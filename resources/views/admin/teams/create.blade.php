@extends('admin.layouts.main')

@section('content')
    <h1>Add New Team Member</h1>

    <form action="{{ route('admin.teams.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="designation">Designation</label>
            <input type="text" name="designation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Add Team Member</button>
    </form>
@endsection
