@extends('website.layouts.master')
@section('content')
<div class="top_banner">
    <img src="{{asset('background.jpg')}}"  alt="" width="100%">
    <div class="centered">
        <h1 style="font-size: 60px; font-weight:800;">Blogs</h1>
    </div>

</div>
<section class="related-cntn">
    <div class="container">
        <div class="title-2">
            <h2 class="text-danger">Read our related content Blogs</h2>
        </div>
        <div class="for-grid mt-5">
            <div class="single-blog">
                <div class="second-img">
                    <img src="{{ asset('img-card.png') }}" alt="blog-1">
                </div>
                <div class="blog-text">
                    <span>BLOG POST</span>
                    <h4 class="blog-title mt-2">
                        <a href="#">Patenting Software: <br> How can it be done?</a>
                    </h4>
                    <hr class="mt-4">
                    <div class="our-guide">
                        <p>Even though life without computers is today nearly impossible to imagine, patent-based protection...</p>
                    </div>
                    <a href="#" class="read mt-4">
                        <i class="fa-solid fa-arrow-right pe-2"></i>
                        Read More
                    </a>
                </div>
            </div>
            <div class="single-blog">
                <div class="second-img">
                    <img src="{{ asset('img-card-2.png') }}" alt="blog-1">
                </div>
                <div class="blog-text">
                    <span>BLOG POST</span>
                    <h4 class="blog-title mt-2">
                        <a href="#">What is Innovation <br> Scouting?</a>
                    </h4>
                    <hr class="mt-4">
                    <div class="our-guide">
                        <p>Change is a constant. New technologies surface regularly and change existing product landscapes...</p>
                    </div>
                    <a href="#" class="read mt-4">
                        <i class="fa-solid fa-arrow-right pe-2"></i>
                        Read More
                    </a>
                </div>
            </div>
            <div class="single-blog">
                <div class="second-img">
                    <img src="{{ asset('img-card-3.png') }}" alt="blog-1">
                </div>
                <div class="blog-text">
                    <span>EBOOK</span>
                    <h4 class="blog-title mt-2">
                        <a href="#">(Re-)Focusing Your <br> Innovation Program in Turbulent Times</a>
                    </h4>
                    <hr class="mt-4">
                    <div class="our-guide">
                        <p>Innovation is a journey. So, let’s find the best route to get you to your destination!</p>
                    </div>
                    <a href="#" class="read">
                        <i class="fa-solid fa-arrow-right pe-2"></i>
                        Read More
                    </a>
                </div>
            </div>
            <div class="single-blog">
                <div class="second-img">
                    <img src="{{ asset('img-card-4.png') }}" alt="blog-1">
                </div>
                <div class="blog-text">
                    <span>BLOG POST</span>
                    <h4 class="blog-title mt-2">
                        <a href="#">Maximise your <br>Invention value from Conception to Commercialisation</a>
                    </h4>
                    <hr class="mt-4">
                    <div class="our-guide">
                        <p>Learn how a comprehensive database and powerful dashboard can accelerate your understanding...</p>
                    </div>
                    <a href="#" class="read">
                        <i class="fa-solid fa-arrow-right pe-2"></i>
                        Watch Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
