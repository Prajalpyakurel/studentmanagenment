<?php

namespace App\Http\Controllers;

use App\Models\TrainingCategory;
use Illuminate\Http\Request;

class TrainingCategoryController extends Controller
{
    // 1. Index (List all training categories)
    public function index()
    {
        // Retrieve all training categories from the database
        $trainingCategories = TrainingCategory::all();

        // Return the view with the list of categories
        return view('admin.trainingcategories.index', compact('trainingCategories'));
    }

    // 2. Create (Show form to create a new training category)
    public function create()
    {
        // Return the create view
        return view('admin.trainingcategories.create');
    }

    // 3. Store (Save a new training category)
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|max:255',
            // 'description' => 'nullable|max:500',
        ]);

        // Create the new training category in the database
        TrainingCategory::create($request->all());

        // Redirect to the index with a success message
        return redirect()->route('admin.trainingcategories.index')
                         ->with('success', 'Training Category created successfully.');
    }

    // 4. Edit (Show form to edit an existing training category)
    public function edit($id)
    {
        // Find the training category by its ID
        $trainingCategory = TrainingCategory::findOrFail($id);

        // Return the edit view with the category data
        return view('admin.trainingcategories.edit', compact('trainingCategory'));
    }

    // 5. Update (Save updates to an existing training category)
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable|max:500',
        ]);

        // Find the existing training category by its ID
        $trainingCategory = TrainingCategory::findOrFail($id);

        // Update the training category with new data
        $trainingCategory->update($request->all());

        // Redirect to the index with a success message
        return redirect()->route('admin.trainingcategories.index')
                         ->with('success', 'Training Category updated successfully.');
    }

    // 6. Destroy (Delete an existing training category)
    public function destroy($id)
    {
        // Find the training category by its ID
        $trainingCategory = TrainingCategory::findOrFail($id);

        // Delete the training category
        $trainingCategory->delete();

        // Redirect to the index with a success message
        return redirect()->route('admin.trainingcategories.index')
                         ->with('success', 'Training Category deleted successfully.');
    }
}

