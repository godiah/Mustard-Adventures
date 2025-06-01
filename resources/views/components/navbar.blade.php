<nav id="navbar"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 transform -translate-y-full opacity-0">
    <!-- Glass Morphism Background -->
    <div class="absolute inset-0 navbar-blur"></div>

    <!-- Gradient Overlay for Better Contrast -->
    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 via-transparent to-amber-500/10"></div>

    <!-- Animated Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0"
            style="background-image: 
            radial-gradient(circle at 20% 50%, var(--color-primary) 1px, transparent 1px),
            radial-gradient(circle at 80% 50%, var(--color-accent) 1px, transparent 1px);
            background-size: 60px 60px, 40px 40px;">
        </div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="flex items-center justify-between h-20">

            <!-- Logo Section -->
            <div class="flex items-center space-x-3">
                <a href="#home" class="flex items-center space-x-3 group nav-link">
                    <!-- Logo Icon -->
                    <div
                        class="w-48 h-48 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <img src="{{ asset('images/logo-light.png') }}" alt="Mustard Adventures Logo"
                            class="w-full h-full object-contain">
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation Links -->
            <div class="hidden lg:flex items-center space-x-1">
                <a href="#home"
                    class="nav-link font-accent tracking-wide px-4 py-2 rounded-xl text-gray-700 hover:text-primary font-medium transition-all duration-300 relative group">
                    <span class="relative z-10">Home</span>
                    <div
                        class="absolute inset-0 bg-primary/10 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </a>

                <a href="#adventures"
                    class="nav-link font-accent tracking-wide px-4 py-2 rounded-xl text-gray-700 hover:text-primary font-medium transition-all duration-300 relative group">
                    <span class="relative z-10">Adventures</span>
                    <div
                        class="absolute inset-0 bg-primary/10 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </a>

                <a href="#gallery"
                    class="nav-link font-accent tracking-wide px-4 py-2 rounded-xl text-gray-700 hover:text-primary font-medium transition-all duration-300 relative group">
                    <span class="relative z-10">Gallery</span>
                    <div
                        class="absolute inset-0 bg-primary/10 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </a>

                <a href="#about"
                    class="nav-link font-accent tracking-wide px-4 py-2 rounded-xl text-gray-700 hover:text-primary font-medium transition-all duration-300 relative group">
                    <span class="relative z-10">About</span>
                    <div
                        class="absolute inset-0 bg-primary/10 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </a>

                <a href="#contact"
                    class="nav-link font-accent tracking-wide px-4 py-2 rounded-xl text-gray-700 hover:text-primary font-medium transition-all duration-300 relative group">
                    <span class="relative z-10">Contact</span>
                    <div
                        class="absolute inset-0 bg-primary/10 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </a>

                <!-- CTA Button -->
                <div class="ml-4">
                    <a href="#contact" class="btn-primary px-6 py-2 text-sm font-medium">
                        Book Now
                    </a>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
                <button id="mobile-menu-button"
                    class="w-10 h-10 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center hover:bg-white/30 transition-all duration-300">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Active Section Indicator -->
    <div class="absolute bottom-0 left-0 h-1 bg-gradient-to-r from-primary to-accent transition-all duration-500"
        id="nav-indicator"></div>
