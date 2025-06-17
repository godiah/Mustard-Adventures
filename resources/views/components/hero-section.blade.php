<section class="relative min-h-screen w-full overflow-hidden p-6">
    <!-- Dynamic Background with Parallax Effect -->
    {{-- <div class="absolute inset-0 bg-gradient-to-br from-secondary via-earth to-secondary-light parallax-bg"
        style="background-image: url('https://images.unsplash.com/photo-1516426122078-c23e76319801?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2068&q=80'); background-blend-mode: overlay;">
    </div> --}}
    <div class="carousel-container parallax-bg">
        <!-- Safari/Wildlife Image -->
        <div class="carousel-slide active" style="background-image: url('{{ asset('images/safari.jpg') }}')"></div>

        <!-- Mountain Climbing Image -->
        <div class="carousel-slide" style="background-image: url('{{ asset('images/mountain.jpg') }}')"></div>

        <!-- Cultural Tours Image -->
        <div class="carousel-slide" style="background-image: url('{{ asset('images/beach.jpg') }}')"></div>

        <!-- Adventure Hiking Image -->
        <div class="carousel-slide" style="background-image: url('{{ asset('images/mountain-2.jpg') }}')"></div>

        <!-- Scenic Landscapes Image -->
        <div class="carousel-slide" style="background-image: url('{{ asset('images/safari-2.jpg') }}')"></div>
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

            <!-- Enhanced Subheading -->
            <div class="fade-in-up-delay-2 mb-12">
                <p class="font-body text-base md:text-xl text-gray-100 max-w-5xl mx-auto leading-relaxed mb-6">
                    Expert-guided tours, thrilling hikes, and authentic outdoor experiences across Kenya's most
                    spectacular destinations
                </p>

                <!-- Experience Highlights -->
                <div
                    class="flex flex-wrap justify-center gap-4 text-sm md:text-base font-accent text-white tracking-wide">
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

            <!-- Enhanced CTA Buttons -->
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

            <!-- Enhanced Trust Indicators with Modern Cards -->
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
                            <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z">
                                </path>
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

            <!-- Enhanced Scroll Indicator -->
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

<!-- JavaScript for Enhanced Interactions -->
<script>
    // Carousel functionality
    class BackgroundCarousel {
        constructor() {
            this.slides = document.querySelectorAll('.carousel-slide');
            this.indicators = document.querySelectorAll('.carousel-indicator');
            this.currentSlide = 0;
            this.slideInterval = 5000; // 5 seconds
            this.intervalId = null;

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

            this.startAutoSlide();

            this.indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    this.goToSlide(index);
                    this.resetAutoSlide();
                });
            });

            const heroSection = document.querySelector('section');
            heroSection.addEventListener('mouseenter', () => this.pauseAutoSlide());
            heroSection.addEventListener('mouseleave', () => this.startAutoSlide());
        }

        goToSlide(slideIndex) {
            this.slides[this.currentSlide].classList.remove('active');
            this.indicators[this.currentSlide].classList.remove('active');

            this.currentSlide = slideIndex;

            this.slides[this.currentSlide].classList.add('active');
            this.indicators[this.currentSlide].classList.add('active');
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
    }

    document.addEventListener('DOMContentLoaded', () => {
        new BackgroundCarousel();
    });

    // Initialize carousel when DOM is loaded
    document.addEventListener('DOMContentLoaded', () => {
        new BackgroundCarousel();
    });

    // Parallax scrolling effect
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.parallax-bg');

        parallaxElements.forEach(element => {
            const speed = 0.5;
            element.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });

    // Interactive button effects
    document.querySelectorAll('.btn-primary, .btn-secondary').forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px) scale(1.05)';
        });

        button.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Floating elements animation randomization
    document.querySelectorAll('.floating-element').forEach((element, index) => {
        const delay = (index * 0.5) + Math.random() * 2;
        element.style.animationDelay = `-${delay}s`;
    });

    // Interactive stats counter animation (when visible)
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px 0px -100px 0px'
    };

    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const number = entry.target.querySelector('.text-3xl');
                const finalNumber = parseInt(number.textContent);
                let currentNumber = 0;
                const increment = finalNumber / 50;

                const counter = setInterval(() => {
                    currentNumber += increment;
                    if (currentNumber >= finalNumber) {
                        number.textContent = finalNumber + (number.textContent.includes('+') ?
                            '+' : number.textContent.includes('.') ? '.9' : '%');
                        clearInterval(counter);
                    } else {
                        number.textContent = Math.floor(currentNumber) + (number.textContent
                            .includes('+') ? '+' : number.textContent.includes('.') ? '.0' :
                            '%');
                    }
                }, 50);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.glass-card').forEach(card => {
        statsObserver.observe(card);
    });

    // Smooth scroll for scroll indicator
    document.querySelector('.animate-bounce').addEventListener('click', function() {
        window.scrollTo({
            top: window.innerHeight,
            behavior: 'smooth'
        });
    });
</script>
