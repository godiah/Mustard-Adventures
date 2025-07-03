<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $trips = \App\Models\Trip::active()->upcoming()->take(5)->get();
        $reviews = \App\Models\Review::latest()->take(5)->get();
        return view('admin.dashboard', compact('trips', 'reviews'));
    }
}
