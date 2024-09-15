@extends('admin.layouts.main')

@section('content')
    <div class="container">
        <h1>Testimonials</h1>

        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary mb-3">Add Testimonial</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Client Name</th>
                    <th>Description</th>
                    <th>Client Photo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testimonials as $testimonial)
                    <tr>
                        <td>{{ $testimonial->id }}</td>
                        <td>{{ $testimonial->client_name }}</td>
                        <td>{{ $testimonial->description }}</td>
                        <td>
                            @if($testimonial->client_photo)
                                <img src="{{ asset('storage/'.$testimonial->client_photo) }}" alt="Client Photo" width="100">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
