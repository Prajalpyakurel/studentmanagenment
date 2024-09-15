@extends('admin.layouts.main')

@section('content')
    <h1>Create Training</h1>

    <form action="{{ route('admin.trainings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Training Name -->
        <div class="form-group mt-3">
            <label for="training_name">Training Name</label>
            <input type="text" name="training_name" class="form-control" value="{{ old('training_name') }}" required>
        </div>

        <!-- Training Photo -->
        <div class="form-group mt-3">
            <label for="training_photo">Training Photo</label>
            <input type="file" name="training_photo" class="form-control">
        </div>

        <!-- Training Duration -->
        <div class="form-group mt-3">
            <label for="training_duration">Training Duration</label>
            <input type="text" name="training_duration" class="form-control" value="{{ old('training_duration') }}" required>
        </div>
        <div class="mb-3">
            <label for="training_category_id" class="form-label">Category</label>
            <select class="form-control" id="training_category_id" name="training_category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Training Description -->
        <div class="form-group mt-3">
            <label for="training_description">Training Description</label>
            <textarea name="training_description" class="form-control" id="ckeditor" required>{{ old('training_description') }}</textarea>
        </div>

        <!-- Syllabus PDF -->
        <div class="form-group mt-3">
            <label for="syllabus_pdf">Upload Syllabus (PDF)</label>
            <input type="file" name="syllabus_pdf" class="form-control">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success mt-3">Create Training</button>
    </form>
@endsection

@section('scripts')
    <!-- Include CKEditor script -->
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('ckeditor');
    </script>
@endsection
