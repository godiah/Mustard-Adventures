@extends('layouts.app')

@section('title', 'Adventure Types - Mustard Adventures')

@section('content')
    <div class="container mx-auto px-4">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-4xl font-heading font-bold text-secondary mb-2">Adventures</h1>
                <p class="text-gray-600 font-body">Manage your adventure offerings</p>
            </div>
            <a href="{{ route('adventures.create') }}" class="btn-primary rounded-lg inline-flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                New Adventure
            </a>
        </div>

        <!-- Adventures Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($adventures as $adventure)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <!-- Image -->
                    @if ($adventure->image)
                        <img src="{{ asset('storage/' . $adventure->image) }}" alt="{{ $adventure->name }}"
                            class="w-full h-48 object-cover">
                    @else
                        <div class="w-full h-48 bg-secondary-light flex items-center justify-center">
                            <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                    @endif

                    <!-- Content -->
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-heading font-semibold text-secondary">{{ $adventure->name }}</h3>
                            <span
                                class="px-2 py-1 text-xs rounded-full {{ $adventure->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $adventure->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </div>

                        <p class="text-gray-600 font-body mb-4 line-clamp-3">{{ Str::limit($adventure->description, 120) }}
                        </p>

                        <!-- Adventure Details -->
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                {{ $adventure->days }}
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                                {{ $adventure->people }}
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                    </path>
                                </svg>
                                {{ ucfirst(str_replace('_', ' ', $adventure->difficulty_level)) }}
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex space-x-2">
                            <a href="{{ route('adventures.show', $adventure) }}"
                                class="flex-1 bg-sky-blue text-white py-2 px-4 rounded-lg text-center text-sm hover:bg-blue-600 transition-colors">
                                View
                            </a>
                            <a href="{{ route('adventures.edit', $adventure) }}"
                                class="flex-1 bg-primary text-white py-2 px-4 rounded-lg text-center text-sm hover:bg-primary-dark transition-colors">
                                Edit
                            </a>
                            <form method="POST" action="{{ route('adventures.destroy', $adventure) }}" class="flex-1">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="w-full bg-red-500 text-white py-2 px-4 rounded-lg text-sm hover:bg-red-600 transition-colors"
                                    onclick="return confirm('Are you sure you want to delete this adventure?')">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <div class="text-gray-400 mb-4">
                        <svg class="w-24 h-24 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-heading font-semibold text-gray-600 mb-2">No Adventures Yet</h3>
                    <p class="text-gray-500 mb-6">Create your first adventure to get started!</p>
                    <a href="{{ route('adventures.create') }}" class="btn-primary rounded-lg">
                        Create Adventure
                    </a>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if ($adventures->hasPages())
            <div class="mt-8">
                {{ $adventures->links() }}
            </div>
        @endif
    </div>
@endsection
