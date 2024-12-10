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
                    <div class="col-md-4 mb-4">
                        <a href="{{ $client->link }}" target="_blank" class="text-decoration-none">
                            <div class="card" style="width: 18rem;">
                                @if ($client->logo)
                                    <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}" class="img-fluid">
                                @else
                                    <p>No logo available</p>
                                @endif
                                <div class="card-body">
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
