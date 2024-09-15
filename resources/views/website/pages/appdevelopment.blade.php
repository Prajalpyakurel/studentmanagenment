@extends('website.layouts.master')
@section('content')

<!-- Hero Section -->
<div class="zero-section">
    <div class="w-100">
        <img src="{{ asset('./Test-image/1.jpeg') }}" alt="App Development Hero Image" class="zero-image">

    </div>
    <div class="zero-overlay">
        <div class="container">
            <div class="zero-content">
                <h1>Innovate with Cutting-Edge Mobile Apps</h1>
                <p>We develop high-performance mobile applications that deliver exceptional user experiences and meet your business objectives.</p>
            </div>
        </div>
    </div>
</div>



<!-- Key Services Section -->
<section class="key-services">
    <div class="container">
        <h2 class="section-title">Our Key App Development Services</h2>
        <div class="row">
            <div class="col-md-4 mb-3rem;">
                <div class="service-card">
                    <img src="{{asset('Test-image/11.jpeg')}}" alt="Custom Mobile App Development" class="service-image">
                    <div class="service-content">
                        <h3>Custom Mobile App Development</h3>
                        <p>Tailored mobile apps designed to meet your unique business needs and deliver a seamless user experience.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('Test-image/11.jpeg')}}" alt="UI/UX Design for Apps" class="service-image">
                    <div class="service-content">
                        <h3>UI/UX Design for Apps</h3>
                        <p>Crafting engaging and intuitive designs that enhance user interaction and satisfaction.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('Test-image/11.jpeg')}}" alt="Cross-Platform Development" class="service-image">
                    <div class="service-content">
                        <h3>Cross-Platform Development</h3>
                        <p>Developing apps that work seamlessly across both iOS and Android platforms with a single codebase.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('Test-image/11.jpeg')}}" alt="App Maintenance and Support" class="service-image">
                    <div class="service-content">
                        <h3>App Maintenance and Support</h3>
                        <p>Continuous updates and support to ensure optimal performance.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('Test-image/11.jpeg')}}" alt="App Analytics and Optimization" class="service-image">
                    <div class="service-content">
                        <h3>App Analytics and Optimization</h3>
                        <p>Track and optimize app performance for better user engagement..</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client Testimonials -->

<section class="gradient-custom">
    <div class="container my-5 py-5">
        <div class="row text-center mb-4">
            <h2 class="section-title text-danger">What Our Clients Say</h2>
        </div>
        <div class="row d-flex justify-content-center">
            <!-- Testimonial 1 -->
            <div class="col-md-4">
                <div class="card testimonial-card shadow-sm p-3 mb-5 bg-white rounded text-center">
                    <div class="card-body">
                        <!-- Profile image in the center -->
                        <div class="profile-img mb-3 d-flex flex-col align-center" style="align-items:center;">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" class="rounded-circle" alt="Maria Smantha" width="100" height="100">
                                                        <!-- Bio (Name and Title) -->
                        <h5 class="card-title">Maria Smantha</h5>
                        <p class="card-text">Web Developer</p>
                        </div>

                        <!-- Testimonial text -->
                        <p class="testimonial-text text-normal">Lorem ipsum dolor sit amet,sdgsdgfsd consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    </div>
                </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="col-md-4">
                <div class="card testimonial-card shadow-sm p-3 mb-5 bg-white rounded text-center">
                    <div class="card-body">
                        <div class="profile-img mb-3 d-flex flex-col align-center" style="align-items:center;">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp" class="rounded-circle" alt="Lisa Cudrow" width="100" height="100">
                                                        <!-- Bio (Name and Title) -->
                        <h5 class="card-title">Maria Smantha</h5>
                        <p class="card-text">Web Developer</p>
                        </div>
                        <p class="testimonial-text text-normal">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                    </div>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="col-md-4">
                <div class="card testimonial-card shadow-sm p-3 mb-5 bg-white rounded text-center">
                    <div class="card-body">
                        <div class="profile-img mb-3 d-flex flex-col align-center" style="align-items:center;">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp" class="rounded-circle" alt="John Smith" width="100" height="100" >
                            <h5 class="card-title">John Smith</h5>
                            <p class="card-text">Marketing Specialist</p>
                        </div>

                        <p class="testimonial-text text-normal">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Studies -->
<section class="case-studies">
    <div class="container">
        <h2 class="section-title text-danger">Our Success Stories</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="case-study-card">
                    <img src="{{asset('Test-image/11.jpeg')}}" alt="Project Alpha" class="case-study-image">
                    <h3>Project Alpha</h3>
                    <p>Increased user engagement by 50% and earned top ratings on app stores.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="case-study-card">
                    <img src="{{asset('Test-image/11.jpeg')}}" alt="Project Beta" class="case-study-image">
                    <h3>Project Beta</h3>
                    <p>Streamlined operations and boosted efficiency with a cross-platform app</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="case-study-card">
                    <img src="{{asset('Test-image/11.jpeg')}}" alt="Project Gamma" class="case-study-image">
                    <h3>Project Gamma</h3>
                    <p>Redesigned an app, leading to more downloads and better user retention.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section">
    <div class="container text-center">
        <h2>Ready to Transform Your App Idea into Reality?</h2>
        <a href="{{asset('contact')}}" class="cta-button">Get a Free Consultation</a>
    </div>
    <div class="col-md-5 mx-auto mb-4">
        <!-- Query Form -->
        <form class="form-control p-4" action="" method="POST"
            style="height:auto;max-width: 100%; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
            <!-- Name Input -->
            <div class="mb-3 d-flex">
                <i class="fa-regular fa-user" style="line-height: 2.5rem; margin-right:5px;"></i> <input type="text" class="form-control" id="name" placeholder="Enter Name" required />
            </div>

            <!-- Email Input -->
            <div class="mb-3 d-flex">
                <i class="fa-regular fa-envelope" style="line-height: 2.5rem;margin-right:5px;"></i> <input type="email" class="form-control" id="email" placeholder="Enter Email" required />
            </div>
            <div class="mb-3 d-flex">
                <i class="fa-solid fa-phone"style="line-height: 2.5rem;margin-right:5px;"></i> <input type="number" class="form-control" id="number" placeholder="Enter Phone Number" required />
            </div>

            <button type="submit" class="btn btn-danger w-100">Submit</button>
        </form>
    </div>
</section>

@endsection
