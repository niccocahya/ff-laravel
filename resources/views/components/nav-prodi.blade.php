<nav class="flex flex-col fixed w-full top-0 left-0 z-50 overflow-hidden">
    <div class="nav-prodi-top h-10 w-full px-10 md:px-20 items-center flex justify-between bg-white">
        <a href="/" class="text-sm hover:underline underline-offset-2 text-[#275CAA]">Website Fakultas Farmasi</a>
        <div class="nav-top-right flex gap-4">
            <a href="https://ppmb.unair.ac.id/">
                <button
                    class="hidden md:block px-7 bg-[#275CAA] border border-transparent hover:border-[#275CAA] hover:text-[#275CAA] transition-all duration-200 hover:bg-[#F7FFFA] text-[#F7FFFA] text-xs font-medium rounded-lg py-1.5">
                    Apply Now
                </button>
            </a>
            <div class="lang flex text-xs gap-1 items-center text-[#275CAA]">
                <a href="#" class="font-semibold hover:underline underline-offset-2">EN</a>
                <h1>|</h1>
                <a href="#" class="hover:underline underline-offset-2">ID</a>
            </div>
        </div>
    </div>
    <div id="main-nav"
        class="w-full h-16 bg-[#275CAA] flex flex-col p-3 px-10 md:px-20 transition-all duration-500 ease-in-out">
        <div class="flex flex-row justify-between items-center w-full h-10 min-h-[40px]">
            <a href="/">
                <img src="{{ asset('images/logo-ff.png') }}" alt="logo-ff" class="h-8 w-auto">
            </a>
    
            <div class="nav-right flex items-center gap-4">
                <div class="text-white flex gap-4">
                    <a href="#" class="font-normal hover:underline underline-offset-2 cursor-pointer">About</a>
                    <a href="#" class="font-normal hover:underline underline-offset-2 cursor-pointer">News & Events</a>
                    <a href="#" class="font-normal hover:underline underline-offset-2 cursor-pointer">Education</a>
                    <a href="#" class="font-normal hover:underline underline-offset-2 cursor-pointer">Alumni</a>
                    <a href="#" class="font-normal hover:underline underline-offset-2 cursor-pointer">Collaboration</a>
                    <a href="#" class="font-normal hover:underline underline-offset-2 cursor-pointer">Forms and Downloads</a>
                </div>
            </div>
        </div>
    </div>
</nav>