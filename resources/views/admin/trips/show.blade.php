@extends('layouts.app')

@section('title', $trip->name . ' - Mustard Adventures')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-5xl mx-auto">
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center">
                    <a href="{{ route('trips.index') }}" class="text-secondary hover:text-secondary-light mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </a>
                    <h1 class="text-3xl font-heading font-bold text-secondary">{{ $trip->name }}</h1>
                </div>
                <div class="flex space-x-3">
                    <a href="{{ route('trips.edit', $trip) }}" class="btn-secondary rounded-lg text-sm">
                        <svg class="w-4 h-4 mr-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                            </path>
                        </svg>
                        Edit Trip
                    </a>
                    <form action="{{ route('trips.destroy', $trip) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-6 py-3 text-sm bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors"
                            onclick="return confirm('Are you sure you want to delete this trip?')">
                            <svg class="w-4 h-4 mr-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                </path>
                            </svg>
                            Delete
                        </button>
                    </form>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <!-- Hero Image -->
                @if ($trip->image)
                    <div class="relative h-64 md:h-96">
                        <img src="{{ asset('storage/' . $trip->image) }}" alt="{{ $trip->name }}"
                            class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4">
                            @if ($trip->tags)
                                <div class="flex flex-wrap gap-2">
                                    @foreach ($trip->tags as $tag)
                                        <span class="px-3 py-1 bg-primary text-white rounded-full text-sm font-medium">
                                            {{ $tag }}
                                        </span>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="absolute bottom-4 right-4">
                            <span
                                class="px-3 py-1 rounded-full text-sm font-medium {{ $trip->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $trip->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </div>
                    </div>
                @endif

                <div class="p-8">
                    <!-- Trip Overview -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <svg class="w-8 h-8 mx-auto mb-2 text-secondary" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <div class="text-sm text-gray-600">Date</div>
                            <div class="font-semibold text-secondary">{{ $trip->formatted_date }}</div>
                        </div>

                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <svg class="w-8 h-8 mx-auto mb-2 text-secondary" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-sm text-gray-600">Duration</div>
                            <div class="font-semibold text-secondary">{{ $trip->days }}
                                {{ Str::plural('day', $trip->days) }}</div>
                        </div>

                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <svg class="w-8 h-8 mx-auto mb-2 text-secondary" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                            <div class="text-sm text-gray-600">Availability</div>
                            <div class="font-semibold text-secondary">{{ $trip->spots_left }} spots left</div>
                            <div class="text-xs text-gray-500">{{ $trip->availability_status }}</div>
                        </div>

                        <div class="text-center p-4 bg-gray-50 rounded-lg">
                            <svg class="w-8 h-8 mx-auto mb-2 text-secondary" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                </path>
                            </svg>
                            <div class="text-sm text-gray-600">Rating</div>
                            @if ($trip->rating > 0)
                                <div class="font-semibold text-secondary">{{ $trip->rating }}/5</div>
                            @else
                                <div class="font-semibold text-gray-400">Not rated</div>
                            @endif
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mb-8">
                        <h2 class="text-2xl font-heading font-bold text-secondary mb-4">About This Trip</h2>
                        <p class="text-gray-700 leading-relaxed">{{ $trip->description }}</p>
                    </div>

                    <!-- Trip Details -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-lg font-semibold text-secondary mb-3">Trip Details</h3>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Price:</span>
                                    <span class="px-2 py-1 rounded-full  font-medium">
                                        Ksh{{ $trip->price }}
                                    </span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Difficulty Level:</span>
                                    <span
                                        class="px-2 py-1 rounded-full text-xs font-medium {{ $trip->getDifficultyBadgeClass() }}">
                                        {{ ucfirst($trip->difficulty_level) }}
                                    </span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Status:</span>
                                    <span
                                        class="px-2 py-1 rounded-full text-xs font-medium {{ $trip->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                        {{ $trip->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Created:</span>
                                    <span class="font-medium">{{ $trip->created_at->format('M j, Y') }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Last Updated:</span>
                                    <span class="font-medium">{{ $trip->updated_at->format('M j, Y') }}</span>
                                </div>
                            </div>
                        </div>

                        @if ($trip->tags)
                            <div>
                                <h3 class="text-lg font-semibold text-secondary mb-3">Tags</h3>
                                <div class="flex flex-wrap gap-2">
                                    @foreach ($trip->tags as $tag)
                                        <span class="px-3 py-1 bg-primary text-white rounded-full text-sm font-medium">
                                            {{ $tag }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Additional Actions -->
                    <div class="mt-8 pt-6 border-t flex justify-between items-center">
                        <div class="text-sm text-gray-600">
                            Trip ID: #{{ $trip->id }}
                        </div>
                        <div class="flex space-x-3">
                            <a href="{{ route('trips.edit', $trip) }}" class="btn-secondary rounded-lg">
                                Edit Trip
                            </a>
                            <a href="{{ route('trips.index') }}" class="btn-primary rounded-lg">
                                Back to Trips
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
