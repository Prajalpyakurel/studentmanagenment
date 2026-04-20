<?php

namespace App\Http\Controllers;

use App\Models\CourseBooking;
use App\Models\Course;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseBookingController extends Controller
{

    public function index()
    {
        $bookings = CourseBooking::with('course')->latest()->paginate(10);
        return view('admin.booking.index', compact('bookings'));
    }


    public function updateStatus(Request $request, CourseBooking $booking)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,confirmed,cancelled',
        ]);

        $oldStatus = $booking->status;
        $booking->status = $validated['status'];
        $booking->save();


        if ($oldStatus == 'confirmed' && $validated['status'] == 'cancelled') {
            $course = $booking->course;
            $course->availableSeat += 1;
            $course->save();
        }


        if ($oldStatus == 'pending' && $validated['status'] == 'confirmed') {

        }

        return redirect()->back()->with('success', 'Booking status updated successfully!');
    }
    public function edit(CourseBooking $booking)
    {
        $courses = Course::all(); // Get all courses for the dropdown
        return view('admin.booking.edit', compact('booking', 'courses'));
    }

    public function update(Request $request, CourseBooking $booking)
    {
        // Validate the request
        $validated = $request->validate([
            'course_id' => 'required|exists:courses,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'notes' => 'nullable|string',
            'status' => 'required|in:pending,confirmed,cancelled',
        ]);

        // Check if the course is being changed
        $oldCourseId = $booking->course_id;
        $newCourseId = $validated['course_id'];
        $oldStatus = $booking->status;
        $newStatus = $validated['status'];

        // Update booking details
        $booking->update($validated);

        // Handle seat management if course or status is changed
        if ($oldCourseId != $newCourseId || $oldStatus != $newStatus) {
            // Restore seat to old course if was confirmed
            if ($oldStatus == 'confirmed') {
                $oldCourse = Course::find($oldCourseId);
                if ($oldCourse) {
                    $oldCourse->availableSeat += 1;
                    $oldCourse->save();
                }
            }

            // Take seat from new course if now confirmed
            if ($newStatus == 'confirmed') {
                $newCourse = Course::find($newCourseId);
                if ($newCourse && $newCourse->availableSeat > 0) {
                    $newCourse->availableSeat -= 1;
                    $newCourse->save();
                } else if ($newCourse && $newCourse->availableSeat <= 0) {
                    return redirect()->back()->with('error', 'Cannot confirm booking - no available seats in selected course.');
                }
            }
        }

        return redirect()->route('admin.bookings.index')->with('success', 'Booking updated successfully!');
    }

    public function destroy(CourseBooking $booking)
    {
        // If the booking was confirmed, restore the seat
        if ($booking->status == 'confirmed') {
            $course = $booking->course;
            $course->availableSeat += 1;
            $course->save();
        }

        // Delete the booking
        $booking->delete();

        return redirect()->route('admin.bookings.index')->with('success', 'Booking deleted successfully!');
    }
}
