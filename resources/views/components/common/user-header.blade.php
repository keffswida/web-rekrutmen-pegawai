<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="/assets/js/aos.js"></script>

<header id="header" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 ease-in-out font-inter"
    data-aos="fade-down" data-aos-duration="1000">
    <div class="container mx-auto px-4 py-3 md:px-6 md:py-4">
        <div class="flex items-center justify-between">
            <!-- Logo Section (Left Side) -->
            <div id="logo-section" class="transition-all duration-300 p-2">
                <a href="/">
                    <img src="{{ asset('assets/images/logo_rsi.png') }}" alt="Logo"
                        class="w-10 h-10 md:w-14 md:h-14 transition-all duration-300">
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden p-2" aria-label="Menu">
                <svg class="w-6 h-6 text-green-800 transition-transform duration-300" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- Navigation Section (Center) - Hidden on mobile -->
            <nav id="nav-section" class="hidden md:flex transition-all duration-300 px-8">
                <div class="flex flex-col md:flex-row md:space-x-20">
                    <a href="/"
                        class="relative text-lg font-semibold text-green-800 transition-all duration-300
                    after:content-[''] after:absolute after:left-0 after:bottom-[-2px] after:w-0 after:h-[2px] after:bg-green-400 after:transition-all after:duration-300
                    hover:after:w-full">
                        Home
                    </a>

                    <a href="/about"
                        class="relative text-lg font-semibold text-green-800 transition-all duration-300
                    after:content-[''] after:absolute after:left-0 after:bottom-[-2px] after:w-0 after:h-[2px] after:bg-green-400 after:transition-all after:duration-300
                    hover:after:w-full">
                        About Us
                    </a>

                    <a href="/career"
                        class="relative text-lg font-semibold text-green-800 transition-all duration-300
                    after:content-[''] after:absolute after:left-0 after:bottom-[-2px] after:w-0 after:h-[2px] after:bg-green-400 after:transition-all after:duration-300
                    hover:after:w-full">
                        Lowongan
                    </a>
                </div>
            </nav>

            <!-- Login/Register Section (Right Side) - Hidden on mobile -->
            <div id="login-register-section" class="hidden md:block transition-all duration-300 px-6">
                <a href="/login"
                    class="relative inline-flex items-center gap-1 text-lg font-semibold text-green-800 hover:text-green-400 transition-all duration-300
                after:content-[''] after:absolute after:left-0 after:bottom-[-2px] after:w-0 after:h-[2px] after:bg-green-400 after:transition-all after:duration-300
                hover:after:w-full">
                    Login
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 2.75C6.89137 2.75 2.75 6.89137 2.75 12C2.75 17.1086 6.89137 21.25 12 21.25C17.1086 21.25 21.25 17.1086 21.25 12C21.25 6.89137 17.1086 2.75 12 2.75ZM1.25 12C1.25 6.06294 6.06294 1.25 12 1.25C17.9371 1.25 22.75 6.06294 22.75 12C22.75 17.9371 17.9371 22.75 12 22.75C6.06294 22.75 1.25 17.9371 1.25 12ZM12.4697 8.46967C12.7626 8.17678 13.2374 8.17678 13.5303 8.46967L16.5303 11.4697C16.8232 11.7626 16.8232 12.2374 16.5303 12.5303L13.5303 15.5303C13.2374 15.8232 12.7626 15.8232 12.4697 15.5303C12.1768 15.2374 12.1768 14.7626 12.4697 14.4697L14.1893 12.75H8C7.58579 12.75 7.25 12.4142 7.25 12C7.25 11.5858 7.58579 11.25 8 11.25H14.1893L12.4697 9.53033C12.1768 9.23744 12.1768 8.76256 12.4697 8.46967Z"
                            fill="currentColor" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobile-menu"
            class="md:hidden bg-white/95 backdrop-blur-sm mt-4 rounded-lg shadow-lg 
                    transform transition-all duration-300 ease-in-out opacity-0 scale-95 -translate-y-4 h-0 overflow-hidden">
            <nav class="flex flex-col space-y-4 p-4">
                <a href="/"
                    class="text-lg font-semibold text-green-800 hover:text-green-400 transform transition-all duration-300 translate-x-4 opacity-0">Home</a>
                <a href="/about"
                    class="text-lg font-semibold text-green-800 hover:text-green-400 transform transition-all duration-300 translate-x-4 opacity-0">About
                    Us</a>
                <a href="/career"
                    class="text-lg font-semibold text-green-800 hover:text-green-400 transform transition-all duration-300 translate-x-4 opacity-0">Lowongan</a>
                <a href="#"
                    class="text-lg font-semibold text-green-800 hover:text-green-400 transform transition-all duration-300 translate-x-4 opacity-0">Login</a>
            </nav>
        </div>
    </div>
