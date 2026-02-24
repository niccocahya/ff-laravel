<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms and Downloads - Downloads</title>
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
        
        <div class="main-calendar flex flex-col pt-16">
            
            <div class="heroes h-[45vh] w-full gap-5 text-white bg-gradient-to-r from-[#275CAA] via-[#275CAA] to-[#2E9853] px-28 flex flex-col justify-center">
                <div class="header-top flex items-end gap-3">
                    <h1 class="text-5xl font-medium">Forms and Downloads</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mb-1 cursor-pointer opacity-90" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <h1 class="w-[50%] text-justify text-sm leading-relaxed">
                    Stay updated with key academic dates, lecture schedules, and important events throughout the semester.
                </h1>
            </div>

            <x-pagination-forms-downloads active="downloads" />

            <div class="fade-in pb-14 px-28 flex flex-col gap-10 bg-[#F7FFFA]">
                
                <div class="w-full flex gap-4">
                    <input type="text" placeholder="Search..." 
                        class="flex-grow rounded-lg border border-gray-300 px-4 py-3 text-sm focus:outline-none focus:border-[#275CAA] transition-colors bg-white">
                    <button class="bg-[#275CAA] hover:bg-[#1d4f96] text-white px-12 py-3 rounded-lg text-sm font-medium transition-colors shadow-sm">
                        Browse
                    </button>
                </div>
                
                <div class="w-full flex flex-col gap-7">
                    <div class="flex flex-col gap-5">
                        
                        <x-accordion title="Academic Schedule 2025/2026">
                            <div class="flex flex-col pt-2 pb-4">
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Academic Calendar for the Even Semester of the 2025/2026 Academic Year</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Academic Calendar for the First Semester of 2025/2026</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                            </div>
                        </x-accordion>

                        <x-accordion title="Accreditation Certificate">
                            <div class="flex flex-col pt-2 pb-4">
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">SK Akreditasi Program Sarjana Farmasi 2025</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Sertifikat Sarjana - FARMASI - UNIVERSITAS AIRLANGGA SURABAYA - 2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Sertifikat PENDIDIKAN PROFESI - APOTEKER - UNIVERSITAS AIRLANGGA SURABAYA - 2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Sertifikat.AKREDITASI INTERNASIONAL SARJANA DAN PROFESI - UNIVERSITAS AIRLANGGA</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Sertifikat MAGISTER FARMASI KLINIK - UNIVERSITAS AIRLANGGA - 2024</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Sertifikat MAGISTER ILMU FARMASI - UNIVERSITAS AIRLANGGA - 2023</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">SERTIFIKAT AKREDITASI INTERNASIONAL (ASIIN) MAGISTER ILMU FARMASI UNIVERSITAS AIRLANGGA - 2024</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Sertifikat Akreditasi DOKTOR ILMU FARMASI - UNIVERSITAS AIRLANGGA 2023-2026</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Sertifikat MAGISTER FARMASI KLINIK - UNIVERSITAS AIRLANGGA - 2019</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                            </div>
                        </x-accordion>

                        <x-accordion title="Doctor of Pharmacy by Research">
                            <div class="flex flex-col pt-2 pb-4">
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Buku Panduan Pendidikan Doktor 2018</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Academic Guidance Book PDPSIF-2021</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Academic Guidance Book PDPSIF-2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Panduan Pendidikan PDPSIF-2021-1</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Panduan Pendidikan PDPSIF-2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Dokumen Kurikulum By Research Prodi S3 IF 2019</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Pedoman Penulisan DISERTASI Prodi S3 IF By Research 2017</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Buku Kerja Disertasi 2018</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Kontrak Pembelajaran Semester Gasal 2021-2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Kontrak Pembelajaran Semester Genap 2021-2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Kontrak Pembelajaran Semester Gasal 2022-2023</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Kontrak Pembelajaran Semester Genap 2024-2025</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                            </div>
                        </x-accordion>

                        <x-accordion title="Educational Brochures and Guides">
                            <div class="flex flex-col pt-2 pb-4">
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Leaflet Sarjana Farmasi</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Panduan Pendidikan Magister S2 Ilmu Farmasi</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Leaflet Magister S2 Ilmu Farmasi 2025</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Leaflet Magister Farmasi Klinik</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Leaflet Prodi Doktor Ilmu Farmasi</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                            </div>
                        </x-accordion>

                        <x-accordion title="Internships">
                            <div class="flex flex-col pt-2 pb-4">
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">SOP Magang</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Form Permohonan Ijin Kuliah Magang 1 dan Magang 2</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                            </div>
                        </x-accordion>

                        <x-accordion title="List of Student Achievements">
                            <div class="flex flex-col pt-2 pb-4">
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Sertifikat Sarjana - FARMASI - UNIVERSITAS AIRLANGGA SURABAYA - 2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Sertifikat Sarjana - FARMASI - UNIVERSITAS AIRLANGGA SURABAYA - 2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                            </div>
                        </x-accordion>

                        <x-accordion title="Progress Report on Budget Absorption by the Faculty of Pharmacy, Airlangga University">
                            <div class="flex flex-col pt-2 pb-4">
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Sertifikat Sarjana - FARMASI - UNIVERSITAS AIRLANGGA SURABAYA - 2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Sertifikat Sarjana - FARMASI - UNIVERSITAS AIRLANGGA SURABAYA - 2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Sertifikat Sarjana - FARMASI - UNIVERSITAS AIRLANGGA SURABAYA - 2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Sertifikat Sarjana - FARMASI - UNIVERSITAS AIRLANGGA SURABAYA - 2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Sertifikat Sarjana - FARMASI - UNIVERSITAS AIRLANGGA SURABAYA - 2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200 last:border-0">
                                    <span class="text-[13px] text-[#475569]">Sertifikat Sarjana - FARMASI - UNIVERSITAS AIRLANGGA SURABAYA - 2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[11px] font-medium px-5 py-2 rounded shadow-sm transition-colors">Download</a>
                                </div>
                            </div>
                        </x-accordion>

                        <x-link-card-small title="FarmaPos Magazine" href="#" />
                        <x-link-card-small title="Featured product" href="#" />
                        <x-link-card-small title="Legalization Guide" href="#" />
                        <x-link-card-small title="Pharmacist Registration" href="#" />
                        <x-link-card-small title="Satisfaction Survey Results" href="#" />
                        
                        <x-link-card-small-last title="Thesis Writing Guidelines" href="#" />
                        
                    </div>
                </div>

            </div>
            
            <x-footer />
        </div>
    </div>
    <script></script>
</body>

</html>