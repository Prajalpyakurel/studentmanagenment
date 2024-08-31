<?php

namespace App\Http\Controllers;

use App\Models\CashFlow;
use Illuminate\Http\Request;

class CashFlowController extends Controller
{
    // Index method: Display all cash flow records with summaries
    public function index()
    {
        // Fetch all cash flows with pagination
        $cashFlows = CashFlow::orderBy('date', 'desc')->paginate(10);

        // Calculate totals for inward and outward cash and bank transactions
        $totalInwardCash = CashFlow::where('source', 'cash')->where('type', 'inward')->sum('amount');
        $totalOutwardCash = CashFlow::where('source', 'cash')->where('type', 'outward')->sum('amount');

        $totalInwardBank = CashFlow::where('source', 'bank')->where('type', 'inward')->sum('amount');
        $totalOutwardBank = CashFlow::where('source', 'bank')->where('type', 'outward')->sum('amount');

        // Get the latest balance for Cash and Bank
        $closingBalanceCash = CashFlow::where('source', 'cash')->orderBy('date', 'desc')->first();
        $closingBalanceCash = $closingBalanceCash ? $closingBalanceCash->balance : 0;

        $closingBalanceBank = CashFlow::where('source', 'bank')->orderBy('date', 'desc')->first();
        $closingBalanceBank = $closingBalanceBank ? $closingBalanceBank->balance : 0;

        // Pass data to the view
        return view('admin.cashflows.index', compact(
            'cashFlows',
            'totalInwardCash',
            'totalOutwardCash',
            'totalInwardBank',
            'totalOutwardBank',
            'closingBalanceCash',
            'closingBalanceBank'
        ));
    }

    // Create method: Show form to create a new cash flow record
    public function create()
    {
        return view('admin.cashflows.create');
    }

    // Store method: Handle form submission to create a new cash flow record
    public function store(Request $request)
    {
        // Validate the form input
        $request->validate([
            'type' => 'required|in:inward,outward',
            'source' => 'required|in:cash,bank',
            'amount' => 'required|numeric|min:0',
            'category' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
            'date' => 'required|date',
        ]);

        // Depending on the type, create an inward or outward transaction
        if ($request->type === 'inward') {
            CashFlow::createInward(
                $request->source,
                $request->amount,
                $request->category,
                $request->description,
                $request->date
            );
        } else {
            CashFlow::createOutward(
                $request->source,
                $request->amount,
                $request->category,
                $request->description,
                $request->date
            );
        }

        // Redirect to the index page with a success message
        return redirect()->route('cashflows.index')->with('success', 'Transaction recorded successfully.');
    }

    // Edit method: Show form to edit an existing cash flow record
    public function edit($id)
    {
        $cashFlow = CashFlow::findOrFail($id);
        return view('admin.cashflows.edit', compact('cashFlow'));
    }

    // Update method: Handle form submission to update an existing cash flow record
    public function update(Request $request, $id)
    {
        // Validate the form input
        $request->validate([
            'type' => 'required|in:inward,outward',
            'source' => 'required|in:cash,bank',
            'amount' => 'required|numeric|min:0',
            'category' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
            'date' => 'required|date',
        ]);

        $cashFlow = CashFlow::findOrFail($id);

        // Adjust the balance calculation for update
        if ($request->type === 'inward') {
            $cashFlow->updateInward(
                $request->source,
                $request->amount,
                $request->category,
                $request->description,
                $request->date
            );
        } else {
            $cashFlow->updateOutward(
                $request->source,
                $request->amount,
                $request->category,
                $request->description,
                $request->date
            );
        }

        // Redirect to the index page with a success message
        return redirect()->route('admin.cashflows.index')->with('success', 'Transaction updated successfully.');
    }

    // Destroy method: Handle request to delete a cash flow record
    public function destroy($id)
    {
        $cashFlow = CashFlow::findOrFail($id);

        // Delete the cash flow record
        $cashFlow->delete();

        // Redirect to the index page with a success message
        return redirect()->route('admin.cashflows.index')->with('success', 'Transaction deleted successfully.');
    }
}
