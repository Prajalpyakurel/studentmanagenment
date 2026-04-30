@extends('admin.layouts.main')
@section('content')
    <div class="container mt-5">
        <div class="card p-4">

            {{-- ✅ Course Image --}}
            @if ($course->image_path)
                <img src="{{ asset('storage/' . $course->image_path) }}" alt="{{ $course->title }}"
                    class="img-fluid rounded mb-3" style="max-height:300px; object-fit:cover; width:100%;">
            @else
                <div class="bg-secondary text-white text-center py-5 rounded mb-3">No Image</div>
            @endif

            <h1>{{ $course->title }}</h1>
            <p class="text-muted">{{ $course->Category }}</p>
            <p>{{ $course->description }}</p>
            <p><strong>Duration:</strong> {{ $course->duration }} Months</p>
            <p><strong>Price:</strong> Nrs.{{ $course->price }}</p>
            <p><strong>Total Seats:</strong> {{ $course->totalSeat }}</p>
            <p><strong>Available Seats:</strong> {{ $course->availableSeat }}</p>

            @if ($course->pdf_path)
                <a href="{{ asset('storage/' . $course->pdf_path) }}" target="_blank" class="btn btn-outline-secondary me-2">
                    View PDF
                </a>
            @endif

            <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">Back to Courses</a>
        </div>
    </div>
@endsection