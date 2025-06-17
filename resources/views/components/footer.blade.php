<footer class="relative bg-gradient-to-br from-gray-900 via-secondary to-gray-800 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0"
            style="background-image:
            radial-gradient(circle at 25% 25%, var(--color-primary) 2px, transparent 2px),
            radial-gradient(circle at 75% 75%, var(--color-accent) 1px, transparent 1px),
            radial-gradient(circle at 50% 50%, var(--color-teal) 1px, transparent 1px);
            background-size: 120px 120px, 80px 80px, 100px 100px;">
        </div>
    </div>

    <!-- Main Footer Content -->
    <div class="relative z-10 pt-16 pb-8">
        <div class="container mx-auto px-6">

            <!-- Top Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Company Info -->
                <div class="lg:col-span-1">
                    <div class="mb-6 flex flex-col items-center space-y-1">
                        <div class=" group-hover:scale-110 transition-transform duration-300">
                            <img src="{{ asset('images/logo-dark.png') }}" alt="Mustard Adventures Logo"
                                class="w-48 h-48 flex items-center justify-center object-contain">
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="font-heading text-lg font-bold text-white mb-4">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="#"
                                class="text-gray-300 hover:text-primary transition-colors duration-300">Home</a></li>
                        <li><a href="#"
                                class="text-gray-300 hover:text-primary transition-colors duration-300">Adventures</a>
                        </li>
                        <li><a href="#"
                                class="text-gray-300 hover:text-primary transition-colors duration-300">About Us</a>
                        </li>
                        <li><a href="#"
                                class="text-gray-300 hover:text-primary transition-colors duration-300">Gallery</a></li>
                        <li><a href="#"
                                class="text-gray-300 hover:text-primary transition-colors duration-300">Travel Blog</a>
                        </li>
                        <li><a href="#"
                                class="text-gray-300 hover:text-primary transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>

                <!-- Adventure Types -->
                <div>
                    <h4 class="font-heading text-lg font-bold text-white mb-4">Adventures</h4>
                    <ul class="space-y-3">
                        <li><a href="#"
                                class="text-gray-300 hover:text-primary transition-colors duration-300">Safari Tours</a>
                        </li>
                        <li><a href="#"
                                class="text-gray-300 hover:text-primary transition-colors duration-300">Mountain
                                Hiking</a></li>
                        <li><a href="{#"
                                class="text-gray-300 hover:text-primary transition-colors duration-300">Cultural
                                Tours</a></li>
                        <li><a href="#"
                                class="text-gray-300 hover:text-primary transition-colors duration-300">Beach &
                                Coastal</a></li>
                        <li><a href="#"
                                class="text-gray-300 hover:text-primary transition-colors duration-300">Water
                                Rafting</a></li>
                        <li><a href="#"
                                class="text-gray-300 hover:text-primary transition-colors duration-300">Custom
                                Adventures</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="font-heading text-lg font-bold text-white mb-4">Get In Touch</h4>
                    <div class="space-y-4">
                        <!-- Phone -->
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-primary/20 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <a href="tel:+254710136271"
                                    class="text-gray-300 hover:text-primary transition-colors duration-300">+254 710 136
                                    271</a>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-teal/20 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-4 h-4 text-teal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <a href="mailto:info@mustardadventures.com"
                                    class="text-gray-300 hover:text-primary transition-colors duration-300">info@mustardadventures.com</a>
                            </div>
                        </div>

                        <!-- WhatsApp -->
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-green-500/20 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                                </svg>
                            </div>
                            <div>
                                <a href="https://wa.me/254710136271"
                                    class="text-gray-300 hover:text-primary transition-colors duration-300">WhatsApp
                                    Us</a>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-accent/20 rounded-lg flex items-center justify-center mr-3 mt-1">
                                <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div class="text-gray-300">
                                <p>Nairobi</p>
                                {{-- <p>P.O. Box 12345</p> --}}
                                <p>Kenya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Newsletter Signup -->
            <div class="border-t border-gray-700 pt-8 mb-8">
                <div class="max-w-2xl mx-auto text-center">
                    <h4 class="font-heading text-xl font-bold text-white mb-4">Stay Updated with Our Adventures</h4>
                    <p class="text-gray-300 mb-6">Get exclusive travel tips, early access to new tours, and special
                        offers delivered to your inbox.</p>

                    <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                        <input type="email" placeholder="Enter your email"
                            class="flex-1 px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-primary focus:bg-white/20 transition-all duration-300">
                        <button type="submit" class="btn-primary px-6 py-3 whitespace-nowrap">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>

            <!-- Social Media & Bottom -->
            <div class="border-t border-gray-700 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">

                    <!-- Social Media -->
                    <div class="flex space-x-4 mb-6 md:mb-0">
                        <a href="https://www.instagram.com/mustard_adventures/"
                        target="_blank"
                            class="w-10 h-10 bg-pink-500/20 rounded-lg flex items-center justify-center hover:bg-pink-500/30 transition-all duration-300 group">
                            <svg class="w-5 h-5 text-pink-400 group-hover:scale-110 transition-transform duration-300"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987s11.987-5.367 11.987-11.987C24.004 5.367 18.637.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.323-1.297C4.198 14.864 3.708 13.713 3.708 12.416s.49-2.448 1.418-3.323c.875-.807 2.026-1.297 3.323-1.297s2.448.49 3.323 1.297c.928.875 1.418 2.026 1.418 3.323s-.49 2.448-1.418 3.275c-.875.807-2.026 1.297-3.323 1.297zm7.83-9.608c-.807 0-1.418-.611-1.418-1.418s.611-1.418 1.418-1.418 1.418.611 1.418 1.418-.611 1.418-1.418 1.418zM12.017 7.729c-2.585 0-4.687 2.102-4.687 4.687s2.102 4.687 4.687 4.687 4.687-2.102 4.687-4.687-2.102-4.687-4.687-4.687z" />
                            </svg>
                        </a>

                        <a href="https://www.facebook.com/people/Mustard-Adventures/61576743444132/"
                        target="_blanks"
                            class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center hover:bg-blue-500/30 transition-all duration-300 group">
                            <svg class="w-5 h-5 text-blue-400 group-hover:scale-110 transition-transform duration-300"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>

                        {{-- <a href="https://twitter.com/mustardadventures"
                            class="w-10 h-10 bg-sky-500/20 rounded-lg flex items-center justify-center hover:bg-sky-500/30 transition-all duration-300 group">
                            <svg class="w-5 h-5 text-sky-400 group-hover:scale-110 transition-transform duration-300"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a> --}}

                        {{-- <a href="https://youtube.com/mustardadventures"
                            class="w-10 h-10 bg-red-500/20 rounded-lg flex items-center justify-center hover:bg-red-500/30 transition-all duration-300 group">
                            <svg class="w-5 h-5 text-red-400 group-hover:scale-110 transition-transform duration-300"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a> --}}

                        <a href="https://tiktok.com/@mustard_adventures"
                        target="_blank"
                            class="w-10 h-10 bg-gray-800/20 rounded-lg flex items-center justify-center hover:bg-gray-800/30 transition-all duration-300 group">
                            <svg class="w-5 h-5 text-white group-hover:scale-110 transition-transform duration-300"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                            </svg>
                        </a>
                    </div>

                    <!-- Copyright & Links -->
                    <div class="text-center md:text-right">
                        <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-6 mb-2">
                            <a href="#"
                                class="text-gray-400 hover:text-primary transition-colors duration-300 text-sm">Privacy
                                Policy</a>
                            <a href="#"
                                class="text-gray-400 hover:text-primary transition-colors duration-300 text-sm">Terms
                                of Service</a>
                            <a href="#"
                                class="text-gray-400 hover:text-primary transition-colors duration-300 text-sm">Sitemap</a>
                        </div>
                        <p class="text-gray-400 text-sm">
                            © {{ date('Y') }} Mustard Adventures. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Emergency Contact Strip -->
    <div class="bg-accent/90 py-3">
        <div class="container mx-auto px-6">
            <div class="flex flex-col sm:flex-row items-center justify-center text-center sm:text-left">
                <div class="flex items-center mb-2 sm:mb-0 sm:mr-6">
                    <svg class="w-5 h-5 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.732-.833-2.464 0L4.35 16.5c-.77.833.192 2.5 1.732 2.5z">
                        </path>
                    </svg>
                    <span class="text-white font-medium text-sm">24/7 Emergency Support:</span>
                </div>
                <div class="flex flex-col sm:flex-row items-center space-y-1 sm:space-y-0 sm:space-x-4">
                    <a href="tel:+254700123456"
                        class="text-white font-bold hover:text-yellow-200 transition-colors duration-300">+254 710 136
                        271</a>
                    {{-- <span class="text-white/80 text-sm hidden sm:inline">|</span> --}}
                    {{-- <span class="text-white/80 text-sm">Satellite: +881 123 456 789</span> --}}
                </div>
            </div>
        </div>
    </div>
</footer>
