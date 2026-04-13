<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Education - Educational Staff</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        .fade-in { animation: fadeIn 0.4s ease-in-out; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(5px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body>
    <div class="wrapper-all w-full min-h-screen bg-[#F7FFFA] relative font-sans">
        <x-nav-prodi />
        
        <div class="main-calendar flex flex-col pt-20 md:pt-26">
            
            <x-hero-section 
                title="Education" 
                description="Leading the development of Pharmaceutical Science-Technology and Clinical-Community Pharmacy through innovative education and global collaboration." 
            />

            <div class="fade-in py-8 md:py-14 px-6 md:px-16 lg:px-28 flex flex-col gap-6 md:gap-10 bg-[#F7FFFA]">
                
                <x-pagination-s2mif-education active="staff" />

                <div class="w-full flex flex-col gap-6 pt-2">
                    
                    <x-tabs :tabs="[
                        'internal' => 'Internal Staff',
                        'external' => 'External Staff'
                    ]">
                        
                        <div id="content-internal" class="tab-content fade-in block w-full mt-2">
                            
                            <div class="pb-6 md:pb-8 flex flex-col sm:flex-row gap-3 md:gap-4 w-full">
                                <input type="text" placeholder="Search..." 
                                    class="flex-grow rounded-lg border border-[#3D3D3D] px-4 py-3 text-sm focus:outline-none focus:border-[#3D3D3D] transition-colors bg-transparent">
                                
                                <button class="bg-[#275CAA] hover:bg-[#1d4f96] text-white px-8 py-2.5 rounded-lg text-sm font-medium transition-colors shadow-sm w-full sm:w-auto">
                                    Browse
                                </button>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 mt-2">
                                @for ($i = 0; $i < 8; $i++)
                                <div class="bg-[#F8FAFC] p-4 md:p-6 rounded-xl border border-gray-100 flex items-center justify-center text-center min-h-[80px] md:h-[100px] shadow-sm hover:shadow-md transition-shadow">
                                    <h3 class="text-[#334155] font-medium text-xs md:text-sm lg:text-base leading-snug">
                                        Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.
                                    </h3>
                                </div>
                                @endfor
                            </div>

                            <div class="flex items-center justify-center gap-2 mt-8 md:mt-10">
                                <button class="p-2 text-gray-500 hover:text-[#275CAA] transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                                </button>
                                
                                <div class="hidden sm:flex items-center gap-1">
                                    @for ($i = 1; $i <= 10; $i++)
                                        <button class="w-8 h-8 flex items-center justify-center rounded text-sm font-medium transition-all {{ $i === 1 ? 'bg-[#275CAA] text-white' : 'hover:bg-gray-100 text-gray-700' }}">
                                            {{ $i }}
                                        </button>
                                    @endfor
                                </div>

                                <div class="sm:hidden flex items-center gap-2">
                                     <button class="w-8 h-8 flex items-center justify-center rounded bg-[#275CAA] text-white font-medium text-sm">1</button>
                                     <span class="text-gray-500 text-xs">...</span>
                                     <button class="w-8 h-8 flex items-center justify-center rounded hover:bg-gray-100 text-gray-700 font-medium text-sm">10</button>
                                </div>

                                <button class="p-2 text-gray-500 hover:text-[#275CAA] transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                                </button>
                            </div>

                        </div>

                        <div id="content-external" class="tab-content hidden fade-in w-full mt-2">
                            
                            <div class="pb-6 md:pb-8 flex flex-col sm:flex-row gap-3 md:gap-4 w-full">
                                <input type="text" placeholder="Search..." 
                                    class="flex-grow rounded-lg border border-[#3D3D3D] px-4 py-3 text-sm focus:outline-none focus:border-[#3D3D3D] transition-colors bg-transparent">
                                
                                <button class="bg-[#275CAA] hover:bg-[#1d4f96] text-white px-8 py-2.5 rounded-lg text-sm font-medium transition-colors shadow-sm w-full sm:w-auto">
                                    Browse
                                </button>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 mt-2">
                                @for ($i = 0; $i < 4; $i++)
                                <div class="bg-[#F8FAFC] p-4 md:p-6 rounded-xl border border-gray-100 flex items-center justify-center text-center min-h-[80px] md:h-[100px] shadow-sm hover:shadow-md transition-shadow">
                                    <h3 class="text-[#334155] font-medium text-xs md:text-sm lg:text-base leading-snug">
                                        External Staff Name Example, M.Si.
                                    </h3>
                                </div>
                                @endfor
                            </div>

                        </div>

                    </x-tabs>

                </div>

            </div>
            
            <x-footer />
        </div>
    </div>

</body>

</html>