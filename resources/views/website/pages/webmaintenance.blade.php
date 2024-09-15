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
                <h1>Keep Your Website in Top Condition</h1>
                <p>Our website maintenance services ensure that your site runs smoothly, stays secure, and remains up-to-date. Focus on your business while we handle the technical details.</p>
            </div>
        </div>
    </div>
</div>

<!-- Key Services Section -->
<section class="key-services">
    <div class="container">
        <h2 class="section-title">Our Comprehensive Maintenance Services</h2>
        <div class="row">
            <div class="col-md-4 mb-3rem;">
                <div class="service-card">
                    <img src="{{asset('Test-image/maintenance-1.jpeg')}}" alt="Site Updates" class="service-image">
                    <div class="service-content">
                        <h3>Regular Site Updates</h3>
                        <p>Keep your website current with the latest updates and enhancements to ensure optimal performance and security.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('Test-image/maintenance-2.jpeg')}}" alt="Backups" class="service-image">
                    <div class="service-content">
                        <h3>Reliable Backups</h3>
                        <p>Automated backups to safeguard your data, ensuring quick recovery in case of unexpected issues or data loss.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('Test-image/maintenance-3.jpeg')}}" alt="Performance Monitoring" class="service-image">
                    <div class="service-content">
                        <h3>Performance Monitoring</h3>
                        <p>Continuous monitoring to keep your site running smoothly and efficiently, with proactive measures to address any performance issues.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('Test-image/maintenance-4.jpeg')}}" alt="Security Maintenance" class="service-image">
                    <div class="service-content">
                        <h3>Security Maintenance</h3>
                        <p>Regular security checks and updates to protect your site from potential threats and vulnerabilities.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('Test-image/maintenance-5.jpeg')}}" alt="Technical Support" class="service-image">
                    <div class="service-content">
                        <h3>24/7 Technical Support</h3>
                        <p>Dedicated support to resolve any issues quickly and efficiently, keeping your website running smoothly around the clock.</p>
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
                        <p class="testimonial-text text-normal">"The website maintenance services provided have been exceptional. My site is always up-to-date and running smoothly."</p>
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
                        <p class="testimonial-text text-normal">"Their maintenance team is reliable and efficient. I appreciate the proactive approach to keeping my site secure and fast."</p>
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
                        <p class="testimonial-text text-normal">"The maintenance service has significantly improved my site's performance and security. Highly recommend!"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section">
    <div class="container text-center">
        <h2>Ready to Optimize Your Website?</h2>
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
            <a href="{{asset('contact')}}" class="cta-button">Request a Free Maintenance Quote</a>
        </form>
    </div>
</section>

@endsection
