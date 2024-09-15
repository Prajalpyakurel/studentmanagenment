@extends('website.layouts.master')

@section('content')

<!-- Hero Section -->
<section class="courses-hero d-flex align-items-center justify-content-center text-center text-white position-relative overflow-hidden">
    <img src="{{asset('web.jpg')}}" alt="Background Image" class="background-image img-fluid position-absolute w-100 h-100 object-fit-cover">
    <div class="text-content position-relative p-4 z-index-2">
        <h1 class="display-4 fw-bold text-danger">Explore Our Courses</h1>
        <p class="lead fw-bold">Discover a wide range of IT courses designed to help you succeed in the digital world.</p>
    </div>
</section>

<!-- Search and Filter Section -->
<section class="search-filter mt-5 overflow-hidden">
    <div class="row justify-content-center">
        <form id="course-search-form" class="d-flex justify-content-center flex-wrap gap-2">
            <input type="text" class="form-control" placeholder="Search courses..." id="search-input" style="width: 300px; height:auto;">
            <select id="category-filter" class="form-select" style="width: 200px;">
                <option value="">All Categories</option>
                <option value="web-development">Web Development</option>
                <option value="data-science">Data Science</option>
                <option value="cybersecurity">Cybersecurity</option>
                <option value="cloud-computing">Cloud Computing</option>
            </select>
            <select id="level-filter" class="form-select" style="width: 200px;">
                <option value="">All Levels</option>
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
</section>

<!--Courses Categories-->
<section class="course-categories">
      <h2 class="text-danger">Course Categories</h2>
      <div class="category-grid">
        <div class="category-card">
          <i class="fas fa-code"></i>
          <h3>Web Development</h3>
          <p>Build modern websites and web applications</p>
        </div>
        <div class="category-card">
          <i class="fas fa-chart-line"></i>
          <h3>Data Science</h3>
          <p>Analyze data and build machine learning models</p>
        </div>
        <div class="category-card">
          <i class="fas fa-shield-alt"></i>
          <h3>Cybersecurity</h3>
          <p>Protect digital assets and secure networks</p>
        </div>
        <div class="category-card">
          <i class="fas fa-cloud"></i>
          <h3>Cloud Computing</h3>
          <p>Master cloud platforms and services</p>
        </div>
      </div>
  </section>

<!-- Featured Courses Section -->
<!-- Featured Courses Section -->
<section class="course-list py-5 overflow-hidden">
    <h2 class="text-center mb-4 text-danger">Featured Courses</h2>
    <div id="course-grid" class="row g-4 " style="  display: grid;

grid-template-columns: repeat(3, 1fr);

grid-auto-rows: auto;

grid-gap: 1rem; padding:0 9rem; /* 4 cards in a row */
">
        <!-- Dynamic Course Cards Will Be Rendered Here -->
    </div>
</section>


@endsection
