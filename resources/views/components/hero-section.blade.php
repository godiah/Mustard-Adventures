<section class="relative min-h-screen w-full overflow-hidden p-6">
    <!-- Dynamic Background with Parallax Effect -->
    {{-- <div class="absolute inset-0 bg-gradient-to-br from-secondary via-earth to-secondary-light parallax-bg"
        style="background-image: url('https://images.unsplash.com/photo-1516426122078-c23e76319801?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2068&q=80'); background-blend-mode: overlay;">
    </div> --}}
    <div class="carousel-container parallax-bg">
        <!-- Safari/Wildlife:Giraffes Images -->
        <div class="carousel-slide active" style="background-image: url('{{ asset('images/new-giraffes.jpg') }}')"
            loading="lazy" role="img" aria-label="Giraffes in their natural safari habitat"></div>

        <!-- Beach Image -->
        <div class="carousel-slide" style="background-image: url('{{ asset('images/beach.jpg') }}')" loading="lazy"
            role="img" aria-label="Beautiful beach landscape view"></div>

        <!-- Scenic Landscapes Image: Zebras Images -->
        <div class="carousel-slide" style="background-image: url('{{ asset('images/safari-2.jpg') }}')" loading="lazy"
            role="img" aria-label="Zebras in their natural safari habitat"></div>

        <!-- Giraffes Park Image -->
        <div class="carousel-slide" style="background-image: url('{{ asset('images/tourist.jpg') }}')" loading="lazy"
            role="img" aria-label="Tourists interacting with wildlife"></div>

        <!-- Tour Van Image -->
        <div class="carousel-slide" style="background-image: url('{{ asset('images/mustard-adventures.jpg') }}')"
            loading="lazy" role="img" aria-label="Mustard Adventures Tour Van"></div>
    </div>

    <!-- Animated Overlay Gradient -->
    <div class="absolute inset-0 bg-gradient-overlay opacity-80"></div>

    <!-- Floating Geometric Elements -->
    <div
        class="absolute top-20 left-10 w-24 h-24 border-2 border-primary/40 rounded-full floating-element hidden lg:block pulse-glow">
    </div>
    <div class="absolute bottom-32 right-16 w-20 h-20 border-2 border-accent/40 rounded-full floating-element hidden lg:block"
        style="animation-delay: -2s;"></div>
    <div class="absolute top-1/2 right-1/4 w-16 h-16 border-2 border-teal/40 rounded-full floating-element hidden lg:block"
        style="animation-delay: -4s;"></div>
    <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-primary/20 rounded-full floating-element hidden lg:block"
        style="animation-delay: -1s;"></div>

    <!-- Hero Content Container -->
    <div class="relative z-20 h-full flex items-center justify-center">
        <div class="container mx-auto px-6 text-center">

            <!-- Brand Badge -->
            <div class="fade-in-up mb-2">
                <div class="inline-flex items-center px-4 py-2 glass-card">
                    <svg class="w-3 h-3 text-primary mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="font-heading text-xs font-semibold text-light tracking-wider uppercase">Kenya's Premier
                        Adventure Guide</span>
                </div>
            </div>

            <!-- Main Headline with Staggered Animation -->
            <div class="fade-in-up-delay mb-8">
                <h1
                    class="font-heading font-bold text-white leading-tight mb-2 text-xl sm:text-2xl md:text-3xl lg:text-4xl">
                    Discover Kenya's
                </h1>
                <div class="relative">
                    <span
                        class="text-primary font-accent block transform -rotate-2 mb-4 text-5xl sm:text-6xl md:text-7xl lg:text-8xl">Wild
                        Heart</span>
                    <div class="absolute -top-2 -right-4 text-accent text-6xl opacity-20 hidden lg:block">✦</div>
                </div>
                <h2 class="font-heading font-bold text-white opacity-90 text-3xl sm:text-4xl md:text-5xl lg:text-6xl">
                    with Mustard Adventures
                </h2>
            </div>

            <!-- Subheading -->
            <div class="fade-in-up-delay-2 mb-12">
                <p class="font-body text-base md:text-xl text-gray-100 max-w-5xl mx-auto leading-relaxed mb-6">
                    Expert-guided tours, thrilling hikes, and authentic outdoor experiences across Kenya's most
                    spectacular destinations
                </p>

                <!-- Experience Highlights -->
                <div
                    class="hidden md:flex flex-wrap justify-center gap-4 text-sm md:text-base font-accent text-white tracking-wide">
                    <span class="inline-flex items-center px-4 py-2 glass-card rounded-full">
                        <span class="w-2 h-2 bg-primary rounded-full mr-2"></span>
                        Safari Expeditions
                    </span>
                    <span class="inline-flex items-center px-4 py-2 glass-card rounded-full">
                        <span class="w-2 h-2 bg-accent rounded-full mr-2"></span>
                        Mountain Climbing
                    </span>
                    <span class="inline-flex items-center px-4 py-2 glass-card rounded-full">
                        <span class="w-2 h-2 bg-teal rounded-full mr-2"></span>
                        Cultural Tours
                    </span>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="fade-in-up-delay-2 mb-16">
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="#adventures"
                        class="btn-primary text-lg px-10 py-4 min-w-[220px] font-heading group relative overflow-hidden">
                        <span class="relative z-10 flex items-center justify-center">
                            Explore Adventures
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </span>
                    </a>

                    <a href="#contact"
                        class="hidden md:block btn-secondary text-lg px-10 py-4 min-w-[220px] font-heading group relative overflow-hidden">
                        <span class="relative z-10 flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition-transform"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                            Plan My Trip
                        </span>
                    </a>
                </div>
            </div>

            <!-- Trust Indicators with Modern Cards -->
            <div class="fade-in-up-delay-2">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 max-w-5xl mx-auto">
                    <!-- Years Experience -->
                    <div class="glass-card interactive-card p-6 text-center">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-primary/20 rounded-full mb-4">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                </path>
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-primary font-heading mb-1">7+</div>
                        <div class="text-sm font-body text-gray-200 font-medium">Years Experience</div>
                    </div>

                    <!-- Safety Certified -->
                    <div class="glass-card interactive-card p-6 text-center">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-teal/20 rounded-full mb-4">
                            <svg class="w-8 h-8 text-teal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-teal font-heading mb-1">100%</div>
                        <div class="text-sm font-body text-gray-200 font-medium">Safety Certified</div>
                    </div>

                    <!-- Happy Travelers -->
                    <div class="glass-card interactive-card p-6 text-center">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-accent/20 rounded-full mb-4">
                            <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-accent font-heading mb-1">250+</div>
                        <div class="text-sm font-body text-gray-200 font-medium">Happy Travelers</div>
                    </div>

                    <!-- Average Rating -->
                    <div class="glass-card interactive-card p-6 text-center">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-primary/20 rounded-full mb-4">
                            <svg class="w-8 h-8 text-primary fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                </path>
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-primary font-heading mb-1">4.9</div>
                        <div class="text-sm font-body text-gray-200 font-medium">Average Rating</div>
                    </div>
                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
                <div class="flex flex-col items-center animate-bounce">
                    <span class="text-xs text-gray-300 mb-2 font-body">Scroll to explore</span>
                    <div
                        class="w-6 h-10 border-2 border-primary rounded-full flex justify-center relative overflow-hidden">
                        <div class="w-1 h-3 bg-primary rounded-full mt-2 animate-pulse"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel Indicators -->
    <div class="carousel-indicators">
        <div class="carousel-indicator active" data-slide="0"></div>
        <div class="carousel-indicator" data-slide="1"></div>
        <div class="carousel-indicator" data-slide="2"></div>
        <div class="carousel-indicator" data-slide="3"></div>
        <div class="carousel-indicator" data-slide="4"></div>
    </div>
