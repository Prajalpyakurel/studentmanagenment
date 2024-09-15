@extends('admin.layouts.main')


@section('content')
    <div class="container">
        <h1>Edit Training Category</h1>

        <!-- Display Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form to edit an existing training category -->
        <form action="{{ route('trainingcategories.update', $trainingCategory->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $trainingCategory->name) }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description">{{ old('description', $trainingCategory->description) }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Update Category</button>
        </form>
    </div>
@endsection
