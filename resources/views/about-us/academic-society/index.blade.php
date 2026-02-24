<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Academic Society</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        .fade-in {
            animation: fadeIn 0.4s ease-in-out;
        }
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

        <div class="px-28 py-10 flex gap-5 bg-[#F7FFFA]">
            <button id="nav-practice" onclick="switchMainDepartment('practice')"
                class="px-6 py-2 rounded-full bg-[#275CAA] text-white text-sm hover:bg-[#1d4f96] transition-all duration-200">
                Department of Pharmacy Practice
            </button>
            <button id="nav-sciences" onclick="switchMainDepartment('sciences')"
                class="px-6 py-2 rounded-full border border-[#275CAA] text-[#275CAA] text-sm hover:bg-[#275CAA] hover:text-white transition-all duration-200">
                Department of Pharmaceutical Sciences
            </button>
            <button id="nav-staff" onclick="switchMainDepartment('staff')"
                class="px-6 py-2 rounded-full border border-[#275CAA] text-[#275CAA] text-sm hover:bg-[#275CAA] hover:text-white transition-all duration-200">
                Staff
            </button>
        </div>

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
                        <img src="images/andi_hermansyah.jpg" alt="apt. Andi Hermansyah" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute bottom-0 left-0 w-full h-48 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        <div class="absolute bottom-8 left-6 right-6 text-white text-left">
                            <h2 class="text-md font-bold leading-snug">apt. Andi Hermansyah, S.Farm., M.Sc., Ph.D.</h2>
                            <p class="text-[11px] mt-2 opacity-90 font-light leading-tight">Head of Department Pharmacy Practice</p>
                        </div>
                    </div>
                    <div class="w-[280px] h-[420px] bg-white rounded-2xl shadow-lg overflow-hidden relative group cursor-pointer">
                        <img src="images/dinda_monika.jpg" alt="apt. Dinda Monika" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
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
                            <img src="images/umi_athiyah.jpg" alt="Prof. Umi Athiyah" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
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
                            <img src="images/budi_suprapti.jpg" alt="Prof. Budi Suprapti" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
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


        <div id="dept-sciences" class="hidden fade-in">
            
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
                        <img src="images/juni_ekowati.jpg" alt="Prof. Juni Ekowati" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute bottom-0 left-0 w-full h-48 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        <div class="absolute bottom-8 left-6 right-6 text-white text-left">
                            <h2 class="text-md font-bold leading-snug">Prof. Dr. apt. Juni Ekowati, M.Si.</h2>
                            <p class="text-[11px] mt-2 opacity-90 font-light leading-tight">Head of Department Pharmaceutical Sciences</p>
                        </div>
                    </div>
                    <div class="w-[280px] h-[420px] bg-white rounded-2xl shadow-lg overflow-hidden relative group cursor-pointer">
                        <img src="images/retno_widyowati.jpg" alt="Prof. Retno Widyowati" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute bottom-0 left-0 w-full h-48 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        <div class="absolute bottom-8 left-6 right-6 text-white text-left">
                            <h2 class="text-md font-bold leading-snug">Prof. apt. Retno Widyowati, S.Si., M.Pharm., Ph.D.</h2>
                            <p class="text-[11px] mt-2 opacity-90 font-light leading-tight">Secretary of Department Pharmaceutical Sciences</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-28 pb-12">
                <div class="w-full bg-[#EEF2EE] rounded-2xl shadow-sm p-1 flex">
                    <button id="btn-pharmaceutics" onclick="switchScienceTab('pharmaceutics')" 
                        class="flex-1 py-4 rounded-xl bg-[#2F5DA9] text-white text-sm font-medium transition-all duration-300 shadow-md">
                        Pharmaceutics
                    </button>
                    <button id="btn-pharmacognosy" onclick="switchScienceTab('pharmacognosy')" 
                        class="flex-1 py-4 rounded-xl text-gray-700 text-sm font-medium hover:bg-gray-200 transition-all duration-300">
                        Pharmacognosy & Phytochemistry
                    </button>
                    <button id="btn-chem" onclick="switchScienceTab('chem')" 
                        class="flex-1 py-4 rounded-xl text-gray-700 text-sm font-medium hover:bg-gray-200 transition-all duration-300">
                        Pharmaceutical Chemistry
                    </button>
                </div>
            </div>

            <div id="content-pharmaceutics" class="fade-in block">
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
                            <img src="images/tristiana_erawati.jpg" alt="Prof. Tristiana" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-6 left-4 right-4 text-left text-white">
                                <h2 class="text-sm font-bold leading-tight">Prof. apt. Tristiana Erawati Munandar M.Si.</h2>
                                <p class="text-[10px] mt-1 opacity-90 leading-tight">Pharmaceutics Scientific Field Group Coordinator</p>
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

            <div id="content-pharmacognosy" class="hidden fade-in">
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
                            <img src="images/sukardiman.jpg" alt="Prof. Sukardiman" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-6 left-4 right-4 text-left text-white">
                                <h2 class="text-sm font-bold leading-tight">Prof. apt. Dr. Sukardiman, MS.</h2>
                                <p class="text-[10px] mt-1 opacity-90 leading-tight">Pharmacognosy and Phytochemistry Scientific Field Group Coordinator</p>
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

            <div id="content-chem" class="hidden fade-in">
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
                            <img src="images/riesta_primaharinastiti.jpg" alt="Dr. Riesta Primaharinastiti" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute bottom-6 left-4 right-4 text-left text-white">
                                <h2 class="text-sm font-bold leading-tight">Dr. apt. Riesta Primaharinastiti, S.Si., M.Si.</h2>
                                <p class="text-[10px] mt-1 opacity-90 leading-tight">Pharmaceutical Chemistry Scientific Field Group Coordinator</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="px-28 pb-32">
                    <h1 class="text-3xl font-semibold text-[#1E293B] mb-8">Teaching Staff</h1>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                            <span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                        </div>
                        <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                            <span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                        </div>
                        <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                            <span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                        </div>
                        <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                            <span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                        </div>
                         <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                            <span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                        </div>
                        <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                            <span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                        </div>
                        <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                            <span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                        </div>
                        <div class="bg-[#F8FAFC] border border-slate-100 rounded-xl py-6 px-4 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                            <span class="text-[#334155] font-medium text-sm">Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.</span>
                        </div>
                    </div>
                </div>
            </div>

        </div> 

        <div id="dept-staff" class="hidden fade-in">
            
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

    </div>
</div>

<script>
    function switchMainDepartment(dept) {
        const navPractice = document.getElementById('nav-practice');
        const navSciences = document.getElementById('nav-sciences');
        const navStaff = document.getElementById('nav-staff');
        
        const contentPractice = document.getElementById('dept-practice');
        const contentSciences = document.getElementById('dept-sciences');
        const contentStaff = document.getElementById('dept-staff');

        const activeStyle = "bg-[#275CAA] text-white hover:bg-[#1d4f96]";
        const inactiveStyle = "border border-[#275CAA] text-[#275CAA] hover:bg-[#275CAA] hover:text-white bg-transparent";

        contentPractice.classList.add('hidden');
        contentSciences.classList.add('hidden');
        contentStaff.classList.add('hidden');

        navPractice.className = `px-6 py-2 rounded-full text-sm transition-all duration-200 ${inactiveStyle}`;
        navSciences.className = `px-6 py-2 rounded-full text-sm transition-all duration-200 ${inactiveStyle}`;
        navStaff.className = `px-6 py-2 rounded-full text-sm transition-all duration-200 ${inactiveStyle}`;

        if (dept === 'practice') {
            contentPractice.classList.remove('hidden');
            navPractice.className = `px-6 py-2 rounded-full text-sm transition-all duration-200 ${activeStyle}`;
        } else if (dept === 'sciences') {
            contentSciences.classList.remove('hidden');
            navSciences.className = `px-6 py-2 rounded-full text-sm transition-all duration-200 ${activeStyle}`;
        } else if (dept === 'staff') {
            contentStaff.classList.remove('hidden');
            navStaff.className = `px-6 py-2 rounded-full text-sm transition-all duration-200 ${activeStyle}`;
        }
    }

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

    function switchScienceTab(tab) {
        const btnPharm = document.getElementById('btn-pharmaceutics');
        const btnCogno = document.getElementById('btn-pharmacognosy');
        const btnChem = document.getElementById('btn-chem');
        
        const contentPharm = document.getElementById('content-pharmaceutics');
        const contentCogno = document.getElementById('content-pharmacognosy');
        const contentChem = document.getElementById('content-chem');

        const toggleActive = "bg-[#2F5DA9] text-white shadow-md";
        const toggleInactive = "text-gray-700 hover:bg-gray-200";

        btnPharm.className = `flex-1 py-4 rounded-xl text-sm font-medium transition-all duration-300 ${toggleInactive}`;
        btnCogno.className = `flex-1 py-4 rounded-xl text-sm font-medium transition-all duration-300 ${toggleInactive}`;
        btnChem.className = `flex-1 py-4 rounded-xl text-sm font-medium transition-all duration-300 ${toggleInactive}`;
        
        contentPharm.classList.add('hidden');
        contentCogno.classList.add('hidden');
        contentChem.classList.add('hidden');

        if (tab === 'pharmaceutics') {
            btnPharm.className = `flex-1 py-4 rounded-xl text-sm font-medium transition-all duration-300 ${toggleActive}`;
            contentPharm.classList.remove('hidden');
        } else if (tab === 'pharmacognosy') {
            btnCogno.className = `flex-1 py-4 rounded-xl text-sm font-medium transition-all duration-300 ${toggleActive}`;
            contentCogno.classList.remove('hidden');
        } else if (tab === 'chem') {
            btnChem.className = `flex-1 py-4 rounded-xl text-sm font-medium transition-all duration-300 ${toggleActive}`;
            contentChem.classList.remove('hidden');
        }
    }
</script>

</body>
</html>