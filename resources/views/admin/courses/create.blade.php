@extends('layouts.app')

@section('content')
    <h1>Create New Course</h1>

    <form action="{{ route('admin.courses.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="duration">Duration (hours)</label>
            <input type="number" name="duration" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Price ($)</label>
            <input type="number" name="price" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
