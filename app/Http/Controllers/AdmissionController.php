<?php

namespace App\Http\Controllers;
use App\Models\Receipt;
use App\Models\Admission;
use App\Models\Course;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdmissionController extends Controller
{
    public function index(Request $request)
    {
        // Capture the search query
        $search = $request->input('search');

        // Query the admissions with search criteria, order by latest, and paginate the results
        $admissions = Admission::with('course')
            ->when($search, function ($query, $search) {
                return $query->where('name', 'LIKE', "%{$search}%")
                             ->orWhere('phone', 'LIKE', "%{$search}%")
                             ->orWhereHas('course', function ($q) use ($search) {
                                 $q->where('title', 'LIKE', "%{$search}%");
                             });
            })
            ->orderBy('created_at', 'desc') // Order by latest admissions first
            ->paginate(10); // Paginate results, 10 per page

        // Calculate the total fees
        $total_fee = Admission::when($search, function ($query, $search) {
                        return $query->where('name', 'LIKE', "%{$search}%")
                                     ->orWhere('phone', 'LIKE', "%{$search}%")
                                     ->orWhereHas('course', function ($q) use ($search) {
                                         $q->where('title', 'LIKE', "%{$search}%");
                                     });
                    })->sum('total_fee');

        $total_remaining_fee = Admission::when($search, function ($query, $search) {
                                return $query->where('name', 'LIKE', "%{$search}%")
                                             ->orWhere('phone', 'LIKE', "%{$search}%")
                                             ->orWhereHas('course', function ($q) use ($search) {
                                                 $q->where('title', 'LIKE', "%{$search}%");
                                             });
                            })->sum('remaining_fee');

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
        // dd($request);
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
        $today = Carbon::today();
        $last7Days = now()->subDays(7)->startOfDay();
        $lastMonth = now()->subMonth()->startOfMonth();
        $previousMonth = now()->subMonthsNoOverflow(2)->startOfMonth();
        $startOfYear = now()->startOfYear();

        // Correct today's collection calculation
        $todaysCollection = Receipt::whereDate('payment_date', $today)->sum('amount_received');

        // Calculate collections for the last 7 days, last month, previous month, and last 12 months
        $last7DaysCollection = Receipt::where('payment_date', '>=', $last7Days)->sum('amount_received');
        $lastMonthCollection = Receipt::whereBetween('payment_date', [now()->startOfMonth(), now()->endOfMonth()])->sum('amount_received');
        $previousMonthCollection = Receipt::whereBetween('payment_date', [$previousMonth, $lastMonth->endOfMonth()])->sum('amount_received');
        $last12MonthsCollection = Receipt::whereBetween('payment_date', [$startOfYear, now()->endOfYear()])->sum('amount_received');

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

