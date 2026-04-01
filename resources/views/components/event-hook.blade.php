<div class="events px-6 md:px-14 lg:px-28 flex flex-col gap-8 lg:gap-10 justify-between">
    <div class="events-head flex flex-row items-center justify-between">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-medium text-gray-800">Upcoming Events</h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-square-arrow-out-up-right-icon lucide-square-arrow-out-up-right w-6 h-6 md:w-8 md:h-8 cursor-pointer hover:text-gray-500 transition-colors">
            <path d="M21 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h6" />
            <path d="m21 3-9 9" />
            <path d="M15 3h6v6" />
        </svg>
    </div>

    <div class="events-main grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-5">

        <div
            class="event-1 w-full rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 h-[35rem] flex flex-col overflow-hidden bg-white border border-gray-100">
            <div class="event-img h-[45%] w-full overflow-hidden">
                <img src="{{ asset('images/event-1.png') }}"
                    class="w-full h-full object-cover object-center hover:scale-105 transition-transform duration-500"
                    alt="event-1">
            </div>
            <div class="event-main py-5 px-6 flex flex-col justify-between h-[55%]">
                <h3 class="font-semibold text-lg leading-snug text-gray-800 line-clamp-2">THE 2nd INTERNATIONAL
                    SYMPOSIUM OF COSMETICS 2025</h3>

                <div class="event-desc flex flex-col gap-3 mt-4 mb-4 text-gray-600">
                    <div class="calendar flex gap-3 items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#2E9853"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-calendar-days shrink-0 w-5 h-5 mt-0.5">
                            <path d="M8 2v4" />
                            <path d="M16 2v4" />
                            <rect width="18" height="18" x="3" y="4" rx="2" />
                            <path d="M3 10h18" />
                            <path d="M8 14h.01" />
                            <path d="M12 14h.01" />
                            <path d="M16 14h.01" />
                            <path d="M8 18h.01" />
                            <path d="M12 18h.01" />
                            <path d="M16 18h.01" />
                        </svg>
                        <p class="text-sm font-normal leading-relaxed">12 Desember 2025</p>
                    </div>
                    <div class="time flex gap-3 items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#2E9853"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-clock shrink-0 w-5 h-5 mt-0.5">
                            <path d="M12 6v6l4 2" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                        <p class="text-sm font-normal leading-relaxed">13.00 - Selesai</p>
                    </div>
                    <div class="place flex gap-3 items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#2E9853"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-map-pin shrink-0 w-5 h-5 mt-0.5">
                            <path
                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        <p class="text-sm font-normal leading-relaxed">Gedung Kuliah Bersama, Kampus C Universitas
                            Airlangga, Surabaya</p>
                    </div>
                </div>

                <button
                    class="py-2.5 px-6 border rounded-md border-[#2E9853] w-fit font-medium text-sm bg-transparent hover:bg-[#2E9853] text-[#2E9853] hover:text-[#F7FFFA] transition-all duration-300">
                    Daftar Sekarang
                </button>
            </div>
        </div>

        <div
            class="event-2 w-full rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 h-[35rem] flex flex-col overflow-hidden bg-white border border-gray-100">
            <div class="event-img h-[45%] w-full overflow-hidden">
                <img src="{{ asset('images/event-1.png') }}"
                    class="w-full h-full object-cover object-center hover:scale-105 transition-transform duration-500"
                    alt="event-2">
            </div>
            <div class="event-main py-5 px-6 flex flex-col justify-between h-[55%]">
                <h3 class="font-semibold text-lg leading-snug text-gray-800 line-clamp-2">THE 2nd INTERNATIONAL
                    SYMPOSIUM OF COSMETICS 2025</h3>

                <div class="event-desc flex flex-col gap-3 mt-4 mb-4 text-gray-600">
                    <div class="calendar flex gap-3 items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#2E9853"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-calendar-days shrink-0 w-5 h-5 mt-0.5">
                            <path d="M8 2v4" />
                            <path d="M16 2v4" />
                            <rect width="18" height="18" x="3" y="4" rx="2" />
                            <path d="M3 10h18" />
                            <path d="M8 14h.01" />
                            <path d="M12 14h.01" />
                            <path d="M16 14h.01" />
                            <path d="M8 18h.01" />
                            <path d="M12 18h.01" />
                            <path d="M16 18h.01" />
                        </svg>
                        <p class="text-sm font-normal leading-relaxed">12 Desember 2025</p>
                    </div>
                    <div class="time flex gap-3 items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#2E9853"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-clock shrink-0 w-5 h-5 mt-0.5">
                            <path d="M12 6v6l4 2" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                        <p class="text-sm font-normal leading-relaxed">13.00 - Selesai</p>
                    </div>
                    <div class="place flex gap-3 items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#2E9853"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-map-pin shrink-0 w-5 h-5 mt-0.5">
                            <path
                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        <p class="text-sm font-normal leading-relaxed">Gedung Kuliah Bersama, Kampus C Universitas
                            Airlangga, Surabaya</p>
                    </div>
                </div>

                <button
                    class="py-2.5 px-6 border rounded-md border-[#2E9853] w-fit font-medium text-sm bg-transparent hover:bg-[#2E9853] text-[#2E9853] hover:text-[#F7FFFA] transition-all duration-300">
                    Daftar Sekarang
                </button>
            </div>
        </div>

        <div
            class="event-3 w-full rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 h-[35rem] flex flex-col overflow-hidden bg-white border border-gray-100">
            <div class="event-img h-[45%] w-full overflow-hidden">
                <img src="{{ asset('images/event-1.png') }}"
                    class="w-full h-full object-cover object-center hover:scale-105 transition-transform duration-500"
                    alt="event-3">
            </div>
            <div class="event-main py-5 px-6 flex flex-col justify-between h-[55%]">
                <h3 class="font-semibold text-lg leading-snug text-gray-800 line-clamp-2">THE 2nd INTERNATIONAL
                    SYMPOSIUM OF COSMETICS 2025</h3>

                <div class="event-desc flex flex-col gap-3 mt-4 mb-4 text-gray-600">
                    <div class="calendar flex gap-3 items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#2E9853"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-calendar-days shrink-0 w-5 h-5 mt-0.5">
                            <path d="M8 2v4" />
                            <path d="M16 2v4" />
                            <rect width="18" height="18" x="3" y="4" rx="2" />
                            <path d="M3 10h18" />
                            <path d="M8 14h.01" />
                            <path d="M12 14h.01" />
                            <path d="M16 14h.01" />
                            <path d="M8 18h.01" />
                            <path d="M12 18h.01" />
                            <path d="M16 18h.01" />
                        </svg>
                        <p class="text-sm font-normal leading-relaxed">12 Desember 2025</p>
                    </div>
                    <div class="time flex gap-3 items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#2E9853"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-clock shrink-0 w-5 h-5 mt-0.5">
                            <path d="M12 6v6l4 2" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                        <p class="text-sm font-normal leading-relaxed">13.00 - Selesai</p>
                    </div>
                    <div class="place flex gap-3 items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#2E9853"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-map-pin shrink-0 w-5 h-5 mt-0.5">
                            <path
                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        <p class="text-sm font-normal leading-relaxed">Gedung Kuliah Bersama, Kampus C Universitas
                            Airlangga, Surabaya</p>
                    </div>
                </div>

                <button
                    class="py-2.5 px-6 border rounded-md border-[#2E9853] w-fit font-medium text-sm bg-transparent hover:bg-[#2E9853] text-[#2E9853] hover:text-[#F7FFFA] transition-all duration-300">
                    Daftar Sekarang
                </button>
            </div>
        </div>

    </div>
</div>