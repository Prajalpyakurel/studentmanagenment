<?php

namespace App\Http\Controllers\frontend;
use App\Models\Course;
use App\Http\Controllers\Controller;
use App\Models\CourseBooking;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class FrontendHomeController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('website.pages.home', compact('courses'));
    }

    public function courses()
    {
        $courses = Course::all();
        return view('website.pages.coursedetail', compact('courses'));
    }

    public function detail($id)
    {
        // Ensure the course is found, if not it will throw a 404 error
        $course = Course::findOrFail($id);

        return view('website.pages.detail', compact('course'));
    }

    public function CourseBooking(Request $request, Course $course)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'notes' => 'nullable|string',
        ]);

        // Check if there are available seats
        if ($course->availableSeat <= 0) {
            return redirect()->back()->with('error', 'Sorry, there are no available seats for this course.');
        }

        // Create the booking
        $booking = new CourseBooking([
            'course_id' => $course->id,
            'user_id' => Auth::id() ?? null,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'notes' => $validated['notes'] ?? null,
            'status' => 'pending'
        ]);

        $booking->save();

        // Decrease available seats
        $course->availableSeat -= 1;
        $course->save();

        // Redirect with success message
        return redirect()->back()->with('success', 'Your booking has been submitted successfully! We will contact you shortly.');

    }

}
