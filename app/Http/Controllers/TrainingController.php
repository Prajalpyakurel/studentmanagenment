<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Models\TrainingCategory; // Import TrainingCategory
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrainingController extends Controller
{
    public function index()
    {
        // Retrieve all trainings with their categories
        $trainings = Training::with('category')->get();

        return view('admin.trainings.index', compact('trainings'));
    }

    public function create()
    {
        // Fetch all categories to show in the dropdown
        $categories = TrainingCategory::all();

        return view('admin.trainings.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'training_name' => 'required|string|max:255',
            'training_duration' => 'required|string|max:100',
            'training_description' => 'required',
            'training_category_id' => 'required|exists:training_categories,id', // Validate category
            'training_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'syllabus_pdf' => 'mimes:pdf|max:10000',
        ]);

        // dd($validatedData); // Use this to debug validated data

        // Create a new training instance
        $training = new Training();
        $training->training_name = $validatedData['training_name'];
        $training->training_duration = $validatedData['training_duration'];
        $training->training_description = $validatedData['training_description'];
        $training->training_category_id = $validatedData['training_category_id']; // Assign category

        // Handle image upload
        if ($request->hasFile('training_photo')) {
            $imagePath = $request->file('training_photo')->store('trainings/photos', 'public');
            $training->training_photo = $imagePath;
        }

        // Handle PDF upload
        if ($request->hasFile('syllabus_pdf')) {
            $pdfPath = $request->file('syllabus_pdf')->store('trainings/syllabus', 'public');
            $training->syllabus_pdf = $pdfPath;
        }

        // Save the training
        if ($training->save()) {
            return redirect()->route('admin.trainings.index')->with('success', 'Training created successfully.');
        } else {
            return back()->with('error', 'Failed to save training.');
        }
    }

    public function edit(Training $training)
    {
        // Fetch all categories for the dropdown
        $categories = TrainingCategory::all();

        return view('admin.trainings.edit', compact('training', 'categories'));
    }

    public function update(Request $request, Training $training)
    {
        $validatedData = $request->validate([
            'training_name' => 'required|string|max:255',
            'training_duration' => 'required|string|max:100',
            'training_description' => 'required',
            'training_category_id' => 'required|exists:training_categories,id', // Validate category
            'training_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'syllabus_pdf' => 'mimes:pdf|max:10000',
        ]);

        $training->training_name = $validatedData['training_name'];
        $training->training_duration = $validatedData['training_duration'];
        $training->training_description = $validatedData['training_description'];
        $training->training_category_id = $validatedData['training_category_id']; // Assign updated category

        // Handle image upload
        if ($request->hasFile('training_photo')) {
            // Delete old image if exists
            if ($training->training_photo) {
                Storage::disk('public')->delete($training->training_photo);
            }
            $imagePath = $request->file('training_photo')->store('trainings/photos', 'public');
            $training->training_photo = $imagePath;
        }

        // Handle PDF upload
        if ($request->hasFile('syllabus_pdf')) {
            // Delete old PDF if exists
            if ($training->syllabus_pdf) {
                Storage::disk('public')->delete($training->syllabus_pdf);
            }
            $pdfPath = $request->file('syllabus_pdf')->store('trainings/syllabus', 'public');
            $training->syllabus_pdf = $pdfPath;
        }

        $training->save();

        return redirect()->route('admin.trainings.index')->with('success', 'Training updated successfully.');
    }

    public function destroy(Training $training)
    {
        // Delete image and PDF
        if ($training->training_photo) {
            Storage::disk('public')->delete($training->training_photo);
        }

        if ($training->syllabus_pdf) {
            Storage::disk('public')->delete($training->syllabus_pdf);
        }

        $training->delete();

        return redirect()->route('admin.trainings.index')->with('success', 'Training deleted successfully.');
    }
}
