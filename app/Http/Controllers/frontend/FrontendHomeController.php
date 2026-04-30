<?php

namespace App\Http\Controllers\frontend;

use App\Models\Course;
use App\Http\Controllers\Controller;
use App\Models\CourseBooking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FrontendHomeController extends Controller
{
    /**
     * Home page — passes sorted courses for client-side binary search.
     */
    public function index()
    {
        $courses = Course::all();

        // Sorted by title (required for binary search algorithm on the frontend)
        $coursesForSearch = Course::select('id', 'title')
            ->orderBy('title')
            ->get()
            ->toArray();

        return view('website.pages.home', compact('courses', 'coursesForSearch'));
    }

    /**
     * Courses listing page.
     */
    public function courses()
    {
        $courses = Course::all();

        $coursesForSearch = Course::select('id', 'title')
            ->orderBy('title')
            ->get()
            ->toArray();

        return view('website.pages.coursedetail', compact('courses', 'coursesForSearch'));
    }

    /**
     * Course detail page — with recommendations.
     */
    public function detail($id)
    {
        $course = Course::findOrFail($id);

        // Get recommended courses based on this course's title, category & description
        $recommended = Course::recommend($course, 4);

        $coursesForSearch = Course::select('id', 'title')
            ->orderBy('title')
            ->get()
            ->toArray();

        return view('website.pages.detail', compact('course', 'coursesForSearch', 'recommended'));
    }

   
    public function search(Request $request)
    {
        $query = trim($request->input('q', ''));

        if (empty($query)) {
            return redirect()->route('home');
        }

       
        $courses = Course::where('title', 'LIKE', '%' . $query . '%')
            ->orWhere('description', 'LIKE', '%' . $query . '%')
            ->orderByRaw("
                CASE
                    WHEN title LIKE ? THEN 1
                    WHEN title LIKE ? THEN 2
                    ELSE 3
                END
            ", [$query . '%', '%' . $query . '%'])
            ->get();

        // Recommended courses scored against the search query keywords
        $recommended = Course::recommendByQuery($query, 4);

        // Also pass sorted list for the header live-search
        $coursesForSearch = Course::select('id', 'title')
            ->orderBy('title')
            ->get()
            ->toArray();

        return view('website.pages.search', compact('courses', 'query', 'coursesForSearch', 'recommended'));
    }

    /**
     * Course booking.
     */
    public function CourseBooking(Request $request, Course $course)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'notes' => 'nullable|string',
        ]);

        if ($course->availableSeat <= 0) {
            return redirect()->back()->with('error', 'Sorry, there are no available seats for this course.');
        }

        $booking = new CourseBooking([
            'course_id' => $course->id,
            'user_id'   => Auth::id() ?? null,
            'name'      => $validated['name'],
            'email'     => $validated['email'],
            'phone'     => $validated['phone'] ?? null,
            'notes'     => $validated['notes'] ?? null,
            'status'    => 'pending',
        ]);

        $booking->save();

        $course->availableSeat -= 1;
        $course->save();

        return redirect()->back()->with('success', 'Your booking has been submitted successfully! We will contact you shortly.');
    }
}