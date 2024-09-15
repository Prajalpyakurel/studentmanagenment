<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    // Display the list of teams
    public function index()
    {
        $teams = Team::all();
        return view('admin.teams.index', compact('teams'));
    }

    // Show the form for creating a new team member
    public function create()
    {
        return view('admin.teams.create');
    }

    // Store a new team member in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
        ]);

        Team::create($validatedData);

        return redirect()->route('admin.teams.index')->with('success', 'Team member added successfully.');
    }

    // Show the form for editing a team member
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.teams.edit', compact('team'));
    }

    // Update a team member in the database
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
        ]);

        $team = Team::findOrFail($id);
        $team->update($validatedData);

        return redirect()->route('admin.teams.index')->with('success', 'Team member updated successfully.');
    }

    // Delete a team member
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return redirect()->route('admin.teams.index')->with('success', 'Team member deleted successfully.');
    }
}
