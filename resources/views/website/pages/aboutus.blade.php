@extends('website.layouts.master')

@section('content')
<div class="top_banner position-relative" style="height: 7rem;">
    <img src="{{ asset('background.jpg') }}" alt="Banner Image" class="w-100">
    <div class="centered position-absolute text-center text-light" style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <h1 class="fw-bold display-5 display-md-4 display-lg-3 m-2">About Us</h1>
        <p class="fs-5">Home > About Us</p>
    </div>
</div>

<!-- Our Story Section -->
<div class="py-4" style="background-color: var(--soft-white);">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="our-story-content">
                    <h1 class="display-6 fw-bold fs-3 fs-md-4">Welcome to EEE Innovation Ghar</h1>
                    <p class="text-justify fs-6 fs-md-5">Established on February 12, 2019, EEE Innovation Ghar Pvt. Ltd stands as a beacon of technological advancement in Nepal. Our mission is to deliver cutting-edge solutions in Engineering, Education, and Entertainment while providing exceptional IT services to the global market, leveraging the unparalleled talent of Nepal.</p>
                    <p class="text-justify fs-6 fs-md-5">Our motto is to be the best outsourcing company in both the local and global markets. EEE Innovation Ghar Pvt. Ltd is tied up with a Japanese Tech company named "B-icon. Inc" and provides various IT solutions to them. We aim to diversify our domain in the near future, becoming a leading conglomerate in Nepal by applying innovation across multiple sectors.</p>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('our-story.png') }}" alt="Our Story" class="img-fluid" style="max-width: 100%; height: auto;">
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 mb-4 mb-lg-0">
                <div class="our-story-content">
                    <h1 class="display-6 fw-bold fs-3 fs-md-4">Our Vision</h1>
                    <p class="text-justify fs-6 fs-md-5">EEE Innovation Ghar Pvt. Ltd envisions becoming a technological leader in Nepal, delivering solutions that redefine excellence in Engineering, Education, and Entertainment.</p>
                    <h1 class="display-6 fw-bold fs-3 fs-md-4">Our Expertise</h1>
                    <p class="text-justify fs-6 fs-md-5">Our dedicated team crafts bespoke solutions to meet evolving client needs. From analysis to development, rigorous testing, and seamless implementation, we ensure world-class solutions at every step.</p>
                </div>
            </div>
            <div class="col-lg-6 text-center order-lg-2">
                <img src="{{ asset('our-story.png') }}" alt="Our Vision" class="img-fluid" style="max-width: 100%; height: auto;">
            </div>
        </div>
    </div>
</div>



{{--start of why choose us--}}
<div class="feat bg-gray pt-5 pb-5" style="background-color: var(--soft-white); overflow: hidden;">
    <div class="container">
        <div class="row">
            <div class="section-head col-12 text-center mb-4">
                <h4 class="display-6"><span>Why Choose</span> Us?</h4>
                <p class="lead">When you choose us, you'll feel the benefit of 10 years' experience of Web Development. We know the digital world and understand how to handle it effectively, with expertise in SEO, social media, and online strategy.</p>
            </div>

            <!-- Features Section -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="item text-center">
                    <span class="icon feature_box_col_one"><i class="fa fa-globe fa-2x"></i></span>
                    <h6 class="mt-3">Modern Design</h6>
                    <p>We use the latest technology to meet the demands of today’s digital world.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="item text-center">
                    <span class="icon feature_box_col_two"><i class="fa fa-anchor fa-1x"></i></span>
                    <h6 class="mt-3">Creative Design</h6>
                    <p>We blend creativity with customer feedback to deliver standout designs.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="item text-center">
                    <span class="icon feature_box_col_three"><i class="fa fa-hourglass-half fa-1x"></i></span>
                    <h6 class="mt-3">24 x 7 User Support</h6>
                    <p>Our team is available around the clock to assist you with any questions or issues.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="item text-center">
                    <span class="icon feature_box_col_four"><i class="fa fa-database fa-1x"></i></span>
                    <h6 class="mt-3">Business Growth</h6>
                    <p>Our solutions are crafted to foster growth and help you reach new heights.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="item text-center">
                    <span class="icon feature_box_col_five"><i class="fa fa-upload fa-1x"></i></span>
                    <h6 class="mt-3">Market Strategy</h6>
                    <p>We use innovative strategies to stay ahead in today’s fast-paced market.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="item text-center">
                    <span class="icon feature_box_col_six"><i class="fa fa-camera fa-1x"></i></span>
                    <h6 class="mt-3">Affordable Cost</h6>
                    <p>We provide high-quality services at competitive rates.</p>
                </div>
            </div>
        </div>
    </div>
</div>

        {{-- end start of why choose us--}}

{{--        start of our team--}}
    <div style="margin-bottom:2rem;">
        <div class="feat bg-gray pt-5 pb-1" style=" background-color: var(--soft-white); ">

                <div class="row">
                    <div class="section-head col-sm-12" style="margin-bottom:0;">
                        <h4><span>Meet Our</span> TEAM</h4>
                        <p>
                            "Empowering Innovation, Uniting Excellence: Together We Tech!"</p>
                    </div>
                    {{-- @for ($i = 0; $i < count($employees); $i++)
                    <div class="col-lg-4 col-sm-6">
                        <div class="item"> <span class="icon feature_box_col_one"><img src="{{ asset('images/' . $employees[$i]->image) }}" alt=""></span>
                            <h6>{{ $employees[$i]->name }}</h6>
                            <h6>{{ $employees[$i]->designation }}</h6>
                            <h6>{{$employees[$i]->email}}</h6>
                            <p>{{ $employees[$i]->about }}</p>
                            {{-- <p>We use latest technology for the latest world because we know the demand of peoples.</p> --}}


                            {{-- <p>Rajan’s passion, curiosity, and experience in technology and business has made him a competitive CEO for this organization.</p> --}}
                        {{-- </div>
                    </div> --}}
                </div>
        </div>
        <div class="container-fluid" style="margin-bottom: 2rem;">
            <div class="team-container" style=" background-color: var(--soft-white); ">
                    <!-- Team members go here -->
                    <div class="team-members" id="teamMembers">
                        <!-- Team members go here -->
                        @foreach($teams as $team)
                        <div class="team-member">{{ $team->name }} - {{ $team->designation }}</div>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
                {{--end of our team --}}
                <!--    End Our Story Section-->
 {{-- Testimonial section --}}
 <section class="overflow-hidden">
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-md-10 col-xl-8 text-center">
            <h1 class="mb-4 text-danger">Our Students Speak: Real Experiences, Real Success Stories</h1>
            <p class="mb-4 pb-2 mb-md-5 pb-md-0">

            </p>
        </div>
    </div>

    <div class=" container">
        @foreach ($testimonials as $testimonial)
            <div class="card" style="width: 18rem;">
                @if ($testimonial->client_photo)
                <img src="{{ asset('storage/' . $testimonial->client_photo) }}" alt="Client Photo"
                    class="card-img-top">
            @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $testimonial->client_name }}</h5>
                    <p class="card-text">{!! Str::words($testimonial->description, 15, ' ...') !!}</p>
                    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                </div>
            </div>
        @endforeach
    </div>





</section>
{{-- end of Testimonial section --}}
@endsection

