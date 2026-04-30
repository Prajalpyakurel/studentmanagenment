@extends('website.layouts.index')

@section('content')

    <style>
        /* 🌿 BASE */
        body {
            background-color: #f3f0ee;
            color: #3b2c26;
        }

        /* 🧭 NAVBAR (DARK BROWN CLEAN) */
        .navbar {
            background-color: #463d36 !important;
            border-bottom: 1px solid #392d23;
        }

        .navbar-brand {
            color: #4a2f23 !important;
            font-weight: 600;
        }

        .navbar-nav .nav-link {
            color: #5a3c2e !important;
            font-weight: 500;
            transition: 0.2s;
        }

        .navbar-nav .nav-link:hover {
            color: #3b241a !important;
        }

        .navbar-nav .nav-link.active {
            color: #4a2f23 !important;
            font-weight: 600;
        }

        /* 🟤 BANNER */
        .home-banner {
            background: linear-gradient(135deg, #e0c7b5, #f3e7df);
            color: #3b2c26;
        }

        .banner-content h1,
        .banner-content p {
            color: #3b2c26;
        }

        /* 🤎 PRIMARY BUTTON (DARK BROWN) */
        .courses-btn {
            background-color: #5a3c2e;
            color: #fff;
            border: none;
        }

        .courses-btn:hover {
            background-color: #3f2a20;
        }

        /* 🤎 SECOND BUTTON */
        .course-btn {
            background-color: #4a2f23;
            color: #fff;
            border: none;
        }

        .course-btn:hover {
            background-color: #2f1d16;
        }

        /* 🤎 THIRD BUTTON */
        .all-btn {
            background-color: #3f2a20;
            color: #fff;
            border: none;
        }

        .all-btn:hover {
            background-color: #2a1a14;
        }

        /* 🧱 COURSE CARD */
        .course-section {
            background: #ffffff;
            border-radius: 12px;
            color: #3b2c26;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.10);
        }

        /* TEXT */
        .course-content h5 {
            color: #3b2c26;
        }

        .course-content p {
            color: #6b4a3a;
        }

        /* PRICE */
        .course-text .right {
            color: #5a3c2e;
            background-color: wheat;
        }

        .course-text .left {
            color: #6b4a3a;
            background-color: rgb(183, 183, 127);
        }

        /* SLOT */
        .slot p {
            color: #7a5a49;
        }

        .slot h5 {
            color: #3b2c26;
        }

        /* HOVER */
        .course-section:hover {
            transform: translateY(-5px);
            transition: 0.25s;
            box-shadow: 0 10px 22px rgba(0, 0, 0, 0.15);
        }

        /* HEADER */
        .section-header h2 {
            color: #4a2f23;
        }

        .section-header h5 {
            color: #6b4a3a;
        }
    </style>

    <!-- Home Banner -->
    <section class="section home-banner row-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="banner-content">
                        <p>IMS</p>
                        <h1>Achieve Your Dreams.</h1>
                        <h1>Book your Course.</h1>
                        <div class="btn-item">
                            <a class="btn courses-btn" href="{{ route('courses') }}">
                                All Courses
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Courses -->
    <section class="section college">
        <div class="container">

            <div class="clg-course">

                <div class="row">
                    <div class="col-12 col-md-7 mx-auto">
                        <div class="section-header text-center">
                            <h5>Latest Course</h5>
                            <h2 class="header-title">WE PROVIDE BEST COURSES</h2>
                        </div>
                    </div>
                </div>

                <div class="row">

                    @forelse ($courses as $course)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="course-section">

                                <div class="course-top">
                                    <div class="course-img">
                                        <a href="{{ route('course.detail', $course->id) }}">
                                            @if ($course->image_path)
                                                <img src="{{ asset('storage/' . $course->image_path) }}" class="img-fluid"
                                                    alt="{{ $course->title }}" style="width:100%; height:180px; object-fit:cover;">
                                            @else
                                                <img src="assets/img/courses/course-01.jpg" class="img-fluid" alt="Default"
                                                    style="width:100%; height:180px; object-fit:cover;">
                                            @endif
                                        </a>
                                    </div>

                                    <div class="course-text d-flex justify-content-between align-items-center">
                                         --}}
                                        <div class="right">Nrs.{{$course->price}}</div>
                                    </div>
                                </div>

                                <div class="course-content">
                                    <h5>{{$course->title}}</h5>
                                    <p>{{$course->Category}}</p>

                                    <div class="d-flex justify-content-between course-slots">
                                        <div class="slot">
                                            <p>Total Seats</p>
                                            <h5>{{$course->totalSeat}}</h5>
                                        </div>

                                        <div class="slot">
                                            <p>Available</p>
                                            <h5>{{$course->availableSeat}}</h5>
                                        </div>

                                        <div class="slot">
                                            <p>Duration</p>
                                            <h5>{{$course->duration}} Months</h5>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <a href="{{route('course.detail', $course->id)}}" class="btn course-btn">
                                            Book Now
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @empty
                    @endforelse

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="see-all text-center">
                            <a href="{{ route('courses') }}" class="btn all-btn">
                                View all
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection