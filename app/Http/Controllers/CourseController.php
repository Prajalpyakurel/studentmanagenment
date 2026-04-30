<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class CourseController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('admin.courses.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required|string|max:255',
            'description'   => 'nullable|string',
            'duration'      => 'required|integer',
            'availableSeat' => 'required|integer',
            'totalSeat'     => 'required|integer',
            'price'         => 'nullable|numeric',
            'pdf'           => 'nullable|mimes:pdf|max:2048',
            'image'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048', // ✅ NEW
        ]);

        $pdfPath = null;
        if ($request->hasFile('pdf')) {
            $pdfPath = $request->file('pdf')->store('courses_pdfs', 'public');
        }
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('courses_images', 'public');
        }
        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'Category' => $request->Category,
            'duration' => $request->duration,
            'availableSeat' => $request->availableSeat,
            'totalSeat' => $request->totalSeat,
            'price' => $request->price,
            'pdf_path' => $pdfPath,
            'image_path'    => $imagePath,
        ]);

        return redirect()->route('admin.courses.index')->with('success', 'Course created successfully.');
    }

    // Display the specified resource.
    public function show(Course $course)
    {
        return view('admin.courses.show', compact('course'));
    }

    // Show the form for editing the specified resource.
    public function edit(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title'         => 'required|string|max:255',
            'description'   => 'nullable|string',
            'duration'      => 'required|integer',
            'availableSeat' => 'required|integer',
            'totalSeat'     => 'required|integer',
            'price'         => 'nullable|numeric',
            'pdf'           => 'nullable|mimes:pdf|max:2048',
            'image'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048', // ✅ NEW
        ]);
        $data = $request->except(['pdf', 'image', '_token', '_method']);

        // ✅ Handle PDF update
        if ($request->hasFile('pdf')) {
            if ($course->pdf_path) {
                Storage::disk('public')->delete($course->pdf_path);
            }
            $data['pdf_path'] = $request->file('pdf')->store('courses_pdfs', 'public');
        }

        // ✅ Handle image update
        if ($request->hasFile('image')) {
            if ($course->image_path) {
                Storage::disk('public')->delete($course->image_path);
            }
            $data['image_path'] = $request->file('image')->store('courses_images', 'public');
        }

        $course->update($data);

        return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully.');
    }

    // Remove the specified resource from storage.

    public function destroy(Course $course)
    {
        // ✅ Clean up files on delete
        if ($course->image_path) {
            Storage::disk('public')->delete($course->image_path);
        }
        if ($course->pdf_path) {
            Storage::disk('public')->delete($course->pdf_path);
        }

        $course->delete();

        return redirect()->route('admin.courses.index')->with('success', 'Course deleted successfully.');
    }
}
