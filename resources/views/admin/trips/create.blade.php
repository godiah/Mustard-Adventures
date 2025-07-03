@extends('layouts.app')

@section('title', 'Create New Trip - Mustard Adventures')

@section('content')
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center mb-4">
                <a href="{{ route('trips.index') }}" class="text-secondary hover:text-secondary-light mr-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </a>
                <h1 class="text-3xl font-heading font-bold text-secondary">Create New Trip</h1>
            </div>
            <p class="text-gray-600 font-body">Add a new tour, trip or adventure to your collection</p>
        </div>

        <div class="max-w-5xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <form action="{{ route('trips.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Trip Name -->
                        <div class="md:col-span-2">
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Trip Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="e.g., Masai Mara Safari" required>
                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="md:col-span-2">
                            <label for="description"
                                class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                            <textarea name="description" id="description" rows="4"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="Experience the iconic Masai Mara during the spectacular wildebeest migration. Witness nature's greatest show..."
                                required>{{ old('description') }}</textarea>
                            @error('description')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Image Upload -->
                        <div class="md:col-span-2">
                            <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Trip Image</label>
                            <input type="file" name="image" id="image" accept="image/*"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            @error('image')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Date -->
                        <div>
                            <label for="date" class="block text-sm font-medium text-gray-700 mb-2">Trip Date</label>
                            <input type="date" name="date" id="date" value="{{ old('date') }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                required>
                            @error('date')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Days -->
                        <div>
                            <label for="days" class="block text-sm font-medium text-gray-700 mb-2">Duration
                                (Days)</label>
                            <input type="number" name="days" id="days" value="{{ old('days') }}" min="1"
                                max="30"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="e.g., 5" required>
                            @error('days')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Spots Left -->
                        <div>
                            <label for="spots_left" class="block text-sm font-medium text-gray-700 mb-2">Spots
                                Available</label>
                            <input type="number" name="spots_left" id="spots_left" value="{{ old('spots_left') }}"
                                min="0" max="100"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="e.g., 12" required>
                            @error('spots_left')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Rating -->
                        <div>
                            <label for="rating" class="block text-sm font-medium text-gray-700 mb-2">Rating (0-5)</label>
                            <input type="number" name="rating" id="rating" value="{{ old('rating') }}" min="0"
                                max="5" step="0.1"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="e.g., 4.9">
                            @error('rating')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Price -->
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Trip Price
                                (KES)</label>
                            <input type="number" name="price" id="price" value="{{ old('price') }}" min="0"
                                step="0.01"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="e.g., 15000.00" required>
                            @error('price')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Difficulty Level -->
                        <div>
                            <label for="difficulty_level" class="block text-sm font-medium text-gray-700 mb-2">Difficulty
                                Level</label>
                            <select name="difficulty_level" id="difficulty_level"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                required>
                                <option value="">Select difficulty level</option>

                                @foreach (App\Models\Trip::getDifficultyLevels() as $value => $label)
                                    <option value="{{ $value }}"
                                        {{ old('difficulty_level') == $value ? 'selected' : '' }}>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                            @error('difficulty_level')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Tags -->
                        <div>
                            <label for="tags" class="block text-sm font-medium text-gray-700 mb-2">Tags</label>
                            <div class="space-y-2">
                                <div class="flex flex-wrap gap-2">
                                    @php
                                        $availableTags = [
                                            'Featured',
                                            'New Tour',
                                            'Filling Fast',
                                            'Almost Full',
                                            'Popular',
                                            'Wildlife',
                                            'Adventure',
                                            'Cultural',
                                            'Luxury',
                                        ];
                                    @endphp
                                    @foreach ($availableTags as $tag)
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" name="tags[]" value="{{ $tag }}"
                                                class="form-checkbox h-4 w-4 text-primary border-gray-300 rounded focus:ring-primary"
                                                {{ in_array($tag, old('tags', [])) ? 'checked' : '' }}>
                                            <span class="ml-2 text-sm text-gray-700">{{ $tag }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                            @error('tags')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div>
                            <label class="flex items-center">
                                <input type="checkbox" name="is_active" value="1"
                                    class="form-checkbox h-4 w-4 text-primary border-gray-300 rounded focus:ring-primary"
                                    {{ old('is_active', true) ? 'checked' : '' }}>
                                <span class="ml-2 text-sm text-gray-700">Active Trip</span>
                            </label>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex justify-end space-x-4 pt-6 border-t">
                        <a href="{{ route('trips.index') }}" class="btn-secondary rounded-lg">
                            Cancel
                        </a>
                        <button type="submit" class="btn-primary rounded-lg">
                            Create Trip
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
