@extends('website.layouts.master')
@section('content')
<div class="top_banner position-relative">
    <img src="{{ asset('background.jpg') }}" alt="Banner" class="w-100">
    <div class="centered position-absolute text-center text-light" style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <h1 class="display-4 fw-bold">Blogs</h1>
    </div>
</div>

<section class="related-cntn py-5">
    <div class="container">
        <div class="title-2 text-center mb-4">
            <h2 class="text-danger">Read our related content Blogs</h2>
        </div>

        <div class="row mt-5 g-4">
            <div class="col-lg-3 col-md-6">
                <div class="single-blog card h-100 shadow-sm border-0">
                    <div class="image-container">
                        <img src="{{ asset('img-card.png') }}" alt="blog-1" class="card-img-top img-fluid">
                    </div>
                    <div class="card-body">
                        <span class="badge bg-secondary">BLOG POST</span>
                        <h4 class="blog-title mt-2">
                            <a href="#" class="text-dark">Patenting Software:<br>How can it be done?</a>
                        </h4>
                        <hr class="mt-4">
                        <p class="text-muted">Even though life without computers is today nearly impossible to imagine, patent-based protection...</p>
                        <a href="#" class="read d-inline-flex align-items-center mt-3 text-decoration-none">
                            <i class="fa-solid fa-arrow-right pe-2"></i> Read More
                        </a>
                    </div>
                </div>
            </div>

            <!-- Additional blog cards go here, using the same structure -->
            <div class="col-lg-3 col-md-6">
                <div class="single-blog card h-100 shadow-sm border-0">
                    <div class="image-container">
                        <img src="{{ asset('img-card.png') }}" alt="blog-1" class="card-img-top img-fluid">
                    </div>
                    <div class="card-body">
                        <span class="badge bg-secondary">BLOG POST</span>
                        <h4 class="blog-title mt-2">
                            <a href="#" class="text-dark">What is Innovation <br> Scouting?</a>
                        </h4>
                        <hr class="mt-4">
                        <p class="text-muted">Change is a constant. New technologies surface regularly and change existing product landscapes...</p>
                        <a href="#" class="read d-inline-flex align-items-center mt-3 text-decoration-none">
                            <i class="fa-solid fa-arrow-right pe-2"></i> Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-blog card h-100 shadow-sm border-0">
                    <div class="image-container">
                        <img src="{{ asset('img-card.png') }}" alt="blog-1" class="card-img-top img-fluid">
                    </div>
                    <div class="card-body">
                        <span class="badge bg-secondary">BLOG POST</span>
                        <h4 class="blog-title mt-2">
                            <a href="#" class="text-dark">(Re-)Focusing Your <br>Innovation Program in Turbulent Times</a>
                        </h4>
                        <hr class="mt-4">
                        <p class="text-muted">Innovation is a journey. So, let’s find the best route to get you to your destination </p>
                        <a href="#" class="read d-inline-flex align-items-center mt-3 text-decoration-none">
                            <i class="fa-solid fa-arrow-right pe-2"></i> Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-blog card h-100 shadow-sm border-0">
                    <div class="image-container">
                        <img src="{{ asset('img-card.png') }}" alt="blog-1" class="card-img-top img-fluid">
                    </div>
                    <div class="card-body">
                        <span class="badge bg-secondary">BLOG POST</span>
                        <h4 class="blog-title mt-2">
                            <a href="#" class="text-dark">Maximise your <br>Invention value from Conception to Commercialisation</a>
                        </h4>
                        <hr class="mt-4">
                        <p class="text-muted">Even though life without computers is today nearly impossible to imagine, patent-based protection...</p>
                        <a href="#" class="read d-inline-flex align-items-center mt-3 text-decoration-none">
                            <i class="fa-solid fa-arrow-right pe-2"></i> Read More
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
@endsection

<style>
/* Ensures images have the same size and prevent stretching */
.image-container {
    height: 200px; /* Set a fixed height for consistency */
    overflow: hidden;
}

.image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures image fills the container proportionally */
    object-position: center; /* Centers image within container */
}

/* Ensures card height is consistent across all cards */
.card {
    height: 100%;
    display: flex;
    flex-direction: column;
}

.card-body {
    flex-grow: 1; /* Allows card body to expand and keeps footer at the bottom */
}

.read {
    margin-top: auto; /* Ensures 'Read More' link is always at the bottom of the card */
}
</style>
