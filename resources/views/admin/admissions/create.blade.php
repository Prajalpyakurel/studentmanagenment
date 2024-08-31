@extends('admin.layouts.main')

@section('content')
    <h1>Create Admission</h1>
    <form action="{{ route('admin.admissions.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" required>
            @if ($errors->has('phone'))
            <p style="color: red">
                {{ $errors->first('phone') }}
            </p>
        @endif
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
            @if ($errors->has('name'))
            <p style="color: red">
                {{ $errors->first('name') }}
            </p>
        @endif
        </div>
        <div class="form-group">
            <label for="course_id">Course</label>
            <select name="course_id" class="form-control" id="course_id" required>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}" data-price="{{ $course->price }}">{{ $course->title }}</option>
                @endforeach
            </select>
            @if ($errors->has('course_id'))
            <p style="color: red">
                {{ $errors->first('course_id') }}
            </p>
        @endif
        </div>
        <div class="form-group">
            <label for="total_fee">Total Fee</label>
            <input type="number" name="total_fee" class="form-control" required >
            @if ($errors->has('total_fee'))
            <p style="color: red">
                {{ $errors->first('total_fee') }}
            </p>
        @endif
        </div>
        <div class="form-group">
            <label for="remaining_fee">Remaining Fee</label>
            <input type="number" name="remaining_fee" class="form-control" required >
            @if ($errors->has('remaining_fee'))
            <p style="color: red">
                {{ $errors->first('remaining_fee') }}
            </p>
        @endif
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
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
