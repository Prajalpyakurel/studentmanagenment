@extends('website.layouts.master')
@section('content')

<!-- Hero Section -->
<div class="zero-section overflow-hidden">
    <div class="w-100">
        <img src="{{ asset('./Test-image/4.jpeg') }}" alt="Domain Registration Hero Image" class="zero-image">
    </div>
    <div class="zero-overlay">
        <div class="container">
            <div class="zero-content">
                <h1>Secure Your Online Presence with the Perfect Domain</h1>
                <p>Find and register the ideal domain name for your business. Ensure your brand stands out online with a memorable and professional domain name.</p>
            </div>
        </div>
    </div>
</div>

<!-- Key Services Section -->
<section class="key-services">
    <div class="container">
        <h2 class="section-title">Our Domain Registration Services</h2>
        <div class="row">
            <div class="col-md-4 mb-3rem;">
                <div class="service-card">
                    <img src="{{asset('Test-image/12.jpeg')}}" alt="Domain Search" class="service-image">
                    <div class="service-content">
                        <h3>Domain Search</h3>
                        <p>Effortlessly search for and discover available domain names that fit your brand.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('Test-image/9.jpeg')}}" alt="Domain Registration" class="service-image">
                    <div class="service-content">
                        <h3>Domain Registration</h3>
                        <p>Register your chosen domain name quickly and securely with our easy registration process.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('Test-image/1.jpeg')}}" alt="Domain Transfer" class="service-image">
                    <div class="service-content">
                        <h3>Domain Transfer</h3>
                        <p>Seamlessly transfer your existing domains to our platform for better management.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('Test-image/14.jpeg')}}" alt="Domain Management" class="service-image">
                    <div class="service-content">
                        <h3>Domain Management</h3>
                        <p>Manage your domains with ease, including renewals, DNS settings, and more.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('Test-image/20.jpeg')}}" alt="Support and Assistance" class="service-image">
                    <div class="service-content">
                        <h3>Support and Assistance</h3>
                        <p>Get expert support for all your domain-related queries and issues.</p>
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
                        <div class="profile-img mb-3 d-flex flex-col align-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" class="rounded-circle" alt="Maria Smantha" width="100" height="100" style="margin: 0 6rem;">
                            <h5 class="card-title text-danger">Maria Smantha</h5>
                            <p class="card-text">Business Owner</p>
                        </div>
                        <p class="testimonial-text text-normal">"The domain registration process was smooth and efficient. I found the perfect domain for my business in no time."</p>
                    </div>
                </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="col-md-4">
                <div class="card testimonial-card shadow-sm p-3 mb-5 bg-white rounded text-center">
                    <div class="card-body">
                        <div class="profile-img mb-3 d-flex flex-col align-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp" class="rounded-circle" alt="Lisa Cudrow" width="100" height="100" style="margin: 0 6rem;">
                            <h5 class="card-title text-danger">Lisa Cudrow</h5>
                            <p class="card-text">Startup Founder</p>
                        </div>
                        <p class="testimonial-text text-normal">"Excellent service and support. They made managing my domain easy and hassle-free."</p>
                    </div>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="col-md-4">
                <div class="card testimonial-card shadow-sm p-3 mb-5 bg-white rounded text-center">
                    <div class="card-body">
                        <div class="profile-img mb-3 d-flex flex-col align-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp" class="rounded-circle" alt="John Smith" width="100" height="100" style="margin: 0 6rem;">
                            <h5 class="card-title text-danger">John Smith</h5>
                            <p class="card-text">Marketing Specialist</p>
                        </div>
                        <p class="testimonial-text text-normal">"Their domain services helped us secure a top-notch domain name, significantly boosting our online visibility."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section">
    <div class="container text-center">
        <h2>Ready to Register Your Domain?</h2>
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
                <i class="fa-solid fa-phone" style="line-height: 2.5rem;margin-right:5px;"></i> <input type="text" class="form-control" id="phone" placeholder="Enter Phone" required />
            </div>
            <!-- Submit Button -->
            <a href="{{asset('contact')}}" class="cta-button">Get a Free Consultation</a>
        </form>
    </div>
</section>

@endsection
