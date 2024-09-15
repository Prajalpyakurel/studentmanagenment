@extends('admin.layouts.main')

@section('content')
    <div class="container">
        <h1>Edit Testimonial</h1>

        <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="client_name" class="form-label">Client Name</label>
                <input type="text" name="client_name" class="form-control" value="{{ $testimonial->client_name }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" required>{{ $testimonial->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="client_photo" class="form-label">Client Photo</label>
                <input type="file" name="client_photo" class="form-control">
                @if($testimonial->client_photo)
                    <img src="{{ asset('storage/'.$testimonial->client_photo) }}" alt="Client Photo" width="100">
                @endif
            </div>

            <button type="submit" class="btn btn-success">Update Testimonial</button>
        </form>
    </div>
@endsection
