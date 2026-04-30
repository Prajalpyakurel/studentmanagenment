@extends('admin.layouts.main')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Create New Course</h1>

        <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card p-4">
                <div class="card-body">

                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control"
                            rows="4">{{ old('description') }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" name="Category" id="category" class="form-control" value="{{ old('Category') }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="duration" class="form-label">Duration (Months)</label>
                        <input type="number" name="duration" id="duration" class="form-control"
                            value="{{ old('duration') }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="availableSeat" class="form-label">Available Seats</label>
                        <input type="number" name="availableSeat" id="availableSeat" class="form-control"
                            value="{{ old('availableSeat') }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="totalSeat" class="form-label">Total Seats</label>
                        <input type="number" name="totalSeat" id="totalSeat" class="form-control"
                            value="{{ old('totalSeat') }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="price" class="form-label">Price (Nrs.)</label>
                        <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}">
                    </div>

                    {{-- ✅ Course Image Upload --}}
                    <div class="form-group mb-3">
                        <label for="image" class="form-label">Course Image</label>
                        <input type="file" name="image" id="image" class="form-control" accept="image/*"
                            onchange="previewImage(event)">
                        <div class="mt-2">
                            <img id="image-preview" src="#" alt="Image Preview"
                                style="display:none; max-height:200px; border-radius:8px; border:1px solid #ddd;">
                        </div>
                        @error('image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="pdf" class="form-label">Upload Course PDF</label>
                        <input type="file" name="pdf" id="pdf" class="form-control" accept=".pdf">
                        @error('pdf')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Create Course</button>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <script>
        function previewImage(event) {
            const preview = document.getElementById('image-preview');
            const file = event.target.files[0];
            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
            }
        }
    </script>
@endsection