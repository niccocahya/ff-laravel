<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Research Group</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        body { font-family: 'Lato', sans-serif; }
        /* Utilitas tambahan untuk shadow spesifik Figma */
        .figma-shadow { shadow-[1px_2px_4px_0px_rgba(0,21,7,0.12)]; }
    </style>
</head>
<body class="font-sans">

<!-- ================= NAVBAR ================= -->
<x-navbar />

<!-- ================= HERO ================= -->
<section class="relative w-full min-h-screen overflow-hidden">

    <div class="absolute inset-0">
        <img class="w-full h-full object-cover" 
             src="{{ asset('images/rg-hero.png') }}" 
             onerror="this.src='https://placehold.co/1440x900?text=Research+Group+Hero'">
        
        <div class="absolute inset-0 bg-gradient-to-r from-neutral-950/70 to-neutral-950/20"></div>
    </div>

    <div class="relative z-10 h-full flex flex-col px-[128px] pt-[384px]">
        <div class="w-[655px] flex flex-col gap-8">
            
            <div class="flex flex-col gap-4">
                <p class="text-gray-50 text-lg font-medium tracking-wide">
                    Mitra Anda Dalam Penelitian Farmasi
                </p>
                <h1 class="text-gray-50 text-[44px] font-bold leading-[52px] tracking-[-0.02em]">
                    Pharmaceutics and Delivery Systems for Drugs, Cosmetics, and Nanomedicine Research Group
                </h1>
            </div>

            <a href="#layanan" class="group inline-flex">
                <div class="px-8 py-3 bg-[#275CAA] hover:bg-[#1d4f96] rounded-[4px] transition-all duration-300 inline-flex items-center gap-2.5">
                    <span class="text-gray-50 text-sm tracking-wider">
                        Jelajahi Layanan Kami
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" 
                         class="w-4 h-4 text-white transform group-hover:translate-x-1 transition-transform" 
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </a>

        </div>
    </div>
</section>

<!-- ================= ABOUT ================= -->
<section class="py-[96px] px-[128px] bg-white">
    <div class="max-w-[1440px] mx-auto flex justify-start items-center gap-16">
        
        <div class="w-[508px] h-[536px] relative flex-shrink-0">
            <img class="w-60 h-96 left-0 top-0 absolute rounded-[4px] object-cover shadow-sm" 
                 src="{{ asset('images/rg-about-us.png') }}" 
                 onerror="this.src='https://placehold.co/240x384?text=About+1'" />
            
            <img class="w-60 h-96 left-[268px] top-[175px] absolute rounded-[4px] object-cover shadow-md" 
                 src="{{ asset('images/rg-about-us.png') }}" 
                 onerror="this.src='https://placehold.co/240x384?text=About+2'" />
        </div>

        <div class="w-[608px] flex flex-col justify-start items-start gap-8">
            <h2 class="self-stretch text-neutral-950 text-[40px] font-medium font-['Lato'] tracking-[-0.04em] leading-tight">
                Tentang Kami
            </h2>

            <div class="self-stretch flex flex-col justify-start items-start gap-6">
                <p class="self-stretch text-justify text-neutral-700 text-lg font-normal font-['Lato'] leading-relaxed">
                    Penelitian di bidang farmasi merupakan area penelitian strategis dan utama dalam dunia kesehatan. 
                    <strong>Pharmaceutics and Delivery Systems for Drugs, Cosmetics, and Nanomedicine - Research Group (Pharm-DCN)</strong> 
                    merupakan kelompok riset di bawah Fakultas Farmasi Universitas Airlangga yang bergerak dalam spektrum penelitian dari hulu hingga hilir; 
                    mulai dari penelitian dasar hingga pengembangan produk terapan.
                </p>
                
                <p class="self-stretch text-justify text-neutral-700 text-lg font-normal font-['Lato'] leading-relaxed">
                    Penelitian interdisipliner kami didasarkan pada prinsip-prinsip keterlibatan, inovasi dan dampak positif yang dihasilkan. 
                    Dengan pendekatan berbasis kemitraan, Pharm-DCN adalah mitra yang tepat dalam memajukan penelitian tentang obat dengan efektifitas waktu dan sumber daya yang optimal. 
                    Tim Pharm-DCN memiliki pengalaman unggul dalam memecahkan tantangan pengembangan produk farmasi seperti kelarutan yang buruk, stabilitas, dan kebutuhan untuk penghantaran obat lokal dan sistemik. 
                    Pharm-DCN banyak bekerja sama dengan beberapa perusahaan yang mengembangkan produk farmasi, eksipien, bioteknologi, suplemen, nutrisi, kosmetik, bahkan perusahaan mesin produksi seperti alat pencetak tablet dll.
                </p>
            </div>
        </div>

    </div>
