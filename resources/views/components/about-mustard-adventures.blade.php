<section class="relative py-24 bg-gradient-to-br from-gray-50 via-white to-gray-100 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0"
            style="background-image:
            radial-gradient(circle at 20% 50%, var(--color-primary) 2px, transparent 2px),
            radial-gradient(circle at 80% 50%, var(--color-accent) 1px, transparent 1px),
            radial-gradient(circle at 40% 20%, var(--color-teal) 1px, transparent 1px),
            radial-gradient(circle at 60% 80%, var(--color-secondary) 1px, transparent 1px);
            background-size: 120px 120px, 80px 80px, 100px 100px, 90px 90px;">
        </div>
    </div>

    <!-- Decorative Elements -->
    <div
        class="absolute top-20 right-12 w-28 h-28 border-2 border-primary/20 rounded-full floating-element hidden lg:block">
    </div>
    <div class="absolute bottom-40 left-16 w-24 h-24 border-2 border-accent/20 rounded-full floating-element hidden lg:block"
        style="animation-delay: -2s;"></div>
    <div class="absolute top-1/2 left-1/4 w-20 h-20 border-2 border-teal/20 rounded-full floating-element hidden lg:block"
        style="animation-delay: -4s;"></div>
    <div class="absolute bottom-32 right-1/3 w-16 h-16 bg-secondary/10 rounded-full floating-element hidden lg:block"
        style="animation-delay: -1s;"></div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20 fade-in-up">
            <!-- Section Badge -->
            <div class="inline-flex items-center px-6 py-3 glass-card mb-6">
                <svg class="w-5 h-5 text-secondary mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                </svg>
                <span class="font-heading text-sm font-semibold text-secondary tracking-wider uppercase">Our
                    Story</span>
            </div>

            <!-- Main Heading -->
            <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold text-secondary mb-6">
                About
                <span
                    class="text-primary font-accent block text-5xl md:text-6xl lg:text-7xl transform -rotate-1 mt-2">Mustard
                    Adventures</span>
            </h2>

            <!-- Mission Statement -->
            <p class="font-body text-lg md:text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed mb-8">
                Born from a passion for Kenya's wild beauty and rich culture, we're dedicated to creating transformative
                adventures that connect travelers with the authentic heart of East Africa.
            </p>
        </div>

        <!-- Founder Story Section -->
        {{-- <div class="mb-20 fade-in-up-delay">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Founder Photo -->
                <div class="relative">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="James Mwangi - Founder" class="w-full h-[500px] object-cover">

                        <!-- Overlay with quote -->
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6">
                            <div class="text-white">
                                <p class="font-accent text-lg mb-2">"Every adventure tells a story"</p>
                                <p class="text-sm text-gray-300">- James Mwangi, Founder</p>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Achievement Badge -->
                    <div class="absolute -top-4 -right-4 glass-card p-4 rounded-2xl">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-primary">15+</div>
                            <div class="text-xs text-secondary">Years Leading</div>
                        </div>
                    </div>
                </div>

                <!-- Founder Story Content -->
                <div class="space-y-6">
                    <div class="glass-card p-8 rounded-3xl">
                        <h3 class="font-heading text-3xl font-bold text-secondary mb-4">Meet Our Founder</h3>
                        <h4 class="font-heading text-xl text-primary mb-6">James Mwangi</h4>

                        <div class="space-y-4 text-gray-600 leading-relaxed">
                            <p>
                                Born and raised in the shadow of Mount Kenya, James discovered his love for adventure at
                                age 12 when his grandfather, a traditional Kikuyu elder, first took him tracking
                                elephants in the Aberdare forests.
                            </p>
                            <p>
                                After studying Wildlife Management at the University of Nairobi and working as a senior
                                guide for international tour companies, James founded Mustard Adventures in 2009 with a
                                simple mission: to share Kenya's incredible biodiversity and rich cultural heritage with
                                the world.
                            </p>
                            <p>
                                "I named it Mustard Adventures because, like the mustard seed, small beginnings can grow
                                into something extraordinary. Every guest who joins us becomes part of our extended
                                family."
                            </p>
                        </div>

                        <!-- Founder Credentials -->
                        <div class="grid grid-cols-2 gap-4 mt-6 pt-6 border-t border-gray-200">
                            <div class="text-center">
                                <div class="text-lg font-bold text-primary">5000+</div>
                                <div class="text-sm text-gray-500">Guests Guided</div>
                            </div>
                            <div class="text-center">
                                <div class="text-lg font-bold text-primary">50+</div>
                                <div class="text-sm text-gray-500">Countries Visited</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Team Section -->
        {{-- <div class="mb-20 fade-in-up-delay-2">
            <div class="text-center mb-12">
                <h3 class="font-heading text-3xl md:text-4xl font-bold text-secondary mb-4">
                    Meet Our Expert
                    <span class="text-primary font-accent">Team</span>
                </h3>
                <p class="font-body text-lg text-gray-600 max-w-3xl mx-auto">
                    Our passionate guides are the heart of Mustard Adventures. Each brings unique expertise, local
                    knowledge, and an infectious love for Kenya's wilderness.
                </p>
            </div>

            <!-- Team Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Team Member 1 -->
                <div class="glass-card p-6 rounded-3xl interactive-card group">
                    <div class="relative mb-6">
                        <div
                            class="w-24 h-24 rounded-full overflow-hidden mx-auto ring-4 ring-primary/20 group-hover:ring-primary/40 transition-all duration-300">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80"
                                alt="Samuel Kiprop" class="w-full h-full object-cover">
                        </div>

                        <!-- Specialty Badge -->
                        <div
                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-primary text-white px-3 py-1 rounded-full text-xs font-medium">
                            Safari Expert
                        </div>
                    </div>

                    <div class="text-center">
                        <h4 class="font-heading text-xl font-bold text-secondary mb-1">Samuel Kiprop</h4>
                        <p class="text-primary text-sm font-medium mb-3">Senior Safari Guide</p>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            12 years of experience in Masai Mara. Samuel's eagle eye for spotting wildlife and deep
                            knowledge of animal behavior make every safari unforgettable.
                        </p>

                        <!-- Certifications -->
                        <div class="flex flex-wrap justify-center gap-2 mb-4">
                            <span class="px-2 py-1 bg-secondary/10 text-secondary text-xs rounded-full">Wildlife
                                Expert</span>
                            <span class="px-2 py-1 bg-accent/10 text-accent text-xs rounded-full">Photography
                                Guide</span>
                        </div>

                        <!-- Languages -->
                        <div class="text-xs text-gray-500">
                            <span class="font-medium">Languages:</span> English, Swahili, Kalenjin, German
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="glass-card p-6 rounded-3xl interactive-card group">
                    <div class="relative mb-6">
                        <div
                            class="w-24 h-24 rounded-full overflow-hidden mx-auto ring-4 ring-teal/20 group-hover:ring-teal/40 transition-all duration-300">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80"
                                alt="Grace Wanjiku" class="w-full h-full object-cover">
                        </div>

                        <div
                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-teal text-white px-3 py-1 rounded-full text-xs font-medium">
                            Cultural Guide
                        </div>
                    </div>

                    <div class="text-center">
                        <h4 class="font-heading text-xl font-bold text-secondary mb-1">Grace Wanjiku</h4>
                        <p class="text-teal text-sm font-medium mb-3">Cultural Heritage Specialist</p>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Born in a Maasai community, Grace bridges cultures with grace and authenticity. Her
                            storytelling brings Kenya's rich traditions to life.
                        </p>

                        <div class="flex flex-wrap justify-center gap-2 mb-4">
                            <span class="px-2 py-1 bg-teal/10 text-teal text-xs rounded-full">Cultural Expert</span>
                            <span class="px-2 py-1 bg-primary/10 text-primary text-xs rounded-full">Storyteller</span>
                        </div>

                        <div class="text-xs text-gray-500">
                            <span class="font-medium">Languages:</span> English, Swahili, Maasai, French
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="glass-card p-6 rounded-3xl interactive-card group">
                    <div class="relative mb-6">
                        <div
                            class="w-24 h-24 rounded-full overflow-hidden mx-auto ring-4 ring-accent/20 group-hover:ring-accent/40 transition-all duration-300">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80"
                                alt="David Kimani" class="w-full h-full object-cover">
                        </div>

                        <div
                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-accent text-white px-3 py-1 rounded-full text-xs font-medium">
                            Mountain Guide
                        </div>
                    </div>

                    <div class="text-center">
                        <h4 class="font-heading text-xl font-bold text-secondary mb-1">David Kimani</h4>
                        <p class="text-accent text-sm font-medium mb-3">Mountain Expedition Leader</p>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Summit specialist with 200+ successful Mount Kenya climbs. David's safety-first approach and
                            motivational spirit get everyone to the top.
                        </p>

                        <div class="flex flex-wrap justify-center gap-2 mb-4">
                            <span class="px-2 py-1 bg-accent/10 text-accent text-xs rounded-full">Alpine
                                Certified</span>
                            <span class="px-2 py-1 bg-secondary/10 text-secondary text-xs rounded-full">Rescue
                                Trained</span>
                        </div>

                        <div class="text-xs text-gray-500">
                            <span class="font-medium">Languages:</span> English, Swahili, Kikuyu
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Company Values -->
        <div class="mb-20 fade-in-up-delay-3">
            <div class="text-center mb-12">
                <h3 class="font-heading text-3xl md:text-4xl font-bold text-secondary mb-4">
                    Our Core
                    <span class="text-primary font-accent">Values</span>
                </h3>
                <p class="font-body text-lg text-gray-600 max-w-3xl mx-auto">
                    These principles guide every adventure we create and every relationship we build.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Value 1 -->
                <div class="glass-card p-6 rounded-3xl text-center interactive-card group">
                    <div
                        class="w-16 h-16 bg-primary/20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="font-heading text-lg font-bold text-secondary mb-2">Authenticity</h4>
                    <p class="text-gray-600 text-sm">Real experiences, genuine connections, and honest storytelling in
                        everything we do.</p>
                </div>

                <!-- Value 2 -->
                <div class="glass-card p-6 rounded-3xl text-center interactive-card group">
                    <div
                        class="w-16 h-16 bg-teal/20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-teal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="font-heading text-lg font-bold text-secondary mb-2">Safety First</h4>
                    <p class="text-gray-600 text-sm">Comprehensive safety protocols and emergency preparedness for
                        every adventure.</p>
                </div>

                <!-- Value 3 -->
                <div class="glass-card p-6 rounded-3xl text-center interactive-card group">
                    <div
                        class="w-16 h-16 bg-accent/20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9m0 9c-5 0-9-4-9-9s4-9 9-9">
                            </path>
                        </svg>
                    </div>
                    <h4 class="font-heading text-lg font-bold text-secondary mb-2">Sustainability</h4>
                    <p class="text-gray-600 text-sm">Protecting Kenya's environment and supporting local communities
                        for future generations.</p>
                </div>

                <!-- Value 4 -->
                <div class="glass-card p-6 rounded-3xl text-center interactive-card group">
                    <div
                        class="w-16 h-16 bg-secondary/20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-heading text-lg font-bold text-secondary mb-2">Excellence</h4>
                    <p class="text-gray-600 text-sm">Exceeding expectations through attention to detail and passionate
                        service.</p>
                </div>
            </div>
        </div>

        <!-- Certifications & Awards -->
        <div class="fade-in-up-delay-3">
            {{-- <div class="text-center mb-12">
                <h3 class="font-heading text-3xl md:text-4xl font-bold text-secondary mb-4">
                    Certifications &
                    <span class="text-primary font-accent">Awards</span>
                </h3>
                <p class="font-body text-lg text-gray-600 max-w-3xl mx-auto">
                    Our commitment to excellence is recognized by leading industry organizations and safety authorities.
                </p>
            </div> --}}

            <!-- Certifications Grid -->
            {{-- <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 mb-12">
                <!-- Certification 1 -->
                <div class="glass-card p-4 rounded-2xl text-center interactive-card group">
                    <div
                        class="w-12 h-12 bg-primary/20 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                            </path>
                        </svg>
                    </div>
                    <h5 class="font-heading text-sm font-bold text-secondary mb-1">KWS Licensed</h5>
                    <p class="text-xs text-gray-500">Kenya Wildlife Service</p>
                </div>

                <!-- Certification 2 -->
                <div class="glass-card p-4 rounded-2xl text-center interactive-card group">
                    <div
                        class="w-12 h-12 bg-teal/20 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-teal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h5 class="font-heading text-sm font-bold text-secondary mb-1">IATA Certified</h5>
                    <p class="text-xs text-gray-500">Travel Agent</p>
                </div>

                <!-- Certification 3 -->
                <div class="glass-card p-4 rounded-2xl text-center interactive-card group">
                    <div
                        class="w-12 h-12 bg-accent/20 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <h5 class="font-heading text-sm font-bold text-secondary mb-1">First Aid</h5>
                    <p class="text-xs text-gray-500">Wilderness Certified</p>
                </div>

                <!-- Award 1 -->
                <div class="glass-card p-4 rounded-2xl text-center interactive-card group">
                    <div
                        class="w-12 h-12 bg-primary/20 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-primary fill-current" viewBox="0 0 24 24">
                            <path
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                            </path>
                        </svg>
                    </div>
                    <h5 class="font-heading text-sm font-bold text-secondary mb-1">Best Safari</h5>
                    <p class="text-xs text-gray-500">Kenya Tourism 2023</p>
                </div>

                <!-- Award 2 -->
                <div class="glass-card p-4 rounded-2xl text-center interactive-card group">
                    <div
                        class="w-12 h-12 bg-teal/20 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-teal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9m0 9c-5 0-9-4-9-9s4-9 9-9">
                            </path>
                        </svg>
                    </div>
                    <h5 class="font-heading text-sm font-bold text-secondary mb-1">Eco Tourism</h5>
                    <p class="text-xs text-gray-500">Excellence Award</p>
                </div>

                <!-- Award 3 -->
                <div class="glass-card p-4 rounded-2xl text-center interactive-card group">
                    <div
                        class="w-12 h-12 bg-accent/20 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z">
                            </path>
                        </svg>
                    </div>
                    <h5 class="font-heading text-sm font-bold text-secondary mb-1">Top Rated</h5>
                    <p class="text-xs text-gray-500">TripAdvisor 2024</p>
                </div>
            </div> --}}

            <!-- Company Stats -->
            <div class="glass-card p-8 rounded-3xl">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div>
                        <div class="text-3xl md:text-4xl font-bold text-primary mb-2">7+</div>
                        <div class="text-sm text-gray-600">Years of Excellence</div>
                    </div>
                    <div>
                        <div class="text-3xl md:text-4xl font-bold text-teal mb-2">250+</div>
                        <div class="text-sm text-gray-600">Happy Adventurers</div>
                    </div>
                    <div>
                        <div class="text-3xl md:text-4xl font-bold text-accent mb-2">100%</div>
                        <div class="text-sm text-gray-600">Safety Record</div>
                    </div>
                    <div>
                        <div class="text-3xl md:text-4xl font-bold text-secondary mb-2">50+</div>
                        <div class="text-sm text-gray-600">Destinations Covered</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
