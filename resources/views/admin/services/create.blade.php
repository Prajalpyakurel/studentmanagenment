@extends('admin.layouts.main')

@section('content')
    <h1>Add New Service</h1>

    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>


        <div class="form-group">
            <label for="packages_description">Packages Description</label>
            <textarea name="packages_description" class="form-control ckeditor" id="ckeditor" required></textarea>
        </div>

        <div class="form-group">
            <label for="services_description">Services Description</label>
            <textarea name="services_description" class="form-control ckeditor" required></textarea>
        </div>
        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" name="photo" class="form-control-file" required>
        </div>


        <button type="submit" class="btn btn-success">Add Service</button>
    </form>

@endsection
@section('scripts')
    <!-- Include CKEditor script -->
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('ckeditor');
    </script>
@endsection
