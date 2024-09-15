@extends('website.layouts.master')

@section('content')

<!-- Hero Section with Image -->
<section class="hero text-white text-center py-5 position-relative" style="height: 400px;">
    <img src="{{ asset('qaa.jpg') }}" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Hero Image" style="object-fit: cover;">
    <div class="hero-text position-relative text-center mt-4" style="z-index: 1; padding-top: 15rem;">
        <p class="lead text-danger fw-bold mt-6">Develop the skills to ensure software quality and reliability through effective testing methodologies.</p>
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
                        Our comprehensive QA Engineering course is designed to equip you with the necessary skills and knowledge to excel in software quality assurance. You'll learn various testing methodologies, tools, and best practices to ensure the delivery of high-quality software.
                    </p>
                    <ul>
                        <li>&#10003; Duration: 8 weeks</li>
                        <li>&#10003; Skill Level: Beginner to Advanced</li>
                        <li>&#10003; Prerequisites: Basic understanding of software development</li>
                        <li>&#10003; Certificate: Yes</li>
                    </ul>
                    <h2 class="text-danger">What You'll Learn</h2>
                    <ul>
                        <li>&#10003; <span class="fw-bold">Manual Testing Techniques</span></li>
                        <li>&#10003; <span class="fw-bold">Automated Testing Tools</span></li>
                        <li>&#10003; <span class="fw-bold">Test Case Design</span></li>
                        <li>&#10003; <span class="fw-bold">Bug Tracking and Reporting</span></li>
                        <li>&#10003; <span class="fw-bold">Performance Testing</span></li>
                        <li>&#10003; <span class="fw-bold">Continuous Integration and Testing</span></li>
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
                <h3>Week 1-2: Introduction to QA</h3>
                <ul>
                    <li>Role of QA in Software Development</li>
                    <li>Types of Testing</li>
                    <li>QA Methodologies</li>
                    <li>Creating Test Plans</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="syllabus-item bg-white p-4 rounded shadow" style="height: 100%;">
                <h3>Week 3-4: Manual Testing</h3>
                <ul>
                    <li>Manual Testing Techniques</li>
                    <li>Writing Test Cases</li>
                    <li>Executing Test Cases</li>
                    <li>Reporting Bugs</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="syllabus-item bg-white p-4 rounded shadow" style="height: 100%;">
                <h3>Week 5-6: Automated Testing</h3>
                <ul>
                    <li>Introduction to Automation</li>
                    <li>Tools and Frameworks</li>
                    <li>Creating Automated Test Scripts</li>
                    <li>Running and Maintaining Automation Tests</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="syllabus-item bg-white p-4 rounded shadow" style="height: 100%;">
                <h3>Week 7-8: Performance and Continuous Testing</h3>
                <ul>
                    <li>Performance Testing Basics</li>
                    <li>Load Testing Tools</li>
                    <li>Continuous Integration and Testing</li>
                    <li>Best Practices for QA</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Enrollment Section -->
<section class="enroll-section py-5 text-dark text-center">
    <h2>Ready to Elevate Your QA Skills?</h2>
    <p>Enroll now and start mastering the essentials of QA Engineering to ensure software excellence!</p>
    <a href="/enroll/qa-engineering" class="btn btn-primary">Enroll Now</a>
</section>

@endsection