</header>

<script>
    let isScrolled = false;
    let ticking = false;
    let isMenuOpen = false;

    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = mobileMenuButton.querySelector('svg');
    const menuLinks = mobileMenu.querySelectorAll('a');

    function openMobileMenu() {
        isMenuOpen = true;
        mobileMenu.classList.remove('opacity-0', 'scale-95', '-translate-y-4', 'h-0');
        mobileMenu.classList.add('opacity-100', 'scale-100', 'translate-y-0');
        menuIcon.classList.add('rotate-90');

        // Animate each link with a delay
        menuLinks.forEach((link, index) => {
            setTimeout(() => {
                link.classList.remove('translate-x-4', 'opacity-0');
                link.classList.add('translate-x-0', 'opacity-100');
            }, 100 * (index + 1));
        });
    }

    function closeMobileMenu() {
        isMenuOpen = false;
        mobileMenu.classList.remove('opacity-100', 'scale-100', 'translate-y-0');
        mobileMenu.classList.add('opacity-0', 'scale-95', '-translate-y-4');
        menuIcon.classList.remove('rotate-90');

        // Reset link animations
        menuLinks.forEach(link => {
            link.classList.remove('translate-x-0', 'opacity-100');
            link.classList.add('translate-x-4', 'opacity-0');
        });

        // Add height 0 after transition
        setTimeout(() => {
            if (!isMenuOpen) {
                mobileMenu.classList.add('h-0');
            }
        }, 300);
    }

    mobileMenuButton.addEventListener('click', () => {
        if (isMenuOpen) {
            closeMobileMenu();
        } else {
            mobileMenu.classList.remove('h-0');
            // Small delay to ensure height transition works
            setTimeout(openMobileMenu, 50);
        }
    });

    document.addEventListener('click', (e) => {
        if (isMenuOpen && !mobileMenuButton.contains(e.target) && !mobileMenu.contains(e.target)) {
            closeMobileMenu();
        }
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768 && isMenuOpen) {
            closeMobileMenu();
        }
    });

    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                const currentScroll = window.pageYOffset;
                const header = document.getElementById("header");
                const logoSection = document.getElementById("logo-section");
                const navSection = document.getElementById("nav-section");
                const loginSection = document.getElementById("login-register-section");

                if (currentScroll > 50 && !isScrolled) {
                    // Adding floating effect
                    header.querySelector('.container').classList.add("my-2");

                    // Logo section
                    logoSection.classList.add("bg-white/80", "backdrop-blur-sm", "rounded-full",
                        "shadow-md");
                    logoSection.querySelector('img').classList.remove("w-10", "h-10", "md:w-14",
                        "md:h-14");
                    logoSection.querySelector('img').classList.add("w-8", "h-8", "md:w-12", "md:h-12");

                    // Navigation section
                    navSection.classList.add("bg-white/80", "backdrop-blur-sm", "rounded-full",
                        "shadow-md", "py-3");

                    // Login/Register section
                    loginSection.classList.add("bg-white/80", "backdrop-blur-sm", "rounded-full",
                        "shadow-md", "py-3");

                    isScrolled = true;
                } else if (currentScroll <= 50 && isScrolled) {
                    // Removing floating effect
                    header.querySelector('.container').classList.remove("my-2");

                    // Logo section
                    logoSection.classList.remove("bg-white/80", "backdrop-blur-sm", "rounded-full",
                        "shadow-md");
                    logoSection.querySelector('img').classList.remove("w-8", "h-8", "md:w-12",
                        "md:h-12");
                    logoSection.querySelector('img').classList.add("w-10", "h-10", "md:w-14",
                        "md:h-14");

                    // Navigation section
                    navSection.classList.remove("bg-white/80", "backdrop-blur-sm", "rounded-full",
                        "shadow-md", "py-3");

                    // Login/Register section
                    loginSection.classList.remove("bg-white/80", "backdrop-blur-sm", "rounded-full",
                        "shadow-md", "py-3");

                    isScrolled = false;
                }

                ticking = false;
            });

            ticking = true;
        }
    });
