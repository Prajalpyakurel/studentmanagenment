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
                            <h1 style="font-size: 4rem"><span style="color: #de5fa8">E</span>ducation,</h1>
                            <h1 style="font-size: 4rem"><span style="color: #de5fa8">E</span>ngineering,</h1>
                            <h1 style="font-size: 4rem"><span style="color: #de5fa8">E</span>ntertainment.</h1>
                        </div>
                        <h1 style="font-size:1.4rem;">"A Complete IT solutions & Computer Training Center."</h1>
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

    <div class="header-container d-flex justify-content-between align-items-center" style="padding: 0 2.8rem;">
        <h2 class="fw-bold fs-1 underline-heading text-danger mt-3">Our Story</h2>
    </div>
    <div class="our-story-section">


        <div class="our-story-left">
            <img src="{{ asset('our-story.png') }}" alt="" height="auto" width="450">
        </div>
        <div class="our-story-right">
            <div class="our-story-content">

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


    <section>
        <div class="header-container d-flex justify-content-between align-items-center" style="padding: 0 2.8rem;">
            <h2 class="fw-bold fs-1 underline-heading text-danger">Our Services</h2>
        </div>
        <section class="d-flex px-4">
            <div class="col-lg-4 col-sm-6">
                <div class="item"> <span class="icon feature_box_col_one"><img src="{{ asset('webo.png') }}"
                            style="width:52px; margin: 21px;"><i></span>
                    <h6 style="font-size: 1.5rem; font-style:normal;">Web Development</h6>
                    <p style="font-style: normal;">We build responsive, user-friendly web Application to enhance your online presence
                        and drive business growth.

                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item"> <span class="icon feature_box_col_two"><img src="{{ asset('digit.png') }}"
                            style="width:52px; margin: 21px;"></i></span>
                    <h6 style="font-size: 1.5rem;">Digital Marketing</h6>
                    <p>Our digital marketing services help boost brand visibility, increase engagement, and deliver measurable
                        results.

                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item"> <span class="icon feature_box_col_three"><img src="{{ asset('wewe.png') }}"
                            style="width:52px; margin: 21px;"></i></span>
                    <h6 style="font-size: 1.5rem;">App Development</h6>
                    <p>We build high-performance iOS and Android apps with seamless user experiences and custom features.
                    </p>
                </div>
            </div>
        </section>
        <section class="d-flex px-4">
            <div class="col-lg-4 col-sm-6">
                <div class="item"> <span class="icon feature_box_col_four"><img src="{{ asset('web-design.png') }}"
                            style="width:52px; margin: 21px;"><i></span>
                    <h6 style="font-size: 1.5rem; font-style:normal;">Web Design</h6>
                    <p style="font-style: normal;">We build responsive, user-friendly websites to enhance your online presence
                        and drive business growth.

                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item"> <span class="icon feature_box_col_five"><img src="{{ asset('domain.png') }}"
                            style="width:52px; margin: 21px;"></i></span>
                    <h6 style="font-size: 1.5rem;">Domain Regsitration</h6>
                    <p>Secure your online presence with easy domain registration. Choose a unique name for your website and get started in minutes!

                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item"> <span class="icon feature_box_col_six"><img src="{{ asset('troubleshooting.png') }}"
                            style="width:52px; margin: 21px;"></i></span>
                    <h6 style="font-size: 1.5rem;">Website Maintenance</h6>
                    <p>Ensure your website runs smoothly with reliable maintenance services. From updates to security, we've got you covered!
                    </p>
                </div>
            </div>
        </section>
    </section>
      <!--   our course section-->
      <div class="header-container d-flex justify-content-between align-items-center px-3">
        <h2 class="fw-bold fs-1 underline-heading text-danger">Our Courses</h2>
        <a href="{{ route('courses') }}" class="view-all-link">View All Courses<i class="fa-solid fa-angles-right"></i></a>
    </div>
    <div class="row" style="justify-content:center;padding:0 2rem;">
        @foreach ($trainings as $training)
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="card all-courses servcies" style="width:100%; height:30rem;">
                @if($training->training_photo)
                <img src="{{ asset('storage/' . $training->training_photo) }}" alt="{{ $training->training_name }}" width="200px" class="card-img-top">
            @else
                No Photo
            @endif
                <div class="card-body d-flex flex-col gap-4">
                    <h5 class="card-title">{{ $training->training_name }}</h5>
                    <h6 class="">Duration:{{ $training->training_duration }}</h5>
                    {{-- <pre class="card-title">Duration:{{ $training->training_description }}</pre> --}}
                    @if($training->syllabus_pdf)
            <p class="">Current Syllabus: <a href="{{ asset('storage/' . $training->syllabus_pdf) }}" target="_blank">View PDF</a></p>
        @endif

                    <a href="#" class="btn courses-view" style="background-color:#DC58A4; font-weight:500;">View More</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>


    <!--    End What We Do Section-->
    <!--Why Choose Us-->
    <section class="course-categories">
        <h2 class="text-danger text-center">Why Choose EEE?</h2>
        <div class="category-grid">
            <div class="category-card">
                <i class="fa-solid fa-code text-dark"></i>
                <h3 class="text-danger">Expert Web & App Development</h3>
                <p style="font-size: 1.2rem;">We deliver high-quality, custom websites and applications that drive results and engage users seamlessly.</p>
            </div>

            <div class="category-card">
                <i class="fa-solid fa-chart-line text-dark"></i>
                <h3 class="text-danger">Effective Digital Marketing</h3>
                <p style="font-size: 1.2rem;">Boost your brand’s online presence with our data-driven SEO, social media, and PPC marketing strategies.</p>
            </div>

            <div class="category-card">
                <i class="fa-solid fa-lightbulb text-dark"></i>
                <h3 class="text-danger">Innovative Solutions</h3>
                <p style="font-size: 1.2rem;">We stay ahead of tech trends to bring you innovative solutions that keep you competitive in a fast-paced industry.</p>
            </div>

            <div class="category-card">
                <i class="fa-solid fa-users text-dark"></i>
                <h3 class="text-danger">Dedicated Team</h3>
                <p style="font-size: 1.2rem;">Our passionate team is committed to helping your business thrive with tailored support every step of the way.</p>
            </div>

            <div class="category-card">
                <i class="fa-solid fa-cogs text-dark"></i>
                <h3 class="text-danger">Comprehensive Solutions</h3>
                <p style="font-size: 1.2rem;">From development to marketing, we offer end-to-end IT solutions to scale your business efficiently.</p>
            </div>

            <div class="category-card">
                <i class="fa-solid fa-trophy text-dark"></i>
                <h3 class="text-danger">Proven Results</h3>
                <p style="font-size: 1.2rem;">With a track record of successful projects and satisfied clients, our results speak for themselves.</p>
            </div>
            <div class="category-card">
                <i class="fa-solid fa-laptop-code text-dark"></i>
                <h3 class="text-danger">Expert IT Mentors</h3>
                <p style="font-size: 1.3rem;">Learn directly from seasoned IT experts with in-depth industry experience.</p>
            </div>
            <div class="category-card">
                <i class="fa-solid fa-tools text-dark"></i>
                <h3 class="text-danger">Practical Training</h3>
                <p style="font-size: 1.3rem;">Work on real-world projects that prepare you for current IT challenges.</p>
            </div>
            <div class="category-card">
                <i class="fa-regular fa-users text-dark"></i>
                <h3 class="text-danger">Collaborative Community</h3>
                <p style="font-size: 1.3rem;">Engage with peers and mentors in a thriving tech community.</p>
            </div>
            <div class="category-card">
                <i class="fa-solid fa-certificate text-dark"></i>
                <h3 class="text-danger">Certified Courses</h3>
                <p style="font-size: 1.3rem;">Gain certifications that enhance your skills and career prospects.</p>
            </div>
        </div>
    </section>





    {{-- Testimonial section --}}
    <section class="overflow-hidden">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
                <h1 class="mb-4 text-danger">Our Students Speak: Real Experiences, Real Success Stories</h1>
                <p class="mb-4 pb-2 mb-md-5 pb-md-0">

                </p>
            </div>
        </div>

        <div class="swiper ">
            <div class="card-wrapper">
                <!-- Card slides container -->
                <ul class="card-list swiper-wrapper">
                    @foreach ($testimonials as $testimonial)
                        <li class="card-item swiper-slide">
                            <div class="card-link " style="">
                                <div class="d-flex">
                                @if($testimonial->client_photo)
                                <img src="{{ asset('storage/'.$testimonial->client_photo) }}" alt="Client Photo" class="card-image" style="width: 100px;height:100px;">
                            @endif
                        </div>
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
