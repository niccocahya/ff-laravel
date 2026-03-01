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
                    <a href="#study-program">
                        <button class="w-full p-3 rounded-md bg-[#275CAA] hover:bg-[#194d9b] transition-all duration-200">
                            <h1 class="text-[#F7FFFA]">Explore Academic Programs</h1>
                        </button>
                    </a>
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
                    <a href="/about-us/faculty-profile">
                        <button
                            class="py-[0.67rem] px-6 border-[0.20vh] rounded-md border-[#275CAA] w-fit transition-all duration-200 bg-transparent hover:bg-[#275CAA] text-[#275CAA]  hover:text-[#F7FFFA] hover:text-[#F7FFFA] transition-all duration-200">
                            <h1 class="font-medium text-sm">More about the Faculty</h1>
                        </button>
                    </a>
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
            <div id="study-program" class="programs px-28 flex flex-col gap-10 justify-between">
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
            <x-event-hook/>
            <x-news-hook/>
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
                        <a href="/services-information/forms-downloads/forms">
                            <button
                                class="p-3 px-7 rounded-md bg-[#F7FFFA] border border-[#275CAA] text-[#275CAA] hover:text-[#F7FFFA] hover:bg-[#275CAA] transition-all duration-200">
                                <h1 class="">Forms and Downloads</h1>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="w-full h-full bg-black/40 absolute top-0 z-0 left-0 translate-x-0"></div>
            </div>
        </div>
        <x-footer />
    </div>
</body>

</html>