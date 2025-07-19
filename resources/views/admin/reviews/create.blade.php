@extends('layouts.app')

@section('title', 'Create Review - Mustard Adventures')

@section('content')
    <div class="container mx-auto px-4 max-w-7xl">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center mb-4">
                <a href="{{ route('trips.index') }}" class="text-secondary hover:text-secondary-light mr-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </a>
                <h1 class="text-3xl font-heading font-bold text-secondary">Add New Review</h1>
            </div>
            <p class="text-gray-600 font-body">Create a new customer review and testimonial</p>
        </div>


        <!-- Form -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Profile Image -->
                <div class="mb-6">
                    <label for="profile_image" class="block text-sm font-medium text-secondary mb-2">
                        Profile Image
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
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
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
                    <input type="text" name="position" id="position" value="{{ old('position') }}"
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
                        <option value="5.0" {{ old('rating') == '5.0' ? 'selected' : '' }}>5.0 - Excellent</option>
                        <option value="4.5" {{ old('rating') == '4.5' ? 'selected' : '' }}>4.5 - Very Good</option>
                        <option value="4.0" {{ old('rating') == '4.0' ? 'selected' : '' }}>4.0 - Good</option>
                        <option value="3.5" {{ old('rating') == '3.5' ? 'selected' : '' }}>3.5 - Average</option>
                        <option value="3.0" {{ old('rating') == '3.0' ? 'selected' : '' }}>3.0 - Fair</option>
                        <option value="2.5" {{ old('rating') == '2.5' ? 'selected' : '' }}>2.5 - Below Average</option>
                        <option value="2.0" {{ old('rating') == '2.0' ? 'selected' : '' }}>2.0 - Poor</option>
                        <option value="1.5" {{ old('rating') == '1.5' ? 'selected' : '' }}>1.5 - Very Poor</option>
                        <option value="1.0" {{ old('rating') == '1.0' ? 'selected' : '' }}>1.0 - Terrible</option>
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
                        placeholder="e.g. Conquered Mount Kenya with the best guides ever! The safety measures were top-notch, and the views from Point Lenana were breathtaking.">{{ old('review') }}</textarea>
                    @error('review')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Adventure Name -->
                <div class="mb-6">
                    <label for="adventure_name" class="block text-sm font-medium text-secondary mb-2">
                        Adventure/Trip Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="adventure_name" id="adventure_name" value="{{ old('adventure_name') }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                        placeholder="e.g. Mount Kenya Expedition">
                    @error('adventure_name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Review Date -->
                <div class="mb-6">
                    <label for="review_date" class="block text-sm font-medium text-secondary mb-2">
                        Review Date <span class="text-red-500">*</span>
                    </label>
                    <input type="date" name="review_date" id="review_date" value="{{ old('review_date') }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                    @error('review_date')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Buttons -->
                <div class="flex justify-end space-x-4">
                    <a href="{{ route('reviews.index') }}" class="btn-secondary rounded-lg">
                        Cancel
                    </a>
                    <button type="submit" class="btn-primary rounded-lg">
                        <i class="fas fa-save mr-2"></i>Create Review
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
