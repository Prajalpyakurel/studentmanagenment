@extends('website.layouts.master')

@section('content')

<!-- Hero Section with Image -->
<section class="hero text-white text-center py-5 position-relative" style="height: 400px;">
    <img src="{{ asset('laravel.png') }}" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Hero Image" style="object-fit: cover;">
    <div class="hero-text position-relative text-center mt-4" style="z-index: 1; padding-top: 100px;">
        <h1 class="display-3 text-dark fw-bold">Full Stack Development with Laravel</h1>
        <p class="lead text-primary fw-bold">Become a proficient full stack developer with expertise in both front-end and back-end technologies using Laravel.</p>
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
                        Our Full Stack Development course with Laravel is designed to give you a comprehensive understanding of both front-end and back-end development. You will gain hands-on experience with Laravel for server-side development while learning modern JavaScript frameworks and front-end technologies to build dynamic web applications.
                    </p>
                    <ul>
                        <li>&#10003; Duration: 14 weeks</li>
                        <li>&#10003; Skill Level: Beginner to Advanced</li>
                        <li>&#10003; Prerequisites: Basic knowledge of HTML, CSS, and JavaScript</li>
                        <li>&#10003; Certificate: Yes</li>
                    </ul>
                    <h2 class="text-danger">What You'll Learn</h2>
                    <ul>
                        <li>&#10003; <span class="fw-bold">Laravel Fundamentals</span></li>
                        <li>&#10003; <span class="fw-bold">Building RESTful APIs</span></li>
                        <li>&#10003; <span class="fw-bold">Database Management with Eloquent</span></li>
                        <li>&#10003; <span class="fw-bold">Front-End Technologies (HTML, CSS, JavaScript)</span></li>
                        <li>&#10003; <span class="fw-bold">Modern JavaScript Frameworks (e.g., Vue.js)</span></li>
                        <li>&#10003; <span class="fw-bold">Authentication and Authorization</span></li>
                        <li>&#10003; <span class="fw-bold">Deployment and Scaling</span></li>
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
    <h2 class="text-center text-primary">Course Syllabus</h2>
        <div class="row px-4">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="syllabus-item bg-white p-4 rounded shadow" style="height: 100%;">
                    <h3>Week 1-3: Laravel Basics</h3>
                    <ul>
                        <li>Introduction to Laravel</li>
                        <li>Routing and Controllers</li>
                        <li>Views and Blade Templates</li>
                        <li>Database Migration and Eloquent ORM</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="syllabus-item bg-white p-4 rounded shadow" style="height: 100%;">
                    <h3>Week 4-6: API Development</h3>
                    <ul>
                        <li>Building RESTful APIs</li>
                        <li>API Authentication with Laravel Passport</li>
                        <li>Handling Requests and Responses</li>
                        <li>Testing APIs</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="syllabus-item bg-white p-4 rounded shadow" style="height: 100%;">
                    <h3>Week 7-9: Front-End Technologies</h3>
                    <ul>
                        <li>HTML & CSS Fundamentals</li>
                        <li>JavaScript Essentials</li>
                        <li>Introduction to Vue.js</li>
                        <li>Integrating Front-End with Laravel</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="syllabus-item bg-white p-4 rounded shadow" style="height: 100%;">
                    <h3>Week 10-14: Advanced Topics and Deployment</h3>
                    <ul>
                        <li>Authentication and Authorization</li>
                        <li>Real-Time Applications with Laravel Echo</li>
                        <li>Testing and Debugging</li>
                        <li>Deploying Laravel Applications</li>
                    </ul>
                </div>
            </div>
        </div>
</section>

<!-- Enrollment Section -->
<section class="enroll-section py-5 text-dark text-center">
    <h2>Ready to Master Full Stack Development?</h2>
    <p>Enroll now to start your journey with Laravel and become a full stack developer skilled in both front-end and back-end technologies!</p>
    <a href="/enroll/full-stack-development" class="btn btn-primary">Enroll Now</a>
</section>

@endsection
