@extends('admin.layouts.main')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Course</h1>

        <form action="{{ route('admin.courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card p-4">
                <div class="card-body">

                    <div class="form-group mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $course->title }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="4">{{ $course->description }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Category</label>
                        <input type="text" name="Category" class="form-control" value="{{ $course->Category }}">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Duration (Months)</label>
                        <input type="number" name="duration" class="form-control" value="{{ $course->duration }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Available Seats</label>
                        <input type="number" name="availableSeat" class="form-control" value="{{ $course->availableSeat }}"
                            required>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Total Seats</label>
                        <input type="number" name="totalSeat" class="form-control" value="{{ $course->totalSeat }}"
                            required>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Price (Nrs.)</label>
                        <input type="number" name="price" class="form-control" value="{{ $course->price }}">
                    </div>

                    {{-- ✅ Course Image --}}
                    <div class="form-group mb-3">
                        <label class="form-label">Course Image</label>

                        {{-- Show existing image --}}
                        @if ($course->image_path)
                            <div class="mb-2">
                                <p class="text-muted small">Current image:</p>
                                <img src="{{ asset('storage/' . $course->image_path) }}" alt="Course Image"
                                    style="max-height:180px; border-radius:8px; border:1px solid #ddd;">
                            </div>
                        @endif

                        <input type="file" name="image" class="form-control" accept="image/*"
                            onchange="previewImage(event)">
                        <small class="text-muted">Leave blank to keep the current image.</small>
                        <div class="mt-2">
                            <img id="image-preview" src="#" alt="New Preview"
                                style="display:none; max-height:180px; border-radius:8px; border:1px solid #ddd;">
                        </div>
                        @error('image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- PDF --}}
                    <div class="form-group mb-4">
                        <label class="form-label">Upload Course PDF</label>
                        @if ($course->pdf_path)
                            <p class="text-muted small">
                                Current PDF: <a href="{{ asset('storage/' . $course->pdf_path) }}" target="_blank">View PDF</a>
                            </p>
                        @endif
                        <input type="file" name="pdf" class="form-control" accept=".pdf">
                        <small class="text-muted">Leave blank to keep the current PDF.</small>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Update Course</button>
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