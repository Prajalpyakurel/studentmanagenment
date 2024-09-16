@extends('website.layouts.master')

@section('content')
    {{--    <h1>ram is a good boy</h1> --}}
    {{--    <h1>ram is a good boy</h1> --}}
    <!--    Hero Section-->
    <div class="hero-section">
        <div class="inner-hero-container">
            <div class="hero-section-wrapper grid">
                <div class="hero-section-left">
                    <div class="hero-left-content d-flex flex-col">
                        <div class="hero-left-heading text-justify">
                            <h1 style="font-size: 4rem">Education,</h1>
                            <h1 style="font-size: 4rem">Engineering,</h1>
                            <h1 style="font-size: 4rem">Entertainment.</h1>
                        </div>
                        {{-- <div class="hero-left-info">
                            <div class="hero-left-info-first">
                                <p>Let us be the <span class="first-span"> answer</span></p>
                                <p>Let us be the <span class="first-span"> semi-colon</span></p>
                                <p>Let us be the <span class="first-span"> harvey</span></p>
                                <p>Let us be the <span class="first-span"> dumbledore</span></p>
                            </div>
                            <div class="hero-left-info-second">
                                <p>to your learning <span class="second-span"> challenges</span></p>
                                <p>to your learning <span class="second-span"> C++ Code</span></p>
                                <p>to your learning <span class="second-span"> mike ross</span></p>
                                <p>to your learning <span class="second-span"> Harry Potter</span></p>
                            </div>
                        </div> --}}
                        <div style="margin: 3rem 28rem 0 0;">
                            <a href="{{ asset('about') }}" class="text-decoration-none p-3 text-light fw-bold learn-more-home"
                                style="border-radius: 8px;background-image: linear-gradient(to top, #de5fa8, #c065b4, #9e6aba, #7b6db9, #596eb1);">
                                Explore More</a>
                        </div>
                    </div>
                </div>
                <div class="hero-section-right">
                    <video class="hero-video" src="{{ asset('raw.mp4') }}" autoplay loop muted></video>
                </div>
            </div>
        </div>
    </div>
    <!--    End Hero Section-->
    <!--    Our Story Section-->
    <div class="our-story-section">
        <div class="our-story-left">
            <img src="{{ asset('our-story.png') }}" alt="" height="auto" width="450">
        </div>
        <div class="our-story-right">
            <div class="our-story-content">
                <h1>Our Story</h1>
                <p>EEE Innovation Ghar Pvt. Ltd was established in 12 February, 2019 to provide appropriate and advanced
                    technical solutions in the field of Engineering, Education, and Entertainment. We also aim to
                    provide good IT services in the global market by utilizing the best-skilled manpower of Nepal.
                    <br><br>
                    Our motto is to be the best outsourcing company on the local and global market by trading
                    technologies. EEE Innovation Ghar Pvt Ltd is tied up with a Japanese Tech company named "B-icon.
                    Inc" from the beginning and also provides various IT solutions to them. In near future we will
                    diversify our domain and will be a leading conglomerate in Nepal, We will develop the best
                    technology through innovation and apply them in every possible domain. We have a highly dedicated
                    and expert IT team providing world-class solutions and support from analysis to development and from
                    testing to implementation phase.
                </p>
                <a href="{{ asset('about') }}" class="text-decoration-none p-3 text-light fw-bold learn-more-home"
                    style="border-radius: 8px;background-image: linear-gradient(to top, #de5fa8, #c065b4, #9e6aba, #7b6db9, #596eb1);">
                    Learn More</a>
            </div>
        </div>
    </div>
    <!--    End Our Story Section-->
    <!--Why Choose Us-->
    <section class="course-categories">
        <h2 class="text-danger text-center eeein">Why EEE Innovation Ghar ?? </h2>
        <div class="category-grid">
            <div class="category-card">
                <i class="fa-solid fa-graduation-cap text-dark"></i>
                <h3 class="text-danger">Expert Instructors</h3>
                <p style="font-size: 1.3rem;">Learn from industry professionals with years of experiences</p>
            </div>
            <div class="category-card">
                <i class="fa-solid fa-gear text-dark"></i>
                <h3 class="text-danger">Hands-on Projects</h3>
                <p style="font-size: 1.3rem;">Apply your skills to real-work projects and build your portfolio</p>
            </div>
            <div class="category-card">
                <i class="fa-regular fa-handshake text-dark"></i>
                <h3 class="text-danger">Supportive Community</h3>
                <p style="font-size: 1.3rem;">Connect With fellow learners and grow together</p>
            </div>
            <div class="category-card">
                <i class="fa-regular fa-file text-dark"></i>
                <h3 class="text-danger">Industry-Recognized Certifiates</h3>
                <p style="font-size: 1.3rem;">Earn certificates that boost your career prospecst</p>
            </div>
        </div>
    </section>

    <!--    What We Do Section-->
    <div class="header-container d-flex justify-content-between align-items-center px-3">
        <h2 class="fw-bold fs-1 underline-heading text-danger">Our Courses</h2>
        <a href="{{ route('courses') }}" class="view-all-link">View All Courses<i class="fa-solid fa-angles-right"></i></a>
    </div>

    <!--    End What We Do Section-->
    {{-- Testimonial section --}}
    <section class="overflow-hidden">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
                <h1 class="mb-4 text-danger">Our Students testimonials</h1>
                <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                    numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
                    quisquam eum porro a pariatur veniam.
                </p>
            </div>
        </div>

        <div class="container swiper">
            <div class="card-wrapper">
                <!-- Card slides container -->
                <ul class="card-list swiper-wrapper">
                    @foreach ($testimonials as $testimonial)
                        <li class="card-item swiper-slide">
                            <div class="card-link">
                                @if($testimonial->client_photo)
                                <img src="{{ asset('storage/'.$testimonial->client_photo) }}" alt="Client Photo" class="card-image">
                            @endif
                                <h3 class="d-flex justify-center mt-2" style="color: #de5fa8" >{{ $testimonial->client_name }}</h1>
                                <h2 class="card-title" >{!! Str::words($testimonial->description, 50, ' ...') !!}</h2>
                            </div>
                        </li>
                    @endforeach

                </ul>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Navigation Buttons -->
                <div class="swiper-slide-button swiper-button-prev"></div>
                <div class="swiper-slide-button swiper-button-next"></div>
            </div>
        </div>
    </section>
    <div class="header-container d-flex justify-content-between align-items-center" style="padding: 0 2.8rem;">
        <h2 class="fw-bold fs-1 underline-heading text-danger">Our Services</h2>
    </div>
    <section class="d-flex px-4">
        <div class="col-lg-4 col-sm-6">
            <div class="item"> <span class="icon feature_box_col_one"><img src="{{ asset('webo.png') }}"
                        style="width: 100px;"><i></span>
                <h6 style="font-size: 1.5rem; font-style:normal;">Web Development</h6>
                <p style="font-style: normal;">We build responsive, user-friendly websites to enhance your online presence
                    and drive business growth.

                </p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="item"> <span class="icon feature_box_col_two"><img src="{{ asset('digit.png') }}"
                        style="width: 100px;"></i></span>
                <h6 style="font-size: 1.5rem;">Digital Marketing</h6>
                <p>Our digital marketing services help boost brand visibility, increase engagement, and deliver measurable
                    results.

                </p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="item"> <span class="icon feature_box_col_two"><img src="{{ asset('wewe.png') }}"
                        style="width:100px"></i></span>
                <h6 style="font-size: 1.5rem;">App Development</h6>
                <p>We build high-performance iOS and Android apps with seamless user experiences and custom features.
                </p>
            </div>
        </div>
    </section>
    <section class="d-flex px-4">
        <div class="col-lg-4 col-sm-6">
            <div class="item"> <span class="icon feature_box_col_one"><img src="{{ asset('web-design.png') }}"
                        style="width: 100px;"><i></span>
                <h6 style="font-size: 1.5rem; font-style:normal;">Web Design</h6>
                <p style="font-style: normal;">We build responsive, user-friendly websites to enhance your online presence
                    and drive business growth.

                </p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="item"> <span class="icon feature_box_col_two"><img src="{{ asset('domain.png') }}"
                        style="width: 100px;"></i></span>
                <h6 style="font-size: 1.5rem;">Domain Regsitration</h6>
                <p>Our digital marketing services help boost brand visibility, increase engagement, and deliver measurable
                    results.

                </p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="item"> <span class="icon feature_box_col_two"><img src="{{ asset('troubleshooting.png') }}"
                        style="width:100px"></i></span>
                <h6 style="font-size: 1.5rem;">Website Maintenance</h6>
                <p>We build high-performance iOS and Android apps with seamless user experiences and custom features.
                </p>
            </div>
        </div>
    </section>

    {{-- end of Testimonial section --}}
    <!--   Our Achievements -->
    <div class="container-fluid py-5 our-achievements-section">
        <div class="text-center what-we-do-heading mb-5">
            <h1 class="text-danger">Our Achievements</h1>
        </div>
        <div class="row text-center d-flex flex-lg-wrap">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="achivements-container">
                    <div class="counter-text-section">
                        <span class="num counter" data-target="4">0</span>
                        <span class="counter-plus">+</span>
                    </div>
                    <span class="text">Years of Operations</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="achivements-container">
                    <div class="counter-text-section">
                        <span class="num counter" data-target="300">0</span>
                        <span class="counter-plus">+</span>
                    </div>
                    <span class="text">Happy Clients</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="achivements-container">
                    <div class="counter-text-section">
                        <span class="num counter" data-target="225">0</span>
                        <span class="counter-plus">+</span>
                    </div>
                    <span class="text">Projects Delivered</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="achivements-container">
                    <div class="counter-text-section">
                        <span class="num counter" data-target="280">0</span>
                        <span class="counter-plus">+</span>
                    </div>
                    <span class="text">Experts</span>
                </div>
            </div>
        </div>
    </div>

    <!--   End Our Achievements -->

    <!--   Working Process -->
    <div class="our-working-process-section">
        <div class="what-we-do-heading our-work-heading">
            <h1 class="text-danger">Our Working Process</h1>
        </div>
        <div class="working-container">
            <div class="working-first-container">
                <div class="first-step step-section">
                    <p>Step 1</p>
                </div>
                <div class="working-first-inner-container working-inner-container">
                    <h1>REQUIREMENT GATHERING</h1>
                    <p>It all starts with a great idea. Our team will get in touch with you to review your project
                        specification in detail.</p>
                </div>
            </div>
            <div class="working-second-container">
                <div class="second-step step-section">
                    <p>Step 2</p>
                </div>
                <div class="working-second-inner-container working-inner-container">
                    <h1>WIRE FRAMING</h1>
                    <p>We will then produce wireframe/blueprints of the project based on your specification with regular
                        discussion with you.</p>
                </div>
            </div>
            <div class="working-third-container">
                <div class="third-step step-section">
                    <p>Step 3</p>
                </div>
                <div class="working-third-inner-container working-inner-container">
                    <h1>DESIGN AND DEVELOPMENT</h1>
                    <p>We will come up with a creative design of your choice and make changes after your review. After the
                        designs are approved, we start actual development.</p>
                </div>
            </div>
            <div class="working-forth-container">
                <div class="forth-step step-section">
                    <p>Step 4</p>
                </div>
                <div class="working-forth-inner-container working-inner-container">
                    <h1>TESTING</h1>
                    <p>After development, our Quality Assurance team performs thorough testing to ensure a bug-free solution
                        before going live.</p>
                </div>
            </div>
            <div class="working-fifth-container">
                <div class="fifth-step step-section">
                    <p>Step 5</p>
                </div>
                <div class="working-fifth-inner-container working-inner-container">
                    <h1>DELIVERY OF PROJECT</h1>
                    <p>Once the product has been validated through testing, it can be deployed to the server involving a
                        pilot launch, maintenance, user testing, and so on.</p>
                </div>
            </div>
        </div>
        <div class="process-image">
            <img src="{{ asset('/achievements/process.png') }}" alt="Process Overview" height="300" width="300">
        </div>
    </div>


    <!--   End Working Process -->
@endsection
