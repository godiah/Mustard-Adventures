<section class="relative py-24 bg-gradient-to-r from-green-200 via-sky-500 to-teal-700 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 bg-gradient-to-br from-gray-50 via-white to-gray-50 z-0"></div>
    <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-gray-100 to-transparent z-0"></div>

    <!-- Decorative Elements -->
    <div class="absolute top-40 right-10 w-28 h-28 border-2 border-accent/20 rounded-full floating-element hidden lg:block"
        style="animation-delay: -2.5s;"></div>
    <div class="absolute bottom-40 left-16 w-20 h-20 border-2 border-teal/20 rounded-full floating-element hidden lg:block"
        style="animation-delay: -1.5s;"></div>
    <div class="absolute top-1/3 left-1/4 w-16 h-16 bg-primary/10 rounded-full floating-element hidden lg:block"
        style="animation-delay: -3s;"></div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16 fade-in-up">
            <!-- Section Badge -->
            <div class="inline-flex items-center px-6 py-3 glass-card mb-6">
                <svg class="w-5 h-5 text-primary mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                    </path>
                </svg>
                <span class="font-heading text-sm font-semibold text-secondary tracking-wider uppercase">Plan Your
                    Journey</span>
            </div>

            <!-- Main Heading -->
            <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold text-secondary mb-6">
                Upcoming
                <span
                    class="text-primary font-accent block text-5xl md:text-6xl lg:text-7xl transform -rotate-1 mt-2">Adventures</span>
            </h2>

            <!-- Subheading -->
            <p class="font-body text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed mb-8">
                Secure your spot on our most popular upcoming expeditions. Limited spaces available for these immersive
                Kenyan adventures.
            </p>
        </div>

        <!-- Featured Adventures Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @foreach ($trips as $index => $trip)
                <div
                    class="rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 bg-white fade-in-up-delay stagger-{{ $index + 1 }}">
                    <!-- Featured Badge -->
                    @if ($trip->hasTag('Featured'))
                        <div class="absolute top-4 left-4 z-20">
                            <span
                                class="inline-flex items-center px-3 py-1.5 rounded-full bg-accent text-white text-xs font-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1" stroke="currentColor" class="w-4 h-4 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                                </svg>
                                Featured
                            </span>
                        </div>
                    @endif

                    <!-- Availability Status Badge -->
                    <div class="absolute top-4 right-4 z-20">
                        <span
                            class="inline-flex items-center px-3 py-1.5 rounded-full {{ $trip->availability_status === 'Almost Full' ? 'bg-primary' : ($trip->availability_status === 'Filling Fast' ? 'bg-teal' : 'bg-accent') }} text-white text-xs font-medium">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $trip->availability_status }}
                        </span>
                    </div>

                    <!-- Image Container -->
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ $trip->image ? Storage::url($trip->image) : 'https://images.unsplash.com/photo-1547970810-dc1eac37d174?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' }}"
                            alt="{{ $trip->name }}"
                            class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">

                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>

                        <!-- Date Badge -->
                        <div
                            class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm rounded-lg p-2 text-center min-w-[70px]">
                            <span
                                class="block text-primary text-xl font-bold leading-none">{{ $trip->date->format('j') }}</span>
                            <span class="block text-secondary text-sm font-medium">{{ $trip->date->format('F') }}</span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="font-heading text-2xl font-bold text-secondary">{{ $trip->name }}</h3>
                            <div class="flex items-center">
                                <span class="text-primary font-heading text-lg font-bold">Ksh{{ number_format($trip->price,2)}}</span>
                                <span class="text-gray-500 text-sm ml-1">/ person</span>
                            </div>
                        </div>

                        <p class="text-gray-600 mb-6 line-clamp-3">{{ $trip->description }}</p>

                        <!-- Details -->
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-primary mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-gray-700 text-sm">{{ $trip->days }} Days</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-primary mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                                <span
                                    class="text-gray-700 text-sm">{{ \App\Models\Trip::getDifficultyLevels()[$trip->difficulty_level] ?? 'N/A' }}</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-primary mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                                <span class="text-gray-700 text-sm">{{ $trip->spots_left }} spots left</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-primary mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                                    </path>
                                </svg>
                                <span class="text-gray-700 text-sm">{{ $trip->rating }} Rating</span>
                            </div>
                        </div>

                        <!-- Book Now Button -->
                        <a href="#contact"
                            class="w-full btn-primary py-3 rounded-xl flex items-center justify-center group">
                            <span>Book Now</span>
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- More Adventures Button -->
        {{-- <div class="text-center fade-in-up-delay-3">
            <a href="{{ route('trips.index') }}"
               class="inline-flex items-center px-8 py-4 rounded-full bg-white border-2 border-primary text-primary font-medium text-lg hover:bg-primary hover:text-white transition-colors group">
                View All Adventures
                <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div> --}}
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const featuredBtn = document.getElementById('featuredBtn');
        const calendarBtn = document.getElementById('calendarBtn');
        const allBtn = document.getElementById('allBtn');
        const calendarView = document.getElementById('calendarView');
        const featuredGrid = document.querySelector('.grid.grid-cols-1.md\\:grid-cols-2.lg\\:grid-cols-3');

        // Toggle between views
        featuredBtn.addEventListener('click', function() {
            featuredBtn.classList.add('bg-primary', 'text-white');
            featuredBtn.classList.remove('text-secondary');
            calendarBtn.classList.remove('bg-primary', 'text-white');
            calendarBtn.classList.add('text-secondary');
            allBtn.classList.remove('bg-primary', 'text-white');
            allBtn.classList.add('text-secondary');

            calendarView.classList.add('hidden');
            featuredGrid.classList.remove('hidden');
        });

        calendarBtn.addEventListener('click', function() {
            calendarBtn.classList.add('bg-primary', 'text-white');
            calendarBtn.classList.remove('text-secondary');
            featuredBtn.classList.remove('bg-primary', 'text-white');
            featuredBtn.classList.add('text-secondary');
            allBtn.classList.remove('bg-primary', 'text-white');
            allBtn.classList.add('text-secondary');

            calendarView.classList.remove('hidden');
            featuredGrid.classList.add('hidden');
        });


    });
</script>
