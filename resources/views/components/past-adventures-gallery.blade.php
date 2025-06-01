<section class="relative py-24 bg-gradient-to-br from-gray-50 via-white to-gray-100 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,<svg width="60" height="60"
            viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" fill-rule="evenodd">
                <g fill="%23e4b429" fill-opacity="0.1">
                    <circle cx="30" cy="30" r="2" />
                </g></svg>'); background-size: 60px 60px;">
        </div>
    </div>

    <!-- Floating Elements -->
    <div class="absolute top-20 left-12 w-24 h-24 border-2 border-primary/20 rounded-full floating-element hidden lg:block"
        style="animation-delay: -1s;"></div>
    <div class="absolute bottom-32 right-16 w-20 h-20 border-2 border-accent/20 rounded-full floating-element hidden lg:block"
        style="animation-delay: -3s;"></div>
    <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-teal/10 rounded-full floating-element hidden lg:block"
        style="animation-delay: -2s;"></div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16 fade-in-up">
            <!-- Section Badge -->
            <div class="inline-flex items-center px-6 py-3 glass-card mb-6">
                <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                    </path>
                </svg>
                <span class="font-heading text-sm font-semibold text-secondary tracking-wider uppercase">Adventure
                    Memories</span>
            </div>

            <!-- Main Heading -->
            <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold text-secondary mb-6">
                Past Adventures
                <span
                    class="text-primary font-accent block text-5xl md:text-6xl lg:text-7xl transform -rotate-1 mt-2">Gallery</span>
            </h2>

            <!-- Subheading -->
            <p class="font-body text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed mb-8">
                Relive the magic through the eyes of our adventurers. These moments capture the essence of what makes
                Kenya truly extraordinary.
            </p>

            <!-- Filter Tags -->
            <div class="flex flex-wrap justify-center gap-3 mb-8">
                <button class="px-4 py-2 rounded-full bg-primary text-white text-sm font-medium filter-btn active"
                    data-filter="all">All Adventures</button>
                <button
                    class="px-4 py-2 rounded-full bg-gray-200 text-gray-700 text-sm font-medium filter-btn hover:bg-gray-300 transition-colors"
                    data-filter="safari">Safari</button>
                <button
                    class="px-4 py-2 rounded-full bg-gray-200 text-gray-700 text-sm font-medium filter-btn hover:bg-gray-300 transition-colors"
                    data-filter="mountain">Mountain</button>
                <button
                    class="px-4 py-2 rounded-full bg-gray-200 text-gray-700 text-sm font-medium filter-btn hover:bg-gray-300 transition-colors"
                    data-filter="cultural">Cultural</button>
                <button
                    class="px-4 py-2 rounded-full bg-gray-200 text-gray-700 text-sm font-medium filter-btn hover:bg-gray-300 transition-colors"
                    data-filter="beach">Beach</button>
            </div>
        </div>

        <!-- Instagram-Style Gallery Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-12" id="galleryGrid">

            <!-- Large Featured Image -->
            <div class="col-span-2 row-span-2 gallery-item safari" data-category="safari">
                <div class="relative h-full min-h-[400px] rounded-2xl overflow-hidden group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1547970810-dc1eac37d174?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Masai Mara Safari"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>

                    <!-- Content -->
                    <div
                        class="absolute bottom-4 left-4 right-4 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 opacity-0 group-hover:opacity-100">
                        <h3 class="font-heading text-xl font-bold mb-2">Masai Mara Migration</h3>
                        <p class="text-sm text-gray-200 mb-3">Witnessing the great wildebeest migration with our amazing
                            group from Germany!</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-accent mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">247 likes</span>
                            </div>
                            <span class="text-xs text-gray-300">2 days ago</span>
                        </div>
                    </div>

                    <!-- Play Button for Video -->
                    <div
                        class="absolute top-4 right-4 w-10 h-10 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Regular Images -->
            <div class="gallery-item mountain" data-category="mountain">
                <div class="relative h-48 rounded-2xl overflow-hidden group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1523805009345-7448845a9e53?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Mount Kenya Summit"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>

                    <div
                        class="absolute bottom-3 left-3 right-3 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 opacity-0 group-hover:opacity-100">
                        <h4 class="font-heading text-sm font-bold mb-1">Mount Kenya Summit</h4>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 text-accent mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-xs">89</span>
                            </div>
                            <span class="text-xs text-gray-300">1 week ago</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gallery-item cultural" data-category="cultural">
                <div class="relative h-48 rounded-2xl overflow-hidden group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1609198092458-38a293c7ac4b?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                        alt="Maasai Village Visit"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>

                    <div
                        class="absolute bottom-3 left-3 right-3 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 opacity-0 group-hover:opacity-100">
                        <h4 class="font-heading text-sm font-bold mb-1">Maasai Village</h4>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 text-accent mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-xs">156</span>
                            </div>
                            <span class="text-xs text-gray-300">3 days ago</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Video Testimonial Card -->
            <div class="col-span-2 gallery-item safari" data-category="safari">
                <div
                    class="relative h-48 rounded-2xl overflow-hidden group cursor-pointer bg-gradient-to-br from-secondary to-secondary-light">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white p-6">
                            <div
                                class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h4 class="font-heading text-lg font-bold mb-2">Sarah's Safari Story</h4>
                            <p class="text-sm text-gray-200">"The most incredible experience of my life!"</p>
                        </div>
                    </div>

                    <!-- Customer Photo Corner -->
                    <div
                        class="absolute top-3 right-3 w-12 h-12 rounded-full overflow-hidden border-2 border-white/50">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                            alt="Sarah" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <div class="gallery-item beach" data-category="beach">
                <div class="relative h-48 rounded-2xl overflow-hidden group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1505881502353-a1986add3762?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                        alt="Diani Beach"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>

                    <div
                        class="absolute bottom-3 left-3 right-3 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 opacity-0 group-hover:opacity-100">
                        <h4 class="font-heading text-sm font-bold mb-1">Diani Beach Bliss</h4>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 text-accent mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-xs">203</span>
                            </div>
                            <span class="text-xs text-gray-300">5 days ago</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gallery-item safari" data-category="safari">
                <div class="relative h-48 rounded-2xl overflow-hidden group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                        alt="Elephant Encounter"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>

                    <div
                        class="absolute bottom-3 left-3 right-3 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 opacity-0 group-hover:opacity-100">
                        <h4 class="font-heading text-sm font-bold mb-1">Gentle Giants</h4>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 text-accent mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-xs">312</span>
                            </div>
                            <span class="text-xs text-gray-300">1 day ago</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Another Video Testimonial -->
            <div class="gallery-item mountain" data-category="mountain">
                <div
                    class="relative h-48 rounded-2xl overflow-hidden group cursor-pointer bg-gradient-to-br from-teal to-sky-blue">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white p-4">
                            <div
                                class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h4 class="font-heading text-sm font-bold mb-1">Mike's Mountain Adventure</h4>
                            <p class="text-xs text-gray-200">"Conquered my fears and the summit!"</p>
                        </div>
                    </div>

                    <div
                        class="absolute top-2 right-2 w-10 h-10 rounded-full overflow-hidden border-2 border-white/50">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                            alt="Mike" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <div class="gallery-item cultural" data-category="cultural">
                <div class="relative h-48 rounded-2xl overflow-hidden group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                        alt="Traditional Dance"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>

                    <div
                        class="absolute bottom-3 left-3 right-3 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 opacity-0 group-hover:opacity-100">
                        <h4 class="font-heading text-sm font-bold mb-1">Traditional Dance</h4>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 text-accent mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-xs">178</span>
                            </div>
                            <span class="text-xs text-gray-300">6 days ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center fade-in-up-delay-3">
            <button
                class="inline-flex items-center px-8 py-4 rounded-full bg-white border-2 border-primary text-primary font-medium text-lg hover:bg-primary hover:text-white transition-colors group">
                Load More Adventures
                <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </button>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const filter = this.getAttribute('data-filter');

                // Update active button
                filterBtns.forEach(b => {
                    b.classList.remove('bg-primary', 'text-white', 'active');
                    b.classList.add('bg-gray-200', 'text-gray-700');
                });
                this.classList.add('bg-primary', 'text-white', 'active');
                this.classList.remove('bg-gray-200', 'text-gray-700');

                // Filter gallery items
                galleryItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') ===
                        filter) {
                        item.style.display = 'block';
                        item.style.animation = 'fadeInUp 0.5s ease forwards';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
