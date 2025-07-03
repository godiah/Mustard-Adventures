<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Adventure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdventuresController extends Controller
{
    /**
     * Display a listing of the adventures.
     */
    public function index()
    {
        $adventures = Adventure::latest()->paginate(10);
        return view('admin.adventures.index', compact('adventures'));
    }

    /**
     * Show the form for creating a new adventure.
     */
    public function create()
    {
        return view('admin.adventures.create');
    }

    /**
     * Store a newly created adventure in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'days' => 'required|string|max:100',
            'people' => 'required|string|max:100',
            'difficulty_level' => 'required|string|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean'
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('adventures', 'public');
            $validated['image'] = $imagePath;
        }

        Adventure::create($validated);

        return redirect()->route('adventures.index')
            ->with('success', 'Adventure created successfully!');
    }

    /**
     * Display the specified adventure.
     */
    public function show(Adventure $adventure)
    {
        return view('admin.adventures.show', compact('adventure'));
    }

    /**
     * Show the form for editing the specified adventure.
     */
    public function edit(Adventure $adventure)
    {
        return view('admin.adventures.edit', compact('adventure'));
    }

    /**
     * Update the specified adventure in storage.
     */
    public function update(Request $request, Adventure $adventure)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'days' => 'required|string|max:100',
            'people' => 'required|string|max:100',
            'difficulty_level' => 'required|string|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif|max:2048',
            'is_active' => 'boolean'
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($adventure->image) {
                Storage::disk('public')->delete($adventure->image);
            }

            $imagePath = $request->file('image')->store('adventures', 'public');
            $validated['image'] = $imagePath;
        }

        $adventure->update($validated);

        return redirect()->route('adventures.index')
            ->with('success', 'Adventure updated successfully!');
    }

    /**
     * Remove the specified adventure from storage.
     */
    public function destroy(Adventure $adventure)
    {
        // Delete associated image
        if ($adventure->image) {
            Storage::disk('public')->delete($adventure->image);
        }

        $adventure->delete();

        return redirect()->route('adventures.index')
            ->with('success', 'Adventure deleted successfully!');
    }
}
