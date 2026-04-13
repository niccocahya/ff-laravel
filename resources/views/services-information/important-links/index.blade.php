<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Important Links</title>
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
                title="Important Links" 
                description="Stay updated with key academic dates, lecture schedules, and important events throughout the semester." 
            />

            <div class="fade-in py-10 md:py-14 px-6 md:px-16 lg:px-28 flex flex-col gap-8 md:gap-10 bg-[#F7FFFA]">
                
                <div class="w-full flex flex-row items-center gap-3">
                    <input type="text" placeholder="Search..." 
                        class="flex-grow w-full rounded-lg border border-[#3D3D3D] px-4 py-3 text-sm focus:outline-none focus:border-[#3D3D3D] transition-colors bg-transparent">
                    <button class="bg-[#275CAA] hover:bg-[#1d4f96] text-white px-6 md:px-12 py-3 rounded-lg text-sm font-medium transition-colors shadow-sm shrink-0">
                        Browse
                    </button>
                </div>
                
                <div class="w-full flex flex-col gap-5 md:gap-7 pt-2">
                    <div class="flex flex-col gap-3 md:gap-5">
                        <x-link-card-small title="Cybercampus" href="#" />
                        <x-link-card-small title="Diseminasi terkait Bisphenol A (BPA)" href="#" />
                        <x-link-card-small title="E-Journal" href="#" />
                        <x-link-card-small title="E-Learning" href="#" />
                        <x-link-card-small title="HEBAT - E-Learning" href="#" />
                        <x-link-card-small title="Kampus Merdeka Universitas Airlangga (MBKM)" href="#" />
                        <x-link-card-small title="Pejabat Pengelola Informasi dan Dokumentasi" href="#" />
                        <x-link-card-small title="Pusat Penerimaan Mahasiswa Baru" href="#" />
                        <x-link-card-small title="PPID" href="#" />
                        <x-link-card-small title="Survaillance Covid-19" href="#" />
                        <x-link-card-small title="Sosialisasi Program dan Kegiatan LPJPHKI" href="#" />
                        <x-link-card-small title="Unairsatu" href="#" />
                        <x-link-card-small title="Website Universitas Airlangga" href="#" />
                        
                        <x-link-card-small-last title="Zona Integritas" href="#" />
                    </div>
                </div>

            </div>
            
            <x-footer />
        </div>
    </div>
    <script></script>
</body>

</html>