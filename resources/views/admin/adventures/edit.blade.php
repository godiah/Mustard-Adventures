@extends('layouts.app')

@section('title', 'Edit Adventure - Mustard Adventures')

@section('content')
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center mb-4">
                <a href="{{ route('adventures.index') }}" class="mr-4 text-secondary hover:text-secondary-light">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </a>
                <h1 class="text-4xl font-heading font-bold text-secondary">Edit Adventure</h1>
            </div>
            <p class="text-gray-600 font-body">Update adventure details</p>
        </div>

        <!-- Form -->
        <div class="max-w-5xl mx-auto bg-white rounded-lg shadow-md p-8">
            <form method="POST" action="{{ route('adventures.update', $adventure) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Name Field -->
                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-secondary mb-2">Adventure Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $adventure->name) }}"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary @error('name') border-red-500 @enderror"
                        placeholder="e.g., Safari Tours" required>
                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description Field -->
                <div class="mb-6">
                    <label for="description" class="block text-sm font-medium text-secondary mb-2">Description</label>
                    <textarea id="description" name="description" rows="5"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary @error('description') border-red-500 @enderror"
                        placeholder="e.g., Witness the Big Five in their natural habitat across Kenya's world-renowned national parks and conservancies."
                        required>{{ old('description', $adventure->description) }}</textarea>
                    @error('description')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Days Field -->
                <div class="mb-6">
                    <label for="days" class="block text-sm font-medium text-secondary mb-2">Duration</label>
                    <select id="days" name="days"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary @error('days') border-red-500 @enderror"
                        required>
                        <option value="">Select Duration</option>
                        @foreach (App\Models\Adventure::getDaysOptions() as $value => $label)
                            <option value="{{ $value }}"
                                {{ old('days', $adventure->days) == $value ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                    @error('days')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- People Field -->
                <div class="mb-6">
                    <label for="people" class="block text-sm font-medium text-secondary mb-2">Group Size</label>
                    <select id="people" name="people"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary @error('people') border-red-500 @enderror"
                        required>
                        <option value="">Select Group Size</option>
                        @foreach (App\Models\Adventure::getPeopleOptions() as $value => $label)
                            <option value="{{ $value }}"
                                {{ old('people', $adventure->people) == $value ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                    @error('people')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Difficulty Level Field -->
                <div class="mb-6">
                    <label for="difficulty_level" class="block text-sm font-medium text-secondary mb-2">Difficulty
                        Level</label>
                    <select id="difficulty_level" name="difficulty_level"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary @error('difficulty_level') border-red-500 @enderror"
                        required>
                        <option value="">Select Difficulty Level</option>
                        @foreach (App\Models\Adventure::getDifficultyLevels() as $value => $label)
                            <option value="{{ $value }}"
                                {{ old('difficulty_level', $adventure->difficulty_level) == $value ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                    @error('difficulty_level')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Current Image Display -->
                @if ($adventure->image)
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-secondary mb-2">Current Image</label>
                        <img src="{{ asset('storage/' . $adventure->image) }}" alt="{{ $adventure->name }}"
                            class="w-full h-64 object-cover rounded-lg border">
                    </div>
                @endif

                <!-- Image Upload -->
                <div class="mb-6">
                    <label for="image" class="block text-sm font-medium text-secondary mb-2">
                        {{ $adventure->image ? 'Change Image' : 'Adventure Image' }}
                    </label>
                    <div class="flex items-center justify-center w-full">
                        <label for="image"
                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                    </path>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500">
                                    <span class="font-semibold">Click to upload</span> or drag and drop
                                </p>
                                <p class="text-xs text-gray-500">PNG, JPG or GIF (MAX. 2MB)</p>
                            </div>
                            <input id="image" name="image" type="file" class="hidden" accept="image/*">
                        </label>
                    </div>
                    @error('image')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Active Status -->
                <div class="mb-8">
                    <div class="flex items-center">
                        <input id="is_active" name="is_active" type="checkbox" value="1"
                            {{ old('is_active', $adventure->is_active) ? 'checked' : '' }}
                            class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary">
                        <label for="is_active" class="ml-2 text-sm font-medium text-gray-700">
                            Active (visible to customers)
                        </label>
                    </div>
                </div>

                <!-- Submit Buttons -->
                <div class="flex space-x-4">
                    <button type="submit" class="btn-primary rounded-lg flex-1">
                        Update Adventure
                    </button>
                    <a href="{{ route('adventures.index') }}" class="btn-secondary rounded-lg flex-1 text-center">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Image preview functionality
        document.getElementById('image').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.createElement('img');
                    preview.src = e.target.result;
                    preview.className = 'w-full h-64 object-cover rounded-lg mt-4';

                    // Replace the upload area with preview
                    const uploadArea = document.querySelector('label[for="image"]');
                    uploadArea.innerHTML = '';
                    uploadArea.appendChild(preview);
                    uploadArea.classList.add('border-solid', 'border-primary');
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection
