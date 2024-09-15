@extends('admin.layouts.main')
@section('content')
    <div class="container">
        <h1>Training Categories</h1>

        <!-- Success message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Link to create a new category -->
        <a href="{{ route('admin.trainingcategories.create') }}" class="btn btn-primary">Create New Training Category</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trainingCategories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('admin.trainingcategories.edit', $category->id) }}" class="btn btn-warning">Edit</a>

                            <!-- Delete Form -->
                            <form action="{{ route('admin.trainingcategories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
