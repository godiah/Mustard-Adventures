@extends('layouts.app')

@section('title', 'Edit Review - Mustard Adventures')

@section('content')
    <div class="container mx-auto px-4  max-w-7xl">
        <!-- Header -->
        <div class="flex items-center mb-8">
            <a href="{{ route('reviews.index') }}" class="text-secondary hover:text-secondary-light mr-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </a>
            <h1 class="text-3xl font-heading font-bold text-secondary">Edit Review</h1>
        </div>

        <!-- Form -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <form action="{{ route('reviews.update', $review) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <!-- Current Profile Image -->
                @if ($review->profile_image)
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-secondary mb-2">
                            Current Profile Image
                        </label>
                        <img src="{{ $review->profile_image_url }}" alt="{{ $review->name }}"
                            class="w-20 h-20 rounded-full object-cover">
                    </div>
                @endif

                <!-- Profile Image -->
                <div class="mb-6">
                    <label for="profile_image" class="block text-sm font-medium text-secondary mb-2">
                        Profile Image {{ $review->profile_image ? '(Upload new to replace)' : '' }}
                    </label>
                    <input type="file" name="profile_image" id="profile_image" accept="image/*"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                    @error('profile_image')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Name -->
                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-secondary mb-2">
                        Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="name" id="name" value="{{ old('name', $review->name) }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                        placeholder="e.g. Sarah Johnson">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Position -->
                <div class="mb-6">
                    <label for="position" class="block text-sm font-medium text-secondary mb-2">
                        Position/Role/Title <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="position" id="position" value="{{ old('position', $review->position) }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                        placeholder="e.g. Wildlife Photographer">
                    @error('position')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Rating -->
                <div class="mb-6">
                    <label for="rating" class="block text-sm font-medium text-secondary mb-2">
                        Rating <span class="text-red-500">*</span>
                    </label>
                    <select name="rating" id="rating"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        <option value="">Select Rating</option>
                        <option value="5.0" {{ old('rating', $review->rating) == '5.0' ? 'selected' : '' }}>5.0 -
                            Excellent</option>
                        <option value="4.5" {{ old('rating', $review->rating) == '4.5' ? 'selected' : '' }}>4.5 - Very
                            Good</option>
                        <option value="4.0" {{ old('rating', $review->rating) == '4.0' ? 'selected' : '' }}>4.0 - Good
                        </option>
                        <option value="3.5" {{ old('rating', $review->rating) == '3.5' ? 'selected' : '' }}>3.5 -
                            Average</option>
                        <option value="3.0" {{ old('rating', $review->rating) == '3.0' ? 'selected' : '' }}>3.0 - Fair
                        </option>
                        <option value="2.5" {{ old('rating', $review->rating) == '2.5' ? 'selected' : '' }}>2.5 - Below
                            Average</option>
                        <option value="2.0" {{ old('rating', $review->rating) == '2.0' ? 'selected' : '' }}>2.0 - Poor
                        </option>
                        <option value="1.5" {{ old('rating', $review->rating) == '1.5' ? 'selected' : '' }}>1.5 - Very
                            Poor</option>
                        <option value="1.0" {{ old('rating', $review->rating) == '1.0' ? 'selected' : '' }}>1.0 -
                            Terrible</option>
                    </select>
                    @error('rating')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Review -->
                <div class="mb-6">
                    <label for="review" class="block text-sm font-medium text-secondary mb-2">
                        Review <span class="text-red-500">*</span>
                    </label>
                    <textarea name="review" id="review" rows="4"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                        placeholder="e.g. Conquered Mount Kenya with the best guides ever! The safety measures were top-notch, and the views from Point Lenana were breathtaking.">{{ old('review', $review->review) }}</textarea>
                    @error('review')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Adventure Name -->
                <div class="mb-6">
                    <label for="adventure_name" class="block text-sm font-medium text-secondary mb-2">
                        Adventure/Trip Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="adventure_name" id="adventure_name"
                        value="{{ old('adventure_name', $review->adventure_name) }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                        placeholder="e.g. Mount Kenya Expedition">
                    @error('adventure_name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- ReviewThe date is July 3, 2025, and the time is 2:34 PM EAT. Date -->
                <div class="mb-6">
                    <label for="review_date" class="block text-sm font-medium text-secondary mb-2">
                        Review Date <span class="text-red-500">*</span>
                    </label>
                    <input type="date" name="review_date" id="review_date"
                        value="{{ old('review_date', $review->review_date->format('Y-m-d')) }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                    @error('review_date')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Form Actions -->
                <div class="flex justify-end space-x-4">
                    <a href="{{ route('reviews.index') }}"
                        class="px-4 py-2 bg-gray-300 text-secondary rounded-md hover:bg-gray-400 transition duration-200">
                        Cancel
                    </a>
                    <button type="submit"
                        class="px-4 py-2 bg-primary text-white rounded-md hover:bg-primary-dark transition duration-200">
                        Update Review
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
