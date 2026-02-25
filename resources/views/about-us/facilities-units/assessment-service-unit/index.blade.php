<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facilities Unit - Assessment Service Unit</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        body { font-family: 'Lato', sans-serif; }
        .fade-in { animation: fadeIn 0.4s ease-in-out; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(5px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body class="bg-[#F7FFFA] antialiased">

<div class="wrapper-all w-full min-h-screen relative">

    <x-navbar />

    <div class="main-content flex flex-col pt-16">

        <div class="heroes h-[45vh] w-full gap-5 text-white bg-gradient-to-r from-[#275CAA] via-[#275CAA] to-[#2E9853] px-28 flex flex-col justify-center">
            <div class="header-top flex items-end gap-3">
                <h1 class="text-5xl font-medium tracking-[-0.04em]">Facilities & Units</h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                </svg>
            </div>
            <p class="w-[50%] text-justify leading-relaxed text-lg opacity-90">
                Professional laboratory testing and assessment services ensuring quality, accuracy, and compliance with national standards.
            </p>
        </div>

        <x-pagination-facilities-units active="assessment" />

        <div class="fade-in bg-[#F7FFFA] px-28 py-20 flex flex-col gap-24">
            
            <div class="max-w-[1184px] mx-auto flex justify-between items-start gap-16">
                
                <div class="w-[657px] flex flex-col gap-16">
                    
                    <div class="flex flex-col gap-6">
                        <h2 class="text-neutral-950 text-[40px] font-medium font-['Lato'] tracking-[-0.04em]">About</h2>
                        <p class="text-justify text-neutral-700 text-lg font-normal font-['Lato'] leading-relaxed">
                            Unit Layanan Pengujian Fakultas Farmasi Universitas Airlangga adalah Laboratorium pengujian kimia dan mikrobiologis produk obat, makanan dan kosmetik. ULP-FFUA merupakan salah satu unit pendukung Fakultas Farmasi Universitas Airlangga yang didirikan dan dikembangkan untuk memberikan pelayanan pengujian untuk keperluan pendidikan, penelitian dan pengabdian masyarakat. Untuk Menjamin Kualitas layanan pengujiannya ULP-FFUA pada tahun 2005 mulai mengajukan sertifikasi ISO 17025 dengan No LD-325-IDN.
                        </p>
                    </div>

                    <div class="flex flex-col gap-8">
                        <h2 class="text-neutral-950 text-[40px] font-medium font-['Lato'] tracking-[-0.04em]">Management</h2>
                        <div class="flex flex-col gap-2">
                            <x-accordion title="Director">
                                <span class="text-neutral-700 text-lg font-normal">Prof. Dr rer nat. M. Yuwono, MS., Apt.</span>
                            </x-accordion>

                            <x-accordion title="Administration Manager">
                                <span class="text-neutral-700 text-lg font-normal">Dr. Riesta Primaharinastiti, S.Si., Apt. M.Si</span>
                            </x-accordion>

                            <x-accordion title="Engineering Manager">
                                <span class="text-neutral-700 text-lg font-normal">Drs. Harjana, Msc Apt.</span>
                            </x-accordion>

                            <x-accordion title="Chemistry Physics Supervisor">
                                <span class="text-neutral-700 text-lg font-normal">Dra. Toetik Aryani, Apt., M Si</span>
                            </x-accordion>

                            <x-accordion title="Quality Manager">
                                <span class="text-neutral-700 text-lg font-normal">Drs. Herra Studiawan, MS., Apt.</span>
                            </x-accordion>

                            <x-accordion title="Traditional Medicine Supervisor">
                                <span class="text-neutral-700 text-lg font-normal">Drs. Herra Studiawan, MS., Apt.</span>
                            </x-accordion>

                            <x-accordion title="Marketing and Development Manager">
                                <span class="text-neutral-700 text-lg font-normal">Dr. Mulya Hadi Santosa, Apt.</span>
                            </x-accordion>

                            <x-accordion title="Penyelia Mikrobiologi">
                                <span class="text-neutral-700 text-lg font-normal">Drs. Achmad Toto Poernomo. Apt., M.Si</span>
                            </x-accordion>
                        </div>
                    </div>

                    <div class="flex flex-col gap-6">
                        <h2 class="text-neutral-950 text-[40px] font-medium font-['Lato'] tracking-[-0.04em]">Contact</h2>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-neutral-950 text-2xl font-medium">Testing Service Unit</h3>
                            <div class="text-neutral-700 text-lg font-normal leading-relaxed">
                                Faculty of Pharmacy, Airlangga University<br/>
                                LP3 Building, 2nd Floor<br/>
                                Tel/Fax: +62-31-5036779<br/>
                                Email: ulpffua@yahoo.com<br/>
                                Jl. Dharmawangsa Dalam, Surabaya 60286
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-[480px] flex flex-col gap-16">
                    
                    <div class="flex flex-col gap-6">
                        <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">Vision & Mission</h2>
                        <div class="flex flex-col gap-8">
                            <div class="flex flex-col gap-4">
                                <h3 class="text-neutral-950 text-2xl font-medium">Vision</h3>
                                <p class="text-justify text-neutral-700 text-lg font-normal">
                                    "Menjadi laboratorium yang dipercaya di tingkat nasional dan internasional dalam pengujian mutu dan keamanan Bahan dan Produk Obat, Pangan dan Kosmetika."
                                </p>
                            </div>
                            <div class="flex flex-col gap-4">
                                <h3 class="text-neutral-950 text-2xl font-medium">Mission</h3>
                                <ul class="text-justify text-neutral-700 text-lg font-normal list-disc pl-5 flex flex-col gap-2">
                                    <li>Memberikan layanan pengujian fisika, kimia dan mikrobiologi produk pangan, obat dan kosmetika.</li>
                                    <li>Melakukan pengembangan dan validasi metode analisis.</li>
                                    <li>Melakukan kerjasama dengan instansi pemerintah dan industri.</li>
                                    <li>Menyelenggarakan program pelatihan instrumentasi.</li>
                                    <li>Mengembangkan SDM yang kompeten untuk pengabdian masyarakat.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-6">
                        <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">Facilities</h2>
                        <p class="text-justify text-neutral-700 text-lg font-normal leading-relaxed">
                            ULP has a modern analytical laboratory supported by various sophisticated instruments. The ULP analytical laboratory has been reaccredited by the National Accreditation Board (BAN) with Number LP-802-IDN.
                        </p>
                    </div>

                    <div class="flex flex-col gap-6">
                        <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">Activities</h2>
                        <p class="text-justify text-neutral-700 text-lg font-normal leading-relaxed">
                            ULP has conducted various training courses in the fields of analysis including TLC, GC, and HPLC spectrometry. We conduct testing for 100-200 samples per month and have become a trusted laboratory for export product certification.
                        </p>
                    </div>
                </div>

            </div>

            <div class="max-w-[1184px] mx-auto w-full flex flex-col gap-12 pt-16 border-t border-gray-100">
    <div class="flex justify-between items-center">
        <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">Company Profile</h2>
        
        <a href="https://google.com" target="_blank" rel="noopener noreferrer" 
           class="w-12 h-12 flex items-center justify-center rounded-full border border-neutral-950">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 256 256">
                <path d="M200,64V168a8,8,0,0,1-16,0V83.31L69.66,197.66a8,8,0,0,1-11.32-11.32L172.69,72H88a8,8,0,0,1,0-16H192A8,8,0,0,1,200,64Z"></path>
            </svg>
        </a>
    </div>
    
    <img class="w-full h-96 object-cover rounded-xl shadow-md" 
         src="{{ asset('images/unit-layanan-pengujian.png') }}" 
         onerror="this.src='https://placehold.co/1184x385?text=ULP+Company+Profile'" />
</div>

        </div>

        <x-footer />
    </div>
</div>

</body>
</html>