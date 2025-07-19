@extends('layouts.app')

@section('title', 'View Review - Mustard Adventures')

@section('content')
    <div class="container mx-auto px-4 max-w-3xl font-body">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center mb-4">
                <a href="{{ route('reviews.index') }}" class="text-secondary hover:text-secondary-light mr-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </a>
                <h1 class="text-3xl font-heading font-bold text-secondary">Review Details</h1>
            </div>
            <p class="text-gray-600">View customer review and testimonial details</p>
        </div>

        <!-- Review Content -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <!-- Profile Image -->
            @if ($review->profile_image)
                <div class="mb-6 flex justify-center">
                    <img src="{{ $review->profile_image_url }}" alt="{{ $review->name }}"
                        class="w-44 h-44 rounded-full object-cover border-2 border-primary">
                </div>
            @else
                <div class="mb-6 flex justify-center">
                    <div class="w-44 h-44 rounded-full bg-gray-200 flex items-center justify-center text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-40 h-40">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </div>
                </div>
            @endif

            <!-- Name -->
            <div class="mb-6">
                <h2 class="text-sm font-medium text-secondary mb-2">Name</h2>
                <p class="text-lg font-body text-gray-800">{{ $review->name }}</p>
            </div>

            <!-- Position -->
            <div class="mb-6">
                <h2 class="text-sm font-medium text-secondary mb-2">Position/Role/Title</h2>
                <p class="text-lg font-body text-gray-800">{{ $review->position }}</p>
            </div>

            <!-- Rating -->
            <div class="mb-6">
                <h2 class="text-sm font-medium text-secondary mb-2">Rating</h2>
                <p class="text-lg font-body text-gray-800">
                    {{ $review->rating }} / 5.0
                    <span class="text-sm text-gray-600">
                        @switch($review->rating)
                            @case(5.0)
                                (Excellent)
                            @break

                            @case(4.5)
                                (Very Good)
                            @break

                            @case(4.0)
                                (Good)
                            @break

                            @case(3.5)
                                (Average)
                            @break

                            @case(3.0)
                                (Fair)
                            @break

                            @case(2.5)
                                (Below Average)
                            @break

                            @case(2.0)
                                (Poor)
                            @break

                            @case(1.5)
                                (Very Poor)
                            @break

                            @case(1.0)
                                (Terrible)
                            @break
                        @endswitch
                    </span>
                </p>
            </div>

            <!-- Review -->
            <div class="mb-6">
                <h2 class="text-sm font-medium text-secondary mb-2">Review</h2>
                <p class="text-lg font-body text-gray-800">{{ $review->review }}</p>
            </div>

            <!-- Adventure Name -->
            <div class="mb-6">
                <h2 class="text-sm font-medium text-secondary mb-2">Adventure/Trip Name</h2>
                <p class="text-lg font-body text-gray-800">{{ $review->adventure_name }}</p>
            </div>

            <!-- Review Date -->
            <div class="mb-6">
                <h2 class="text-sm font-medium text-secondary mb-2">Review Date</h2>
                <p class="text-lg font-body text-gray-800">{{ $review->review_date->format('F j, Y') }}</p>
            </div>

            <!-- Actions -->
            <div class="flex justify-end space-x-4">
                <a href="{{ route('reviews.index') }}"
                    class="px-4 py-2 bg-gray-300 text-secondary rounded-md hover:bg-gray-400 transition duration-200">
                    Back to Reviews
                </a>
                <a href="{{ route('reviews.edit', $review) }}"
                    class="px-4 py-2 bg-primary text-white rounded-md hover:bg-primary-dark transition duration-200">
                    Edit Review
                </a>
            </div>
        </div>
    </div>
@endsection