</nav>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu" class="fixed inset-0 z-40 lg:hidden transform translate-x-full transition-transform duration-300">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

    <!-- Menu Panel -->
    <div class="absolute right-0 top-0 h-full w-80 max-w-full bg-white/95 backdrop-blur-xl shadow-2xl overflow-scroll">
        <!-- Header -->
        <div class="flex items-center justify-between p-6 border-b border-gray-200">
            <div class="flex items-center space-x-3">
                <div>
                    <h2 class="font-accent text-lg text-primary">Mustard Adventures</h2>
                    <p class="font-body text-xs text-gray-600">Turning every dream into a safari</p>
                </div>
            </div>

            <button id="mobile-menu-close"
                class="w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center hover:bg-gray-200 transition-colors duration-300">
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Navigation Links -->
        <div class="p-6 space-y-2">
            <a href="#home"
                class="mobile-nav-link flex items-center space-x-4 p-4 rounded-xl hover:bg-primary/10 transition-all duration-300 group">
                <div
                    class="w-10 h-10 bg-primary/20 rounded-lg flex items-center justify-center group-hover:bg-primary/30 transition-colors duration-300">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                </div>
                <div>
                    <span
                        class="font-heading font-medium text-gray-800 group-hover:text-primary transition-colors duration-300">Home</span>
                    <p class="font-accent text-sm text-gray-500">Hero & Welcome</p>
                </div>
            </a>

            <a href="#adventures"
                class="mobile-nav-link flex items-center space-x-4 p-4 rounded-xl hover:bg-primary/10 transition-all duration-300 group">
                <div
                    class="w-10 h-10 bg-accent/20 rounded-lg flex items-center justify-center group-hover:bg-accent/30 transition-colors duration-300">
                    <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <div>
                    <span
                        class="font-heading font-medium text-gray-800 group-hover:text-primary transition-colors duration-300">Adventures</span>
                    <p class="font-accent text-sm text-gray-500">Tours & Expeditions</p>
                </div>
            </a>

            <a href="#gallery"
                class="mobile-nav-link flex items-center space-x-4 p-4 rounded-xl hover:bg-primary/10 transition-all duration-300 group">
                <div
                    class="w-10 h-10 bg-teal/20 rounded-lg flex items-center justify-center group-hover:bg-teal/30 transition-colors duration-300">
                    <svg class="w-5 h-5 text-teal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <div>
                    <span
                        class="font-heading font-medium text-gray-800 group-hover:text-primary transition-colors duration-300">Gallery</span>
                    <p class="font-accent text-sm text-gray-500">Photos & Reviews</p>
                </div>
            </a>

            <a href="#about"
                class="mobile-nav-link flex items-center space-x-4 p-4 rounded-xl hover:bg-primary/10 transition-all duration-300 group">
                <div
                    class="w-10 h-10 bg-secondary/20 rounded-lg flex items-center justify-center group-hover:bg-secondary/30 transition-colors duration-300">
                    <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                </div>
                <div>
                    <span
                        class="font-heading font-medium text-gray-800 group-hover:text-primary transition-colors duration-300">About</span>
                    <p class="font-accent text-sm text-gray-500">Our Story & Team</p>
                </div>
            </a>

            <a href="#contact"
                class="mobile-nav-link flex items-center space-x-4 p-4 rounded-xl hover:bg-primary/10 transition-all duration-300 group">
                <div
                    class="w-10 h-10 bg-primary/20 rounded-lg flex items-center justify-center group-hover:bg-primary/30 transition-colors duration-300">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                        </path>
                    </svg>
                </div>
                <div>
                    <span
                        class="font-heading font-medium text-gray-800 group-hover:text-primary transition-colors duration-300">Contact</span>
                    <p class="font-accent text-sm text-gray-500">Get In Touch</p>
                </div>
            </a>
        </div>

        <!-- CTA Section -->
        <div class="p-6 border-t border-gray-200">
            <a href="#contact" class="w-full btn-primary py-3 text-center block">
                Book Your Adventure
            </a>

            <!-- Emergency Contact -->
            <div class="mt-4 p-4 bg-accent/10 rounded-xl">
                <div class="flex items-center space-x-2 mb-2">
                    <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.732-.833-2.464 0L4.35 16.5c-.77.833.192 2.5 1.732 2.5z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium text-accent">24/7 Emergency</span>
                </div>
                <a href="tel:+254700123456"
                    class="text-sm text-gray-600 hover:text-accent transition-colors duration-300">+254 700 123 456</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.getElementById('navbar');
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        const navIndicator = document.getElementById('nav-indicator');
        const navLinks = document.querySelectorAll('.nav-link');
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

        let lastScrollY = 0;
        let scrollDirection = 'up';
        let hideTimeout = null;
        let isScrolling = false;
        let navbarVisible = false;

        // Sections to track
        const sections = [{
                id: 'home',
                element: document.getElementById('home')
            },
            {
                id: 'adventures',
                element: document.getElementById('adventures')
            },
            {
                id: 'gallery',
                element: document.getElementById('gallery')
            },
            {
                id: 'about',
                element: document.getElementById('about')
            },
            {
                id: 'contact',
                element: document.getElementById('contact')
            }
        ].filter(section => section.element);

        // Show navbar with smooth animation
        function showNavbar() {
            if (!navbarVisible) {
                navbar.classList.remove('-translate-y-full', 'opacity-0');
                navbar.classList.add('translate-y-0', 'opacity-100');
                navbarVisible = true;
            }
        }

        // Hide navbar with smooth animation
        function hideNavbar() {
            if (navbarVisible) {
                navbar.classList.add('-translate-y-full', 'opacity-0');
                navbar.classList.remove('translate-y-0', 'opacity-100');
                navbarVisible = false;
            }
        }

        // Clear hide timeout
        function clearHideTimeout() {
            if (hideTimeout) {
                clearTimeout(hideTimeout);
                hideTimeout = null;
            }
        }

        // Set hide timeout
        function setHideTimeout() {
            clearHideTimeout();
            hideTimeout = setTimeout(() => {
                if (!isScrolling && window.scrollY > 50) {
                    hideNavbar();
                }
            }, 5000); // 5 seconds of inactivity
        }

        // Enhanced scroll handler
        function handleScroll() {
            const currentScrollY = window.scrollY;
            const scrollDelta = Math.abs(currentScrollY - lastScrollY);

            // Determine scroll direction
            scrollDirection = currentScrollY > lastScrollY ? 'down' : 'up';

            // Set scrolling flag
            isScrolling = true;
            clearHideTimeout();

            // Navbar visibility logic
            if (currentScrollY <= 50) {
                // At top - hide navbar
                hideNavbar();
            } else {
                // Not at top - show navbar when scrolling starts
                showNavbar();

                // Set timeout to hide after inactivity
                setTimeout(() => {
                    isScrolling = false;
                    setHideTimeout();
                }, 150);
            }

            lastScrollY = currentScrollY;
            updateActiveSection();
        }

        // Update Active Section with improved accuracy
        function updateActiveSection() {
            const scrollPosition = window.scrollY + 120; // Offset for navbar height
            let activeSection = sections[0];

            // Find the current section with better detection
            for (let i = sections.length - 1; i >= 0; i--) {
                const section = sections[i];
                if (section.element && scrollPosition >= section.element.offsetTop) {
                    activeSection = section;
                    break;
                }
            }

            // Update nav links with enhanced styling
            navLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href === `#${activeSection.id}`) {
                    link.classList.add('text-blue-600');
                    link.classList.remove('text-gray-800');

                    // Update indicator position with smooth animation
                    requestAnimationFrame(() => {
                        const linkRect = link.getBoundingClientRect();
                        const navRect = navbar.getBoundingClientRect();
                        const indicatorLeft = linkRect.left - navRect.left;
                        const indicatorWidth = linkRect.width;

                        navIndicator.style.left = `${indicatorLeft}px`;
                        navIndicator.style.width = `${indicatorWidth}px`;
                    });
                } else {
                    link.classList.remove('text-blue-600');
                    link.classList.add('text-gray-800');
                }
            });

            // Update mobile nav links
            mobileNavLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href === `#${activeSection.id}`) {
                    link.classList.add('bg-blue-600/10');
                } else {
                    link.classList.remove('bg-blue-600/10');
                }
            });
        }

        // Smooth scroll with improved offset calculation
        function scrollToSection(targetId) {
            const targetElement = document.getElementById(targetId.replace('#', ''));
            if (targetElement) {
                const offsetTop = targetElement.offsetTop - 100; // Account for navbar height
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        }

        // Mobile menu toggle with enhanced animations
        function toggleMobileMenu() {
            mobileMenu.classList.toggle('translate-x-full');
            document.body.classList.toggle('overflow-hidden');
        }

        // Enhanced event listeners
        let ticking = false;

        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(() => {
                    handleScroll();
                    ticking = false;
                });
                ticking = true;
            }
        }, {
            passive: true
        });

        // Navigation link clicks with improved UX
        [...navLinks, ...mobileNavLinks].forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                scrollToSection(targetId);

                // Close mobile menu if open
                if (!mobileMenu.classList.contains('translate-x-full')) {
                    toggleMobileMenu();
                }

                // Show navbar briefly when navigating
                showNavbar();
                clearHideTimeout();
                setHideTimeout();
            });
        });

        // Mobile menu controls
        mobileMenuButton.addEventListener('click', toggleMobileMenu);
        mobileMenuClose.addEventListener('click', toggleMobileMenu);

        // Close mobile menu when clicking backdrop
        mobileMenu.addEventListener('click', function(e) {
            if (e.target === this) {
                toggleMobileMenu();
            }
        });

        // Enhanced keyboard controls
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !mobileMenu.classList.contains('translate-x-full')) {
                toggleMobileMenu();
            }
        });

        // Mouse movement detection - show navbar on hover near top
        document.addEventListener('mousemove', function(e) {
            if (e.clientY < 100 && window.scrollY > 50) {
                showNavbar();
                clearHideTimeout();
                setHideTimeout();
            }
        });

        // Initialize
        updateActiveSection();

        // Handle page load scroll position
        if (window.scrollY <= 50) {
            hideNavbar();
        } else {
            showNavbar();
            setHideTimeout();
        }
    });
</script>
