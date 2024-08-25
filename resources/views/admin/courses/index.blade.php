@extends('layouts.app')

@section('content')
    <h1>All Courses</h1>

    <a href="{{ route('admin.courses.create') }}" class="btn btn-primary">Create New Course</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Duration</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->duration }} hours</td>
                    <td>${{ $course->price }}</td>
                    <td>
                        <a href="{{ route('admin.courses.show', $course->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('admin.courses.edit', $course->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
