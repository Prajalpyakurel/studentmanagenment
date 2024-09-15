@extends('website.layouts.master')

@section('content')

<!-- Hero Section with Image -->
<section class="hero text-white text-center py-5 position-relative" style="height: 400px;">
    <img src="{{ asset('web.jpg') }}" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Hero Image" style="object-fit: cover;">
    <div class="hero-text position-relative text-center mt-4" style="z-index: 1; padding-top: 100px;">
        <h1 class="display-3 text-danger fw-bold">Web Development</h1>
        <p class="lead text-light fw-bold">Learn to build dynamic, responsive websites and web applications with our comprehensive Web Development course.</p>
    </div>
</section>

<!-- Course Info Section -->
<section class="course-info py-5">
    <div class="container">
        <div class="row">
            <!-- Course Overview -->
            <div class="col-md-7 mb-4">
                <div class="course-details">
                    <h2 class="text-primary">Course Overview</h2>
                    <p>
                        Our Web Development course provides a thorough introduction to building modern web applications. You'll gain hands-on experience with front-end and back-end technologies, learn best practices for web design, and understand how to create engaging and interactive web experiences.
                    </p>
                    <ul>
                        <li>&#10003; Duration: 12 weeks</li>
                        <li>&#10003; Skill Level: Beginner to Intermediate</li>
                        <li>&#10003; Prerequisites: Basic understanding of HTML and CSS</li>
                        <li>&#10003; Certificate: Yes</li>
                    </ul>
                    <h2 class="text-primary">What You'll Learn</h2>
                    <ul>
                        <li>&#10003; <span class="fw-bold">HTML & CSS</span></li>
                        <li>&#10003; <span class="fw-bold">JavaScript</span></li>
                        <li>&#10003; <span class="fw-bold">Responsive Design</span></li>
                        <li>&#10003; <span class="fw-bold">Front-End Frameworks (e.g., Bootstrap, React)</span></li>
                        <li>&#10003; <span class="fw-bold">Server-Side Development</span></li>
                        <li>&#10003; <span class="fw-bold">Database Management</span></li>
                        <li>&#10003; <span class="fw-bold">API Integration</span></li>
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
                            style="background: linear-gradient(to right top, #007bff, #0056b3, #003c8c, #002b5f, #001f4d); border: none;">
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
    <h2 class="text-center text-primary">Course Syllabus</h2>
        <div class="row px-4">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="syllabus-item bg-white p-4 rounded shadow" style="height: 100%;">
                    <h3>Week 1-3: HTML & CSS Basics</h3>
                    <ul>
                        <li>HTML Elements and Structure</li>
                        <li>CSS Styling and Layout</li>
                        <li>Responsive Design Techniques</li>
                        <li>Building Your First Website</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="syllabus-item bg-white p-4 rounded shadow" style="height: 100%;">
                    <h3>Week 4-6: JavaScript Fundamentals</h3>
                    <ul>
                        <li>JavaScript Syntax and Operators</li>
                        <li>Functions and Events</li>
                        <li>DOM Manipulation</li>
                        <li>Asynchronous Programming</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="syllabus-item bg-white p-4 rounded shadow" style="height: 100%;">
                    <h3>Week 7-9: Front-End Frameworks</h3>
                    <ul>
                        <li>Introduction to Bootstrap</li>
                        <li>Building Responsive Layouts</li>
                        <li>Introduction to React</li>
                        <li>State Management and Components</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="syllabus-item bg-white p-4 rounded shadow" style="height: 100%;">
                    <h3>Week 10-12: Server-Side Development</h3>
                    <ul>
                        <li>Introduction to Node.js</li>
                        <li>Building RESTful APIs</li>
                        <li>Database Integration (e.g., MongoDB)</li>
                        <li>Deploying Your Application</li>
                    </ul>
                </div>
            </div>
        </div>
</section>

<!-- Enrollment Section -->
<section class="enroll-section py-5 text-dark text-center">
    <h2>Ready to Build the Web?</h2>
    <p>Enroll now and start developing dynamic web applications with our comprehensive Web Development course!</p>
    <a href="/enroll/web-development" class="btn btn-primary">Enroll Now</a>
</section>

@endsection
