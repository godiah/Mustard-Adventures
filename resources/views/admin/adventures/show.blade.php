@extends('layouts.app')

@section('title', $adventure->name . ' - Mustard Adventures')

@section('content')
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <a href="{{ route('adventures.index') }}" class="mr-4 text-secondary hover:text-secondary-light">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </a>
                    <div>
                        <h1 class="text-4xl font-heading font-bold text-secondary">{{ $adventure->name }}</h1>
                        <div class="flex items-center mt-2">
                            <span
                                class="px-3 py-1 text-sm rounded-full {{ $adventure->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $adventure->is_active ? 'Active' : 'Inactive' }}
                            </span>
                            <span class="ml-3 text-sm text-gray-500">
                                Created {{ $adventure->created_at->format('M j, Y') }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex space-x-3">
                    <a href="{{ route('adventures.edit', $adventure) }}" class="btn-secondary rounded-lg text-sm">
                        <svg class="w-4 h-4 mr-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                            </path>
                        </svg>
                        Edit
                    </a>
                    <form method="POST" action="{{ route('adventures.destroy', $adventure) }}" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white px-6 py-3 rounded-lg transition-colors"
                            onclick="return confirm('Are you sure you want to delete this adventure?')">
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
        </div>

        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column - Image and Description -->
            <div class="lg:col-span-2">
                <!-- Adventure Image -->
                <div class="mb-8">
                    @if ($adventure->image)
                        <img src="{{ asset('storage/' . $adventure->image) }}" alt="{{ $adventure->name }}"
                            class="w-full h-96 object-cover rounded-lg shadow-md">
                    @else
                        <div class="w-full h-96 bg-secondary-light rounded-lg flex items-center justify-center">
                            <div class="text-center text-white">
                                <svg class="w-24 h-24 mx-auto mb-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <p class="text-xl font-medium">No Image Available</p>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Description -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-2xl font-heading font-semibold text-secondary mb-4">About This Adventure</h2>
                    <div class="font-body text-gray-700 leading-relaxed">
                        {!! nl2br(e($adventure->description)) !!}
                    </div>
                </div>
            </div>

            <!-- Right Column - Adventure Details -->
            <div class="lg:col-span-1">
                <!-- Adventure Details Card -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h3 class="text-xl font-heading font-semibold text-secondary mb-4">Adventure Details</h3>

                    <!-- Duration -->
                    <div class="flex items-center mb-4 pb-4 border-b border-gray-200">
                        <div class="flex-shrink-0 w-10 h-10 bg-primary rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-500">Duration</p>
                            <p class="text-lg font-semibold text-secondary">
                                {{ ucfirst(str_replace('_', ' ', $adventure->days)) }}
                            </p>
                        </div>
                    </div>

                    <!-- Group Size -->
                    <div class="flex items-center mb-4 pb-4 border-b border-gray-200">
                        <div class="flex-shrink-0 w-10 h-10 bg-sky-blue rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-500">Group Size</p>
                            <p class="text-lg font-semibold text-secondary">{{ $adventure->people }} People</p>
                        </div>
                    </div>

                    <!-- Difficulty Level -->
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-accent rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-500">Difficulty Level</p>
                            <p class="text-lg font-semibold text-secondary">
                                {{ ucfirst(str_replace('_', ' ', $adventure->difficulty_level)) }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Status Card -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-heading font-semibold text-secondary mb-4">Status Information</h3>

                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-sm font-medium text-gray-500">Status</span>
                            <span
                                class="px-3 py-1 text-sm rounded-full {{ $adventure->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $adventure->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </div>

                        <div class="flex justify-between items-center">
                            <span class="text-sm font-medium text-gray-500">Created</span>
                            <span
                                class="text-sm text-gray-700">{{ $adventure->created_at->format('M j, Y g:i A') }}</span>
                        </div>

                        <div class="flex justify-between items-center">
                            <span class="text-sm font-medium text-gray-500">Last Updated</span>
                            <span
                                class="text-sm text-gray-700">{{ $adventure->updated_at->format('M j, Y g:i A') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
