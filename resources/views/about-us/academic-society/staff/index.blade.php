<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Academic Society - Staff</title>
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
    
    <x-navbar />

    <div class="main-home flex flex-col pt-16">
        
        <div class="h-[45vh] w-full gap-5 text-white bg-gradient-to-r from-[#275CAA] via-[#275CAA] to-[#2E9853] px-28 flex flex-col justify-center">
            <div class="header-top flex items-end gap-3">
                <h1 class="text-5xl font-medium">Academic Society</h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                </svg>
            </div>
            <h1 class="w-[55%] text-justify text-sm leading-relaxed">
                Details about lecturers, students, education staff, and alumni who contribute to the academic
                environment and the development of excellence in pharmacy education.
            </h1>
        </div>
        <x-pagination-academic-society active="staff" />
        <div id="dept-staff" class="fade-in block">
            
            <div class="px-28 pt-4 pb-10 flex gap-4 w-full">
                <input type="text" placeholder="Search..." 
                    class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:outline-none focus:border-[#275CAA] transition-colors bg-white">
                <button class="bg-[#275CAA] hover:bg-[#1d4f96] text-white px-8 py-3 rounded-lg text-sm font-medium transition-colors">
                    Browse
                </button>
            </div>

            <div class="px-28 pb-10">
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-8 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                        <span class="text-[#334155] font-medium text-lg">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                    </div>
                    <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-8 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                        <span class="text-[#334155] font-medium text-lg">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                    </div>
                    <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-8 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                        <span class="text-[#334155] font-medium text-lg">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                    </div>
                    <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-8 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                        <span class="text-[#334155] font-medium text-lg">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                    </div>
                    <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-8 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                        <span class="text-[#334155] font-medium text-lg">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                    </div>
                    <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-8 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                        <span class="text-[#334155] font-medium text-lg">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                    </div>
                    <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-8 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                        <span class="text-[#334155] font-medium text-lg">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                    </div>
                    <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-8 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                        <span class="text-[#334155] font-medium text-lg">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                    </div>
                </div>
            </div>

            <div class="flex justify-center items-center gap-6 pb-24 text-[#1E293B]">
                <button class="hover:text-[#275CAA] transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
                </button>
                
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
               
                <button class="hover:text-[#275CAA] transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256"><path d="M90.34,202.34a8,8,0,0,0,11.32,11.32l80-80a8,8,0,0,0,0-11.32l-80-80a8,8,0,0,0-11.32,11.32L164.69,128Z"></path></svg>
                </button>
            </div>

        </div>
        <x-footer />
    </div>
</div>
</body>
</html>