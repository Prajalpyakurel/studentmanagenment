@extends('website.layouts.index')

@section('content')



	<!-- Home Banner -->
	<section class="section home-banner row-middle">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7">
					<div class="banner-content">
						<p>DreamsCLG</p>
						<h1>Achieve Your Dreams.</h1>
						<h1>Book your Course.</h1>
						<div class="btn-item">
							{{-- <a class="btn get-btn" href="courses.html">Get Started</a> --}}
							<a class="btn courses-btn" href="{{ route('courses') }}">All Courses</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Home Banner -->

	<!-- Our Colleges -->
	<section class="section college">
		<div class="container">

			<!--- End Colleges  -->

			<!--- Latest Courses  -->
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

					<!--- Course-Item  -->
					@forelse ($courses as $course)
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="course-section">
								<div class="course-top">
									<div class="course-img">
										<a href="course-details.html"><img src="assets/img/courses/course-01.jpg" alt=""
												class="img-fluid"></a>
									</div>
									<div class="course-text d-flex justify-content-between align-items-center">
										<div class="left">3.2</div>
										<div class="right">Nrs.{{$course->price}}</div>
									</div>

								</div>
								<div class="course-content">
									<h5>{{$course->title}}</h5>
									{{-- <h2><a href="course-details.html"></a></h2> --}}
									<p>{{$course->Category}}</p>
									<div class="d-flex align-items-center justify-content-between course-slots">
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
										<a href="{{route('course.detail', $course->id)}}" class="btn course-btn">Book Now</a>
									</div>
								</div>
							</div>
						</div>
					@empty

					@endforelse

					<!--- /Course-Item  -->

				</div>

				<div class="row">
					<div class="col-12">
						<div class="see-all  text-center">
							<a href="{{ route('courses') }}" class="btn all-btn">View all <i
									class="fas fa-caret-right right-arrow"></i></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- END courses -->




@endsection
