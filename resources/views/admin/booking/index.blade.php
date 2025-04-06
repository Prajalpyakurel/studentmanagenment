@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Manage Course Bookings</h4>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Course</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Booked On</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($bookings as $booking)
                                        <tr>
                                            <td>{{ $booking->id }}</td>
                                            <td>{{ $booking->course->title }}</td>
                                            <td>{{ $booking->name }}</td>
                                            <td>{{ $booking->email }}</td>
                                            <td>{{ $booking->phone ?? 'N/A' }}</td>
                                            <td>
                                                @if($booking->status == 'pending')
                                                    <span class="badge bg-warning text-dark">Pending</span>
                                                @elseif($booking->status == 'confirmed')
                                                    <span class="badge bg-success">Confirmed</span>
                                                @elseif($booking->status == 'cancelled')
                                                    <span class="badge bg-danger">Cancelled</span>
                                                @endif
                                            </td>
                                            <td>{{ $booking->created_at->format('M d, Y H:i') }}</td>
                                            <td class="text-center">
                                                <div class="d-flex gap-2">
                                                    <a class="btn btn-sm btn-primary"
                                                        href="{{ route('admin.bookings.edit', $booking->id) }}">
                                                        Edit
                                                    </a>
                                                    <form action="{{ route('admin.bookings.destroy', $booking->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Are you sure you want to delete this booking?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-outline-warning text-danger">Delete</button>
                                                    </form>
                                                </div>
                                                {{--

                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-secondary dropdown-toggle" type="button"
                                                        id="dropdownMenuButton{{ $booking->id }}" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        Actions
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton{{ $booking->id }}">
                                                        <!-- Status actions -->
                                                        <h6 class="dropdown-header">Change Status</h6>
                                                        <form action="{{ route('admin.bookings.status', $booking->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PATCH')
                                                            <input type="hidden" name="status" value="confirmed">
                                                            <button type="submit" class="dropdown-item">Confirm</button>
                                                        </form>
                                                        <form action="{{ route('admin.bookings.status', $booking->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PATCH')
                                                            <input type="hidden" name="status" value="cancelled">
                                                            <button type="submit" class="dropdown-item">Cancel</button>
                                                        </form>
                                                        <form action="{{ route('admin.bookings.status', $booking->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PATCH')
                                                            <input type="hidden" name="status" value="pending">
                                                            <button type="submit" class="dropdown-item">Mark as Pending</button>
                                                        </form>

                                                        <div class="dropdown-divider"></div>
                                                        <h6 class="dropdown-header">Manage Booking</h6>

                                                        <!-- Edit action -->
                                                        <a href="{{ route('admin.bookings.edit', $booking->id) }}"
                                                            class="dropdown-item">
                                                            Edit
                                                        </a>

                                                        <!-- Delete action -->
                                                        <form action="{{ route('admin.bookings.destroy', $booking->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Are you sure you want to delete this booking?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="dropdown-item text-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                </div> --}}


                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">No bookings found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-4">
                            {{ $bookings->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection