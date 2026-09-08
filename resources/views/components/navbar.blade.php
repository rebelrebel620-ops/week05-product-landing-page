<nav class="fixed top-0 z-50 w-full border-b border-slate-200 bg-white/90 backdrop-blur">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="flex items-center justify-between py-4">

            <!-- Logo -->
            <a href="#home" class="flex items-center gap-2">
                <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-900 text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"
                        />
                    </svg>
                </div>

                <span class="text-xl font-bold tracking-tight">
                    NexaFlow
                </span>
            </a>


            <!-- Desktop Navigation -->
            <div class="hidden items-center gap-8 md:flex">

                <a href="#home"
                   class="text-sm font-medium text-slate-600 transition hover:text-slate-900">
                    Home
                </a>

                <a href="#features"
                   class="text-sm font-medium text-slate-600 transition hover:text-slate-900">
                    Features
                </a>

                <a href="#pricing"
                   class="text-sm font-medium text-slate-600 transition hover:text-slate-900">
                    Pricing
                </a>

                <a href="#testimonials"
                   class="text-sm font-medium text-slate-600 transition hover:text-slate-900">
                    Testimonials
                </a>

                <a href="#contact"
                   class="text-sm font-medium text-slate-600 transition hover:text-slate-900">
                    Contact
                </a>

            </div>


            <!-- Desktop Buttons -->
            <div class="hidden items-center gap-3 md:flex">

                <a href="#contact"
                   class="rounded-lg px-4 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">
                    Sign In
                </a>

                <a href="#pricing"
                   class="rounded-lg bg-slate-900 px-4 py-2 text-sm font-semibold text-white transition hover:bg-slate-700">
                    Get Started
                </a>

            </div>


            <!-- Mobile Menu Button -->
            <button
                id="mobile-menu-button"
                type="button"
                class="rounded-lg p-2 text-slate-700 transition hover:bg-slate-100 md:hidden"
                aria-label="Open menu"
            >

                <svg
                    id="menu-open-icon"
                    class="h-6 w-6"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                </svg>

                <svg
                    id="menu-close-icon"
                    class="hidden h-6 w-6"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"
                    />
                </svg>

            </button>

        </div>


        <!-- Mobile Menu -->
        <div
            id="mobile-menu"
            class="hidden border-t border-slate-200 pb-5 pt-4 md:hidden"
        >

            <div class="flex flex-col gap-2">

                <a href="#home"
                   class="mobile-menu-link rounded-lg px-4 py-3 text-sm font-medium text-slate-700 hover:bg-slate-100">
                    Home
                </a>

                <a href="#features"
                   class="mobile-menu-link rounded-lg px-4 py-3 text-sm font-medium text-slate-700 hover:bg-slate-100">
                    Features
                </a>

                <a href="#pricing"
                   class="mobile-menu-link rounded-lg px-4 py-3 text-sm font-medium text-slate-700 hover:bg-slate-100">
                    Pricing
                </a>

                <a href="#testimonials"
                   class="mobile-menu-link rounded-lg px-4 py-3 text-sm font-medium text-slate-700 hover:bg-slate-100">
                    Testimonials
                </a>

                <a href="#contact"
                   class="mobile-menu-link rounded-lg px-4 py-3 text-sm font-medium text-slate-700 hover:bg-slate-100">
                    Contact
                </a>

                <div class="mt-2 grid grid-cols-2 gap-3">

                    <a href="#contact"
                       class="rounded-lg border border-slate-300 px-4 py-3 text-center text-sm font-semibold text-slate-700 hover:bg-slate-50">
                        Sign In
                    </a>

                    <a href="#pricing"
                       class="rounded-lg bg-slate-900 px-4 py-3 text-center text-sm font-semibold text-white hover:bg-slate-700">
                        Get Started
                    </a>

                </div>

            </div>

        </div>

    </div>
</nav>


<script>
    document.addEventListener('DOMContentLoaded', function () {

        const menuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        const openIcon = document.getElementById('menu-open-icon');
        const closeIcon = document.getElementById('menu-close-icon');

        const menuLinks = document.querySelectorAll('.mobile-menu-link');

        menuButton.addEventListener('click', function () {

            mobileMenu.classList.toggle('hidden');

            openIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');

        });


        menuLinks.forEach(function (link) {

            link.addEventListener('click', function () {

                mobileMenu.classList.add('hidden');

                openIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');

            });

        });

    });
</script>