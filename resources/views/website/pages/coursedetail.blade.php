@extends('website.layouts.index')

@section('content')
<!-- Start Navigation -->
<!-- Header -->
<header class="header">

    <!-- /Header -->

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"></a></li>
                            <li class="breadcrumb-item active" aria-current="page"></li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title"></h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container">

            <div class="row">
                @forelse ($courses as $course)
                <div class="col-md-6 col-lg-6 col-xl-6"> <!-- 2 cards per row on medium and larger screens -->
                    <div class="card">
                        <div class="card-body">
                            <div class="provider-widget">
                                <div class="pro-info-left">
                                    <div class="provider-img">
                                        <a href="#">
                                            <img src="assets/img/college/college-01.png" class="img-fluid" alt="User Image">
                                        </a>
                                    </div>
                                    <div class="pro-info-cont">
                                        <h4 class="pro-name"><a href="#">{{ $course->title }}</a></h4>
                                        <p class="pro-speciality">{{ $course->category }}</p>
                                        <h5 class="pro-department"><img src="assets/img/icon.png" class="img-fluid" alt="Speciality">{{ $course->duration }} days</h5>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(35)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="pro-location">{{ $course->category }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-info-right">
                                    <div class="clini-infos">
                                        <ul>
                                            <li><i class="far fa-money-bill-alt"></i> Nrs {{ $course->price }} <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i></li>
                                        </ul>
                                    </div>
                                    <div class="clinic-booking">
                                        <a class="apt-btn" href="{{ route('course.detail', $course->id) }}">Book Course</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <p>No courses available.</p>
                @endforelse
            </div>


        </div>

    </div>
    <!-- /Page Content -->
    @endsection
