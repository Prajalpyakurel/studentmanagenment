<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    // Display the list of services
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    // Show the form for creating a new service
    public function create()
    {
        return view('admin.services.create');
    }

    // Store a new service in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'packages_description' => 'required|string',
            'services_description' => 'required|string',
        ]);

        // Handle the file upload
        $path = $request->file('photo')->store('uploads/services', 'public');

        Service::create([
            'title' => $validatedData['title'],
            'photo' => $path,
            'packages_description' => $validatedData['packages_description'],
            'services_description' => $validatedData['services_description'],
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Service added successfully.');
    }

    // Show the form for editing an existing service
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    // Update an existing service
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'packages_description' => 'required|string',
            'services_description' => 'required|string',
        ]);

        // Handle the file upload if a new photo is provided
        if ($request->hasFile('photo')) {
            // Delete the old photo
            Storage::delete('public/' . $service->photo);

            // Upload the new photo
            $path = $request->file('photo')->store('uploads/services', 'public');
            $service->photo = $path;
        }

        $service->title = $validatedData['title'];
        $service->packages_description = $validatedData['packages_description'];
        $service->services_description = $validatedData['services_description'];
        $service->save();

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    // Delete a service
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        Storage::delete('public/' . $service->photo);
        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}