</section>

<!-- ================= VISI MISI ================= -->
<section class="py-[96px] px-[128px] bg-[#F7FFFA]">
    <div class="max-w-[1440px] mx-auto">
        
        <div class="w-full max-w-[1184px] flex flex-col justify-start items-start gap-12">
            
            <div class="w-full max-w-[964px] flex flex-col justify-start items-start gap-6">
                <h2 class="self-stretch text-neutral-950 text-[40px] font-medium font-['Lato'] tracking-[-0.04em]">
                    Visi
                </h2>
                <p class="self-stretch text-justify text-neutral-700 text-lg font-normal font-['Lato'] leading-relaxed">
                    Menjadi grup riset yang inovatif dan unggul di kancah global dalam bidang pengembangan bahan aktif dan eksipien farmasi.
                </p>
            </div>

            <div class="self-stretch flex flex-col justify-start items-start gap-6">
                <h2 class="self-stretch text-neutral-950 text-[40px] font-medium font-['Lato'] tracking-[-0.04em]">
                    Misi
                </h2>
                
                <div class="self-stretch h-[384px] relative bg-slate-50 rounded-xl shadow-[1px_2px_4px_0px_rgba(0,21,7,0.24)] overflow-hidden">
                    
                    <div class="w-[636px] left-[42px] top-[34px] absolute flex flex-col justify-start items-start gap-5">
                        
                        @php
                            $missions = [
                                '01' => 'Merekayasa bahan aktif farmasi untuk meningkatkan karakteristik fisikokimia, mekanik, bioavailabilitas dan efektivitas;',
                                '02' => 'Merekayasa eksipien untuk meningkatkan karakteristik fisikokimia dan fisikomekanik;',
                                '03' => 'Mengembangkan proses preparasi untuk meningkatkan karakteristik bahan baku Farmasi;',
                                '04' => 'Mengembangkan formula untuk meningkatkan mutu dan efektivitas sediaan farmasi;',
                                '05' => 'Mengembangkan proses manufaktur sediaan farmasi yang efektif dan efisien.'
                            ];
                        @endphp

                        @foreach($missions as $number => $text)
                        <div class="self-stretch inline-flex justify-start items-start gap-4">
                            <div class="text-green-600 text-2xl font-medium font-['Lato'] min-w-[32px]">{{ $number }}</div>
                            <div class="flex-1 text-justify text-neutral-700 text-lg font-normal font-['Lato'] leading-tight">
                                {{ $text }}
                            </div>
                        </div>
                        @endforeach

                    </div>

                    <img class="w-[466px] h-full left-[718px] top-0 absolute object-cover" 
                         src="{{ asset('images/rg-hero.png') }}" 
                         onerror="this.src='https://placehold.co/466x384?text=Mission+Image'" />
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ================= LAYANAN ================= -->
<section class="py-[96px] px-[128px] bg-white">
    <div class="max-w-[1440px] mx-auto flex flex-col gap-12">
        
        <div class="w-full max-w-[1184px] flex flex-col gap-6">
            <h2 class="text-neutral-950 text-[40px] font-medium font-['Lato'] tracking-[-0.04em]">
                Layanan Kami
            </h2>
            <p class="text-justify text-neutral-700 text-lg font-normal font-['Lato'] leading-relaxed">
                Pharmaceutics and Delivery Systems for Drugs, Cosmetics, and Nanomedicine Research Group memberikan solusi R&D agar memenuhi persyaratan dalam proses pengembangan produk Anda mulai dari praformulasi, formulasi, manufaktur (pada skala laboratorium sampai scale-up) hingga transfer teknologi. Kami telah memiliki kerjasama dan telah berkolaborasi dengan berbagai mitra di level nasional dan internasional dalam penelitian yang telah dilakukan.
            </p>
        </div>

        <div class="w-full max-w-[1184px] flex flex-wrap gap-12">
            
            @php
                $services = [
                    [
                        'title' => 'Analisis Sifat Bahan',
                        'img' => 'images/rg-card1.png',
                        'top' => 'top-[187px]',
                        'desc' => '1. Uji pelepasan dan stabilitas obat<br/>2. Pengembangan metode analisis, validasi, dan optimasi prosedur pengujian<br/>3. Pengujian bahan baku, karakterisasi produk<br/>4. Identifikasi dan evaluasi produk<br/>5. Verifikasi dan kualifikasi kompendia'
                    ],
                    [
                        'title' => 'Pengembangan Obat Baru',
                        'img' => 'images/rg-card2.png',
                        'top' => 'top-[187px]',
                        'desc' => '1. Praformulasi:<br/>  a. Peningkatan kelarutan dan uji stabilitas<br/>  b. Karakterisasi fisika, kimia dan mekanik<br/>  c. Polimorfisme dll.<br/>2. Proses optimasi dan validasi<br/>3. Scale up dan transfer teknologi'
                    ],
                    [
                        'title' => 'Formulasi Maju',
                        'img' => 'images/rg-card3.png',
                        'top' => 'top-[187px]',
                        'desc' => '1. Nanoteknologi: nanopartikel, liposom, misel,nanopartikel polimer, lipid, nanoemulsi, nanokristal, nanosuspensi<br/>2. Penyalutan dan enkapsulasi: fluid bed coating, spray dryer, extrusion/spheronisation<br/>3. Sistem penghantaran obat baru: dispersi padat, film, implan, kompleks inklusi, mikropartikel, pelet.'
                    ],
                    [
                        'title' => 'Desain Bentuk Sediaan',
                        'img' => 'images/rg-card4.png',
                        'top' => 'top-[165px]', // Sesuai Figma kamu yang lebih ke atas
                        'desc' => '1. Bentuk sediaan konvensional meliputi padat (tablet, kapsul, pelet), semi padat (gel, krim) dan cair (larutan, suspensi, emulsi)<br/>2. Bentuk sediaan baru<br/>  a. Fast acting, long acting, pulsed, sustained, delayed, enteric<br/>  b. Peningkatan karakteristik fisikokimia mis. kelarutan, stabilitas, metabolisme, permeabilitas, bioavailabilitas<br/>  c. Penghantaran tertarget: lokal atau sistemik'
                    ]
                ];
            @endphp

            @foreach($services as $service)
            <div class="w-[568px] h-[420px] relative bg-gray-50 rounded-xl shadow-[1px_2px_4px_0px_rgba(0,21,7,0.24)] overflow-hidden group">
                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" 
                     src="{{ asset($service['img']) }}" 
                     onerror="this.src='https://placehold.co/568x384?text={{ urlencode($service['title']) }}'">
                
                <div class="absolute inset-0 bg-gradient-to-b from-neutral-950/0 via-neutral-950/20 to-neutral-950/70 backdrop-blur-[2px]"></div>
                
                <div class="w-[524px] left-[22px] {{ $service['top'] }} absolute flex flex-col gap-4 text-white">
                    <div class="flex flex-col gap-3">
                        <h3 class="text-2xl font-bold font-['Lato']">{{ $service['title'] }}</h3>
                        <div class="w-full h-0 border-t-2 border-gray-50/50"></div>
                    </div>
                    <p class="text-lg font-normal font-['Lato'] leading-snug">
                        {!! $service['desc'] !!}
                    </p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- ================= FASILITAS ================= -->
