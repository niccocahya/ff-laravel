<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Education - Scholarship</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        .fade-in {
            animation: fadeIn 0.4s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Sembunyikan scrollbar agar tampilan tabel tetap bersih di HP */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body>
    <div class="wrapper-all w-full min-h-screen bg-[#F7FFFA] relative font-sans">
        <x-nav-prodi-s3 />

        <div class="main-calendar flex flex-col pt-16 md:pt-26">

            <x-hero-section title="Education"
                description="Leading the development of Pharmaceutical Science Technology and Clinical Community Pharmacy through innovative education and global collaboration." />

            <div class="fade-in py-8 md:py-14 px-6 md:px-14 lg:px-28 flex flex-col gap-6 md:gap-10 bg-[#F7FFFA]">

                <x-pagination-s3dif-education active="scholarship" />

                <div class="w-full flex flex-col pt-2">

                    <div class="w-full overflow-x-auto scrollbar-hide rounded-xl shadow-sm border border-gray-100">
                        <div class="min-w-[500px] w-full flex flex-col bg-white">

                            <div class="bg-[#2F5DA9] text-white flex w-full font-medium text-base md:text-lg">
                                <div class="w-1/2 text-center py-4 md:py-5 border-r border-white/20">WNI</div>
                                <div class="w-1/2 text-center py-4 md:py-5">WNA</div>
                            </div>

                            <div class="flex w-full bg-white border-b border-gray-100 min-h-[80px]">
                                <div class="w-1/2 flex justify-center items-center px-4 py-5 border-r border-gray-100">
                                    <a href="#"
                                        class="flex items-center justify-center gap-1.5 hover:text-[#275CAA] transition-colors group text-sm md:text-base">
                                        <span class="underline underline-offset-4 decoration-1 text-center">Lembaga
                                            Pengelola Dana Pendidikan</span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 shrink-0 group-hover:-translate-y-0.5 group-hover:translate-x-0.5 transition-transform"
                                            fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M200,64V168a8,8,0,0,1-16,0V83.31L69.66,197.66a8,8,0,0,1-11.32-11.32L172.69,72H88a8,8,0,0,1,0-16H192A8,8,0,0,1,200,64Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="w-1/2 flex justify-center items-center px-4 py-5">
                                    <a href="#"
                                        class="flex items-center justify-center gap-1.5 hover:text-[#275CAA] transition-colors group text-sm md:text-base">
                                        <span class="underline underline-offset-4 decoration-1 text-center">Airlangga
                                            Development Scholarship</span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 shrink-0 group-hover:-translate-y-0.5 group-hover:translate-x-0.5 transition-transform"
                                            fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M200,64V168a8,8,0,0,1-16,0V83.31L69.66,197.66a8,8,0,0,1-11.32-11.32L172.69,72H88a8,8,0,0,1,0-16H192A8,8,0,0,1,200,64Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="flex w-full bg-[#F8FAFC] border-b border-gray-100 min-h-[80px]">
                                <div class="w-1/2 flex justify-center items-center px-4 py-5 border-r border-gray-100">
                                    <a href="#"
                                        class="flex items-center justify-center gap-1.5 hover:text-[#275CAA] transition-colors group text-sm md:text-base">
                                        <span class="underline underline-offset-4 decoration-1 text-center">Beasiswa
                                            Unggulan</span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 shrink-0 group-hover:-translate-y-0.5 group-hover:translate-x-0.5 transition-transform"
                                            fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M200,64V168a8,8,0,0,1-16,0V83.31L69.66,197.66a8,8,0,0,1-11.32-11.32L172.69,72H88a8,8,0,0,1,0-16H192A8,8,0,0,1,200,64Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="w-1/2 px-4 py-5">
                                </div>
                            </div>

                            <div class="flex w-full bg-white border-b border-gray-100 min-h-[80px]">
                                <div class="w-1/2 flex justify-center items-center px-4 py-5 border-r border-gray-100">
                                    <a href="#"
                                        class="flex items-center justify-center gap-1.5 hover:text-[#275CAA] transition-colors group text-sm md:text-base">
                                        <span class="underline underline-offset-4 decoration-1 text-center">Badan Riset
                                            Inovasi Nasional</span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 shrink-0 group-hover:-translate-y-0.5 group-hover:translate-x-0.5 transition-transform"
                                            fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M200,64V168a8,8,0,0,1-16,0V83.31L69.66,197.66a8,8,0,0,1-11.32-11.32L172.69,72H88a8,8,0,0,1,0-16H192A8,8,0,0,1,200,64Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="w-1/2 px-4 py-5">
                                </div>
                            </div>

                            <div class="flex w-full bg-[#F8FAFC] min-h-[80px]">
                                <div class="w-1/2 flex justify-center items-center px-4 py-5 border-r border-gray-100">
                                    <a href="#"
                                        class="flex items-center justify-center gap-1.5 hover:text-[#275CAA] transition-colors group text-sm md:text-base">
                                        <span class="underline underline-offset-4 decoration-1 text-center">Kementerian
                                            Agama</span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 shrink-0 group-hover:-translate-y-0.5 group-hover:translate-x-0.5 transition-transform"
                                            fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M200,64V168a8,8,0,0,1-16,0V83.31L69.66,197.66a8,8,0,0,1-11.32-11.32L172.69,72H88a8,8,0,0,1,0-16H192A8,8,0,0,1,200,64Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="w-1/2 px-4 py-5">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="mt-6 md:mt-8 flex justify-center md:justify-start md:ml-4">
                        <a href="#"
                            class="text-[#2F5DA9] text-sm md:text-[15px] font-medium underline underline-offset-4 decoration-1 hover:text-[#1d4f96] transition-colors">
                            View More
                        </a>
                    </div>

                </div>
            </div>

            <x-footer />
        </div>
    </div>
</body>

</html>