<section class="relative py-24 bg-gradient-to-br from-sky-blue via-teal to-secondary-light overflow-hidden">
    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16 fade-in-up">
            <!-- Section Badge -->
            <div class="inline-flex items-center px-6 py-3 glass-card-dark mb-6">
                <svg class="w-5 h-5 text-primary mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                    </path>
                </svg>
                <span class="font-heading text-sm font-semibold text-primary tracking-wider uppercase">Customer
                    Stories</span>
            </div>

            <!-- Main Heading -->
            <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                Reviews &
                <span
                    class="text-primary font-accent block text-5xl md:text-6xl lg:text-7xl transform -rotate-1 mt-2">Testimonials</span>
            </h2>

            <!-- Subheading -->
            <p class="font-body text-lg md:text-xl text-gray-300 max-w-4xl mx-auto leading-relaxed mb-8">
                Don't just take our word for it. Hear from the adventurers who've experienced the magic of Kenya with
                Mustard Adventures.
            </p>

            <!-- Overall Rating -->
            <div class="inline-flex items-center glass-card-dark px-6 py-4 rounded-2xl">
                <div class="flex items-center mr-4">
                    @for ($i = 1; $i <= 5; $i++)
                        <svg class="w-6 h-6 text-primary fill-current" viewBox="0 0 24 24">
                            <path
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                            </path>
                        </svg>
                    @endfor
                </div>
                <div class="text-white">
                    <div class="text-2xl font-bold text-primary">{{ $overallRating }}</div>
                    <div class="text-sm text-gray-300">Based on {{ $reviewCount }} reviews</div>
                </div>
            </div>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            @foreach ($reviews as $index => $review)
                @if ($index === 0)
                    <!-- Featured Large Testimonial -->
                    <div class="md:col-span-2 lg:col-span-1 lg:row-span-2 fade-in-up-delay stagger-1">
                        <div class="glass-card-dark p-8 rounded-3xl h-full interactive-card group">
                            <!-- Customer Photo -->
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 rounded-full overflow-hidden mr-4 ring-4 ring-primary/20">
                                    <img src="{{ $review->profile_image_url ?? 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80' }}"
                                        alt="{{ $review->name }}" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="font-heading text-xl font-bold text-white">{{ $review->name }}</h4>
                                    <p class="text-white text-sm">{{ $review->position }}</p>
                                    <div class="flex items-center mt-1">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <svg class="w-4 h-4 {{ $i <= $review->rating ? 'text-primary fill-current' : 'text-gray-500' }}"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                                </path>
                                            </svg>
                                        @endfor
                                    </div>
                                </div>
                            </div>

                            <!-- Quote -->
                            <div class="mb-6">
                                <svg class="w-8 h-8 text-primary mb-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z">
                                    </path>
                                </svg>
                                <p class="text-gray-300 text-lg leading-relaxed mb-4">
                                    {{ $review->review }}
                                </p>
                            </div>

                            <!-- Adventure Details -->
                            <div class="border-t border-gray-600 pt-4">
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-white">Adventure:</span>
                                    <span class="text-primary font-medium">{{ $review->adventure_name }}</span>
                                </div>
                                <div class="flex items-center justify-between text-sm mt-2">
                                    <span class="text-white">Date:</span>
                                    <span class="text-gray-300">{{ $review->review_date->format('F Y') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Regular Testimonials -->
                    <div class="fade-in-up-delay stagger-{{ $index + 1 }}">
                        <div class="glass-card-dark p-6 rounded-3xl interactive-card group">
                            <div class="flex items-center mb-4">
                                <div
                                    class="w-12 h-12 rounded-full overflow-hidden mr-3 ring-2 ring-{{ $index % 2 === 0 ? 'teal' : 'primary' }}/20">
                                    @if ($review->profile_image_url)
                                        <img src="{{ $review->profile_image_url }}" alt="{{ $review->name }}"
                                            class="w-full h-full object-cover">
                                    @else
                                        <div
                                            class="w-full h-full flex items-center justify-center bg-gray-100 text-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                        </div>
                                    @endif
                                </div>

                                <div>
                                    <h4 class="font-heading text-lg font-bold text-white">{{ $review->name }}</h4>
                                    <p class="text-white text-sm">{{ $review->position }}</p>
                                    <div class="flex items-center mt-1">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <svg class="w-3 h-3 {{ $i <= $review->rating ? 'text-primary fill-current' : 'text-gray-500' }}"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                                </path>
                                            </svg>
                                        @endfor
                                    </div>
                                </div>
                            </div>

                            <p class="text-gray-300 mb-4 leading-relaxed">
                                {{ $review->review }}
                            </p>

                            <div class="flex items-center justify-between text-sm text-white">
                                <span>{{ $review->adventure_name }}</span>
                                <span>{{ $review->review_date->format('F Y') }}</span>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <!-- CTA Section -->
        <div class="text-center fade-in-up-delay-3">
            <div class="glass-card-dark p-8 rounded-3xl max-w-3xl mx-auto">
                <h3 class="font-heading text-3xl md:text-4xl font-bold text-white mb-4">
                    Ready to Create Your Own
                    <span class="text-primary font-accent">Adventure Story?</span>
                </h3>
                <p class="font-body text-lg text-gray-300 mb-8">
                    Join our community of satisfied adventurers and discover why Kenya with Mustard Adventures is truly
                    unforgettable.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#contact" class="btn-primary px-8 py-4 text-lg">
                        Start Your Adventure
                    </a>
                    {{-- <a href="{{ route('reviews.index') }}" class="btn-secondary px-8 py-4 text-lg">
                        Read More Reviews
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</section>
