@extends('website.layouts.index')

@section('content')
    <!-- Start Navigation -->
    <!-- Header -->
    <header class="header" >

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
                    <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">

                        <!-- Search Filter -->
                        <div class="card search-filter">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Search Filter</h4>
                            </div>
                            <div class="card-body">
                                <div class="filter-widget">
                                    <div class="cal-icon">
                                        <input type="text" class="form-control datetimepicker" placeholder="Select Date">
                                    </div>
                                </div>
                                <div class="filter-widget">
                                    <h4>Select College</h4>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist" checked>
                                            <span class="checkmark"></span> IT & Software
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist" checked>
                                            <span class="checkmark"></span> Aerospace Engineer
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist">
                                            <span class="checkmark"></span> Business
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist">
                                            <span class="checkmark"></span> Teacher Training
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist">
                                            <span class="checkmark"></span> Personal Development
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist">
                                            <span class="checkmark"></span> Music
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist">
                                            <span class="checkmark"></span> Electrical Engineer
                                        </label>
                                    </div>
                                </div>
                                <div class="btn-search">
                                    <button type="button" class="btn btn-block w-100">Search</button>
                                </div>
                            </div>
                        </div>
                        <!-- /Search Filter -->

                    </div>

                    <div class="col-md-12 col-lg-8 col-xl-9">

                        <!-- provider Widget -->
                        <div class="card">
                            <div class="card-body">
                                <div class="provider-widget">
                                    <div class="pro-info-left">
                                        <div class="provider-img">
                                            <a href="courses.html">
                                                <img src="assets/img/college/college-01.png" class="img-fluid"
                                                    alt="User Image">
                                            </a>
                                        </div>
                                        <div class="pro-info-cont">
                                            <h4 class="pro-name"><a href="courses.html">Imperial College London</a></h4>
                                            <p class="pro-speciality">Development</p>
                                            <h5 class="pro-department"><img src="assets/img/icon.png" class="img-fluid"
                                                    alt="Speciality">65 Courses</h5>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating">(35)</span>
                                            </div>
                                            <div class="clinic-details">
                                                <p class="pro-location"><i class="fas fa-map-marker-alt"></i> Newyork, USA
                                                </p>
                                                <ul class="clinic-gallery">
                                                    <li>
                                                        <a href="assets/img/features/feature-01.jpg"
                                                            data-fancybox="gallery">
                                                            <img src="assets/img/features/feature-01.jpg" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="assets/img/features/feature-02.jpg"
                                                            data-fancybox="gallery">
                                                            <img src="assets/img/features/feature-02.jpg" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="assets/img/features/feature-03.jpg"
                                                            data-fancybox="gallery">
                                                            <img src="assets/img/features/feature-03.jpg" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="assets/img/features/feature-04.jpg"
                                                            data-fancybox="gallery">
                                                            <img src="assets/img/features/feature-04.jpg" alt="Feature">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="clinic-services">
                                                <span>Library</span>
                                                <span> Courses</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-info-right">
                                        <div class="clini-infos">
                                            <ul>
                                                <li><i class="far fa-thumbs-up"></i> 100%</li>
                                                <li><i class="far fa-comment"></i> 35 Feedback</li>
                                                <li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
                                                <li><i class="far fa-money-bill-alt"></i> $50 - $300 <i
                                                        class="fas fa-info-circle" data-bs-toggle="tooltip"
                                                        title="Lorem Ipsum"></i></li>
                                            </ul>
                                        </div>
                                        <div class="clinic-booking">
                                            <a class="view-pro-btn" href="courses.html">View Profile</a>
                                            <a class="apt-btn" href="booking.html">Book Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /provider Widget -->

                        <!-- provider Widget -->
                        <div class="card">
                            <div class="card-body">
                                <div class="provider-widget">
                                    <div class="pro-info-left">
                                        <div class="provider-img">
                                            <a href="courses.html">
                                                <img src="assets/img/college/college-02.png" class="img-fluid"
                                                    alt="User Image">
                                            </a>
                                        </div>
                                        <div class="pro-info-cont">
                                            <h4 class="pro-name"><a href="courses.html">King's College London</a></h4>
                                            <p class="pro-speciality">Art</p>
                                            <p class="pro-department"><img src="assets/img/icon.png" class="img-fluid"
                                                    alt="Speciality">15 Courses</p>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating">(27)</span>
                                            </div>
                                            <div class="clinic-details">
                                                <p class="pro-location"><i class="fas fa-map-marker-alt"></i> Georgia, USA
                                                </p>
                                                <ul class="clinic-gallery">
                                                    <li>
                                                        <a href="assets/img/features/feature-01.jpg"
                                                            data-fancybox="gallery">
                                                            <img src="assets/img/features/feature-01.jpg" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="assets/img/features/feature-02.jpg"
                                                            data-fancybox="gallery">
                                                            <img src="assets/img/features/feature-02.jpg" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="assets/img/features/feature-03.jpg"
                                                            data-fancybox="gallery">
                                                            <img src="assets/img/features/feature-03.jpg" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="assets/img/features/feature-04.jpg"
                                                            data-fancybox="gallery">
                                                            <img src="assets/img/features/feature-04.jpg" alt="Feature">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="clinic-services">
                                                <span>Library</span>
                                                <span> Courses</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-info-right">
                                        <div class="clini-infos">
                                            <ul>
                                                <li><i class="far fa-thumbs-up"></i> 99%</li>
                                                <li><i class="far fa-comment"></i> 35 Feedback</li>
                                                <li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
                                                <li><i class="far fa-money-bill-alt"></i> $100 - $400 <i
                                                        class="fas fa-info-circle" data-bs-toggle="tooltip"
                                                        title="Lorem Ipsum"></i></li>
                                            </ul>
                                        </div>
                                        <div class="clinic-booking">
                                            <a class="view-pro-btn" href="courses.html">View Profile</a>
                                            <a class="apt-btn" href="booking.html">Book Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /provider Widget -->

                        <!-- provider Widget -->
                        <div class="card">
                            <div class="card-body">
                                <div class="provider-widget">
                                    <div class="pro-info-left">
                                        <div class="provider-img">
                                            <a href="courses.html">
                                                <img src="assets/img/college/college-01.png" class="img-fluid"
                                                    alt="User Image">
                                            </a>
                                        </div>
                                        <div class="pro-info-cont">
                                            <h4 class="pro-name"><a href="courses.html">London Business School</a></h4>
                                            <p class="pro-speciality">Business</p>
                                            <p class="pro-department"><img src="assets/img/icon.png" class="img-fluid"
                                                    alt="Speciality">40 Courses</p>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating">(4)</span>
                                            </div>
                                            <div class="clinic-details">
                                                <p class="pro-location"><i class="fas fa-map-marker-alt"></i> Louisiana,
                                                    USA</p>
                                                <ul class="clinic-gallery">
                                                    <li>
                                                        <a href="assets/img/features/feature-01.jpg"
                                                            data-fancybox="gallery">
                                                            <img src="assets/img/features/feature-01.jpg" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="assets/img/features/feature-02.jpg"
                                                            data-fancybox="gallery">
                                                            <img src="assets/img/features/feature-02.jpg" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="assets/img/features/feature-03.jpg"
                                                            data-fancybox="gallery">
                                                            <img src="assets/img/features/feature-03.jpg" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="assets/img/features/feature-04.jpg"
                                                            data-fancybox="gallery">
                                                            <img src="assets/img/features/feature-04.jpg" alt="Feature">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="clinic-services">
                                                <span>Library</span>
                                                <span> Courses</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-info-right">
                                        <div class="clini-infos">
                                            <ul>
                                                <li><i class="far fa-thumbs-up"></i> 97%</li>
                                                <li><i class="far fa-comment"></i> 4 Feedback</li>
                                                <li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
                                                <li><i class="far fa-money-bill-alt"></i> $150 - $250 <i
                                                        class="fas fa-info-circle" data-bs-toggle="tooltip"
                                                        title="Lorem Ipsum"></i></li>
                                            </ul>
                                        </div>
                                        <div class="clinic-booking">
                                            <a class="view-pro-btn" href="courses.html">View Profile</a>
                                            <a class="apt-btn" href="booking.html">Book Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /provider Widget -->

                        <!-- provider Widget -->
                        <div class="card">
                            <div class="card-body">
                                <div class="provider-widget">
                                    <div class="pro-info-left">
                                        <div class="provider-img">
                                            <a href="courses.html">
                                                <img src="assets/img/college/college-02.png" class="img-fluid"
                                                    alt="User Image">
                                            </a>
                                        </div>
                                        <div class="pro-info-cont">
                                            <h4 class="pro-name"><a href="courses.html">Imperial College</a></h4>
                                            <p class="pro-speciality">Aerospace Engineering</p>
                                            <p class="pro-department"><img src="assets/img/icon.png" class="img-fluid"
                                                    alt="Speciality">25 Courses</p>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating">(52)</span>
                                            </div>
                                            <div class="clinic-details">
                                                <p class="pro-location"><i class="fas fa-map-marker-alt"></i> Texas, USA
                                                </p>
                                                <ul class="clinic-gallery">
                                                    <li>
                                                        <a href="assets/img/features/feature-01.jpg"
                                                            data-fancybox="gallery">
                                                            <img src="assets/img/features/feature-01.jpg" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="assets/img/features/feature-02.jpg"
                                                            data-fancybox="gallery">
                                                            <img src="assets/img/features/feature-02.jpg" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="assets/img/features/feature-03.jpg"
                                                            data-fancybox="gallery">
                                                            <img src="assets/img/features/feature-03.jpg" alt="Feature">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="assets/img/features/feature-04.jpg"
                                                            data-fancybox="gallery">
                                                            <img src="assets/img/features/feature-04.jpg" alt="Feature">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="clinic-services">
                                                <span>Library</span>
                                                <span> Courses</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-info-right">
                                        <div class="clini-infos">
                                            <ul>
                                                <li><i class="far fa-thumbs-up"></i> 100%</li>
                                                <li><i class="far fa-comment"></i> 52 Feedback</li>
                                                <li><i class="fas fa-map-marker-alt"></i> Texas, USA</li>
                                                <li><i class="far fa-money-bill-alt"></i> $100 - $500 <i
                                                        class="fas fa-info-circle" data-bs-toggle="tooltip"
                                                        title="Lorem Ipsum"></i></li>
                                            </ul>
                                        </div>
                                        <div class="clinic-booking">
                                            <a class="view-pro-btn" href="courses.html">View Profile</a>
                                            <a class="apt-btn" href="booking.html">Book Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /provider Widget -->

                        <div class="load-more text-center">
                            <a class="btn btn-primary btn-sm" href="javascript:void(0);">Load More</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /Page Content -->
    @endsection
