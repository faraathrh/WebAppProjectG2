<?php

namespace App\Http\Controllers;

use App\Models\LoyaltyCustomer;
use App\Models\LoyaltyPoints;
use App\Models\LoyaltyTransaction;
use Illuminate\Http\Request;

class LoyaltyController extends Controller
{
    public function index()
{
    $customers = LoyaltyCustomer::with('points', 'transactions')
        ->orderBy('created_at', 'desc')
        ->paginate(10);

    return view('index', compact('customers')); // Changed from 'index'
}

public function create()
{
    return view('create'); // Changed from 'create'
}

public function show($id)
{
    $customer = LoyaltyCustomer::with('points', 'transactions')->findOrFail($id);
    return view('show', compact('customer')); // Changed from 'show'
}

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:loyalty_customers,email',
            'phone' => 'required|string|max:20',
            'birth_date' => 'nullable|date',
        ]);

        $customer = LoyaltyCustomer::create($validated);
        $customer->points()->create(['points' => 0]);

        return redirect()->route('index')->with('success', 'Customer registered successfully!');
    }

    public function addTransaction(Request $request, $customerId)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        $customer = LoyaltyCustomer::with('points')->findOrFail($customerId);

        // Calculate points (example: 1 point for every $10 spent)
        $pointsEarned = floor($validated['amount'] / 10);

        // Create transaction
        $transaction = new LoyaltyTransaction([
            'amount' => $validated['amount'],
            'points_earned' => $pointsEarned,
            'description' => $validated['description'],
        ]);

        $customer->transactions()->save($transaction);

        // Update points
        $customer->points->points += $pointsEarned;
        $customer->points->save();

        return redirect()->back()->with('success', 'Transaction added and points updated!');
    }
}

