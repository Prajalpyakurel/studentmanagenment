@extends('admin.layouts.main')

@section('content')
    <h1>Edit Training</h1>

    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <form action="{{ route('admin.trainings.update', $training->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Training Name -->
        <div class="form-group mt-3">
            <label for="training_name">Training Name</label>
            <input type="text" name="training_name" class="form-control" value="{{ old('training_name', $training->training_name) }}" required>
        </div>

        <!-- Training Photo -->
        <div class="form-group mt-3">
            <label for="training_photo">Training Photo</label>
            <input type="file" name="training_photo" class="form-control">
            @if($training->training_photo)
                <img src="{{ asset('storage/' . $training->training_photo) }}" alt="{{ $training->training_name }}" width="100" class="mt-2">
            @endif
        </div>

        <!-- Training Duration -->
        <div class="form-group mt-3">
            <label for="training_duration">Training Duration</label>
            <input type="text" name="training_duration" class="form-control" value="{{ old('training_duration', $training->training_duration) }}" required>
        </div>

        <div class="mb-3">
            <label for="training_category_id" class="form-label">Category</label>
            <select class="form-control" id="training_category_id" name="training_category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $training->training_category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Training Description -->
        <div class="form-group mt-3">
            <label for="training_description">Training Description</label>
            <textarea name="training_description" class="form-control" id="ckeditor" required>{{ old('training_description', $training->training_description) }}</textarea>
        </div>

        <!-- Syllabus PDF -->
        <div class="form-group mt-3">
            <label for="syllabus_pdf">Upload Syllabus (PDF)</label>
            <input type="file" name="syllabus_pdf" class="form-control">
            @if($training->syllabus_pdf)
                <p class="mt-2">Current Syllabus: <a href="{{ asset('storage/' . $training->syllabus_pdf) }}" target="_blank">View PDF</a></p>
            @endif
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success mt-3">Update Training</button>
    </form>
@endsection

@section('scripts')
    <!-- Include CKEditor script -->
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('ckeditor');
    </script>
@endsection
