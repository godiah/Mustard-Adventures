@extends('layouts.app')

@section('title', 'Reviews - Mustard Adventures')

@section('content')
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-heading font-bold text-secondary">Adventure Reviews</h1>
            <a href="{{ route('reviews.create') }}" class="btn-primary rounded-lg inline-flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Add New Review
            </a>
        </div>

        <!-- Reviews Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($reviews as $review)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <!-- Profile Image -->
                    <div class="p-6 pb-4">
                        @if ($review->profile_image)
                            <img src="{{ $review->profile_image_url }}" alt="{{ $review->name }}"
                                class="w-16 h-16 rounded-full mx-auto mb-4 object-cover">
                        @else
                            <div class="w-16 h-16 rounded-full bg-primary mx-auto mb-4 flex items-center justify-center">
                                <span class="text-white font-heading font-bold text-xl">
                                    {{ strtoupper(substr($review->name, 0, 1)) }}
                                </span>
                            </div>
                        @endif

                        <!-- Review Header -->
                        <div class="text-center mb-4">
                            <h3 class="font-heading font-semibold text-lg text-secondary">{{ $review->name }}</h3>
                            <p class="text-gray-600 text-sm">{{ $review->position }}</p>
                            <div class="flex justify-center items-center mt-2">
                                <div class="flex text-primary">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= floor($review->rating))
                                            <i class="fas fa-star"></i>
                                        @elseif($i - 0.5 <= $review->rating)
                                            <i class="fas fa-star-half-alt"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                </div>
                                <span class="ml-2 text-gray-600 text-sm">{{ $review->formatted_rating }}</span>
                            </div>
                        </div>

                        <!-- Review Content -->
                        <div class="mb-4">
                            <p class="text-gray-700 text-sm line-clamp-3">{{ $review->review }}</p>
                        </div>

                        <!-- Adventure Info -->
                        <div class="text-center mb-4">
                            <p class="text-accent font-semibold text-sm">{{ $review->adventure_name }}</p>
                            <p class="text-gray-500 text-xs">{{ $review->review_date->format('M Y') }}</p>
                        </div>

                        <!-- Actions -->
                        <div class="flex justify-center space-x-2">
                            <a href="{{ route('reviews.show', $review) }}"
                                class="px-3 py-1 bg-sky-blue text-white rounded text-sm hover:bg-blue-600 transition-colors">
                                View
                            </a>
                            <a href="{{ route('reviews.edit', $review) }}"
                                class="px-3 py-1 bg-primary text-white rounded text-sm hover:bg-primary-dark transition-colors">
                                Edit
                            </a>
                            <form action="{{ route('reviews.destroy', $review) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="px-3 py-1 bg-red-500 text-white rounded text-sm hover:bg-red-600 transition-colors"
                                    onclick="return confirm('Are you sure you want to delete this review?')">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <div class="bg-gray-100 rounded-lg p-8">
                        <i class="fas fa-star text-4xl text-gray-400 mb-4"></i>
                        <h3 class="text-lg font-heading font-semibold text-gray-600 mb-2">No Reviews Yet</h3>
                        <p class="text-gray-500 mb-4">Start by adding your first customer review</p>
                        <a href="{{ route('reviews.create') }}" class="btn-primary rounded-lg">
                            Add First Review
                        </a>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if ($reviews->hasPages())
            <div class="mt-8">
                {{ $reviews->links() }}
            </div>
        @endif
    </div>
@endsection
