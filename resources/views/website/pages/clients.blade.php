@extends('website.layouts.master')

@section('content')
 {{-- Our Service Banner Section --}}
 <div class="top_banner">
    <img src="{{ asset('background.jpg') }}" alt="Banner Image" width="100%">
    <div class="centered">
        <h1>Our Valuable Clients</h1>
        <p>Home > clients</p>
    </div>
</div>
{{-- End of Service Banner --}}
<section class="container py-5">

    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4" style="margin-bottom:2rem;">
            <a href="https://jyotishasolutions.com/" class="text-decoration-none">
                <div class="thumb-info position-relative" data-title="Jyotisha Solutions">
                    <div class="thumb-info-wrapper position-relative">
                        <img src="{{asset('_workflow.png')}}" class="img-fluid" alt="Jyotisha Solutions">
                        <div class="overlay">
                            <div class="text-center client-name" style="color:#D4368F;">Jyotisha Solutions</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4" style="margin-bottom:2rem;">
            <a href="https://sgs.org.np/" class="text-decoration-none">
                <div class="thumb-info position-relative" data-title="Sindhupalchowk Global Society">
                    <div class="thumb-info-wrapper position-relative">
                        <img src="{{asset('_workflow.png')}}" class="img-fluid" alt="Sindhupalchowk Global Society">
                        <div class="overlay">
                            <div class="text-center client-name" style="color:#D4368F;">Sindhupalchowk Global Society</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4" style="margin-bottom:2rem;">
            <a href="https://www.hellosawari.com.np/" class="text-decoration-none">
                <div class="thumb-info position-relative" data-title="Hello Sawari">
                    <div class="thumb-info-wrapper position-relative">
                        <img src="{{asset('_workflow.png')}}" class="img-fluid" alt="Hello Sawari">
                        <div class="overlay">
                            <div class="text-center client-name" style="color:#D4368F;">Hello Sawari</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4" style="margin-bottom:2rem;">
            <a href="https://www.hellosawari.com.np/" class="text-decoration-none">
                <div class="thumb-info position-relative" data-title="Hello Sawari">
                    <div class="thumb-info-wrapper position-relative">
                        <img src="{{asset('_workflow.png')}}" class="img-fluid" alt="Hello Sawari">
                        <div class="overlay">
                            <div class="text-center client-name" style="color:#D4368F;">Hello Sawari</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4" style="margin-bottom:2rem;">
            <a href="https://www.hellosawari.com.np/" class="text-decoration-none">
                <div class="thumb-info position-relative" data-title="Hello Sawari">
                    <div class="thumb-info-wrapper position-relative">
                        <img src="{{asset('_workflow.png')}}" class="img-fluid" alt="Hello Sawari">
                        <div class="overlay">
                            <div class="text-center client-name" style="color:#D4368F;">Hello Sawari</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4" style="margin-bottom:2rem;">
            <a href="https://www.hellosawari.com.np/" class="text-decoration-none">
                <div class="thumb-info position-relative" data-title="Hello Sawari">
                    <div class="thumb-info-wrapper position-relative">
                        <img src="{{asset('_workflow.png')}}" class="img-fluid" alt="Hello Sawari">
                        <div class="overlay">
                            <div class="text-center client-name" style="color:#D4368F;">Hello Sawari</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4" style="margin-bottom:2rem;">
            <a href="https://www.hellosawari.com.np/" class="text-decoration-none">
                <div class="thumb-info position-relative" data-title="Hello Sawari">
                    <div class="thumb-info-wrapper position-relative">
                        <img src="{{asset('_workflow.png')}}" class="img-fluid" alt="Hello Sawari">
                        <div class="overlay">
                            <div class="text-center client-name" style="color:#D4368F;">Hello Sawari</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <!-- Add more cards here as needed -->
    </div>
</section>
@endsection
