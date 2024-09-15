<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    // Display all testimonials
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    // Show the form for creating a new testimonial
    public function create()
    {
        return view('admin.testimonials.create');
    }

    // Store a newly created testimonial
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'description' => 'required|string',
            'client_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $testimonial = new Testimonial();
        $testimonial->client_name = $request->client_name;
        $testimonial->description = $request->description;

        // Handle photo upload
        if ($request->hasFile('client_photo')) {
            $testimonial->client_photo = $request->file('client_photo')->store('uploads/testimonials', 'public');
        }

        $testimonial->save();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial created successfully!');
    }

    // Show the form for editing a testimonial
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    // Update the testimonial
    public function update(Request $request, $id)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'description' => 'required|string',
            'client_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->client_name = $request->client_name;
        $testimonial->description = $request->description;

        // Handle photo upload
        if ($request->hasFile('client_photo')) {
            // Delete old photo if exists
            if ($testimonial->client_photo) {
                Storage::disk('public')->delete($testimonial->client_photo);
            }

            $testimonial->client_photo = $request->file('client_photo')->store('uploads/testimonials', 'public');
        }

        $testimonial->save();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated successfully!');
    }

    // Delete the testimonial
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        // Delete photo if exists
        if ($testimonial->client_photo) {
            Storage::disk('public')->delete($testimonial->client_photo);
        }

        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted successfully!');
    }
}
