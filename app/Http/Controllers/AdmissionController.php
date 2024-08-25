<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Course;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function index(Request $request)
{
    // Capture the search query
    $search = $request->input('search');

    // Query the admissions with search criteria
    $admissions = Admission::with('course')
        ->when($search, function ($query, $search) {
            return $query->where('name', 'LIKE', "%{$search}%")
                         ->orWhere('phone', 'LIKE', "%{$search}%")
                         ->orWhereHas('course', function ($q) use ($search) {
                             $q->where('title', 'LIKE', "%{$search}%");
                         });
        })
        ->get();

    // Calculate the total fees
    $total_fee = $admissions->sum('total_fee');
    $total_remaining_fee = $admissions->sum('remaining_fee');
    $total_paid_fee = $total_fee - $total_remaining_fee;

    // Pass the search query and totals to the view
    return view('admin.admissions.index', compact('admissions', 'total_fee', 'total_remaining_fee', 'total_paid_fee', 'search'));
}

    public function create()
    {
        $courses = Course::all();
        return view('admin.admissions.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required|unique:admissions',
            'name' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'total_fee' => 'required|numeric',
            'remaining_fee' => 'required|numeric',
        ]);

        Admission::create($request->all());

        return redirect()->route('admin.admissions.index')->with('success', 'Admission created successfully.');
    }

    public function show(Admission $admission)
    {
        return view('admin.admissions.show', compact('admission'));
    }

    public function edit(Admission $admission)
    {
        $courses = Course::all();
        return view('admin.admissions.edit', compact('admission', 'courses'));
    }

    public function update(Request $request, Admission $admission)
    {
        $request->validate([
            'phone' => 'required|unique:admissions,phone,' . $admission->id,
            'name' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'total_fee' => 'required|numeric',
            'remaining_fee' => 'required|numeric',
        ]);

        $admission->update($request->all());

        return redirect()->route('admin.admissions.index')->with('success', 'Admission updated successfully.');
    }

    public function destroy(Admission $admission)
    {
        $admission->delete();

        return redirect()->route('admin.admissions.index')->with('success', 'Admission deleted successfully.');
    }
    public function exportCSV()
    {
        $filename = 'admissions.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
        ];

        return response()->stream(function () {
            $handle = fopen('php://output', 'w');

            // Add CSV headers
            fputcsv($handle, ['Name', 'Phone', 'Course', 'Total Fee', 'Remaining Fee', 'Created At', 'Updated At']);

            // Fetch and process data in chunks
            Admission::chunk(25, function ($admissions) use ($handle) {
                foreach ($admissions as $admission) {
                    $data = [
                        $admission->name,
                        $admission->phone,
                        $admission->course->name,
                        $admission->total_fee,
                        $admission->remaining_fee,
                        $admission->created_at,
                        $admission->updated_at,
                    ];

                    // Write data to a CSV file
                    fputcsv($handle, $data);
                }
            });

            // Close CSV file handle
            fclose($handle);
        }, 200, $headers);
    }

}

