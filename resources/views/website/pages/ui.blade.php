@extends('website.layouts.master')

@section('content')

<!-- Hero Section with Image -->
<section class="hero text-white text-center py-5 position-relative" style="height: 400px;">
    <img src="{{ asset('uiux.jpg') }}" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Hero Image" style="object-fit: cover;">
    <div class="hero-text position-relative text-center mt-4" style="z-index: 1; padding-top: 90px;">
        <h1 class="display-3 text-danger fw-bold">UI/UX Design</h1>
        <p class="lead text-danger fw-bold">Create intuitive and visually stunning user interfaces and experiences with our UI/UX Design course.</p>
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
                        Our UI/UX Design course is crafted to equip you with the essential skills to design user-friendly and aesthetically pleasing interfaces. You'll delve into the principles of user experience design and learn how to create engaging digital products that meet user needs.
                    </p>
                    <ul>
                        <li>&#10003; Duration: 8 weeks</li>
                        <li>&#10003; Skill Level: Beginner to Advanced</li>
                        <li>&#10003; Prerequisites: Basic understanding of design principles</li>
                        <li>&#10003; Certificate: Yes</li>
                    </ul>
                    <h2 class="text-primary">What You'll Learn</h2>
                    <ul>
                        <li>&#10003; <span class="fw-bold">User Research</span></li>
                        <li>&#10003; <span class="fw-bold">Wireframing and Prototyping</span></li>
                        <li>&#10003; <span class="fw-bold">Interaction Design</span></li>
                        <li>&#10003; <span class="fw-bold">Visual Design Principles</span></li>
                        <li>&#10003; <span class="fw-bold">Usability Testing</span></li>
                        <li>&#10003; <span class="fw-bold">Design Tools and Software</span></li>
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
                            style="background: linear-gradient(to right top, #0062cc, #004bbf, #0033a0, #002a7d, #00256d); border: none;">
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
                    <h3>Week 1-2: Introduction to UI/UX</h3>
                    <ul>
                        <li>UI vs UX Design</li>
                        <li>User-Centered Design Principles</li>
                        <li>Design Thinking Process</li>
                        <li>Tools and Techniques Overview</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="syllabus-item bg-white p-4 rounded shadow" style="height: 100%;">
                    <h3>Week 3-4: User Research and Analysis</h3>
                    <ul>
                        <li>Conducting User Interviews</li>
                        <li>Creating Personas</li>
                        <li>User Journey Mapping</li>
                        <li>Competitor Analysis</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="syllabus-item bg-white p-4 rounded shadow" style="height: 100%;">
                    <h3>Week 5-6: Wireframing and Prototyping</h3>
                    <ul>
                        <li>Sketching and Wireframing</li>
                        <li>Creating Interactive Prototypes</li>
                        <li>Usability Testing of Prototypes</li>
                        <li>Iteration and Refinement</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="syllabus-item bg-white p-4 rounded shadow" style="height: 100%;">
                    <h3>Week 7-8: Visual Design and Interaction</h3>
                    <ul>
                        <li>Design Principles and Aesthetics</li>
                        <li>Color Theory and Typography</li>
                        <li>Design Systems and Components</li>
                        <li>Responsive Design and Accessibility</li>
                    </ul>
                </div>
            </div>
        </div>
</section>

<!-- Enrollment Section -->
<section class="enroll-section py-5 text-dark text-center">
    <h2>Ready to Become a UI/UX Designer?</h2>
    <p>Enroll now and start designing engaging and user-friendly digital experiences!</p>
    <a href="/enroll/ui-ux-design" class="btn btn-primary">Enroll Now</a>
</section>

@endsection
