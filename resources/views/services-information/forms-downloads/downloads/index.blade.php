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

            <x-hero-section 
                title="Forms and Downloads" 
                description="Stay updated with key academic dates, lecture schedules, and important events throughout the semester." 
            />

            <x-pagination-forms-downloads active="downloads" />

            <div class="fade-in pb-14 px-6 md:px-16 lg:px-28 flex flex-col gap-8 md:gap-10 bg-[#F7FFFA]">
                
                <div class="w-full flex flex-row items-center gap-3">
                    <input type="text" placeholder="Search..." 
                        class="flex-grow w-full rounded-lg border border-[#3D3D3D] px-4 py-3 text-sm focus:outline-none focus:border-[#3D3D3D] transition-colors bg-transparent">
                    <button class="bg-[#275CAA] hover:bg-[#1d4f96] text-white px-6 md:px-12 py-3 rounded-lg text-sm font-medium transition-colors shadow-sm shrink-0">
                        Browse
                    </button>
                </div>
                
                <div class="w-full flex flex-col gap-5 md:gap-7">
                    <div class="flex flex-col gap-4 md:gap-5">
                        
                        <x-accordion title="Academic Schedule 2025/2026">
                            <div class="flex flex-col pt-2 pb-4">
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Academic Calendar for the Even Semester of the 2025/2026 Academic Year</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Academic Calendar for the First Semester of 2025/2026</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                            </div>
                        </x-accordion>

                        <x-accordion title="Accreditation Certificate">
                            <div class="flex flex-col pt-2 pb-4">
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">SK Akreditasi Program Sarjana Farmasi 2025</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Sertifikat Sarjana - FARMASI - UNIVERSITAS AIRLANGGA SURABAYA - 2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Sertifikat PENDIDIKAN PROFESI - APOTEKER - UNIVERSITAS AIRLANGGA SURABAYA - 2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Sertifikat.AKREDITASI INTERNASIONAL SARJANA DAN PROFESI - UNIVERSITAS AIRLANGGA</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Sertifikat MAGISTER FARMASI KLINIK - UNIVERSITAS AIRLANGGA - 2024</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Sertifikat MAGISTER ILMU FARMASI - UNIVERSITAS AIRLANGGA - 2023</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">SERTIFIKAT AKREDITASI INTERNASIONAL (ASIIN) MAGISTER ILMU FARMASI UNIVERSITAS AIRLANGGA - 2024</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Sertifikat Akreditasi DOKTOR ILMU FARMASI - UNIVERSITAS AIRLANGGA 2023-2026</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Sertifikat MAGISTER FARMASI KLINIK - UNIVERSITAS AIRLANGGA - 2019</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                            </div>
                        </x-accordion>

                        <x-accordion title="Doctor of Pharmacy by Research">
                            <div class="flex flex-col pt-2 pb-4">
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Buku Panduan Pendidikan Doktor 2018</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Academic Guidance Book PDPSIF-2021</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Academic Guidance Book PDPSIF-2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Panduan Pendidikan PDPSIF-2021-1</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Panduan Pendidikan PDPSIF-2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Dokumen Kurikulum By Research Prodi S3 IF 2019</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Pedoman Penulisan DISERTASI Prodi S3 IF By Research 2017</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Buku Kerja Disertasi 2018</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Kontrak Pembelajaran Semester Gasal 2021-2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Kontrak Pembelajaran Semester Genap 2021-2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Kontrak Pembelajaran Semester Gasal 2022-2023</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Kontrak Pembelajaran Semester Genap 2024-2025</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                            </div>
                        </x-accordion>

                        <x-accordion title="Educational Brochures and Guides">
                            <div class="flex flex-col pt-2 pb-4">
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Leaflet Sarjana Farmasi</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Panduan Pendidikan Magister S2 Ilmu Farmasi</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Leaflet Magister S2 Ilmu Farmasi 2025</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Leaflet Magister Farmasi Klinik</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Leaflet Prodi Doktor Ilmu Farmasi</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                            </div>
                        </x-accordion>

                        <x-accordion title="Internships">
                            <div class="flex flex-col pt-2 pb-4">
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">SOP Magang</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Form Permohonan Ijin Kuliah Magang 1 dan Magang 2</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                            </div>
                        </x-accordion>

                        <x-accordion title="List of Student Achievements">
                            <div class="flex flex-col pt-2 pb-4">
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Sertifikat Sarjana - FARMASI - UNIVERSITAS AIRLANGGA SURABAYA - 2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Sertifikat Sarjana - FARMASI - UNIVERSITAS AIRLANGGA SURABAYA - 2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                            </div>
                        </x-accordion>

                        <x-accordion title="Progress Report on Budget Absorption by the Faculty of Pharmacy, Airlangga University">
                            <div class="flex flex-col pt-2 pb-4">
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Sertifikat Sarjana - FARMASI - UNIVERSITAS AIRLANGGA SURABAYA - 2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Sertifikat Sarjana - FARMASI - UNIVERSITAS AIRLANGGA SURABAYA - 2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Sertifikat Sarjana - FARMASI - UNIVERSITAS AIRLANGGA SURABAYA - 2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Sertifikat Sarjana - FARMASI - UNIVERSITAS AIRLANGGA SURABAYA - 2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Sertifikat Sarjana - FARMASI - UNIVERSITAS AIRLANGGA SURABAYA - 2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
                                </div>
                                <div class="flex flex-row justify-between items-center py-3 border-b border-gray-200 last:border-0 gap-3">
                                    <span class="text-xs md:text-[13px] text-[#475569] leading-snug">Sertifikat Sarjana - FARMASI - UNIVERSITAS AIRLANGGA SURABAYA - 2022</span>
                                    <a href="#" class="bg-[#2F5DA9] hover:bg-[#1d4f96] text-white text-[10px] md:text-[11px] font-medium px-4 md:px-5 py-2 rounded shadow-sm transition-colors shrink-0 text-center">Download</a>
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