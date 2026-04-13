<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Education - Scholarship</title>
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
                
                <x-pagination-s2mif-education active="scholarship" />

                <div class="w-full flex flex-col pt-2">
                    <div class="rounded-xl overflow-hidden shadow-sm bg-white border border-gray-100">
                        
                        <div class="bg-[#2F5DA9] text-white flex px-4 md:px-6 py-5 md:py-6 font-medium text-base md:text-lg">
                            <div class="flex-1 text-center border-r border-white/20 md:border-none">WNI</div>
                            <div class="flex-1 text-center">WNA</div>
                        </div>
                        
                        <div class="flex flex-col text-[#475569]">
                            
                            <div class="flex px-4 md:px-6 py-5 md:py-6 bg-white items-center min-h-[80px]">
                                <div class="flex-1 flex justify-center text-center px-2">
                                    <a href="#" class="flex items-center justify-center gap-1.5 hover:text-[#275CAA] transition-colors group text-xs md:text-sm lg:text-base">
                                        <span class="underline underline-offset-4 decoration-1">Lembaga Pengelola Dana Pendidikan</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 shrink-0 group-hover:-translate-y-0.5 group-hover:translate-x-0.5 transition-transform" fill="currentColor" viewBox="0 0 256 256"><path d="M200,64V168a8,8,0,0,1-16,0V83.31L69.66,197.66a8,8,0,0,1-11.32-11.32L172.69,72H88a8,8,0,0,1,0-16H192A8,8,0,0,1,200,64Z"></path></svg>
                                    </a>
                                </div>
                                <div class="flex-1 flex justify-center text-center px-2 border-l border-gray-100 md:border-none">
                                    <a href="#" class="flex items-center justify-center gap-1.5 hover:text-[#275CAA] transition-colors group text-xs md:text-sm lg:text-base">
                                        <span class="underline underline-offset-4 decoration-1 text-center">Airlangga Development Scholarship</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 shrink-0 group-hover:-translate-y-0.5 group-hover:translate-x-0.5 transition-transform" fill="currentColor" viewBox="0 0 256 256"><path d="M200,64V168a8,8,0,0,1-16,0V83.31L69.66,197.66a8,8,0,0,1-11.32-11.32L172.69,72H88a8,8,0,0,1,0-16H192A8,8,0,0,1,200,64Z"></path></svg>
                                    </a>
                                </div>
                            </div>

                            <div class="flex px-4 md:px-6 py-5 md:py-6 bg-[#F8FAFC] items-center min-h-[80px]">
                                <div class="flex-1 flex justify-center text-center px-2">
                                    <a href="#" class="flex items-center justify-center gap-1.5 hover:text-[#275CAA] transition-colors group text-xs md:text-sm lg:text-base">
                                        <span class="underline underline-offset-4 decoration-1">Beasiswa Unggulan</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 shrink-0 group-hover:-translate-y-0.5 group-hover:translate-x-0.5 transition-transform" fill="currentColor" viewBox="0 0 256 256"><path d="M200,64V168a8,8,0,0,1-16,0V83.31L69.66,197.66a8,8,0,0,1-11.32-11.32L172.69,72H88a8,8,0,0,1,0-16H192A8,8,0,0,1,200,64Z"></path></svg>
                                    </a>
                                </div>
                                <div class="flex-1 border-l border-gray-100 md:border-none"></div>
                            </div>

                            <div class="flex px-4 md:px-6 py-5 md:py-6 bg-white items-center min-h-[80px]">
                                <div class="flex-1 flex justify-center text-center px-2">
                                    <a href="#" class="flex items-center justify-center gap-1.5 hover:text-[#275CAA] transition-colors group text-xs md:text-sm lg:text-base">
                                        <span class="underline underline-offset-4 decoration-1">Badan Riset Inovasi Nasional</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 shrink-0 group-hover:-translate-y-0.5 group-hover:translate-x-0.5 transition-transform" fill="currentColor" viewBox="0 0 256 256"><path d="M200,64V168a8,8,0,0,1-16,0V83.31L69.66,197.66a8,8,0,0,1-11.32-11.32L172.69,72H88a8,8,0,0,1,0-16H192A8,8,0,0,1,200,64Z"></path></svg>
                                    </a>
                                </div>
                                <div class="flex-1 border-l border-gray-100 md:border-none"></div>
                            </div>

                            <div class="flex px-4 md:px-6 py-5 md:py-6 bg-[#F8FAFC] items-center min-h-[80px]">
                                <div class="flex-1 flex justify-center text-center px-2">
                                    <a href="#" class="flex items-center justify-center gap-1.5 hover:text-[#275CAA] transition-colors group text-xs md:text-sm lg:text-base">
                                        <span class="underline underline-offset-4 decoration-1">Kementerian Agama</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 shrink-0 group-hover:-translate-y-0.5 group-hover:translate-x-0.5 transition-transform" fill="currentColor" viewBox="0 0 256 256"><path d="M200,64V168a8,8,0,0,1-16,0V83.31L69.66,197.66a8,8,0,0,1-11.32-11.32L172.69,72H88a8,8,0,0,1,0-16H192A8,8,0,0,1,200,64Z"></path></svg>
                                    </a>
                                </div>
                                <div class="flex-1 border-l border-gray-100 md:border-none"></div>
                            </div>

                        </div>
                    </div>

                    <div class="mt-6 md:mt-8 flex justify-start md:ml-2">
                        <a href="#" class="text-[#2F5DA9] text-sm md:text-[15px] font-medium underline underline-offset-4 decoration-1 hover:text-[#1d4f96] transition-colors">
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