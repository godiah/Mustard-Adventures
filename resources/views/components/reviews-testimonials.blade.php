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
                    <div class="text-2xl font-bold text-primary">4.9</div>
                    <div class="text-sm text-gray-300">Based on 50+ reviews</div>
                </div>
            </div>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">

            <!-- Featured Large Testimonial -->
            <div class="md:col-span-2 lg:col-span-1 lg:row-span-2 fade-in-up-delay stagger-1">
                <div class="glass-card-dark p-8 rounded-3xl h-full interactive-card group">
                    <!-- Customer Photo -->
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4 ring-4 ring-primary/20">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                                alt="Sarah Johnson" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-heading text-xl font-bold text-white">Sarah Johnson</h4>
                            <p class="text-white text-sm">Wildlife Photographer, USA</p>
                            <div class="flex items-center mt-1">
                                @for ($i = 1; $i <= 5; $i++)
                                    <svg class="w-4 h-4 text-primary fill-current" viewBox="0 0 24 24">
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
                            "Mustard Adventures gave me the trip of a lifetime! The Masai Mara safari was absolutely
                            incredible. Our guide James was so knowledgeable and passionate about wildlife conservation.
                            I got shots I never dreamed possible!"
                        </p>
                        <p class="text-white text-sm">
                            "The small group size meant we could spend extra time at the best spots. When we found a
                            leopard with cubs, James made sure everyone got the perfect shot. This wasn't just a tour—it
                            was a transformative experience."
                        </p>
                    </div>

                    <!-- Adventure Details -->
                    <div class="border-t border-gray-600 pt-4">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-white">Adventure:</span>
                            <span class="text-primary font-medium">5-Day Masai Mara Safari</span>
                        </div>
                        <div class="flex items-center justify-between text-sm mt-2">
                            <span class="text-white">Date:</span>
                            <span class="text-gray-300">March 2024</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Regular Testimonials -->
            <div class="fade-in-up-delay stagger-2">
                <div class="glass-card-dark p-6 rounded-3xl interactive-card group">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-3 ring-2 ring-teal/20">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                                alt="Michael Chen" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-heading text-lg font-bold text-white">Michael Chen</h4>
                            <p class="text-white text-sm">Adventure Enthusiast, Canada</p>
                            <div class="flex items-center mt-1">
                                @for ($i = 1; $i <= 5; $i++)
                                    <svg class="w-3 h-3 text-primary fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                        </path>
                                    </svg>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <p class="text-gray-300 mb-4 leading-relaxed">
                        "Conquered Mount Kenya with the best guides ever! The safety measures were top-notch, and the
                        views from Point Lenana were breathtaking."
                    </p>

                    <div class="flex items-center justify-between text-sm text-white">
                        <span>Mount Kenya Expedition</span>
                        <span>April 2024</span>
                    </div>
                </div>
            </div>

            <div class="fade-in-up-delay stagger-3">
                <div class="glass-card-dark p-6 rounded-3xl interactive-card group">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-3 ring-2 ring-accent/20">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                                alt="Emma Thompson" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-heading text-lg font-bold text-white">Emma Thompson</h4>
                            <p class="text-white text-sm">Cultural Explorer, UK</p>
                            <div class="flex items-center mt-1">
                                @for ($i = 1; $i <= 5; $i++)
                                    <svg class="w-3 h-3 text-primary fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                        </path>
                                    </svg>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <p class="text-gray-300 mb-4 leading-relaxed">
                        "The cultural immersion was authentic and respectful. Learning traditional beadwork from Maasai
                        women was a highlight of my entire African journey."
                    </p>

                    <div class="flex items-center justify-between text-sm text-white">
                        <span>Cultural Heritage Tour</span>
                        <span>February 2024</span>
                    </div>
                </div>
            </div>

            <div class="fade-in-up-delay stagger-4">
                <div class="glass-card-dark p-6 rounded-3xl interactive-card group">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-3 ring-2 ring-primary/20">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                                alt="David Rodriguez" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-heading text-lg font-bold text-white">David Rodriguez</h4>
                            <p class="text-white text-sm">Family Traveler, Spain</p>
                            <div class="flex items-center mt-1">
                                @for ($i = 1; $i <= 5; $i++)
                                    <svg class="w-3 h-3 text-primary fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                        </path>
                                    </svg>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <p class="text-gray-300 mb-4 leading-relaxed">
                        "Perfect family adventure! My kids still talk about seeing baby elephants. The guides made sure
                        everyone felt safe and included."
                    </p>

                    <div class="flex items-center justify-between text-sm text-white">
                        <span>Family Safari Package</span>
                        <span>January 2024</span>
                    </div>
                </div>
            </div>

            <div class="fade-in-up-delay stagger-5">
                <div class="glass-card-dark p-6 rounded-3xl interactive-card group">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-3 ring-2 ring-teal/20">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                                alt="Lisa Park" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-heading text-lg font-bold text-white">Lisa Park</h4>
                            <p class="text-white text-sm">Solo Traveler, Australia</p>
                            <div class="flex items-center mt-1">
                                @for ($i = 1; $i <= 5; $i++)
                                    <svg class="w-3 h-3 text-primary fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                        </path>
                                    </svg>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <p class="text-gray-300 mb-4 leading-relaxed">
                        "As a solo female traveler, I felt completely safe and welcomed. The small group became like
                        family by the end of the trip."
                    </p>

                    <div class="flex items-center justify-between text-sm text-white">
                        <span>Solo Adventure Package</span>
                        <span>March 2024</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Review Highlights -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16 fade-in-up-delay-3">
            <div class="text-center">
                <div class="w-16 h-16 bg-primary/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-white mb-2">Expert Guides</h3>
                <p class="text-gray-300 text-sm">95% of reviews mention our knowledgeable and passionate guides</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-accent/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                        </path>
                    </svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-white mb-2">Safety First</h3>
                <p class="text-gray-300 text-sm">100% safety record with comprehensive emergency protocols</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-teal/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-teal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-white mb-2">Life-Changing</h3>
                <p class="text-gray-300 text-sm">98% say their adventure exceeded expectations</p>
            </div>
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
                    {{-- <a href="#" class="btn-secondary px-8 py-4 text-lg">
                        Read More Reviews
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</section>
