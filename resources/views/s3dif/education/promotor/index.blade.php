<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Education - Student Mobility</title>
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

        /* Menyembunyikan scrollbar di container table untuk HP */
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
                description="Leading the development of Pharmaceutical Science-Technology and Clinical-Community Pharmacy through innovative education and global collaboration." />

            <div class="fade-in py-8 md:py-14 px-6 md:px-14 lg:px-28 flex flex-col gap-6 md:gap-10 bg-[#F7FFFA]">

                <x-pagination-s3dif-education active="promotor" />

                <div class="tab-content fade-in block w-full mt-2">

                    <div class="pb-6 md:pb-8 flex flex-col sm:flex-row gap-3 md:gap-4 w-full">
                        <input type="text" placeholder="Search..."
                            class="flex-grow rounded-lg border border-gray-400 bg-white px-4 py-3 text-sm focus:outline-none focus:border-[#275CAA] transition-colors w-full">

                        <button
                            class="bg-[#275CAA] hover:bg-[#1d4f96] text-white px-10 py-3 rounded-lg text-sm md:text-base font-medium transition-colors shadow-sm w-full sm:w-auto shrink-0">
                            Browse
                        </button>
                    </div>

                    <div class="w-full overflow-x-auto scrollbar-hide rounded-xl shadow-sm border border-gray-100">
                        <div class="min-w-[600px] w-full flex flex-col bg-white">

                            <div
                                class="flex w-full bg-[#2F5DA9] text-white py-4 px-6 rounded-t-xl font-medium text-base md:text-lg">
                                <div class="w-1/2 flex items-center justify-center border-r border-white/20">Name</div>
                                <div class="w-1/2 flex items-center justify-center pl-4">Field</div>
                            </div>

                            @php
                                $promotors = [
                                    ['name' => 'Prof. Dr. apt. Sukardiman, MS.', 'field' => 'Natural Products Drug Discovery & Development'],
                                    ['name' => 'Prof. Dr. apt. Sudjarwo, MS.', 'field' => 'Pharmaceutical Analysis Development'],
                                    ['name' => 'Prof. Dr. apt. Budi Suprapti, MSi.', 'field' => 'Clinical Pharmacy'],
                                    ['name' => 'Prof. Dr. apt. rer. nat. M. Yuwono, MS.', 'field' => 'Pharmaceutical Analysis Development'],
                                    ['name' => 'Prof. Dr. apt. Siswandono, MS.', 'field' => 'Medicinal Chemistry'],
                                    ['name' => 'Prof. Dr. apt. Djoko Agus Purwanto, M.Si.', 'field' => 'Pharmaceutical Chemistry'],
                                ];
                            @endphp

                            @foreach ($promotors as $index => $promotor)
                                <div class="flex w-full py-5 px-6 {{ $index % 2 == 0 ? 'bg-white' : 'bg-[#F8FAFC]' }}">
                                    <div class="w-1/2 flex items-center text-gray-800 text-sm md:text-base pr-4">
                                        {{ $promotor['name'] }}
                                    </div>
                                    <div class="w-1/2 flex items-center text-gray-700 text-sm md:text-base pl-4">
                                        {{ $promotor['field'] }}
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="flex items-center justify-center gap-2 mt-8 md:mt-10">
                        <button class="p-2 text-gray-500 hover:text-[#275CAA] transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m15 18-6-6 6-6" />
                            </svg>
                        </button>

                        <div class="hidden sm:flex items-center gap-1">
                            @for ($i = 1; $i <= 10; $i++)
                                <button
                                    class="w-8 h-8 flex items-center justify-center rounded text-sm font-medium transition-all {{ $i === 1 ? 'bg-[#275CAA] text-white shadow-sm' : 'hover:bg-gray-100 text-gray-700' }}">
                                    {{ $i }}
                                </button>
                            @endfor
                        </div>

                        <div class="sm:hidden flex items-center gap-2">
                            <button
                                class="w-8 h-8 flex items-center justify-center rounded bg-[#275CAA] shadow-sm text-white font-medium text-sm">1</button>
                            <span class="text-gray-500 text-xs">...</span>
                            <button
                                class="w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 text-gray-700 font-medium text-sm">10</button>
                        </div>

                        <button class="p-2 text-gray-500 hover:text-[#275CAA] transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </button>
                    </div>

                </div>

            </div>

            <x-footer />
        </div>
    </div>
</body>

</html>