</section>

<!-- JavaScript for Interactions -->
<script>
    // Optimized Carousel with Image Preloading
    class OptimizedBackgroundCarousel {
        constructor() {
            this.slides = document.querySelectorAll('.carousel-slide');
            this.indicators = document.querySelectorAll('.carousel-indicator');
            this.currentSlide = 0;
            this.slideInterval = 5000; // 5 seconds
            this.intervalId = null;
            this.preloadedImages = new Map(); // Cache for preloaded images
            this.imageUrls = []; // Store all image URLs

            this.init();
        }

        init() {
            if (this.slides.length === 0 || this.indicators.length === 0) {
                console.warn('Carousel: No slides or indicators found.');
                return;
            }
            if (this.slides.length !== this.indicators.length) {
                console.warn('Carousel: Number of slides and indicators do not match.');
            }

            // Extract image URLs from slides
            this.extractImageUrls();

            // Preload current and next images immediately
            this.preloadImages();

            this.startAutoSlide();

            this.indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    this.goToSlide(index);
                    this.resetAutoSlide();
                    // Preload images around the selected slide
                    this.preloadAdjacentImages(index);
                });
            });

            const heroSection = document.querySelector('section');
            if (heroSection) {
                heroSection.addEventListener('mouseenter', () => this.pauseAutoSlide());
                heroSection.addEventListener('mouseleave', () => this.startAutoSlide());
            }
        }

        extractImageUrls() {
            this.slides.forEach((slide, index) => {
                const backgroundImage = getComputedStyle(slide).backgroundImage;
                const urlMatch = backgroundImage.match(/url\(["']?([^"'\)]+)["']?\)/);
                if (urlMatch && urlMatch[1]) {
                    this.imageUrls[index] = urlMatch[1];
                }
            });
        }

        preloadImage(url) {
            return new Promise((resolve, reject) => {
                if (this.preloadedImages.has(url)) {
                    resolve(this.preloadedImages.get(url));
                    return;
                }

                const img = new Image();
                img.onload = () => {
                    this.preloadedImages.set(url, img);
                    resolve(img);
                };
                img.onerror = () => {
                    console.warn(`Failed to preload image: ${url}`);
                    reject(new Error(`Failed to load image: ${url}`));
                };

                // Start loading with high priority
                img.loading = 'eager';
                img.src = url;
            });
        }

        async preloadImages() {
            // Always preload current image
            if (this.imageUrls[this.currentSlide]) {
                try {
                    await this.preloadImage(this.imageUrls[this.currentSlide]);
                } catch (error) {
                    console.warn('Failed to preload current image:', error);
                }
            }

            // Preload next 2 images in background
            this.preloadAdjacentImages(this.currentSlide);
        }

        async preloadAdjacentImages(slideIndex) {
            const imagesToPreload = [];

            // Get next 2 images (with wraparound)
            for (let i = 1; i <= 2; i++) {
                const nextIndex = (slideIndex + i) % this.slides.length;
                if (this.imageUrls[nextIndex] && !this.preloadedImages.has(this.imageUrls[nextIndex])) {
                    imagesToPreload.push(this.imageUrls[nextIndex]);
                }
            }

            // Preload images in the background (non-blocking)
            imagesToPreload.forEach(url => {
                this.preloadImage(url).catch(() => {
                    // Silently handle errors for background preloading
                });
            });
        }

        goToSlide(slideIndex) {
            // Remove active class from current slide
            if (this.slides[this.currentSlide]) {
                this.slides[this.currentSlide].classList.remove('active');
            }
            if (this.indicators[this.currentSlide]) {
                this.indicators[this.currentSlide].classList.remove('active');
            }

            this.currentSlide = slideIndex;

            // Add active class to new slide
            if (this.slides[this.currentSlide]) {
                this.slides[this.currentSlide].classList.add('active');
            }
            if (this.indicators[this.currentSlide]) {
                this.indicators[this.currentSlide].classList.add('active');
            }

            // Preload next images after slide change
            this.preloadAdjacentImages(slideIndex);
        }

        nextSlide() {
            const nextIndex = (this.currentSlide + 1) % this.slides.length;
            this.goToSlide(nextIndex);
        }

        startAutoSlide() {
            this.intervalId = setInterval(() => {
                this.nextSlide();
            }, this.slideInterval);
        }

        pauseAutoSlide() {
            if (this.intervalId) {
                clearInterval(this.intervalId);
                this.intervalId = null;
            }
        }

        resetAutoSlide() {
            this.pauseAutoSlide();
            this.startAutoSlide();
        }

        // Method to preload all images at once (call this if you want to preload everything)
        async preloadAllImages() {
            const preloadPromises = this.imageUrls.map(url =>
                this.preloadImage(url).catch(() => {}) // Ignore individual failures
            );

            try {
                await Promise.allSettled(preloadPromises);
                console.log('All carousel images preloaded successfully');
            } catch (error) {
                console.warn('Some images failed to preload:', error);
            }
        }
    }

    // Initialize carousel when DOM is loaded
    document.addEventListener('DOMContentLoaded', () => {
        const carousel = new OptimizedBackgroundCarousel();

        // Optional: Preload all images on page load (uncomment if desired)
        // setTimeout(() => carousel.preloadAllImages(), 1000);
    });

    // Optimized parallax scrolling with throttling
    let ticking = false;

    function updateParallax() {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.parallax-bg');

        parallaxElements.forEach(element => {
            const speed = 0.5;
            element.style.transform = `translateY(${scrolled * speed}px)`;
        });

        ticking = false;
    }

    window.addEventListener('scroll', function() {
        if (!ticking) {
            requestAnimationFrame(updateParallax);
            ticking = true;
        }
    });

    // Interactive button effects with better performance
    document.addEventListener('DOMContentLoaded', () => {
        const buttons = document.querySelectorAll('.btn-primary, .btn-secondary');

        buttons.forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px) scale(1.05)';
                this.style.transition = 'transform 0.2s ease';
            });

            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Floating elements animation randomization
        const floatingElements = document.querySelectorAll('.floating-element');
        floatingElements.forEach((element, index) => {
            const delay = (index * 0.5) + Math.random() * 2;
            element.style.animationDelay = `-${delay}s`;
        });

        // Smooth scroll for scroll indicator
        const scrollIndicator = document.querySelector('.animate-bounce');
        if (scrollIndicator) {
            scrollIndicator.addEventListener('click', function() {
                window.scrollTo({
                    top: window.innerHeight,
                    behavior: 'smooth'
                });
            });
        }
    });

    // Optimized stats counter animation with Intersection Observer
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px 0px -100px 0px'
    };

    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const number = entry.target.querySelector('.text-3xl');
                if (!number || number.dataset.animated === 'true') return;

                // Mark as animated to prevent re-animation
                number.dataset.animated = 'true';

                const finalNumber = parseInt(number.textContent.replace(/[^\d]/g, ''));
                const suffix = number.textContent.replace(/[\d]/g, '');
                let currentNumber = 0;
                const increment = Math.max(1, finalNumber / 50);
                const duration = 2000; // 2 seconds
                const stepTime = duration / (finalNumber / increment);

                const counter = setInterval(() => {
                    currentNumber += increment;
                    if (currentNumber >= finalNumber) {
                        number.textContent = finalNumber + suffix;
                        clearInterval(counter);
                    } else {
                        number.textContent = Math.floor(currentNumber) + suffix;
                    }
                }, stepTime);
            }
        });
    }, observerOptions);

    // Observe stats cards when DOM is ready
    document.addEventListener('DOMContentLoaded', () => {
        const statsCards = document.querySelectorAll('.glass-card');
        statsCards.forEach(card => {
            statsObserver.observe(card);
        });
    });
</script>
