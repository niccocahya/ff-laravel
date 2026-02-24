<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News and Events - News</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        .fade-in { animation: fadeIn 0.4s ease-in-out; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(5px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-[#F7FFFA] min-h-screen font-sans">

    <x-navbar />

    <div class="w-full flex flex-col pt-16 fade-in">
        
        <div class="w-full bg-gradient-to-r from-[#275CAA] to-[#2E9853] px-28 py-20 flex flex-col justify-center text-white">
            <div class="flex items-center gap-2 mb-4">
                <h1 class="text-5xl font-semibold">News and Events</h1>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 opacity-80 mt-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
            <p class="w-1/2 text-sm leading-relaxed text-gray-100">
                Stay updated with key academic dates, lecture schedules, and important events throughout the semester.
            </p>
        </div>

        <x-pagination-news-events active="news" />

        <div class="px-28 pb-8 flex gap-4 w-full">
            <input type="text" placeholder="Search..." 
                class="flex-grow rounded-lg border border-gray-300 px-4 py-2.5 text-sm bg-white focus:outline-none focus:border-[#275CAA] transition-colors">
            
            <div class="relative">
                <select class="w-40 appearance-none rounded-lg border border-gray-300 px-4 py-2.5 pr-10 text-sm bg-white focus:outline-none focus:border-[#275CAA] cursor-pointer text-gray-600">
                    <option>All Months</option>
                    <option>January</option>
                    <option>February</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-500">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </div>

            <div class="relative">
                <select class="w-40 appearance-none rounded-lg border border-gray-300 px-4 py-2.5 pr-10 text-sm bg-white focus:outline-none focus:border-[#275CAA] cursor-pointer text-gray-600">
                    <option>All Year</option>
                    <option>2025</option>
                    <option>2024</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-500">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </div>

            <button class="bg-[#275CAA] hover:bg-[#1d4f96] text-white px-8 py-2.5 rounded-lg text-sm font-medium transition-colors shadow-sm">
                Browse
            </button>
        </div>

        <div class="px-28 pb-12 flex flex-col gap-10">
            
            <a href="/news" class="block w-full h-[450px] rounded-3xl overflow-hidden relative group cursor-pointer shadow-md bg-gray-200">
                <img src="{{ asset('images/agak-laen.png') }}" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
                <div class="absolute bottom-10 left-10 right-10 text-white">
                    <p class="text-sm font-medium mb-3 opacity-90">05/01/2026</p>
                    <h2 class="text-3xl font-bold leading-snug w-[80%] drop-shadow-lg">
                        [Ini AGAK LAEN! MENYALA FARMASIKU!] Visit the FF UNAIR Booth at AEE 2026
                    </h2>
                </div>
            </a>

            <div class="grid grid-cols-3 gap-6">
                <a href="/news" class="flex flex-col group cursor-pointer">
                    <div class="w-full aspect-[4/3] rounded-2xl overflow-hidden mb-4 bg-gray-200 shadow-sm">
                        <img src="{{ asset('images/agak-laen.png') }}" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <p class="text-[13px] text-gray-500 mb-2">05/01/2026</p>
                    <h3 class="font-semibold text-[#1E293B] text-[17px] leading-snug group-hover:text-[#275CAA] transition-colors line-clamp-3">
                        [Ini AGAK LAEN! MENYALA FARMASIKU!] Visit the FF UNAIR Booth at AEE 2026
                    </h3>
                </a>
                <a href="/news" class="flex flex-col group cursor-pointer">
                    <div class="w-full aspect-[4/3] rounded-2xl overflow-hidden mb-4 bg-gray-200 shadow-sm">
                        <img src="{{ asset('images/agak-laen.png') }}" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <p class="text-[13px] text-gray-500 mb-2">05/01/2026</p>
                    <h3 class="font-semibold text-[#1E293B] text-[17px] leading-snug group-hover:text-[#275CAA] transition-colors line-clamp-3">
                        [Ini AGAK LAEN! MENYALA FARMASIKU!] Visit the FF UNAIR Booth at AEE 2026
                    </h3>
                </a>
                <a href="/news" class="flex flex-col group cursor-pointer">
                    <div class="w-full aspect-[4/3] rounded-2xl overflow-hidden mb-4 bg-gray-200 shadow-sm">
                        <img src="{{ asset('images/agak-laen.png') }}" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <p class="text-[13px] text-gray-500 mb-2">05/01/2026</p>
                    <h3 class="font-semibold text-[#1E293B] text-[17px] leading-snug group-hover:text-[#275CAA] transition-colors line-clamp-3">
                        [Ini AGAK LAEN! MENYALA FARMASIKU!] Visit the FF UNAIR Booth at AEE 2026
                    </h3>
                </a>
            </div>

            <div class="grid grid-cols-4 gap-6">
                <a href="/news" class="flex flex-col group cursor-pointer">
                    <div class="w-full aspect-[4/3] rounded-2xl overflow-hidden mb-4 bg-gray-200 shadow-sm">
                        <img src="{{ asset('images/agak-laen.png') }}" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <p class="text-[12px] text-gray-500 mb-1.5">05/01/2026</p>
                    <h3 class="font-semibold text-[#1E293B] text-[15px] leading-snug group-hover:text-[#275CAA] transition-colors line-clamp-3">
                        [Ini AGAK LAEN! MENYALA FARMASIKU!] Visit the FF UNAIR Booth at AEE 2026
                    </h3>
                </a>
                <a href="/news" class="flex flex-col group cursor-pointer">
                    <div class="w-full aspect-[4/3] rounded-2xl overflow-hidden mb-4 bg-gray-200 shadow-sm">
                        <img src="{{ asset('images/agak-laen.png') }}" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <p class="text-[12px] text-gray-500 mb-1.5">05/01/2026</p>
                    <h3 class="font-semibold text-[#1E293B] text-[15px] leading-snug group-hover:text-[#275CAA] transition-colors line-clamp-3">
                        [Ini AGAK LAEN! MENYALA FARMASIKU!] Visit the FF UNAIR Booth at AEE 2026
                    </h3>
                </a>
                <a href="/news" class="flex flex-col group cursor-pointer">
                    <div class="w-full aspect-[4/3] rounded-2xl overflow-hidden mb-4 bg-gray-200 shadow-sm">
                        <img src="{{ asset('images/agak-laen.png') }}" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <p class="text-[12px] text-gray-500 mb-1.5">05/01/2026</p>
                    <h3 class="font-semibold text-[#1E293B] text-[15px] leading-snug group-hover:text-[#275CAA] transition-colors line-clamp-3">
                        [Ini AGAK LAEN! MENYALA FARMASIKU!] Visit the FF UNAIR Booth at AEE 2026
                    </h3>
                </a>
                <a href="/news" class="flex flex-col group cursor-pointer">
                    <div class="w-full aspect-[4/3] rounded-2xl overflow-hidden mb-4 bg-gray-200 shadow-sm">
                        <img src="{{ asset('images/agak-laen.png') }}" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <p class="text-[12px] text-gray-500 mb-1.5">05/01/2026</p>
                    <h3 class="font-semibold text-[#1E293B] text-[15px] leading-snug group-hover:text-[#275CAA] transition-colors line-clamp-3">
                        [Ini AGAK LAEN! MENYALA FARMASIKU!] Visit the FF UNAIR Booth at AEE 2026
                    </h3>
                </a>
            </div>

        </div>

        <div class="flex justify-center items-center gap-4 pb-20 pt-4 text-[#1E293B]">
            <button class="hover:text-[#275CAA] transition-colors p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
            </button>
            
            <div class="flex items-center gap-2">
                <button class="w-8 h-8 flex items-center justify-center bg-[#275CAA] text-white rounded text-sm font-medium">1</button>
                <button class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded text-sm font-medium">2</button>
                <button class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded text-sm font-medium">3</button>
                <button class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded text-sm font-medium">4</button>
                <button class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded text-sm font-medium">5</button>
                <button class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded text-sm font-medium">6</button>
                <button class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded text-sm font-medium">7</button>
                <button class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded text-sm font-medium">8</button>
                <button class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded text-sm font-medium">9</button>
                <button class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded text-sm font-medium">10</button>
            </div>
           
            <button class="hover:text-[#275CAA] transition-colors p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256"><path d="M90.34,202.34a8,8,0,0,0,11.32,11.32l80-80a8,8,0,0,0,0-11.32l-80-80a8,8,0,0,0-11.32,11.32L164.69,128Z"></path></svg>
            </button>
        </div>
        
        <x-footer />
    </div>

</body>
</html>