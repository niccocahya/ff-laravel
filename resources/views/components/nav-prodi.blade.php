<nav class="flex flex-col fixed w-full top-0 left-0 z-50 shadow-md">
    <div
        class="nav-prodi-top h-10 w-full px-4 md:px-10 lg:px-20 items-center flex justify-between bg-white border-b border-gray-100">
        <a href="/" class="text-xs md:text-sm hover:underline underline-offset-2 text-[#275CAA] font-medium">Website
            Fakultas Farmasi</a>

        <div class="nav-top-right flex gap-4 items-center">
            <a href="https://ppmb.unair.ac.id/" class="hidden md:block">
                <button
                    class="px-5 md:px-7 bg-[#275CAA] border border-transparent hover:border-[#275CAA] hover:text-[#275CAA] transition-all duration-200 hover:bg-[#F7FFFA] text-[#F7FFFA] text-xs font-medium rounded-lg py-1.5">
                    Apply Now
                </button>
            </a>
            <div class="lang flex text-xs gap-1 items-center text-[#275CAA]">
                <a href="#" class="font-semibold hover:underline underline-offset-2">EN</a>
                <span>|</span>
                <a href="#" class="hover:underline underline-offset-2">ID</a>
            </div>
        </div>
    </div>

    <div id="main-nav" class="w-full bg-[#275CAA] transition-all duration-300 ease-in-out relative">
        <div class="flex flex-row justify-between items-center w-full h-16 px-4 md:px-10 lg:px-20">
            <a href="/sarjana" class="flex-shrink-0">
                <img src="{{ asset('images/logo-sarjana.png') }}" alt="logo-ff" class="h-8 md:h-10 w-auto">
            </a>

            <div class="hidden lg:flex items-center gap-6 text-white text-sm font-light">
                <a href="/sarjana/about"
                    class="hover:underline underline-offset-4 hover:text-gray-200 transition-colors">About</a>
                <a href="" class="hover:underline underline-offset-4 hover:text-gray-200 transition-colors">News &
                    Events</a>
                <a href="/sarjana/education"
                    class="hover:underline underline-offset-4 hover:text-gray-200 transition-colors">Education</a>
                <a href="/sarjana/alumni"
                    class="hover:underline underline-offset-4 hover:text-gray-200 transition-colors">Alumni</a>
                <a href="/sarjana/collaboration"
                    class="hover:underline underline-offset-4 hover:text-gray-200 transition-colors">Collaboration</a>
                <a href="services-information/forms-downloads/forms"
                    class="hover:underline underline-offset-4 hover:text-gray-200 transition-colors">Forms and
                    Downloads</a>
            </div>

            <button onclick="toggleMobileMenu()" class="lg:hidden text-white focus:outline-none p-1">
                <svg id="menu-icon-open" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
                <svg id="menu-icon-close" class="w-7 h-7 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden flex-col bg-[#194d9b] text-white w-full border-t border-white/20 lg:hidden">
            <a href="/sarjana/about"
                class="px-6 py-3 border-b border-white/10 hover:bg-[#103367] transition-colors text-sm font-light">About</a>
            <a href=""
                class="px-6 py-3 border-b border-white/10 hover:bg-[#103367] transition-colors text-sm font-light">News
                & Events</a>
            <a href="/sarjana/education"
                class="px-6 py-3 border-b border-white/10 hover:bg-[#103367] transition-colors text-sm font-light">Education</a>
            <a href="/sarjana/alumni"
                class="px-6 py-3 border-b border-white/10 hover:bg-[#103367] transition-colors text-sm font-light">Alumni</a>
            <a href="/sarjana/collaboration"
                class="px-6 py-3 border-b border-white/10 hover:bg-[#103367] transition-colors text-sm font-light">Collaboration</a>
            <a href="services-information/forms-downloads/forms"
                class="px-6 py-3 border-b border-white/10 hover:bg-[#103367] transition-colors text-sm font-light">Forms
                and Downloads</a>

            <div class="px-6 py-4 md:hidden">
                <a href="https://ppmb.unair.ac.id/"
                    class="block text-center w-full bg-[#F7FFFA] text-[#275CAA] hover:bg-gray-200 transition-colors text-sm font-medium rounded-lg py-2.5">
                    Apply Now
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('menu-icon-open');
        const iconClose = document.getElementById('menu-icon-close');

        if (menu.classList.contains('hidden')) {
            // Buka Menu
            menu.classList.remove('hidden');
            menu.classList.add('flex');
            iconOpen.classList.add('hidden');
            iconClose.classList.remove('hidden');
        } else {
            // Tutup Menu
            menu.classList.add('hidden');
            menu.classList.remove('flex');
            iconOpen.classList.remove('hidden');
            iconClose.classList.add('hidden');
        }
    }
</script>