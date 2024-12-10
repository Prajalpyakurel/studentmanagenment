@extends('website.layouts.master')

@section('content')
    {{-- Our Service Banner Section --}}
    <div class="top_banner">
        <img src="{{ asset('background.jpg') }}" alt="Banner Image" width="100%">
        <div class="centered">
            <h1 style="color: white;">Our Valuable Clients</h1>
            <p style="color: white;">Home > clients</p>
        </div>
    </div>
    {{-- End of Service Banner --}}
    <section class="container py-5" style="margin-bottom: 250px;">
        <div class="row">
            @if ($clients->isEmpty())
                <p>No clients available</p>
            @else
                @foreach ($clients as $client)
                    <div class="col-lg-2 col-md-3 col-sm-6 mb-4 d-flex justify-content-center">
                        <a href="{{ $client->link }}" target="_blank" class="text-decoration-none">
                            <div class="card" style="width: 200px; height: 300px;">
                                @if ($client->logo)
                                    <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}"
                                         class="card-img-top" style="height: 150px; object-fit: cover;">
                                @else
                                    <div class="d-flex align-items-center justify-content-center"
                                         style="height: 150px; background-color: #f8f9fa;">
                                        <p>No logo</p>
                                    </div>
                                @endif
                                <div class="card-body text-center d-flex flex-column justify-content-between">
                                    <h5 class="card-title">{{ $client->name }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    </section>


@endsection