<section class="py-[96px] px-[128px] bg-[#F7FFFA]">
    <div class="max-w-[1440px] mx-auto flex flex-col justify-start items-center gap-12">
        
        <h2 class="text-center text-neutral-950 text-[40px] font-medium font-['Lato'] tracking-[-0.04em]">
            Fasilitas
        </h2>

        <div class="inline-flex justify-start items-stretch shadow-[1px_2px_10px_0px_rgba(0,21,7,0.15)] rounded-lg overflow-hidden">
            
            <div class="w-96 px-8 py-10 bg-gray-50 flex flex-col justify-start items-center gap-6 border-r border-gray-200">
                <div class="flex flex-col justify-start items-center gap-4">
                    <h3 class="text-center text-neutral-950 text-3xl font-medium font-['Lato'] leading-tight tracking-[-0.04em]">
                        Topik Riset
                    </h3>
                    <div class="w-16 h-1 bg-green-600 rounded-full"></div>
                </div>
                <ul class="list-disc pl-5 text-left text-neutral-950 text-lg font-normal font-['Lato'] leading-relaxed space-y-2">
                    <li>Rekayasa bahan aktif BCS II; bahan sintesis dan bahan alam</li>
                    <li>Rekayasa eksipien</li>
                    <li>Sistem dispersi padat, kompleks inklusi, kokristal, nanokristal, misel, liposom, mikropartikel dan nanopartikel</li>
                    <li>Formulasi bahan obat</li>
                    <li>Pengujian sifat fisika, kimia dan in vitro</li>
                    <li>Uji aktifitas, toksisitas dan bioavailabilitas</li>
                </ul>
            </div>

            <div class="w-96 px-8 py-10 bg-[#275CAA] flex flex-col justify-start items-center gap-6 shadow-xl z-10 scale-[1.02] rounded-lg">
                <div class="flex flex-col justify-start items-center gap-4">
                    <h3 class="text-center text-gray-50 text-3xl font-medium font-['Lato'] leading-tight tracking-[-0.04em]">
                        Fasilitas Riset
                    </h3>
                    <div class="w-16 h-1 bg-white rounded-full"></div>
                </div>
                <ul class="list-disc pl-5 text-left text-gray-50 text-lg font-normal font-['Lato'] leading-relaxed space-y-2">
                    <li>Peralatan preparasi dan manufaktur</li>
                    <li>Instrumen pengujian</li>
                    <li>Peralatan uji in vitro / in vivo</li>
                    <li>Mini industri untuk scale up</li>
                    <li>Laboratorium bersertifikat</li>
                </ul>
            </div>

            <div class="w-96 px-8 py-10 bg-gray-50 flex flex-col justify-start items-center gap-6 border-l border-gray-200">
                <div class="flex flex-col justify-start items-center gap-4">
                    <h3 class="text-center text-neutral-950 text-3xl font-medium font-['Lato'] leading-tight tracking-[-0.04em]">
                        Mitra Penelitian
                    </h3>
                    <div class="w-16 h-1 bg-green-600 rounded-full"></div>
                </div>
                <ul class="list-disc pl-5 text-left text-neutral-950 text-lg font-normal font-['Lato'] leading-relaxed space-y-2">
                    <li>Lembaga Pemerintah</li>
                    <li>Industri Farmasi</li>
                    <li>Pusat Riset Nasional</li>
                    <li>Perguruan Tinggi Nasional dan Internasional</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- ================= HEAD ================= -->
