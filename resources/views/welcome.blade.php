

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="wrapper-all w-full min-h-screen bg-[#F7FFFA] relative">
        <x-navbar />
        <div class="main-home flex flex-col gap-24 pt-16">
            <div class="heroes w-full h-[80vh] flex items-center">
                <div class="w-[33%] flex flex-col justify-center gap-10 px-14 h-full text-sm ">
                    <div class="flex flex-col">
                        <h3 class="mb-2">Developing education, research, and community service in the field of pharmacy
                            to
                            support public health.</h3>
                        <div class="w-[30%] h-[0.4vh] bg-green-600 rounded-full"></div>
                    </div>
                    <h1 class="text-5xl font-medium">Faculty of Pharmacy Universitas Airlangga</h1>
                    <button class="w-full p-3 rounded-md bg-[#275CAA] hover:bg-[#194d9b] transition-all duration-200">
                        <h1 class="text-[#F7FFFA]">Explore Academic Programs</h1>
                    </button>
                </div>
                <div class="w-[67%] h-full flex justify-between">
                    <img src="{{ asset('images/image 16.png') }}" alt="Gedung FF">
                    <img src="{{ asset('images/image 19.png') }}" alt="Peneliti">
                </div>
            </div>
            <div class="about px-28 flex gap-10 justify-between">
                <div class="about-left flex flex-col w-[30%] justify-center gap-10">
                    <img src="{{ asset('images/about-1.png') }}" alt="about-1">
                    <img src="{{ asset('images/about-2.png') }}" alt="about-2">
                </div>
                <div class="about-right flex flex-col w-[65%] gap-7">
                    <h1 class="text-4xl font-medium">About the Faculty of Pharmacy</h1>
                    <div class="aspect-video w-full">
                        <iframe class="w-full h-full rounded-xl" src="https://www.youtube.com/embed/8Tkc1HRv-Ds"
                            title="YouTube video" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <h1 class="text-justify">Established in 1963, the Faculty of Pharmacy at Universitas Airlangga (FF
                        UNAIR) stands as Indonesia’s premier pharmaceutical institution, currently ranked #1 in the
                        country
                        by QS WUR by Subject. With internationally accredited programs (ASIIN) ranging from
                        undergraduate to
                        doctoral levels, we are committed to pioneering pharmaceutical science and clinical care based
                        on
                        religious morality. Through extensive domestic and global collaborations, FF UNAIR continues to
                        produce innovative graduates with excellent competence, maintaining its legacy as a leader in
                        health
                        education for over six decades.</h1>
                    <button
                        class="py-[0.67rem] px-6 border-[0.20vh] rounded-md border-[#275CAA] w-fit transition-all duration-200 bg-transparent hover:bg-[#275CAA] text-[#275CAA]  hover:text-[#F7FFFA] hover:text-[#F7FFFA] transition-all duration-200">
                        <h1 class="font-medium text-sm">More about the Faculty</h1>
                    </button>
                </div>
            </div>
            <div class="ranking w-full flex h-64 bg-[#275CAA] py-5 gap-3 overflow-hidden">
                <img src="{{ asset('images/rank-1.png') }}" alt="rank-1">
                <img src="{{ asset('images/rank-2.png') }}" alt="rank-2">
                <img src="{{ asset('images/rank-3.png') }}" alt="rank-3">
                <img src="{{ asset('images/rank-4.png') }}" alt="rank-4">
                <img src="{{ asset('images/rank-5.png') }}" alt="rank-5">
            </div>
            <div class="numbering px-48 w-full grid grid-cols-4 justify-between gap-5">
                <div
                    class="num-1 w-full flex flex-col col-span-1 justify-center items-center px-10 py-12 rounded-xl bg-gradient-to-t from-[#103367] to-[#275CAA] text-sm text-center text-[#F7FFFA]">
                    <h1 class="text-7xl font-semibold">22</h1>
                    <h1>Community Services conducted in 2024</h1>
                </div>
                <div
                    class="num-2 w-full flex flex-col col-span-1 justify-center items-center px-10 py-12 rounded-xl bg-gradient-to-t from-[#41982E] to-[#1C8005] text-sm text-center text-[#F7FFFA]">
                    <h1 class="text-7xl font-semibold">5</h1>
                    <h1>Accreditation: 5 study programmes accredited Excellent</h1>
                </div>
                <div
                    class="num-3 w-full flex flex-col col-span-1 justify-center items-center px-10 py-12 rounded-xl bg-gradient-to-t from-[#FEF60A] to-[#FECA0A] text-sm text-center text-[#F7FFFA]">
                    <h1 class="text-7xl font-semibold">19</h1>
                    <h1>Professors out of 75 Tenured Lecturers</h1>
                </div>
                <div
                    class="num-4 w-full flex flex-col col-span-1 justify-center items-center px-10 py-12 rounded-xl bg-gradient-to-t from-[#3B27AA] to-[#332E52] text-sm text-center text-[#F7FFFA]">
                    <h1 class="text-7xl font-semibold">106</h1>
                    <h1>Number of publications indexed by published in 2024</h1>
                </div>
                <div
                    class="num-5 w-full flex flex-col col-span-1 justify-center items-center px-10 py-12 rounded-xl bg-gradient-to-t from-[#14523F] to-[#2E9878] text-sm text-center text-[#F7FFFA]">
                    <h1 class="text-7xl font-semibold">16</h1>
                    <h1>Assoc, Professors out of 75 Tenured Lecturers</h1>
                </div>
                <div
                    class="num-6 w-full flex flex-col col-span-1 justify-center items-center px-10 py-12 rounded-xl bg-gradient-to-t from-[#FE980A] to-[#FFCD88] text-sm text-center text-[#F7FFFA]">
                    <h1 class="text-7xl font-semibold">1608</h1>
                    <h1>Active Student Body in Odd Semester Academic Year 2024/2025</h1>
                </div>
                <div
                    class="num-7 w-full flex flex-col col-span-1 justify-center items-center px-10 py-12 rounded-xl bg-gradient-to-t from-[#0B4361] to-[#277CAA] text-sm text-center text-[#F7FFFA]">
                    <h1 class="text-7xl font-semibold">62</h1>
                    <h1>Student's Achievements in 2023</h1>
                </div>
                <div
                    class="num-8 w-full flex flex-col col-span-1 justify-center items-center px-10 py-12 rounded-xl bg-gradient-to-t from-[#0F321B] to-[#2E9853] text-sm text-center text-[#F7FFFA]">
                    <h1 class="text-7xl font-semibold">77</h1>
                    <h1>Number of researches performed in 2024</h1>
                </div>
            </div>
            <div class="programs px-28 flex flex-col gap-10 justify-between">
                <div class="program-head flex flex-col gap-5">
                    <h1 class="text-4xl font-medium">Study Program</h1>
                    <h1>Educational program organized by the Faculty of Pharmacy, Airlangga University.</h1>
                </div>
                <div class="program-main grid grid-cols-5 h-full gap-3">
                    <div
                        class="program-1 shadow-xl hover:shadow-2xl transition-all duration-300 col-span-1 w-full flex flex-col gap-2 bg-[url('{{ asset('images/program-1.png') }}')] bg-cover bg-center text-[#F7FFFA] h-[28rem] justify-end rounded-xl relative">
                        <div
                            class="w-full h-full absolute bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end rounded-xl px-4 py-5">
                            <h1 class="font-medium text-3xl">Sarjana Farmasi dan Pendidikan Apoteker</h1>
                            <h1>Undergraduate Program</h1>
                        </div>
                    </div>
                    <div
                        class="program-2 shadow-xl hover:shadow-2xl transition-all duration-300 col-span-1 w-full flex flex-col gap-2 bg-[url('{{ asset('images/program-2.png') }}')] bg-cover bg-center text-[#F7FFFA] h-[28rem] justify-end rounded-xl relative">
                        <div
                            class="w-full h-full absolute bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end rounded-xl px-4 py-5">
                            <h1 class="font-medium text-3xl">Bachelor of Pharmacy</h1>
                            <h1>International Undergraduate Program</h1>
                        </div>
                    </div>
                    <div
                        class="program-3 shadow-xl hover:shadow-2xl transition-all duration-300 col-span-1 w-full flex flex-col gap-2 bg-[url('{{ asset('images/program-3.png') }}')] bg-cover bg-center text-[#F7FFFA] h-[28rem] justify-end rounded-xl relative">
                        <div
                            class="w-full h-full absolute bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end rounded-xl px-4 py-5">
                            <h1 class="font-medium text-3xl">Magister Ilmu Farmasi</h1>
                            <h1>Master of Pharmaceutical Sciences Program</h1>
                        </div>
                    </div>
                    <div
                        class="program-4 shadow-xl hover:shadow-2xl transition-all duration-300 col-span-1 w-full flex flex-col gap-2 bg-[url('{{ asset('images/program-4.png') }}')] bg-cover bg-center text-[#F7FFFA] h-[28rem] justify-end rounded-xl relative">
                        <div
                            class="w-full h-full absolute bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end rounded-xl px-4 py-5">
                            <h1 class="font-medium text-3xl">Magister Farmasi Klinik</h1>
                            <h1>Master of Clinical Pharmacy Program</h1>
                        </div>
                    </div>
                    <div
                        class="program-5 shadow-xl hover:shadow-2xl transition-all duration-300 col-span-1 w-full flex flex-col gap-2 bg-[url('{{ asset('images/program-5.png') }}')] bg-cover bg-center text-[#F7FFFA] h-[28rem] justify-end rounded-xl relative">
                        <div
                            class="w-full h-full absolute bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end rounded-xl px-4 py-5">
                            <h1 class="font-medium text-3xl">Doktor Ilmu Farmasi</h1>
                            <h1>Doctor of Pharmaceutical Sciences Program</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="events px-28 flex flex-col gap-10 justify-between">
                <div class="events-head flex flex-row items-center justify-between">
                    <h1 class="text-4xl font-medium">Upcoming Events</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-square-arrow-out-up-right-icon lucide-square-arrow-out-up-right">
                        <path d="M21 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h6" />
                        <path d="m21 3-9 9" />
                        <path d="M15 3h6v6" />
                    </svg>
                </div>
                <div class="events-main grid grid-cols-3 gap-3">
                    <div
                        class="event-1 col-span-1 w-full rounded-xl shadow-xl hover:shadow-2xl transition-all duration-300 h-[35rem] flex flex-col overflow-hidden">
                        <div class="event-img h-[45%] w-full overflow-hidden">
                            <img src="{{ asset('images/event-1.png') }}" class="w-full bg-center bg-cover"
                                alt="event-1">
                        </div>
                        <div class="event-main py-5 px-6 font-semibold text-lg flex flex-col justify-between h-[55%]">
                            <h1>THE 2nd INTERNATIONAL SYMPOSIUM OF COSMETICS 2025</h1>
                            <div class="event-desc flex flex-col gap-3">
                                <div class="calendar flex gap-3 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="#2E9853" stroke-width="1.25" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-calendar-days-icon lucide-calendar-days">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="#2E9853" stroke-width="1.25" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-clock-icon lucide-clock">
                                        <path d="M12 6v6l4 2" />
                                        <circle cx="12" cy="12" r="10" />
                                    </svg>
                                    <h1 class="text-sm font-normal">13.00 - Selesai</h1>
                                </div>
                                <div class="place flex gap-3 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="#2E9853" stroke-width="1.25" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-map-pin-icon lucide-map-pin">
                                        <path
                                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                        <circle cx="12" cy="10" r="3" />
                                    </svg>
                                    <h1 class="text-sm font-normal">Gedung Kuliah Bersama, Kampus C Universitas
                                        Airlangga,
                                        Surabaya</h1>
                                </div>
                            </div>
                            <button
                                class=" transition-all duration-200 bg-transparent hover:bg-[#2E9853] text-[#2E9853]  hover:text-[#F7FFFA] hover:text-[#F7FFFA] transition-all duration-200 py-[0.67rem] px-6 border-[0.20vh] rounded-md border-[#2E9853] w-fit">
                                <h1 class="font-medium text-sm">Daftar Sekarang</h1>
                            </button>
                        </div>
                    </div>
                    <div
                        class="event-2 col-span-1 w-full shadow-xl rounded-xl hover:shadow-2xl transition-all duration-300 h-[35rem] flex flex-col overflow-hidden">
                        <div class="event-img h-[45%] w-full overflow-hidden">
                            <img src="{{ asset('images/event-1.png') }}" class="w-full bg-center bg-cover"
                                alt="event-1">
                        </div>
                        <div class="event-main py-5 px-6 font-semibold text-lg flex flex-col justify-between h-[55%]">
                            <h1>THE 2nd INTERNATIONAL SYMPOSIUM OF COSMETICS 2025</h1>
                            <div class="event-desc flex flex-col gap-3">
                                <div class="calendar flex gap-3 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="#2E9853" stroke-width="1.25" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-calendar-days-icon lucide-calendar-days">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="#2E9853" stroke-width="1.25" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-clock-icon lucide-clock">
                                        <path d="M12 6v6l4 2" />
                                        <circle cx="12" cy="12" r="10" />
                                    </svg>
                                    <h1 class="text-sm font-normal">13.00 - Selesai</h1>
                                </div>
                                <div class="place flex gap-3 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="#2E9853" stroke-width="1.25" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-map-pin-icon lucide-map-pin">
                                        <path
                                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                        <circle cx="12" cy="10" r="3" />
                                    </svg>
                                    <h1 class="text-sm font-normal">Gedung Kuliah Bersama, Kampus C Universitas
                                        Airlangga,
                                        Surabaya</h1>
                                </div>
                            </div>
                            <button
                                class=" transition-all duration-200 bg-transparent hover:bg-[#2E9853] text-[#2E9853]  hover:text-[#F7FFFA] hover:text-[#F7FFFA] transition-all duration-200 py-[0.67rem] px-6 border-[0.20vh] rounded-md border-[#2E9853] w-fit">
                                <h1 class="font-medium text-sm">Daftar Sekarang</h1>
                            </button>
                        </div>
                    </div>
                    <div
                        class="event-3 col-span-1 w-full shadow-xl rounded-xl hover:shadow-2xl transition-all duration-300 h-[35rem] flex flex-col overflow-hidden">
                        <div class="event-img h-[45%] w-full overflow-hidden">
                            <img src="{{ asset('images/event-1.png') }}" class="w-full bg-center bg-cover"
                                alt="event-1">
                        </div>
                        <div class="event-main py-5 px-6 font-semibold text-lg flex flex-col justify-between h-[55%]">
                            <h1>THE 2nd INTERNATIONAL SYMPOSIUM OF COSMETICS 2025</h1>
                            <div class="event-desc flex flex-col gap-3">
                                <div class="calendar flex gap-3 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="#2E9853" stroke-width="1.25" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-calendar-days-icon lucide-calendar-days">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="#2E9853" stroke-width="1.25" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-clock-icon lucide-clock">
                                        <path d="M12 6v6l4 2" />
                                        <circle cx="12" cy="12" r="10" />
                                    </svg>
                                    <h1 class="text-sm font-normal">13.00 - Selesai</h1>
                                </div>
                                <div class="place flex gap-3 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="#2E9853" stroke-width="1.25" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-map-pin-icon lucide-map-pin">
                                        <path
                                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                        <circle cx="12" cy="10" r="3" />
                                    </svg>
                                    <h1 class="text-sm font-normal">Gedung Kuliah Bersama, Kampus C Universitas
                                        Airlangga,
                                        Surabaya</h1>
                                </div>
                            </div>
                            <button
                                class=" transition-all duration-200 bg-transparent hover:bg-[#2E9853] text-[#2E9853]  hover:text-[#F7FFFA] hover:text-[#F7FFFA] transition-all duration-200 py-[0.67rem] px-6 border-[0.20vh] rounded-md border-[#2E9853] w-fit">
                                <h1 class="font-medium text-sm">Daftar Sekarang</h1>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news px-28 flex flex-col gap-5">
                <div class="news-header flex justify-between items-center">
                    <h1 class="text-4xl font-medium">Latest News</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-square-arrow-out-up-right-icon lucide-square-arrow-out-up-right">
                        <path d="M21 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h6" />
                        <path d="m21 3-9 9" />
                        <path d="M15 3h6v6" />
                    </svg>
                </div>
                <div class="news-main flex w-full justify-between">
                    <a href="/news" class="news-main-left w-[49%] flex flex-col gap-3">
                        <img src="{{ asset('images/news-1.png') }}" alt="news-1" class="rounded-xl w-full">
                        <h1 class="text-sm">11/01/2026</h1>
                        <h1 class="text-justify text-xl font-medium">Professor of the Faculty of Pharmacy, UNAIR,
                            Attends
                            BPOM OSS Discussion to Accelerate Drug and Cosmetic Product
                            Registration</h1>
                    </a>
                    <div class="news-main-right w-[49%] grid-rows-4 flex flex-col gap-5">
                        <a href="/news" class="row-span-1 flex w-full gap-5">
                            <div class="img w-[30%] h-32 overflow-hidden items-center flex rounded-xl">
                                <img src="{{ asset('images/news-2.png') }}" class="w-full bg-cover bg-center"
                                    alt="news-2">
                            </div>
                            <div class="news-main-desc flex flex-col w-[70%] gap-3">
                                <h1 class="text-xs">11/01/2026</h1>
                                <h1 class="text-justify text-base font-medium">Professor of the Faculty of Pharmacy,
                                    UNAIR,
                                    Attends BPOM OSS Discussion to
                                    Accelerate Drug and Cosmetic Product
                                    Registration</h1>
                            </div>
                        </a>
                        <a href="/news" class="row-span-1 flex w-full gap-5">
                            <div class="img w-[30%] h-32 overflow-hidden items-center flex rounded-xl">
                                <img src="{{ asset('images/news-3.png') }}" class="w-full bg-cover bg-center"
                                    alt="news-3">
                            </div>
                            <div class="news-main-desc flex flex-col w-[70%] gap-3">
                                <h1 class="text-xs">08/01/2026</h1>
                                <h1 class="text-justify text-base font-medium">Faculty of Medicine (FF) students from
                                    Airlangga University were sent to National Chiayi University in Taiwan to conduct
                                    tradition</h1>
                            </div>
                        </a>
                        <a href="/news" class="row-span-1 flex w-full gap-5">
                            <div class="img w-[30%] h-32 overflow-hidden items-center flex rounded-xl">
                                <img src="{{ asset('images/news-4.png') }}" class="w-full bg-cover bg-center"
                                    alt="news-4">
                            </div>
                            <div class="news-main-desc flex flex-col w-[70%] gap-3">
                                <h1 class="text-xs">07/01/2026</h1>
                                <h1 class="text-justify text-base font-medium">Congratulations on the inauguration of
                                    Prof. Junaidi Khotib as Secretary of the Director General of Research and
                                    Development, Min</h1>
                            </div>
                        </a>
                        <a href="/news" class="row-span-1 flex w-full gap-5">
                            <div class="img w-[30%] h-32 overflow-hidden items-center flex rounded-xl">
                                <img src="{{ asset('images/news-5.png') }}" class="w-full bg-cover bg-center"
                                    alt="news-5">
                            </div>
                            <div class="news-main-desc flex flex-col w-[70%] gap-3">
                                <h1 class="text-xs">05/01/2026</h1>
                                <h1 class="text-justify text-base font-medium">[Ini AGAK LAEN! MENYALA FARMASIKU!] Visit
                                    the FF UNAIR Booth at AEE 2026</h1>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="services px-28 py-24 bg-cover bg-center bg-[url('{{ asset('images/services.png') }}')] flex flex-col text-[#F7FFFA] hover:text-[#F7FFFA] transition-all duration-200 w-full h-full relative">
                <div class="front z-30 gap-10 flex flex-col">
                    <div class="services-main w-[35%] flex flex-col gap-3">
                        <h1 class="text-4xl font-medium">Need Faculty Information or Services?</h1>
                        <h1 class="text-sm">Find various academic information, administrative services, and
                            official contacts of the Faculty of Pharmacy, Airlangga
                            University.</h1>
                    </div>
                    <div class="services-button flex w-[35%] gap-3 text-xs">
                        <button class="p-3 px-7 rounded-md bg-[#275CAA] hover:bg-[#194d9b] transition-all duration-200">
                            <h1 class="text-[#F7FFFA]">Contact Us</h1>
                        </button>
                        <button
                            class="p-3 px-7 rounded-md bg-[#F7FFFA] border border-[#275CAA] text-[#275CAA] hover:text-[#F7FFFA] hover:bg-[#275CAA] transition-all duration-200">
                            <h1 class="">Forms and Downloads</h1>
                        </button>
                    </div>
                </div>
                <div class="w-full h-full bg-black/40 absolute top-0 z-0 left-0 translate-x-0"></div>
            </div>
        </div>
        <x-footer />
    </div>
</body>

</html>