<section class="relative py-20 bg-gradient-to-br from-gray-50 via-white to-gray-100 overflow-hidden">
    <!-- Background Decorative Elements -->
    <div
        class="absolute top-10 left-10 w-32 h-32 border-2 border-primary/20 rounded-full floating-element hidden lg:block">
    </div>
    <div class="absolute bottom-20 right-16 w-24 h-24 border-2 border-accent/20 rounded-full floating-element hidden lg:block"
        style="animation-delay: -3s;"></div>
    <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-teal/10 rounded-full floating-element hidden lg:block"
        style="animation-delay: -1.5s;"></div>

    <!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-primary/8 to-transparent"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-accent/5 to-transparent"></div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16 fade-in-up">
            <!-- Section Badge -->
            <div class="inline-flex items-center px-6 py-3 glass-card mb-6">
                <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                <span class="font-heading text-sm font-semibold text-secondary tracking-wider uppercase">Adventure
                    Categories</span>
            </div>

            <!-- Main Heading -->
            <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold text-secondary mb-6">
                Choose Your
                <span
                    class="text-primary font-accent block text-5xl md:text-6xl lg:text-7xl transform -rotate-1 mt-2">Adventure</span>
            </h2>

            <!-- Subheading -->
            <p class="font-body text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                From thrilling safaris to cultural immersions, discover Kenya's diverse landscapes and rich heritage
                through our expertly crafted adventure experiences.
            </p>
        </div>

        <!-- Adventure Categories Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            @foreach ($adventures as $index => $adventure)
                <div
                    class="adventure-card glass-card-dark interactive-card fade-in-up stagger-{{ $index + 1 }} group @if ($index === 4) md:col-span-2 lg:col-span-1 @endif">
                    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                        style="background-image: url('{{ $adventure->image ? Storage::url($adventure->image) : 'https://images.unsplash.com/photo-1516426122078-c23e76319801?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' }}');">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>

                    <div class="adventure-card-content">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 bg-primary/20 rounded-full flex items-center justify-center mr-4 category-icon">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="{{ ((($index === 0
                                                        ? 'M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z'
                                                        : $index === 1)
                                                    ? 'M5 3l14 9-14 9V3z'
                                                    : $index === 2)
                                                ? 'M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5'
                                                : $index === 3)
                                            ? 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.12 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'
                                            : 'M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7' }}">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-heading text-2xl font-bold text-white mb-1">{{ $adventure->name }}</h3>
                                <div class="flex items-center text-primary text-sm">
                                    <span class="w-2 h-2 bg-primary rounde d-full mr-2"></span>
                                    {{ \App\Models\Adventure::getDifficultyLevels()[$adventure->difficulty_level] ?? 'Adventure' }}
                                </div>
                            </div>
                        </div>

                        <p class="font-body text-gray-200 mb-6 leading-relaxed">
                            {{ $adventure->description }}
                        </p>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-sm text-gray-300">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ \App\Models\Adventure::getDaysOptions()[$adventure->days] ?? $adventure->days }}
                                </span>
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                    {{ \App\Models\Adventure::getPeopleOptions()[$adventure->people] ?? $adventure->people }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Call to Action -->
        <div class="text-center fade-in-up-delay-3">
            <div class="glass-card p-8 max-w-4xl mx-auto">
                <h3 class="font-heading text-3xl md:text-4xl font-bold text-secondary mb-4">
                    Can't Decide? Let Us Help!
                </h3>
                <p class="font-body text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                    Our adventure specialists will create a personalized itinerary based on your interests, fitness
                    level, and travel preferences.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#contact" class="btn-primary px-8 py-4 text-lg">
                        Get Custom Itinerary
                    </a>
                    {{-- <a href="{{ route('adventures.index') }}" class="btn-secondary px-8 py-4 text-lg">
                        View All Adventures
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</section>
