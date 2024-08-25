@extends('layouts.app')

@section('content')
    <h1>{{ $course->title }}</h1>
    <p>{{ $course->description }}</p>
    <p>Duration: {{ $course->duration }} hours</p>
    <p>Price: ${{ $course->price }}</p>
    <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">Back to Courses</a>
@endsection