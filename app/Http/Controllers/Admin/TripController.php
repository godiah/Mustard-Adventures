<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TripController extends Controller
{
    /**
     * Display a listing of trips.
     */
    public function index()
    {
        $trips = Trip::latest()->paginate(10);
        return view('admin.trips.index', compact('trips'));
    }

    /**
     * Show the form for creating a new trip.
     */
    public function create()
    {
        return view('admin.trips.create');
    }

    /**
     * Store a newly created trip in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date|after_or_equal:today',
            'days' => 'required|integer|min:1|max:30',
            'spots_left' => 'required|integer|min:0|max:100',
            'rating' => 'nullable|numeric|min:0|max:5',
            'price' => 'required|numeric|min:0',
            'difficulty_level' => 'required|string|max:100',
            'tags' => 'nullable|array',
            'tags.*' => 'string|max:50',
            'is_active' => 'boolean'
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('trips', 'public');
        }

        Trip::create($validated);

        return redirect()->route('trips.index')
            ->with('success', 'Trip created successfully!');
    }

    /**
     * Display the specified trip.
     */
    public function show(Trip $trip)
    {
        return view('admin.trips.show', compact('trip'));
    }

    /**
     * Show the form for editing the specified trip.
     */
    public function edit(Trip $trip)
    {
        return view('admin.trips.edit', compact('trip'));
    }

    /**
     * Update the specified trip in storage.
     */
    public function update(Request $request, Trip $trip)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'image' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'sometimes|date|after_or_equal:today',
            'days' => 'sometimes|integer|min:1|max:30',
            'spots_left' => 'sometimes|integer|min:0|max:100',
            'rating' => 'nullable|numeric|min:0|max:5',
            'price' => 'sometimes|numeric|min:0',
            'difficulty_level' => 'sometimes|string|max:100',
            'tags' => 'nullable|array',
            'tags.*' => 'string|max:50',
            'is_active' => 'boolean'
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($trip->image) {
                Storage::disk('public')->delete($trip->image);
            }
            $validated['image'] = $request->file('image')->store('trips', 'public');
        }

        $trip->update($validated);

        return redirect()->route('trips.index')
            ->with('success', 'Trip updated successfully!');
    }

    /**
     * Remove the specified trip from storage.
     */
    public function destroy(Trip $trip)
    {
        // Delete associated image
        if ($trip->image) {
            Storage::disk('public')->delete($trip->image);
        }

        $trip->delete();

        return redirect()->route('trips.index')
            ->with('success', 'Trip deleted successfully!');
    }
}
