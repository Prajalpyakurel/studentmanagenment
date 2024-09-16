@extends('website.layouts.master')

@section('content')

<!-- Hero Section with Image -->
<section class="hero text-white text-center py-5 position-relative" style="height: 400px;">
    <img src="{{ asset('digital.jpeg') }}" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Hero Image" style="object-fit: cover;">
    <div class="hero-text position-relative text-center mt-4" style="z-index: 1; padding-top: 100px;">
        <h1 class="display-3 text-dark fw-bold">Digital Marketing</h1>
        <p class="lead text-danger fw-bold">Master the art of promoting products and services online using digital marketing strategies.</p>
    </div>
</section>

<!-- Course Info Section -->
<section class="course-info py-5">
    <div class="container">
        <div class="row">
            <!-- Course Overview -->
            <div class="col-md-7 mb-4">
                <div class="course-details">
                    <h2 class="text-danger">Course Overview</h2>
                    <p>
                        Our comprehensive Digital Marketing course is designed to provide you with a deep understanding of digital marketing strategies and tools. You'll learn how to effectively promote products and services online, utilizing a range of techniques and platforms.
                    </p>
                    <ul>
                        <li>&#10003; Duration: 10 weeks</li>
                        <li>&#10003; Skill Level: Beginner to Advanced</li>
                        <li>&#10003; Prerequisites: Basic understanding of marketing concepts</li>
                        <li>&#10003; Certificate: Yes</li>
                    </ul>
                    <h2 class="text-danger">What You'll Learn</h2>
                    <ul>
                        <li>&#10003; <span class="fw-bold">SEO (Search Engine Optimization)</span></li>
                        <li>&#10003; <span class="fw-bold">Social Media Marketing</span></li>
                        <li>&#10003; <span class="fw-bold">Email Marketing</span></li>
                        <li>&#10003; <span class="fw-bold">Content Creation</span></li>
                        <li>&#10003; <span class="fw-bold">Analytics</span></li>
                        <li>&#10003; <span class="fw-bold">Digital Advertising</span></li>
                    </ul>
                </div>
            </div>

            <!-- Query Form and Social Media -->
            <div class="col-md-5 mb-4">
                <!-- Query Form -->
                <form class="form-control p-4 mx-auto" action="" method="POST"
                    style="max-width: 100%; width: 75%; height: auto; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                    <h3 class="title text-center">Have a Query?</h3>

                    <!-- Name Input -->
                    <div class="mb-3 input-field">
                        <label for="name" class="form-label">Enter Name</label>
                        <input type="text" class="form-control" id="name" required />
                    </div>

                    <!-- Email Input -->
                    <div class="mb-3 input-field">
                        <label for="email" class="form-label">Enter Email</label>
                        <input type="email" class="form-control" id="email" required />
                    </div>

                    <!-- Message Input -->
                    <div class="mb-3 input-field">
                        <label for="message" class="form-label">Enter Message</label>
                        <textarea class="form-control" id="message" rows="4" required style="resize: none;"></textarea>
                    </div>

                    <!-- Send Message Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark w-50"
                            style="background: linear-gradient(to right top, #db51a1, #bf5fb3, #a06bbc, #8173bd, #6678b7); border: none;">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </div>
                </form>

                <!-- Social Media Section Below Form -->
                <div class="text-center mt-4">
                    <h4>Follow us on Social Media</h4>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="social-icon mx-2"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="#" class="social-icon mx-2"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#" class="social-icon mx-2"><i class="fab fa-instagram fa-2x"></i></a>
                        <!-- Add more social media links as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Course Syllabus Section -->
<section class="syllabus py-5 bg-light">
    <h2 class="text-center text-danger">Course Syllabus</h2>
        <div class="row px-4">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="syllabus-item bg-white p-4 rounded shadow" style="height: 100%;">
                    <h3>Week 1-3: SEO Fundamentals</h3>
                    <ul>
                        <li>Introduction to SEO</li>
                        <li>Keyword Research</li>
                        <li>On-page Optimization</li>
                        <li>Link Building Strategies</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="syllabus-item bg-white p-4 rounded shadow" style="height: 100%;">
                    <h3>Week 4-6: Social Media Marketing</h3>
                    <ul>
                        <li>Social Media Platforms Overview</li>
                        <li>Content Strategy for Social Media</li>
                        <li>Engagement and Community Building</li>
                        <li>Social Media Analytics</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="syllabus-item bg-white p-4 rounded shadow" style="height: 100%;">
                    <h3>Week 7-9: Email Marketing</h3>
                    <ul>
                        <li>Email Campaign Design</li>
                        <li>Segmentation and Personalization</li>
                        <li>Metrics and Analysis</li>
                        <li>Compliance and Best Practices</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="syllabus-item bg-white p-4 rounded shadow" style="height: 100%;">
                    <h3>Week 10-12: Digital Advertising</h3>
                    <ul>
                        <li>PPC Advertising Fundamentals</li>
                        <li>Ad Creation and Management</li>
                        <li>Targeting and Retargeting</li>
                        <li>Performance Tracking and Optimization</li>
                    </ul>
                </div>
            </div>
        </div>
</section>

<!-- Enrollment Section -->
<section class="enroll-section py-5 text-dark text-center">
    <h2>Ready to Start Your Digital Marketing Journey?</h2>
    <p>Enroll now and take the first step towards becoming a digital marketing expert!</p>
    <a href="/enroll/digital-marketing" class="btn btn-primary">Enroll Now</a>
</section>

@endsection