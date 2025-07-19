@extends('layouts.app')

@section('title', 'Dashboard - Mustard Adventures')

@section('content')
    <div class="container mx-auto px-4">
        <!-- Dashboard Header -->
        <div class="bg-gradient-to-r from-primary to-primary-hover p-6 rounded-xl shadow-lg mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-white font-heading text-2xl font-bold">Dashboard</h2>
                    <p class="text-white opacity-80 font-body mt-1">Mustard Adventures</p>
                </div>
            </div>
        </div>

        <!-- Overview Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Adventures Card -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-heading font-semibold text-secondary">Active Adventures</h3>
                        <p class="text-3xl font-bold text-primary mt-2">{{ \App\Models\Adventure::active()->count() }}</p>
                    </div>
                    <svg class="w-10 h-10 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v12a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <a href="{{ route('adventures.index') }}"
                    class="mt-4 inline-block text-sm text-primary hover:text-primary-dark font-medium">
                    View All Adventures
                </a>
            </div>

            <!-- Trips Card -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-heading font-semibold text-secondary">Upcoming Trips</h3>
                        <p class="text-3xl font-bold text-primary mt-2">
                            {{ \App\Models\Trip::active()->upcoming()->count() }}</p>
                    </div>
                    <svg class="w-10 h-10 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <a href="{{ route('trips.index') }}"
                    class="mt-4 inline-block text-sm text-primary hover:text-primary-dark font-medium">
                    View All Trips
                </a>
            </div>

            <!-- Reviews Card -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-heading font-semibold text-secondary">Total Reviews</h3>
                        <p class="text-3xl font-bold text-primary mt-2">{{ \App\Models\Review::count() }}</p>
                    </div>
                    <svg class="w-10 h-10 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.783-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                        </path>
                    </svg>
                </div>
                <a href="{{ route('reviews.index') }}"
                    class="mt-4 inline-block text-sm text-primary hover:text-primary-dark font-medium">
                    View All Reviews
                </a>
            </div>
        </div>

        <!-- Recent Trips Section -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-heading font-semibold text-secondary">Recent Upcoming Trips</h3>
                <a href="{{ route('trips.index') }}" class="text-primary hover:text-primary-dark font-medium">View All</a>
            </div>
            @if ($trips->isEmpty())
                <p class="text-gray-600 font-body">No upcoming trips available.</p>
            @else
                <div class="space-y-4">
                    @foreach ($trips as $trip)
                        <div class="flex items-center border-b border-gray-200 py-4">
                            @if ($trip->image)
                                <img src="{{ Storage::url($trip->image) }}" alt="{{ $trip->name }}"
                                    class="w-16 h-16 rounded-lg object-cover mr-4">
                            @else
                                <div
                                    class="w-16 h-16 rounded-lg bg-gray-200 flex items-center justify-center text-gray-500 mr-4">
                                    No Image</div>
                            @endif
                            <div class="flex-1">
                                <h4 class="text-lg font-body font-semibold text-gray-800">{{ $trip->name }}</h4>
                                <p class="text-sm text-gray-600">{{ $trip->formatted_date }} •
                                    {{ $trip->availability_status }}</p>
                                <p class="text-sm text-gray-600">
                                    Rating: {{ $trip->rating }} / 5.0
                                </p>
                            </div>
                            <a href="{{ route('trips.show', $trip) }}"
                                class="text-primary hover:text-primary-dark">View</a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Recent Reviews Section -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-heading font-semibold text-secondary">Recent Reviews</h3>
                <a href="{{ route('reviews.index') }}" class="text-primary hover:text-primary-dark font-medium">View
                    All</a>
            </div>
            @if ($reviews->isEmpty())
                <p class="text-gray-600 font-body">No reviews available.</p>
            @else
                <div class="space-y-4">
                    @foreach ($reviews as $review)
                        <div class="flex items-center border-b border-gray-200 py-4">
                            @if ($review->profile_image)
                                <img src="{{ $review->profile_image_url }}" alt="{{ $review->name }}"
                                    class="w-12 h-12 rounded-full object-cover mr-4">
                            @else
                                <div
                                    class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 mr-4">
                                    No Image</div>
                            @endif
                            <div class="flex-1">
                                <h4 class="text-lg font-body font-semibold text-gray-800">{{ $review->name }}</h4>
                                <p class="text-sm text-gray-600">{{ $review->adventure_name }} •
                                    {{ $review->review_date->format('F j, Y') }}</p>
                                <p class="text-sm text-gray-600">Rating: {{ $review->rating }} / 5.0</p>
                            </div>
                            <a href="{{ route('reviews.show', $review) }}"
                                class="text-primary hover:text-primary-dark">View</a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
