<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News and Events</title>
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
        
        <div class="w-full h-[45vh] bg-gradient-to-r from-[#275CAA] to-[#2E9853] px-28 py-20 flex flex-col justify-center text-white">
            <h1 class="text-5xl font-semibold mb-4">News and Events</h1>
            <p class="w-1/2 text-sm leading-relaxed text-gray-100">
                Stay updated with key academic dates, lecture schedules, and important events throughout the semester.
            </p>
        </div>

        <x-pagination-news-events active="events" />

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

        <div class="px-28 pb-12 grid grid-cols-3 gap-8">
            
            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col">
                <div class="h-48 w-full bg-gray-200 relative">
                    <img src="{{ asset('images/event-1.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h2 class="font-bold text-[#1E293B] text-[15px] leading-snug mb-4">THE 2nd INTERNATIONAL SYMPOSIUM OF COSMETICS 2025</h2>
                    <div class="flex flex-col gap-2.5 text-xs text-gray-600 mb-6">
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>12 Desember 2025</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>13.00 - Selesai</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="leading-tight">Gedung Kuliah Bersama, Kampus C Universitas Airlangga, Surabaya</span>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <button class="border border-[#2E9853] text-[#2E9853] px-4 py-1.5 rounded-md text-xs font-medium hover:bg-[#2E9853] hover:text-white transition-colors">
                            Daftar Sekarang
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col">
                <div class="h-48 w-full bg-gray-200 relative">
                    <img src="{{ asset('images/event-2.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h2 class="font-bold text-[#1E293B] text-[15px] leading-snug mb-4">THE 2nd INTERNATIONAL SYMPOSIUM OF COSMETICS 2025</h2>
                    <div class="flex flex-col gap-2.5 text-xs text-gray-600 mb-6">
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>12 Desember 2025</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>13.00 - Selesai</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="leading-tight">Gedung Kuliah Bersama, Kampus C Universitas Airlangga, Surabaya</span>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <button class="border border-[#2E9853] text-[#2E9853] px-4 py-1.5 rounded-md text-xs font-medium hover:bg-[#2E9853] hover:text-white transition-colors">
                            Daftar Sekarang
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col">
                <div class="h-48 w-full bg-gray-200 relative">
                    <img src="{{ asset('images/event-3.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h2 class="font-bold text-[#1E293B] text-[15px] leading-snug mb-4">THE 2nd INTERNATIONAL SYMPOSIUM OF COSMETICS 2025</h2>
                    <div class="flex flex-col gap-2.5 text-xs text-gray-600 mb-6">
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>12 Desember 2025</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>13.00 - Selesai</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="leading-tight">Gedung Kuliah Bersama, Kampus C Universitas Airlangga, Surabaya</span>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <button class="border border-[#2E9853] text-[#2E9853] px-4 py-1.5 rounded-md text-xs font-medium hover:bg-[#2E9853] hover:text-white transition-colors">
                            Daftar Sekarang
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col">
                <div class="h-48 w-full bg-gray-200 relative">
                    <img src="{{ asset('images/event-2.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h2 class="font-bold text-[#1E293B] text-[15px] leading-snug mb-4">THE 2nd INTERNATIONAL SYMPOSIUM OF COSMETICS 2025</h2>
                    <div class="flex flex-col gap-2.5 text-xs text-gray-600 mb-6">
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>12 Desember 2025</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>13.00 - Selesai</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="leading-tight">Gedung Kuliah Bersama, Kampus C Universitas Airlangga, Surabaya</span>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <button class="border border-[#2E9853] text-[#2E9853] px-4 py-1.5 rounded-md text-xs font-medium hover:bg-[#2E9853] hover:text-white transition-colors">
                            Daftar Sekarang
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col">
                <div class="h-48 w-full bg-gray-200 relative">
                    <img src="{{ asset('images/event-3.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h2 class="font-bold text-[#1E293B] text-[15px] leading-snug mb-4">THE 2nd INTERNATIONAL SYMPOSIUM OF COSMETICS 2025</h2>
                    <div class="flex flex-col gap-2.5 text-xs text-gray-600 mb-6">
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>12 Desember 2025</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>13.00 - Selesai</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="leading-tight">Gedung Kuliah Bersama, Kampus C Universitas Airlangga, Surabaya</span>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <button class="border border-[#2E9853] text-[#2E9853] px-4 py-1.5 rounded-md text-xs font-medium hover:bg-[#2E9853] hover:text-white transition-colors">
                            Daftar Sekarang
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col">
                <div class="h-48 w-full bg-gray-200 relative">
                    <img src="{{ asset('images/event-1.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h2 class="font-bold text-[#1E293B] text-[15px] leading-snug mb-4">THE 2nd INTERNATIONAL SYMPOSIUM OF COSMETICS 2025</h2>
                    <div class="flex flex-col gap-2.5 text-xs text-gray-600 mb-6">
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>12 Desember 2025</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>13.00 - Selesai</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="leading-tight">Gedung Kuliah Bersama, Kampus C Universitas Airlangga, Surabaya</span>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <button class="border border-[#2E9853] text-[#2E9853] px-4 py-1.5 rounded-md text-xs font-medium hover:bg-[#2E9853] hover:text-white transition-colors">
                            Daftar Sekarang
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col">
                <div class="h-48 w-full bg-gray-200 relative">
                    <img src="{{ asset('images/event-1.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h2 class="font-bold text-[#1E293B] text-[15px] leading-snug mb-4">THE 2nd INTERNATIONAL SYMPOSIUM OF COSMETICS 2025</h2>
                    <div class="flex flex-col gap-2.5 text-xs text-gray-600 mb-6">
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>12 Desember 2025</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>13.00 - Selesai</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="leading-tight">Gedung Kuliah Bersama, Kampus C Universitas Airlangga, Surabaya</span>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <button class="border border-[#2E9853] text-[#2E9853] px-4 py-1.5 rounded-md text-xs font-medium hover:bg-[#2E9853] hover:text-white transition-colors">
                            Daftar Sekarang
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col">
                <div class="h-48 w-full bg-gray-200 relative">
                    <img src="{{ asset('images/event-3.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h2 class="font-bold text-[#1E293B] text-[15px] leading-snug mb-4">THE 2nd INTERNATIONAL SYMPOSIUM OF COSMETICS 2025</h2>
                    <div class="flex flex-col gap-2.5 text-xs text-gray-600 mb-6">
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>12 Desember 2025</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>13.00 - Selesai</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="leading-tight">Gedung Kuliah Bersama, Kampus C Universitas Airlangga, Surabaya</span>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <button class="border border-[#2E9853] text-[#2E9853] px-4 py-1.5 rounded-md text-xs font-medium hover:bg-[#2E9853] hover:text-white transition-colors">
                            Daftar Sekarang
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col">
                <div class="h-48 w-full bg-gray-200 relative">
                    <img src="{{ asset('images/event-2.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h2 class="font-bold text-[#1E293B] text-[15px] leading-snug mb-4">THE 2nd INTERNATIONAL SYMPOSIUM OF COSMETICS 2025</h2>
                    <div class="flex flex-col gap-2.5 text-xs text-gray-600 mb-6">
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>12 Desember 2025</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>13.00 - Selesai</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="leading-tight">Gedung Kuliah Bersama, Kampus C Universitas Airlangga, Surabaya</span>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <button class="border border-[#2E9853] text-[#2E9853] px-4 py-1.5 rounded-md text-xs font-medium hover:bg-[#2E9853] hover:text-white transition-colors">
                            Daftar Sekarang
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col">
                <div class="h-48 w-full bg-gray-200 relative">
                    <img src="{{ asset('images/event-3.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h2 class="font-bold text-[#1E293B] text-[15px] leading-snug mb-4">THE 2nd INTERNATIONAL SYMPOSIUM OF COSMETICS 2025</h2>
                    <div class="flex flex-col gap-2.5 text-xs text-gray-600 mb-6">
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>12 Desember 2025</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>13.00 - Selesai</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="leading-tight">Gedung Kuliah Bersama, Kampus C Universitas Airlangga, Surabaya</span>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <button class="border border-[#2E9853] text-[#2E9853] px-4 py-1.5 rounded-md text-xs font-medium hover:bg-[#2E9853] hover:text-white transition-colors">
                            Daftar Sekarang
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col">
                <div class="h-48 w-full bg-gray-200 relative">
                    <img src="{{ asset('images/event-2.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h2 class="font-bold text-[#1E293B] text-[15px] leading-snug mb-4">THE 2nd INTERNATIONAL SYMPOSIUM OF COSMETICS 2025</h2>
                    <div class="flex flex-col gap-2.5 text-xs text-gray-600 mb-6">
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>12 Desember 2025</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>13.00 - Selesai</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="leading-tight">Gedung Kuliah Bersama, Kampus C Universitas Airlangga, Surabaya</span>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <button class="border border-[#2E9853] text-[#2E9853] px-4 py-1.5 rounded-md text-xs font-medium hover:bg-[#2E9853] hover:text-white transition-colors">
                            Daftar Sekarang
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col">
                <div class="h-48 w-full bg-gray-200 relative">
                    <img src="{{ asset('images/event-1.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h2 class="font-bold text-[#1E293B] text-[15px] leading-snug mb-4">THE 2nd INTERNATIONAL SYMPOSIUM OF COSMETICS 2025</h2>
                    <div class="flex flex-col gap-2.5 text-xs text-gray-600 mb-6">
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>12 Desember 2025</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>13.00 - Selesai</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#2E9853] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="leading-tight">Gedung Kuliah Bersama, Kampus C Universitas Airlangga, Surabaya</span>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <button class="border border-[#2E9853] text-[#2E9853] px-4 py-1.5 rounded-md text-xs font-medium hover:bg-[#2E9853] hover:text-white transition-colors">
                            Daftar Sekarang
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <div class="flex justify-center items-center gap-4 pb-20 pt-8 text-[#1E293B]">
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