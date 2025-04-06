@extends('admin.layouts.main')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Create New Course</h1>

        <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card p-4">
                <div class="card-body">
                    <!-- Title -->
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <!-- Description -->
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                    </div>

                    <!-- Category -->
                    <div class="form-group mb-3">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" name="Category" id="category" class="form-control">
                    </div>

                    <!-- Duration -->
                    <div class="form-group mb-3">
                        <label for="duration" class="form-label">Duration (in hours/weeks)</label>
                        <input type="number" name="duration" id="duration" class="form-control" required>
                    </div>

                    <!-- Available Seats -->
                    <div class="form-group mb-3">
                        <label for="availableSeat" class="form-label">Available Seats</label>
                        <input type="number" name="availableSeat" id="availableSeat" class="form-control" required>
                    </div>

                    <!-- Total Seats -->
                    <div class="form-group mb-3">
                        <label for="totalSeat" class="form-label">Total Seats</label>
                        <input type="number" name="totalSeat" id="totalSeat" class="form-control" required>
                    </div>

                    <!-- Price -->
                    <div class="form-group mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" name="price" id="price" class="form-control">
                    </div>

                    <!-- PDF Upload -->
                    <div class="form-group mb-4">
                        <label for="pdf" class="form-label">Upload Course PDF</label>
                        <input type="file" name="pdf" id="pdf" class="form-control-file">
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Create Course</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
