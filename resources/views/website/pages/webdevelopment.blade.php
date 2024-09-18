@extends('website.layouts.master')
@section('content')

<!-- Hero Section -->
<div class="zero-section overflow-hidden">
    <div class="w-100">
        <img src="{{ asset('./Test-image/4.jpeg') }}" alt="Web Development Hero Image" class="zero-image">
    </div>
    <div class="zero-overlay">
        <div class="container">
            <div class="zero-content">
                <h1>Build Robust and Scalable Websites</h1>
                <p>We craft high-performance websites tailored to your business needs, ensuring a seamless user experience and powerful functionality.</p>
            </div>
        </div>
    </div>
</div>


<!-- Key Services Section -->
<section class="key-services">
    <div class="container">
        <h2 class="section-title">Our Key Services</h2>
        <div class="row">
            <div class="col-md-4 mb-3rem;">
                <div class="service-card">
                    <img src="{{asset('website\img\webdesign.jpeg')}}" alt="Custom Website Development" class="service-image">
                    <div class="service-content">
                        <h3>Custom Website Development</h3>
                        <p>Tailored websites to meet your specific business goals and requirements.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('uiux.jpg')}}" alt="UI/UX Design" class="service-image">
                    <div class="service-content">
                        <h3>UI/UX Design</h3>
                        <p>Intuitive designs that boost user satisfaction.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('website\img\ecommercesol.jpeg')}}" alt="E-Commerce Solutions" class="service-image">
                    <div class="service-content">
                        <h3>E-Commerce Solutions</h3>
                        <p>Build and optimize online stores for a seamless shopping experience.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('website\img\cms.png')}}" alt="Content Management Systems" class="service-image">
                    <div class="service-content">
                        <h3>Content Management Systems</h3>
                        <p>Implement and customize CMS platforms for easy content management.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('website\img\webmaintanance.jpg')}}" alt="Website Maintenance" class="service-image">
                    <div class="service-content">
                        <h3>Website Maintenance</h3>
                        <p>Ongoing support and updates to ensure your website remains secure and up-to-date.</p>
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
                        <div class="profile-img mb-3 d-flex flex-col align-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" class="rounded-circle" alt="Maria Smantha" width="100" height="100" style="margin: 0 6rem;">
                                                        <!-- Bio (Name and Title) -->
                        <h5 class="card-title text-danger">Maria Smantha</h5>
                        <p class="card-text">Web Developer</p>
                        </div>

                        <!-- Testimonial text -->
                        <p class="testimonial-text text-normal">Lorem ipsum dolor sit amet, sdvsdconsectetur adipiscing elit. Integer posuere erat a ante.</p>
                    </div>
                </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="col-md-4">
                <div class="card testimonial-card shadow-sm p-3 mb-5 bg-white rounded text-center">
                    <div class="card-body">
                        <div class="profile-img mb-3 d-flex flex-col align-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp" class="rounded-circle" alt="Lisa Cudrow" width="100" height="100" style="margin: 0 6rem;">
                                                        <!-- Bio (Name and Title) -->
                        <h5 class="card-title text-danger">Maria Smantha</h5>
                        <p class="card-text">Web Developer</p>
                        </div>
                        <p class="testimonial-text text-normal">Sed ut perspiciatis unde omnis fdiste natus error sit voluptatem accusantium doloremque.</p>
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
                    <img src="{{asset('Test-image/4.jpeg')}}" alt="Project Delta" class="case-study-image">
                    <h3>Project Delta</h3>
                    <p>Enhanced site speed and user experience, increasing conversion rates by 30%.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="case-study-card">
                    <img src="{{asset('Test-image/11.jpeg')}}" alt="Project Epsilon" class="case-study-image">
                    <h3>Project Epsilon</h3>
                    <p>Revamped e-commerce platform leading to a 40% increase in sales.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="case-study-card">
                    <img src="{{asset('Test-image/11.jpeg')}}" alt="Project Zeta" class="case-study-image">
                    <h3>Project Zeta</h3>
                    <p>Developed a content management system that improved workflow efficiency by 25%.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section">
    <div class="container text-center">
        <h2>Ready to Elevate Your Online Presence?</h2>
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

            <a href="{{asset('contact')}}" class="cta-button">Get a Free Consultation</a>
        </form>
    </div>
</section>

@endsection