</script>

<script>
    AOS.init();
</script>

{{-- <header id="header" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 ease-in-out font-inter"
    x-data="{ 
        isOpen: false,
        isScrolled: false,
        init() {
            window.addEventListener('scroll', () => {
                this.isScrolled = window.pageYOffset > 50;
            });
        }
    }">
    <div class="container mx-auto px-4 py-3 md:px-6 md:py-4" :class="{ 'my-2': isScrolled }">
        <div class="flex items-center justify-between">
            <!-- Logo Section -->
            <div id="logo-section" class="transition-all duration-300 p-2"
                :class="{ 'bg-white/80 backdrop-blur-sm rounded-full shadow-md': isScrolled }">
                <img src="{{ asset('assets/images/logo_rsi.png') }}" alt="Logo"
                    class="transition-all duration-300"
                    :class="isScrolled ? 'w-8 h-8 md:w-12 md:h-12' : 'w-10 h-10 md:w-14 md:h-14'">
            </div>

            <!-- Mobile Menu Button -->
            <button @click="isOpen = !isOpen" class="md:hidden p-2" aria-label="Menu">
                <svg class="w-6 h-6 text-green-800 transition-transform duration-300" 
                     :class="{ 'rotate-90': isOpen }"
                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

            <!-- Navigation Section -->
            <nav id="nav-section" class="hidden md:flex transition-all duration-300 px-8"
                :class="{ 'bg-white/80 backdrop-blur-sm rounded-full shadow-md py-3': isScrolled }">
                <div class="flex flex-col md:flex-row md:space-x-20">
                    <template x-for="(link, index) in [
                        { text: 'Home', href: '/' },
                        { text: 'About Us', href: '/about' },
                        { text: 'Lowongan', href: '/career' }
                    ]">
                        <a :href="link.href"
                            class="relative text-lg font-semibold text-green-800 transition-all duration-300
                            after:content-[''] after:absolute after:left-0 after:bottom-[-2px] after:w-0 after:h-[2px] 
                            after:bg-green-400 after:transition-all after:duration-300 hover:after:w-full"
                            x-text="link.text">
                        </a>
                    </template>
                </div>
            </nav>

            <!-- Login/Register Section -->
            <div id="login-register-section" class="hidden md:block transition-all duration-300 px-6"
                :class="{ 'bg-white/80 backdrop-blur-sm rounded-full shadow-md py-3': isScrolled }">
                <a href="#"
                    class="relative text-lg font-semibold text-green-800 hover:text-green-400 transition-all duration-300
                    after:content-[''] after:absolute after:left-0 after:bottom-[-2px] after:w-0 after:h-[2px] 
                    after:bg-green-400 after:transition-all after:duration-300 hover:after:w-full">Register</a>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="isOpen"
             x-transition:enter="transition duration-300 ease-out"
             x-transition:enter-start="opacity-0 scale-95 -translate-y-4"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             x-transition:leave="transition duration-200 ease-in"
             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
             x-transition:leave-end="opacity-0 scale-95 -translate-y-4"
             @click.away="isOpen = false"
             class="md:hidden bg-white/95 backdrop-blur-sm mt-4 rounded-lg shadow-lg">
            <nav class="flex flex-col space-y-4 p-4">
                <template x-for="(link, index) in [
                    { text: 'Home', href: '/' },
                    { text: 'About Us', href: '/about' },
                    { text: 'Lowongan', href: '/career' },
                    { text: 'Register', href: '#' }
                ]" :key="index">
                    <a :href="link.href"
                       x-text="link.text"
                       x-transition:enter="transition duration-300 ease-out"
                       x-transition:enter-start="opacity-0 translate-x-4"
                       x-transition:enter-end="opacity-100 translate-x-0"
                       class="text-lg font-semibold text-green-800 hover:text-green-400 transition-all duration-300">
                    </a>
                </template>
            </nav>
        </div>
    </div>
</header> --}}
