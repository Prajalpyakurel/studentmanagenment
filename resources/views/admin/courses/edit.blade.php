@extends('admin.layouts.main')

@section('content')
    <h1>Edit Course</h1>

    <form action="{{ route('admin.courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $course->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ $course->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="duration">Duration (hours)</label>
            <input type="number" name="duration" class="form-control" value="{{ $course->duration }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price (Nrs.)</label>
            <input type="number" name="price" class="form-control" value="{{ $course->price }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
