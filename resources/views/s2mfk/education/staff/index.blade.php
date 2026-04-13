<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master of Clinical Pharmacy - Staff</title>
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
   <div class="wrapper-all w-full min-h-screen bg-[#F7FFFA] relative">
    
    <x-nav-prodi-s2mfk />

    <div class="main-home flex flex-col pt-16">
        
        <x-hero-section 
            title="Education" 
            description="Leading the development of Pharmaceutical Science Technology and Clinical-Community Pharmacy through innovative education and global collaboration." 
        />
        
<div class="fade-in py-14 px-28 flex flex-col gap-10 bg-[#F7FFFA]">

       <x-pagination-s2mfk-education active="staff" />
        <div id="dept-staff" class="fade-in block">
            
            <div class="px-6 md:px-16 lg:px-0 pt-4 pb-8 md:pb-10 flex flex-row items-center gap-3 w-full">
                <input type="text" placeholder="Search..." 
                    class="w-full rounded-lg border border-[#3D3D3D] px-4 py-3 text-sm focus:outline-none transition-colors bg-transparent">
                
                <button class="bg-[#275CAA] hover:bg-[#1d4f96] text-white px-5 md:px-8 py-3 rounded-lg text-sm font-medium transition-colors shrink-0">
                    Browse
                </button>
            </div>

            <div class="px-6 md:px-16 lg:px-28 pb-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 md:py-8 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                        <span class="text-[#334155] font-medium text-base md:text-lg">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                    </div>
                    <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 md:py-8 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                        <span class="text-[#334155] font-medium text-base md:text-lg">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                    </div>
                    <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 md:py-8 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                        <span class="text-[#334155] font-medium text-base md:text-lg">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                    </div>
                    <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 md:py-8 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                        <span class="text-[#334155] font-medium text-base md:text-lg">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                    </div>
                    <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 md:py-8 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                        <span class="text-[#334155] font-medium text-base md:text-lg">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                    </div>
                    <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 md:py-8 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                        <span class="text-[#334155] font-medium text-base md:text-lg">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                    </div>
                    <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 md:py-8 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                        <span class="text-[#334155] font-medium text-base md:text-lg">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                    </div>
                    <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 md:py-8 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                        <span class="text-[#334155] font-medium text-base md:text-lg">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap justify-center items-center gap-2 md:gap-4 lg:gap-6 pb-24 px-4 text-[#1E293B]">
                <button class="hover:text-[#275CAA] transition-colors p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
                </button>
                
                <button class="w-8 h-8 flex items-center justify-center bg-[#275CAA] text-white rounded text-sm font-medium shrink-0">1</button>
                <button class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded text-sm font-medium shrink-0">2</button>
                <button class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded text-sm font-medium shrink-0">3</button>
                <button class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded text-sm font-medium shrink-0">4</button>
                <button class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded text-sm font-medium shrink-0">5</button>
                <button class="w-8 h-8 hidden sm:flex items-center justify-center hover:bg-gray-100 rounded text-sm font-medium shrink-0">6</button>
                <button class="w-8 h-8 hidden sm:flex items-center justify-center hover:bg-gray-100 rounded text-sm font-medium shrink-0">7</button>
                <button class="w-8 h-8 hidden sm:flex items-center justify-center hover:bg-gray-100 rounded text-sm font-medium shrink-0">8</button>
                <button class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded text-sm font-medium shrink-0">9</button>
                <button class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded text-sm font-medium shrink-0">10</button>
               
                <button class="hover:text-[#275CAA] transition-colors p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256"><path d="M90.34,202.34a8,8,0,0,0,11.32,11.32l80-80a8,8,0,0,0,0-11.32l-80-80a8,8,0,0,0-11.32,11.32L164.69,128Z"></path></svg>
                </button>
            </div>

        </div>
    </div>
        <x-footer />
    </div>
</div>
</body>
</html>