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
    public function report()
    {
        $today = now()->startOfDay();
        $last7Days = now()->subDays(7)->startOfDay();
        $lastMonth = now()->subMonth()->startOfMonth();
        $previousMonth = now()->subMonthsNoOverflow(2)->startOfMonth();
        $startOfYear = now()->startOfYear();

        // Calculate collections
        $todaysCollection = Admission::where('created_at', '>=', $today)->sum('total_fee') - Admission::where('created_at', '>=', $today)->sum('remaining_fee');
        $last7DaysCollection = Admission::where('created_at', '>=', $last7Days)->sum('total_fee') - Admission::where('created_at', '>=', $last7Days)->sum('remaining_fee');
        $lastMonthCollection = Admission::whereBetween('created_at', [now()->startOfMonth(), now()->endOfMonth()])->sum('total_fee') - Admission::whereBetween('created_at', [now()->startOfMonth(), now()->endOfMonth()])->sum('remaining_fee');
        $previousMonthCollection = Admission::whereBetween('created_at', [$previousMonth, $lastMonth->endOfMonth()])->sum('total_fee') - Admission::whereBetween('created_at', [$previousMonth, $lastMonth->endOfMonth()])->sum('remaining_fee');
        $last12MonthsCollection = Admission::whereBetween('created_at', [$startOfYear, now()->endOfYear()])->sum('total_fee') - Admission::whereBetween('created_at', [$startOfYear, now()->endOfYear()])->sum('remaining_fee');

        // Calculate admissions count
        $todaysAdmissions = Admission::where('created_at', '>=', $today)->count();
        $last7DaysAdmissions = Admission::where('created_at', '>=', $last7Days)->count();
        $lastMonthAdmissions = Admission::whereBetween('created_at', [now()->startOfMonth(), now()->endOfMonth()])->count();
        $previousMonthAdmissions = Admission::whereBetween('created_at', [$previousMonth, $lastMonth->endOfMonth()])->count();
        $last12MonthsAdmissions = Admission::whereBetween('created_at', [$startOfYear, now()->endOfYear()])->count();

        return view('home', compact(
            'todaysCollection',
            'last7DaysCollection',
            'lastMonthCollection',
            'previousMonthCollection',
            'last12MonthsCollection',
            'todaysAdmissions',
            'last7DaysAdmissions',
            'lastMonthAdmissions',
            'previousMonthAdmissions',
            'last12MonthsAdmissions'
        ));
    }


}