<section class="py-[96px] px-[128px] bg-white">
    <div class="max-w-[1440px] mx-auto flex flex-col gap-10">
        
        <div class="flex justify-between items-end border-b pb-4 border-gray-100">
            <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">
                Head of Research Group
            </h2>
            <div class="text-neutral-700 text-lg font-normal">
                2025-2030 Period
            </div>
        </div>

        <div class="flex justify-center">
            
            @php
                // Mengambil data salah satu pimpinan sebagai contoh
                $head = [
                    'name' => 'Prof. apt. Dewi Melani Hariyadi, S.Si., M.Phil., Ph.D.',
                    'role' => 'Head of Research Group',
                    'img' => 'images/image-43.png'
                ];
            @endphp

            <div class="w-[278px] h-[402px] relative bg-gray-50 rounded-xl shadow-md overflow-hidden group">
                <img class="w-full h-full object-cover" 
                     src="{{ asset($head['img']) }}" 
                     onerror="this.src='https://placehold.co/278x402?text=Head+Photo'">
                
                <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/80 via-neutral-950/20 to-transparent"></div>
                
                <div class="absolute bottom-0 left-0 w-full p-6 flex flex-col gap-1 text-white">
                    <div class="text-[18px] font-bold leading-tight">
                        {{ $head['name'] }}
                    </div>
                    <div class="text-sm font-normal opacity-90">
                        {{ $head['role'] }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ================= PERSONEL ================= -->
<section class="py-[96px] px-[128px] bg-white">
    <div class="max-w-[1440px] mx-auto flex flex-col gap-10">
        
        <div class="flex justify-between items-end border-b pb-4 border-gray-100">
            <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">
                Personil Kami
            </h2>
        </div>

        <div class="w-full pb-16">
            <div class="grid grid-cols-2 gap-6">
                @php
                    // Array nama personil (Kamu tinggal tambah nama di sini, grid akan otomatis bertambah ke bawah)
                    $team = [
                        'Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.',
                        'Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.',
                        'Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.',
                        'Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.',
                        'Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.',
                        'Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.',
                        'Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.',
                        'Prof. Dr. apt. Dwi Setyawan, S.Si., M.Si.',
                    ];
                @endphp

                @foreach($team as $name)
                <div class="bg-gray-50 border border-slate-100 rounded-xl py-8 px-6 flex items-center justify-center text-center shadow-sm hover:shadow-md transition-all duration-200">
                    <span class="text-[#334155] font-medium text-lg font-['Lato']">
                        {{ $name }}
                    </span>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

<!-- ================= FOOTER ================= -->
<x-footer />

</body>
</html>