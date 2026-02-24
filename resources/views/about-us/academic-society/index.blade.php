<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Academic Society - Pharmacy Practice</title>
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
        <x-pagination-academic-society active="practice" />
        <div id="dept-practice" class="fade-in block">
            
            <div class="px-28 flex flex-col">
                <h1 class="text-3xl font-semibold text-[#1E293B]">Profile</h1>
                <div class="flex flex-col gap-5 text-justify text-sm leading-relaxed text-[#475569] mt-4">
                    <p>
                        Based on the Instruction of the Minister of Higher Education and Science of the Republic of Indonesia at the Conference of State University/Institute Presidents in August 1962, the President of Airlangga University, through Decree No. 
                        Um/251/8/62 dated December 31, 1962, formed a committee named “Committee for Investigating Efforts to Establish the Faculty of Exact and Natural Sciences (FIPIA) at Airlangga University” with Prof. Ir. Soemadio as Chair and Drs. Marsoedi Soemonitihardjo as Secretary.
                        <br>
                        <br> 
                        The committee was tasked with drafting a plan for the establishment of FIPIA at Airlangga University, which consisted of four departments, namely the Department of Mathematics, the Department of Physics, the Department of Biology, and the Department of Chemistry. 
                        Long before that time, several senior educators at the Faculty of Medicine at Airlangga University had come up with the idea of establishing a pharmaceutical education and public health education institution with the aim of complementing the “Airlangga University Medical Center” 
                        in connection with the existing Faculty of Medicine and Faculty of Dentistry, which were located in a complex with a “teaching hospital,” namely Dr. Soetomo General Hospital.
                    </p>
                </div>
            </div>

            <div class="px-28 pb-32 py-20">
                <div class="flex justify-between items-center mb-12">
                    <h1 class="text-3xl font-semibold text-[#1E293B]">Head of Department</h1>
                    <span class="text-sm text-[#64748B]">2025–2030 Period</span>
                </div>
                <div class="flex justify-center gap-12">
                    <div class="w-[280px] h-[420px] bg-white rounded-2xl shadow-lg overflow-hidden relative group cursor-pointer">
                        <img src="{{ asset('images/andi_hermansyah.jpg') }}" alt="apt. Andi Hermansyah" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute bottom-0 left-0 w-full h-48 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        <div class="absolute bottom-8 left-6 right-6 text-white text-left">
                            <h2 class="text-md font-bold leading-snug">apt. Andi Hermansyah, S.Farm., M.Sc., Ph.D.</h2>
                            <p class="text-[11px] mt-2 opacity-90 font-light leading-tight">Head of Department Pharmacy Practice</p>
                        </div>
                    </div>
                    <div class="w-[280px] h-[420px] bg-white rounded-2xl shadow-lg overflow-hidden relative group cursor-pointer">
                        <img src="{{ asset('images/dinda_monika.jpg') }}" alt="apt. Dinda Monika" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute bottom-0 left-0 w-full h-48 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        <div class="absolute bottom-8 left-6 right-6 text-white text-left">
                            <h2 class="text-md font-bold leading-snug">apt. Dinda Monika Nusantara Ratri, S.Farm., M.Farm.Klin.</h2>
                            <p class="text-[11px] mt-2 opacity-90 font-light leading-tight">Secretary of Department Pharmacy Practice</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-28 pb-12">
                <div class="w-full bg-[#EEF2EE] rounded-2xl shadow-sm p-1 flex">
                    <button id="btn-community" onclick="switchPracticeTab('community')" 
                        class="flex-1 py-4 rounded-xl bg-[#2F5DA9] text-white text-sm font-medium transition-all duration-300 shadow-md">
                        Community Pharmacy
                    </button>
                    <button id="btn-clinical" onclick="switchPracticeTab('clinical')" 
                        class="flex-1 py-4 rounded-xl text-gray-700 text-sm font-medium hover:bg-gray-200 transition-all duration-300">
                        Clinical Pharmacy
                    </button>
                </div>
            </div>

            <div id="content-community" class="fade-in block">
                <div class="px-28 pb-32 flex flex-col gap-3">
                    <h1 class="text-3xl font-semibold text-[#1E293B]">Description</h1>
                    <div class="flex flex-col gap-5 text-justify text-sm leading-relaxed text-[#475569]">
                        <p>
                            Based on the Instruction of the Minister of Higher Education and Science of the Republic of Indonesia at the Conference of State University/Institute Presidents in August 1962, the President of Airlangga University, 
                            through Decree No. Um/251/8/62 dated December 31, 1962, formed a committee named “Committee for Investigating Efforts to Establish the Faculty of Exact and Natural Sciences (FIPIA) at Airlangga University” with Prof. 
                            Ir. Soemadio as Chair and Drs. Marsoedi Soemonitihardjo as Secretary.
                        <br>
                        <br>
                            The committee was tasked with drafting a plan for the establishment of FIPIA at Airlangga University, which consisted of four departments, namely the Department of Mathematics, the Department of Physics, the Department 
                            of Biology, and the Department of Chemistry. Long before that time, several senior educators at the Faculty of Medicine at Airlangga University had come up with the idea of establishing a pharmaceutical education and 
                            public health education institution with the aim of complementing the “Airlangga University Medical Center” in connection with the existing Faculty of Medicine and Faculty of Dentistry, which were located in a complex with 
                            a “teaching hospital,” namely Dr. Soetomo General Hospital.
                        </p>
                    </div>
                </div>
                
                <div class="px-28 pb-12">
                    <div class="flex justify-between items-end mb-8">
                        <h1 class="text-3xl font-semibold text-[#1E293B]">Scientific Field Group Coordinator</h1>
                        <span class="text-sm text-[#64748B]">2025-2030 Period</span>
                    </div>
                    <div class="flex justify-center">
                        <div class="relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-xl group cursor-pointer">
                            <img src="{{ asset('images/umi_athiyah.jpg') }}" alt="Prof. Umi Athiyah" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-6 left-4 right-4 text-left text-white">
                                <h2 class="text-sm font-bold leading-tight">Prof. apt. Dr. Umi Athiyah, MS.</h2>
                                <p class="text-[10px] mt-1 opacity-90 leading-tight">Community Pharmacy Coordinator</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="px-28 pb-32">
                    <h1 class="text-3xl font-semibold text-[#1E293B] mb-8">Teaching Staff</h1>
                    <div class="grid grid-cols-2 gap-4">
                         <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200"><span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span></div>
                         <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200"><span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span></div>
                         <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200"><span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span></div>
                         <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200"><span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span></div>
                         <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200"><span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span></div>
                         <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200"><span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span></div>
                         <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200"><span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span></div>
                         <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200"><span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span></div>
                    </div>
                </div>
            </div>

            <div id="content-clinical" class="hidden fade-in">
                <div class="px-28 pb-32 flex flex-col gap-3">
                    <h1 class="text-3xl font-semibold text-[#1E293B]">Description</h1>
                    <div class="flex flex-col gap-5 text-justify text-sm leading-relaxed text-[#475569]">
                        <p>
                            Based on the Instruction of the Minister of Higher Education and Science of the Republic of Indonesia at the Conference of State University/Institute Presidents in August 1962, the President of Airlangga University, 
                            through Decree No. Um/251/8/62 dated December 31, 1962, formed a committee named “Committee for Investigating Efforts to Establish the Faculty of Exact and Natural Sciences (FIPIA) at Airlangga University” with Prof. 
                            Ir. Soemadio as Chair and Drs. Marsoedi Soemonitihardjo as Secretary.
                        <br>
                        <br>
                            The committee was tasked with drafting a plan for the establishment of FIPIA at Airlangga University, which consisted of four departments, namely the Department of Mathematics, the Department of Physics, the Department 
                            of Biology, and the Department of Chemistry. Long before that time, several senior educators at the Faculty of Medicine at Airlangga University had come up with the idea of establishing a pharmaceutical education and 
                            public health education institution with the aim of complementing the “Airlangga University Medical Center” in connection with the existing Faculty of Medicine and Faculty of Dentistry, which were located in a complex with 
                            a “teaching hospital,” namely Dr. Soetomo General Hospital.
                        </p>
                    </div>
                </div>
                
                <div class="px-28 pb-12">
                    <div class="flex justify-between items-end mb-8">
                        <h1 class="text-3xl font-semibold text-[#1E293B]">Scientific Field Group Coordinator</h1>
                        <span class="text-sm text-[#64748B]">2025-2030 Period</span>
                    </div>
                    <div class="flex justify-center">
                        <div class="relative w-[260px] h-[360px] rounded-2xl overflow-hidden shadow-xl group cursor-pointer">
                            <img src="{{ asset('images/budi_suprapti.jpg') }}" alt="Prof. Budi Suprapti" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-6 left-4 right-4 text-left text-white">
                                <h2 class="text-sm font-bold leading-tight">Prof. Dr. apt. Budi Suprapti, M.Si.</h2>
                                <p class="text-[10px] mt-1 opacity-90 leading-tight">Clinical Pharmacy Coordinator</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="px-28 pb-32">
                    <h1 class="text-3xl font-semibold text-[#1E293B] mb-8">Teaching Staff</h1>
                    <div class="grid grid-cols-2 gap-4">
                         <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200"><span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span></div>
                         <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200"><span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span></div>
                         <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200"><span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span></div>
                         <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200"><span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span></div>
                         <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200"><span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span></div>
                         <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200"><span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span></div>
                         <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200"><span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span></div>
                         <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200"><span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span></div>
                    </div>
                </div>
            </div>
            
        </div> 
        <x-footer />
    </div>
</div>

<script>
    function switchPracticeTab(tab) {
        const btnComm = document.getElementById('btn-community');
        const btnClin = document.getElementById('btn-clinical');
        const contentComm = document.getElementById('content-community');
        const contentClin = document.getElementById('content-clinical');

        const toggleActive = "bg-[#2F5DA9] text-white shadow-md";
        const toggleInactive = "text-gray-700 hover:bg-gray-200";

        if (tab === 'community') {
            contentComm.classList.remove('hidden');
            contentClin.classList.add('hidden');
            btnComm.className = `flex-1 py-4 rounded-xl text-sm font-medium transition-all duration-300 ${toggleActive}`;
            btnClin.className = `flex-1 py-4 rounded-xl text-sm font-medium transition-all duration-300 ${toggleInactive}`;
        } else {
            contentClin.classList.remove('hidden');
            contentComm.classList.add('hidden');
            btnClin.className = `flex-1 py-4 rounded-xl text-sm font-medium transition-all duration-300 ${toggleActive}`;
            btnComm.className = `flex-1 py-4 rounded-xl text-sm font-medium transition-all duration-300 ${toggleInactive}`;
        }
    }
</script>
</body>
</html>