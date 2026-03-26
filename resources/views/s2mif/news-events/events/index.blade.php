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
        .modal-active { overflow: hidden; }
    </style>
</head>
<body class="bg-[#F7FFFA] min-h-screen font-sans">

    <x-navbar />

    <div class="w-full flex flex-col pt-16 fade-in">
        
        <x-hero-section 
            title="News and Events" 
            description="Stay updated with key academic dates, lecture schedules, and important events throughout the semester." 
        />

        <x-pagination-news-events active="events" />

        <div class="px-28 pb-8 flex gap-4 w-full">
            <input type="text" placeholder="Search..." 
                class="flex-grow rounded-lg border border-[#3D3D3D] px-4 py-3 text-sm focus:outline-none focus:border-[#3D3D3D] transition-colors bg-transparent">
            
            <div class="relative">
                <select class="w-40 appearance-none rounded-lg border border-[#3D3D3D] px-4 py-3 pr-10 text-sm focus:outline-none focus:border-[#3D3D3D] transition-colors bg-transparent cursor-pointer text-gray-600">
                    <option>All Months</option>
                    <option>January</option>
                    <option>February</option>
                    <option>March</option>
                    <option>April</option>
                    <option>May</option>
                    <option>June</option>
                    <option>July</option>
                    <option>August</option>
                    <option>September</option>
                    <option>October</option>
                    <option>November</option>
                    <option>December</option>
                    </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-500">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </div>

            <div class="relative">
                <select class="w-40 appearance-none rounded-lg border border-[#3D3D3D] px-4 py-3 pr-10 text-sm focus:outline-none focus:border-[#3D3D3D] transition-colors bg-transparent cursor-pointer text-gray-600">
                    <option>All Year</option>
                    <option>2025</option>
                    <option>2024</option>
                    <option>2023</option>
                    <option>2022</option>
                    <option>2021</option>
                    <option>2020</option>
                    <option>2019</option>

                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-500">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </div>

            <button class="bg-[#275CAA] hover:bg-[#1d4f96] text-white px-8 py-2.5 rounded-lg text-sm font-medium transition-colors shadow-sm">
                Browse
            </button>
        </div>

        <div class="events px-28 pb-12 flex flex-col gap-10 justify-between">
            <div class="events-main grid grid-cols-3 gap-6"> @for ($i = 1; $i <= 12; $i++)
                @php
                    $imgIndex = (($i - 1) % 3) + 1; 
                @endphp
                <div
                    class="col-span-1 w-full rounded-xl shadow-xl hover:shadow-2xl transition-all duration-300 h-[35rem] flex flex-col overflow-hidden bg-white cursor-pointer group"
                    onclick="openModal('{{ asset('images/event-'.$imgIndex.'.png') }}')"
                >
                    <div class="event-img h-[45%] w-full overflow-hidden relative">
                        <img src="{{ asset('images/event-'.$imgIndex.'.png') }}" class="w-full h-full object-cover" alt="event-{{$imgIndex}}">
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex justify-center items-center">
                            <svg class="w-8 h-8 text-white drop-shadow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                        </div>
                    </div>
                    <div class="event-main py-5 px-6 font-semibold text-lg flex flex-col justify-between h-[55%]">
                        <h1>THE 2nd INTERNATIONAL SYMPOSIUM OF COSMETICS 2025</h1>
                        <div class="event-desc flex flex-col gap-3">
                            <div class="calendar flex gap-3 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="#2E9853" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-calendar-days-icon lucide-calendar-days shrink-0">
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
                                <h1 class="text-sm font-normal">12 Desember 2025</h1>
                            </div>
                            <div class="time flex gap-3 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="#2E9853" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-clock-icon lucide-clock shrink-0">
                                    <path d="M12 6v6l4 2" />
                                    <circle cx="12" cy="12" r="10" />
                                </svg>
                                <h1 class="text-sm font-normal">13.00 - Selesai</h1>
                            </div>
                            <div class="place flex gap-3 items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="#2E9853" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-map-pin-icon lucide-map-pin shrink-0 mt-0.5">
                                    <path
                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                                <h1 class="text-sm font-normal leading-tight">Gedung Kuliah Bersama, Kampus C Universitas
                                    Airlangga,
                                    Surabaya</h1>
                            </div>
                        </div>
                        <button
                            class="transition-all duration-200 bg-transparent hover:bg-[#2E9853] text-[#2E9853] hover:text-[#F7FFFA] py-[0.67rem] px-6 border-[0.20vh] rounded-md border-[#2E9853] w-fit">
                            <h1 class="font-medium text-sm">Daftar Sekarang</h1>
                        </button>
                    </div>
                </div>
                @endfor

            </div>
        </div>

        <div class="flex justify-center items-center gap-4 pb-20 text-[#1E293B]">
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

    <div id="imageModal" class="fixed inset-0 z-50 hidden bg-black/80 flex justify-center items-center opacity-0 transition-opacity duration-300 p-4 md:p-10" onclick="closeModal(event)">
        <div class="relative flex flex-col justify-center items-center" onclick="event.stopPropagation()">
            <button class="absolute -top-4 -right-4 md:-top-5 md:-right-5 bg-black text-white rounded-full p-1.5 hover:bg-gray-800 transition-colors z-50 cursor-pointer shadow-lg border border-gray-600" onclick="closeModal(event, true)">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-7 md:w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <img id="modalImage" src="" alt="Event Poster" class="w-auto h-auto max-w-full max-h-[90vh] object-contain rounded-lg shadow-2xl">
        </div>
    </div>

    <script>
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');
        const body = document.body;

        function openModal(imageSrc) {
            modalImg.src = imageSrc;
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modal.classList.add('opacity-100');
            }, 10);
            body.classList.add('modal-active');
        }

        function closeModal(event, forceClose = false) {
            if (forceClose || event.target === modal) {
                modal.classList.remove('opacity-100');
                modal.classList.add('opacity-0');
                setTimeout(() => {
                    modal.classList.add('hidden');
                    modalImg.src = ""; 
                    body.classList.remove('modal-active'); 
                }, 300); 
            }
        }
        
        document.addEventListener('keydown', function(event) {
            if (event.key === "Escape" && !modal.classList.contains('hidden')) {
                closeModal(event, true);
            }
        });
    </script>
</body>
</html>