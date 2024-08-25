@extends('layouts.app')

@section('content')
    <h1>Edit Admission</h1>
    <form action="{{ route('admin.admissions.update', $admission->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $admission->phone }}" required>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $admission->name }}" required>
        </div>
        <div class="form-group">
            <label for="course_id">Course</label>
            <select name="course_id" class="form-control" id="course_id" required>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}" data-price="{{ $course->price }}" {{ $course->id == $admission->course_id ? 'selected' : '' }}>
                        {{ $course->title }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="total_fee">Total Fee</label>
            <input type="number" name="total_fee" class="form-control" value="{{ $admission->total_fee }}" required>
        </div>
        <div class="form-group">
            <label for="remaining_fee">Remaining Fee</label>
            <input type="number" name="remaining_fee" class="form-control" value="{{ $admission->remaining_fee }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <script>
        document.getElementById('course_id').addEventListener('change', function() {
            let selectedOption = this.options[this.selectedIndex];
            let price = selectedOption.getAttribute('data-price');
            document.querySelector('input[name="total_fee"]').value = price;
            document.querySelector('input[name="remaining_fee"]').value = price;
        });
    </script>
@endsection
