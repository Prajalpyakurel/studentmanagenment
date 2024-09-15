<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{

    public function index()
    {
        // Fetch the first logo entry
        $logo = Logo::first();

        return view('admin.logo.index', compact('logo'));
    }
    // Show the edit form
    public function edit()
    {
        $logo = Logo::first(); // Assuming there is only one logo entry
        return view('admin.logo.edit', compact('logo'));
    }

    // Update the logo and company name
    public function update(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'logo_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image type and size
        ]);

        // Fetch the first (and only) logo entry
        $logo = Logo::firstOrCreate(); // Creates one if it doesn't exist

        // Update company name
        $logo->company_name = $request->company_name;

        // Handle image upload if there's a file
        if ($request->hasFile('logo_image')) {
            // Delete old image if exists
            if ($logo->logo_image) {
                Storage::disk('public')->delete($logo->logo_image);
            }

            // Store the new logo image
            $logo->logo_image = $request->file('logo_image')->store('uploads/logos', 'public');
        }

        $logo->save();

        return redirect()->back()->with('success', 'Logo and company name updated successfully!');
    }
}
