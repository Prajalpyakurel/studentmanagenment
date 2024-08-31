<?php

namespace App\Http\Controllers;

use App\Models\CashFlow;
use Illuminate\Http\Request;

class CashFlowController extends Controller
{
    // Display a listing of the cash flows
    public function index()
    {
        $cashFlows = CashFlow::paginate(10); // Fetch paginated cash flow records
        return view('admin.cashflows.index', compact('cashFlows'));
    }


    // Show the form for creating a new cash flow
    public function create()
    {
        return view('admin.cashflows.create');
    }

    // Store a newly created cash flow in storage
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'type' => 'required|string',
            'source' => 'required|string',
            // Add any other validation rules as needed
        ]);

        CashFlow::create($request->all());

        return redirect()->route('admin.cashflows.index')->with('success', 'Cash Flow created successfully.');
    }

    // Show the form for editing the specified cash flow
    public function edit(CashFlow $cashFlow)
    {
        return view('admin.cashflows.edit', compact('cashFlow'));
    }

    // Update the specified cash flow in storage
    public function update(Request $request, CashFlow $cashFlow)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'type' => 'required|string',
            'source' => 'required|string',
            // Add any other validation rules as needed
        ]);

        $cashFlow->update($request->all());

        return redirect()->route('admin.cashflows.index')->with('success', 'Cash Flow updated successfully.');
    }

    // Remove the specified cash flow from storage
    public function destroy(CashFlow $cashFlow)
    {
        $cashFlow->delete();

        return redirect()->route('admin.cashflows.index')->with('success', 'Cash Flow deleted successfully.');
    }
}
