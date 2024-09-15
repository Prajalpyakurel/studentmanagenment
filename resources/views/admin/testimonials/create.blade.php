@extends('admin.layouts.main')

@section('content')
    <div class="container">
        <h1>Add New Testimonial</h1>

        <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="client_name" class="form-label">Client Name</label>
                <input type="text" name="client_name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label for="client_photo" class="form-label">Client Photo</label>
                <input type="file" name="client_photo" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Add Testimonial</button>
        </form>
    </div>
@endsection
