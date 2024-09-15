@extends('admin.layouts.main')

@section('content')
    <h1>Trainings</h1>
    <a href="{{ route('admin.trainings.create') }}" class="btn btn-primary">Create New Training</a>

    @if (session('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Training Photo</th>
                <th>Training Name</th>
                <th>Training Duration</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trainings as $training)
                <tr>
                    <td>
                        @if($training->training_photo)
                            <img src="{{ asset('storage/' . $training->training_photo) }}" alt="{{ $training->training_name }}" width="100">
                        @else
                            No Photo
                        @endif
                    </td>
                    <td>{{ $training->training_name }}</td>
                    <td>{{ $training->training_duration }}</td>
                    <td>
                        <a href="{{ route('admin.trainings.edit', $training->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.trainings.destroy', $training->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this training?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
