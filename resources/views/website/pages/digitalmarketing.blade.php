@extends('website.layouts.master')
@section('content')

<!-- Hero Section -->
<div class="zero-section overflow-hidden">
    <div class="w-100">
        <img src="{{ asset('./Test-image/4.jpeg') }}" alt="Digital Marketing Hero Image" class="zero-image">
    </div>
    <div class="zero-overlay">
        <div class="container">
            <div class="zero-content">
                <h1>Transform Your Brand with Strategic Digital Marketing</h1>
                <p>Leverage our expertise to drive your business forward with targeted digital marketing strategies that deliver measurable results.</p>
            </div>
        </div>
    </div>
</div>

<!-- Key Services Section -->
<section class="key-services">
    <div class="container">
        <h2 class="section-title">Our Digital Marketing Services</h2>
        <div class="row">
            <div class="col-md-4 mb-3rem;">
                <div class="service-card">
                    <img src="{{asset('website\img\seo.png')}}" alt="SEO Optimization" class="service-image">
                    <div class="service-content">
                        <h3>SEO Optimization</h3>
                        <p>Enhance your website's visibility on search engines to attract more organic traffic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('website\img\socialmediamgmt.jpeg')}}" alt="Social Media Management" class="service-image">
                    <div class="service-content">
                        <h3>Social Media Management</h3>
                        <p>Engage with your audience on various platforms and boost your brand's presence.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('website\img\pay per click.jpeg')}}" alt="Pay-Per-Click Advertising" class="service-image">
                    <div class="service-content">
                        <h3>Pay-Per-Click Advertising</h3>
                        <p>Drive targeted traffic to your website through effective PPC campaigns.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('website\img\contentmarketing.jpeg')}}" alt="Content Marketing" class="service-image">
                    <div class="service-content">
                        <h3>Content Marketing</h3>
                        <p>Create valuable content that attracts and retains your target audience.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:3rem;">
                <div class="service-card">
                    <img src="{{asset('website\img\emailmarketing.jpeg')}}" alt="Email Marketing" class="service-image">
                    <div class="service-content">
                        <h3>Email Marketing</h3>
                        <p>Build personalized email campaigns that drive engagement and conversions.</p>
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
                            <p class="card-text">Digital Marketing Specialist</p>
                        </div>

                        <!-- Testimonial text -->
                        <p class="testimonial-text text-normal">Their digital marketing strategies have significantly boosted our online presence and lead generation.</p>
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
                            <h5 class="card-title text-danger">Lisa Cudrow</h5>
                            <p class="card-text">Marketing Director</p>
                        </div>
                        <p class="testimonial-text text-normal">Exceptional service and results-driven strategies that have improved our ROI.</p>
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
                            <p class="card-text">SEO Expert</p>
                        </div>

                        <p class="testimonial-text text-normal">Their expertise in SEO and digital marketing has taken our business to the next level.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Studies -->
<section class="case-studies">
    <div class="container">
        <h2 class="section-title text-danger">Our Digital Success Stories</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="case-study-card">
                    <img src="{{asset('Test-image/4.jpeg')}}" alt="Campaign Alpha" class="case-study-image">
                    <h3>Campaign Alpha</h3>
                    <p>Achieved a 50% increase in lead generation through a targeted PPC campaign.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="case-study-card">
                    <img src="{{asset('Test-image/11.jpeg')}}" alt="Social Boost" class="case-study-image">
                    <h3>Social Boost</h3>
                    <p>Enhanced social media engagement by 60% through a comprehensive content strategy.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="case-study-card">
                    <img src="{{asset('Test-image/11.jpeg')}}" alt="SEO Success" class="case-study-image">
                    <h3>SEO Success</h3>
                    <p>Improved search engine rankings and organic traffic by 40% through advanced SEO techniques.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section">
    <div class="container text-center">
        <h2>Ready to Boost Your Digital Presence?</h2>
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
                <i class="fa-solid fa-phone" style="line-height: 2.5rem;margin-right:5px;"></i> <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" />
            </div>
            <div class="mb-3 d-flex">
                <i class="fa-regular fa-comment-dots" style="line-height: 2.5rem;margin-right:5px;"></i><textarea class="form-control" id="message" rows="4" placeholder="Your Message" required></textarea>
            </div>
            <!-- Submit Button -->
            <a href="{{asset('contact')}}" class="cta-button">Get a Free Consultation</a>
        </form>
    </div>
</section>
@endsection
