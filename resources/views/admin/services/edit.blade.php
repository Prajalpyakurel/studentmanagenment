@extends('admin.layouts.main')

@section('content')
    <h1>Edit Service</h1>

    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $service->title }}" required>
        </div>

        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" name="photo" class="form-control-file">
            <br>
            <img src="{{ asset('storage/' . $service->photo) }}" width="100" alt="Service Photo">
        </div>

        <div class="form-group">
            <label for="packages_description">Packages Description</label>
            <textarea name="packages_description" class="form-control ckeditor" required>{{ $service->packages_description }}</textarea>
        </div>

        <div class="form-group">
            <label for="services_description">Services Description</label>
            <textarea name="services_description" class="form-control ckeditor" required>{{ $service->services_description }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update Service</button>
    </form>
@endsection
