@extends('website.layouts.master')

@section('content')

    {{-- Our Service Banner Section --}}
    <div class="top_banner">
        <img src="{{ asset('background.jpg') }}" alt="Banner Image" width="100%">
        <div class="centered">
            <h1>Services</h1>
            <p>Home > Services</p>
        </div>
    </div>
    {{-- End of Service Banner --}}

    {{-- For Experts Section --}}
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card all-courses servcies" style="width:100%; height:24rem;">
                    <img src="{{ asset('website\img\webdevelopment.jpg') }}" class="card-img-top" alt="Web Development" width="200px">
                    <div class="card-body d-flex flex-col gap-4">
                        <h5 class="card-title">Web Development</h5>
                        <a href="{{route('WebDevelopmentService')}}" class="btn courses-view" style="background-color:#DC58A4; font-weight:500;">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card all-courses servcies" style="width:100%; height:24rem;">
                    <img src="{{ asset('website\img\digitalmarketing.jpeg') }}" class="card-img-top" alt="Web Development">
                    <div class="card-body d-flex flex-col gap-4">
                        <h5 class="card-title">Digital Marketing</h5>
                        <a href="{{route('DigitalDevelopmentService')}}" class="btn courses-view" style="background-color:#DC58A4; font-weight:500;">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card all-courses servcies" style="width:100%; height:24rem;">
                    <img src="{{ asset('website\img\mobileappdevelopment.jpeg') }}" class="card-img-top" alt="Web Development">
                    <div class="card-body d-flex flex-col gap-4">
                        <h5 class="card-title">App Development</h5>
                        <a href="#" class="btn courses-view" style="background-color:#DC58A4; font-weight:500;">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card all-courses servcies" style="width:100%; height:24rem;">
                    <img src="{{ asset('website\img\webdesign.jpeg') }}" class="card-img-top" alt="Web Development">
                    <div class="card-body d-flex flex-col gap-4">
                        <h5 class="card-title">Web Design</h5>
                        <a href="{{route('WebDesignService')}}" class="btn courses-view" style="background-color:#DC58A4; font-weight:500;">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card all-courses servcies" style="width:100%; height:24rem;">
                    <img src="{{ asset('website\img\dominreg.jpeg') }}" class="card-img-top" alt="Web Development">
                    <div class="card-body d-flex flex-col gap-4">
                        <h5 class="card-title">Domain Registration</h5>
                        <a href="{{route('Domainservice')}}" class="btn courses-view" style="background-color:#DC58A4; font-weight:500;">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card all-courses servcies" style="width:100%; height:24rem;">
                    <img src="{{ asset('website\img\webmaintanance.jpg') }}" class="card-img-top" alt="Web Development">
                    <div class="card-body d-flex flex-col gap-4">
                        <h5 class="card-title">Website Maintenance</h5>
                        <a href="{{route('webmaintenance')}}" class="btn courses-view" style="background-color:#DC58A4; font-weight:500;">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
