@extends('website.layouts.master')
@section('content')

<!-- Hero Section -->
<div class="zero-section overflow-hidden">
    <div class="w-100">
        <img src="{{ asset('./Test-image/4.jpeg') }}" alt="Web Design Hero Image" class="zero-image">
    </div>
    <div class="zero-overlay">
        <div class="container">
            <div class="zero-content">
                <h1>Crafting Stunning and Functional Designs</h1>
                <p>We design beautiful, responsive websites that captivate users and drive results. Our designs are tailored to your brand and business needs.</p>
            </div>
        </div>
    </div>
</div>

<!-- Key Services Section -->
<section class="key-services">
    <div class="container">
        <h2 class="section-title">Our Key Design Services</h2>
        <div class="row">
            <div class="col-md-4 mb-3rem;">
                <div class="service-card">
                    <img src="{{asset('Test-image/12.jpeg')}}" alt="Custom Web Design" class="service-image">
                    <div class="service-content">
                        <h3>Custom Web Design</h3>
                        <p>Unique and tailored designs that align with your brand's vision and objectives.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('Test-image/9.jpeg')}}" alt="Responsive Design" class="service-image">
                    <div class="service-content">
                        <h3>Responsive Design</h3>
                        <p>Ensuring your website looks great and functions perfectly on all devices and screen sizes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('Test-image/1.jpeg')}}" alt="UI/UX Design" class="service-image">
                    <div class="service-content">
                        <h3>UI/UX Design</h3>
                        <p>Creating user-centric designs that enhance usability and user satisfaction.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('Test-image/14.jpeg')}}" alt="Brand Identity Design" class="service-image">
                    <div class="service-content">
                        <h3>Brand Identity Design</h3>
                        <p>Designing logos and visual elements that strengthen your brand's identity.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('Test-image/20.jpeg')}}" alt="Website Redesign" class="service-image">
                    <div class="service-content">
                        <h3>Website Redesign</h3>
                        <p>Refreshing and updating existing websites to improve aesthetics and functionality.</p>
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
                            <p class="card-text">Web Designer</p>
                        </div>
                        <p class="testimonial-text text-normal">"The design work was exceptional and truly captured the essence of our brand."</p>
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
                            <p class="card-text">Creative Director</p>
                        </div>
                        <p class="testimonial-text text-normal">"Their creativity and attention to detail exceeded our expectations. Highly recommend!"</p>
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
                        <p class="testimonial-text text-normal">"Their web design transformed our online presence and significantly boosted our engagement."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Call to Action -->
<section class="cta-section">
    <div class="container text-center">
        <h2>Ready to Transform Your Website?</h2>
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
                <i class="fa-solid fa-phone" style="line-height: 2.5rem;margin-right:5px;"></i> <input type="number" class="form-control" id="number" placeholder="Enter Phone Number" required />
            </div>
            <!-- Submit Button -->
            <a href="{{asset('contact')}}" class="cta-button">Get a Free Consultation</a>
        </form>
    </div>
</section>

@endsection
