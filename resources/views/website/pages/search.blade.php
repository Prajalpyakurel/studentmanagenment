@extends('website.layouts.index')

@section('content')

<style>
body {
    background-color: #f4f0ed;
    color: #3b2c26;
}
.search-title {
    font-size: 30px;
    font-weight: 700;
    color: #4a2f23;
    margin-bottom: 5px;
    line-height: 1.3;
}
.search-subline {
    font-size: 16px;
    color: #6b4a3a;
    margin-bottom: 6px;
    word-break: break-word;
}
.search-count {
    font-size: 14px;
    color: #7a5a49;
    margin-bottom: 20px;
}
.course-card {
    border-radius: 12px;
    border: none;
    background: #fff;
    box-shadow: 0 2px 10px rgba(0,0,0,0.06);
    transition: 0.25s;
}
.course-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 22px rgba(0,0,0,0.12);
}
.badge {
    background-color: #8b5e3c !important;
    color: #fff !important;
}
.price {
    color: #5a3c2e;
    font-weight: 600;
}
.btn-outline-success {
    border: 1px solid #5a3c2e;
    color: #5a3c2e;
}
.btn-outline-success:hover {
    background-color: #5a3c2e;
    color: #fff;
}
.recommended-card {
    border-radius: 12px;
    border: none;
    background: #fff;
    box-shadow: 0 2px 10px rgba(0,0,0,0.06);
    transition: 0.25s;
}
.recommended-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 22px rgba(0,0,0,0.12);
}
.btn-primary {
    background-color: #5a3c2e;
    border: none;
}
.btn-primary:hover {
    background-color: #3b241a;
}
mark {
    background-color: #e7c9a9 !important;
    color: #3b2c26;
    border-radius: 3px;
}
@media (max-width: 768px) {
    .search-title {
        font-size: 22px;
    }
    .search-subline {
        font-size: 14px;
        display: block;
        margin-top: 4px;
    }
    .search-count {
        font-size: 13px;
    }
    .container {
        padding: 20px 10px !important;
    }
}
</style>

<div class="container" style="padding: 90px 15px; min-height: 60vh;">
    <div>
        <h2 class="search-title">
            Search Results
        </h2>
        <div class="search-subline">
            for "<strong>{{ $query }}</strong>"
        </div>
        <p class="search-count">
            {{ $courses->count() }} course(s) found
        </p>
    </div>

    @php
        $safeQuery = preg_quote($query, '/');
    @endphp

    @if($courses->isEmpty())
        <div style="text-align:center; padding: 60px 0; color:#999;">
            <i class="fa fa-search" style="font-size:48px; margin-bottom:16px; display:block;"></i>
            <p style="font-size:18px;">No courses match your search.</p>
            <a href="{{ route('courses') }}" class="btn btn-primary" style="margin-top:12px;">
                Browse All Courses
            </a>
        </div>
    @else
        <div class="row">
            @foreach($courses as $course)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card course-card h-100">
                        @if($course->image)
                            <img src="{{ asset('storage/' . $course->image) }}"
                                 class="card-img-top"
                                 style="height:180px; object-fit:cover;">
                        @endif
                        <div class="card-body">
                            <span class="badge mb-2">
                                {{ $course->Category }}
                            </span>
                            <h5 class="card-title">
                                {!! preg_replace(
                                    "/($safeQuery)/i",
                                    '<mark>$1</mark>',
                                    e($course->title)
                                ) !!}
                            </h5>
                            <p style="font-size:14px; color:#6b4a3a;">
                                {{ Str::limit($course->description, 100) }}
                            </p>
                            <p class="price">
                                Rs. {{ number_format($course->price) }}
                            </p>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="{{ route('course.detail', $course->id) }}"
                               class="btn btn-outline-success btn-sm w-100">
                                View Course
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    @if(isset($recommended) && $recommended->isNotEmpty())
        <section class="mt-5">
            <h4 style="color:#4a2f23; margin-bottom:15px;">
                💡 You might also like
                <small style="color:#7a5a49; font-size:14px;">
                    based on "{{ $query }}"
                </small>
            </h4>
            <div class="row g-3">
                @foreach($recommended as $rec)
                    <div class="col-md-3 col-sm-6">
                        <div class="card recommended-card h-100">
                            @if($rec->image)
                                <img src="{{ asset('storage/' . $rec->image) }}"
                                     class="card-img-top"
                                     style="height:150px; object-fit:cover;">
                            @endif
                            <div class="card-body">
                                <span class="badge mb-1">
                                    {{ $rec->Category }}
                                </span>
                                <h6 style="color:#3b2c26; font-weight:600;">
                                    {{ $rec->title }}
                                </h6>
                                <p style="color:#6b4a3a; font-size:13px;">
                                    {{ Str::limit($rec->description, 70) }}
                                </p>
                                <strong style="color:#5a3c2e;">
                                    Rs. {{ number_format($rec->price) }}
                                </strong>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <a href="{{ route('course.detail', $rec->id) }}"
                                   class="btn btn-sm btn-primary w-100">
                                    View
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif

</div>

@endsection