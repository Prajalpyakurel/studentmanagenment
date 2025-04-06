@extends('website.layouts.index')

@section('content')




<div class="content " style="margin-top: 100px;">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-view">
                    <div class="blog blog-single-post">
                        <div class="blog-image">
                            <a href="javascript:void(0);"><img alt="" src="{{asset('assets/img/blog/blog-01.jpg')}}"
                                    class="img-fluid"></a>
                        </div>
                        <h3 class="blog-title">{{$course->title}}</h3>
                        <div class="blog-content">
                            <p>{{$course->description}}</p>

                        </div>
                    </div>


                </div>
            </div>

            <!-- Blog Sidebar -->
            <div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar">


                <!-- Categories -->
                <div class="card category-widget">
                    <div class="card-header">
                        <h4 class="card-title">{{ $course->title }}</h4>
                    </div>
                    <div class="card-body">

                        <div class="provider-widget">
                            <div class="pro-info-left">

                                <div class="pro-info-cont">
                                    {{-- <h4 class="pro-name"><a href="#">{{ $course->title }}</a></h4> --}}
                                    <p class="pro-speciality">{{ $course->category }}</p>
                                    <div class="d-flex align-items-center justify-content-between course-slots g-5"
                                        style="    gap: 61px;">
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
                                    <h5 class="pro-department"><img src="{{asset('assets/img/icon.png')}}"
                                            class="img-fluid" alt="Speciality">{{$course->duration}} days</h5>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">(35)</span>
                                    </div>
                                    <div class="clinic-details">
                                        <p class="pro-location">{{$course->category}}
                                        </p>

                                    </div>

                                    <div class="clini-infos">
                                        <ul>

                                            <li><i class="far fa-money-bill-alt"></i> Nrs {{$course->price}} <i
                                                    class="fas fa-info-circle" data-bs-toggle="tooltip"
                                                    title="Lorem Ipsum"></i></li>
                                        </ul>
                                    </div>
                                    <div class="clinic-booking">

                                        <button type="button" class="btn btn-primary " data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter">
                                            BOOK COURSE
                                        </button>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- /Categories -->

                <div class="card blog-share clearfix">
                    <div class="card-header">
                        <h4 class="card-title">Share the post</h4>
                    </div>
                    <div class="card-body">
                        <ul class="social-share">
                            <li><a href="#" title="Facebook"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#" title="Google Plus"><i class="fab fa-google-plus"></i></a></li>
                            <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- /Blog Sidebar -->

        </div>
    </div>

</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Book Course: {{ $course->title }}</h5>

            </div>
            <form action="{{ route('courses.book', $course->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if($course->availableSeat > 0)
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required
                                value="{{ Auth::check() ? Auth::user()->name : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required
                                value="{{ Auth::check() ? Auth::user()->email : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="notes">Additional Notes</label>
                            <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                        </div>

                    @else
                        <div class="alert alert-warning">
                            Sorry, there are no available seats for this course.
                        </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    @if($course->availableSeat > 0)
                        <button type="submit" class="btn btn-primary">Confirm Booking</button>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>