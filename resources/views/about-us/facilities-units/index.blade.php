<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facilities & Units - Faculty of Pharmacy</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        body { font-family: 'Lato', sans-serif; }
        .fade-in { animation: fadeIn 0.4s ease-in-out; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(5px); }
            to { opacity: 1; transform: translateY(0); }
        }
        /* Custom scrollbar untuk modal agar tetap rapi */
        .modal-content-scroll::-webkit-scrollbar { width: 4px; }
        .modal-content-scroll::-webkit-scrollbar-thumb { background: #E2E8F0; border-radius: 10px; }
    </style>
</head>

<body class="bg-[#F7FFFA] antialiased">

<div class="wrapper-all w-full min-h-screen relative">

    <x-navbar />

    <div class="main-home flex flex-col pt-16">

        <div class="heroes h-[45vh] w-full gap-5 text-white bg-gradient-to-r from-[#275CAA] via-[#275CAA] to-[#2E9853] px-28 flex flex-col justify-center">
            <div class="header-top flex items-end gap-3">
                <h1 class="text-5xl font-medium tracking-[-0.04em]">Facilities & Units</h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                </svg>
            </div>
            <p class="w-[50%] text-justify leading-relaxed text-lg opacity-90">
                An overview of academic facilities, laboratories, and supporting units that enhance learning, research, and professional development within the faculty.
            </p>
        </div>

        <x-pagination-facilities-units active="facilities" />

        <div class="fade-in block bg-[#F7FFFA]">

            <section class="px-28 py-24 flex gap-12 items-start justify-between">
                <div class="w-80 flex flex-col gap-4">
                    <h2 class="text-neutral-950 text-4xl font-medium tracking-[-0.04em]">Facilities</h2>
                    <p class="text-neutral-700 text-lg font-normal leading-relaxed text-justify">
                        Take a virtual tour through our advanced learning environment and state-of-the-art laboratories.
                    </p>
                </div>

                <div class="w-[823px] h-[462px] relative rounded-2xl overflow-hidden shadow-xl bg-black">
                    <iframe class="w-full h-full" 
                        src="https://www.youtube.com/embed/uD4i91VqoWw" 
                        title="FFUA Facilities Video" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                </div>
            </section>

            <section class="px-28 pb-32 flex flex-col gap-12">
    <div class="w-full flex justify-between items-end border-b border-gray-100 pb-6">
        <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">Laboratory</h2>
        <p class="text-neutral-700 text-lg font-normal">Supporting Education, Lectures and Research</p>
    </div>

    <div class="grid grid-cols-3 gap-6">
        @php
            $labs = [
                [
                    'id' => 'LAB 1', 'name' => 'MPL 1',
                    'full_title' => 'MULTI-PURPOSE LABORATORY (MPL) 1',
                    'img' => 'images/mpl1.png',
                    'short_desc' => 'MPL 1 Laboratory is a laboratory used to identify raw materials.',
                    'long_desc' => 'Laboratorium MPL 1 merupakan laboratorium yang digunakan untuk mengidentifikasi bahan baku obat bahan alam. Dilengkapi dengan mikroskop canggih untuk pengamatan mikroskopik sayatan segar maupun sampel serbuk.',
                    'coordinator' => 'Apt. Nama Koordinator, S.Farm., M.Si', 'technicians' => 'Staff Laboran 1, Staff Laboran 2'
                ],
                [
                    'id' => 'LAB 2', 'name' => 'MPL 2',
                    'full_title' => 'MULTI-PURPOSE LABORATORY (MPL) 2',
                    'img' => 'images/mpl2.png',
                    'short_desc' => 'MPL 2 Laboratory is a laboratory used for the Analysis of Natural Materials/Products',
                    'long_desc' => 'Fokus pada analisis bahan alam dan produk turunan herbal dengan standar pengujian kualitas tinggi.',
                    'coordinator' => 'Apt. Nama Koordinator, S.Farm., M.Si', 'technicians' => 'Staff Laboran 1, Staff Laboran 2'
                ],
                [
                    'id' => 'LAB 3', 'name' => 'MPL 3',
                    'full_title' => 'MULTI-PURPOSE LABORATORY (MPL) 3',
                    'img' => 'images/mpl3.png',
                    'short_desc' => 'MPL 3 Laboratory is a material/product analysis laboratory.',
                    'long_desc' => 'Digunakan untuk analisis mendalam terhadap material sediaan farmasi dan kontrol kualitas produk jadi.',
                    'coordinator' => 'Apt. Nama Koordinator, S.Farm., M.Si', 'technicians' => 'Staff Laboran 1, Staff Laboran 2'
                ],
                [
                    'id' => 'LAB 4', 'name' => 'MPL 4 & 5',
                    'full_title' => 'LABORATORY MPL 4 AND 5',
                    'img' => 'images/mpl45.png',
                    'short_desc' => 'MPL 4 and 5 laboratories are solid, semi-solid and liquid preparation laboratories.',
                    'long_desc' => 'Fasilitas manufaktur skala laboratorium untuk berbagai bentuk sediaan obat mulai dari tablet hingga sirup.',
                    'coordinator' => 'Apt. Nama Koordinator, S.Farm., M.Si', 'technicians' => 'Staff Laboran 1, Staff Laboran 2'
                ],
                [
                    'id' => 'LAB 5', 'name' => 'MPL 6',
                    'full_title' => 'MULTI-PURPOSE LABORATORY (MPL) 6',
                    'img' => 'images/mpl6.png',
                    'short_desc' => 'MPL Laboratory - 6: Service Product and Change Laboratory',
                    'long_desc' => 'Melayani pengembangan produk dan modifikasi formula untuk kebutuhan riset industri.',
                    'coordinator' => 'Apt. Nama Koordinator, S.Farm., M.Si', 'technicians' => 'Staff Laboran 1, Staff Laboran 2'
                ],
                [
                    'id' => 'LAB 6', 'name' => 'MPL 7',
                    'full_title' => 'MULTI-PURPOSE LABORATORY (MPL) 7',
                    'img' => 'images/mpl7.png',
                    'short_desc' => 'MPL 7 Laboratory is a Nanomaterials and Kinetics Laboratory.',
                    'long_desc' => 'Pusat riset nanoteknologi farmasi dan studi kinetika pelepasan bahan aktif.',
                    'coordinator' => 'Apt. Nama Koordinator, S.Farm., M.Si', 'technicians' => 'Staff Laboran 1, Staff Laboran 2'
                ],
                [
                    'id' => 'LAB 7', 'name' => 'MPL 8',
                    'full_title' => 'MULTI-PURPOSE LABORATORY (MPL) 8',
                    'img' => 'images/mpl8.png',
                    'short_desc' => 'MPL 8 Laboratory is a Sterile Preparation Manufacturing Laboratory',
                    'long_desc' => 'Laboratorium khusus pembuatan sediaan steril dengan fasilitas aseptic suite yang lengkap.',
                    'coordinator' => 'Apt. Nama Koordinator, S.Farm., M.Si', 'technicians' => 'Staff Laboran 1, Staff Laboran 2'
                ],
                [
                    'id' => 'LAB 8', 'name' => 'MPL 9',
                    'full_title' => 'MULTI-PURPOSE LABORATORY (MPL) 9',
                    'img' => 'images/mpl9.png',
                    'short_desc' => 'MPL 9 Laboratory is a Microbiology and Biotechnology Laboratory.',
                    'long_desc' => 'Fokus pada pengujian mikrobiologi, sterilitas, dan pengembangan produk bioteknologi.',
                    'coordinator' => 'Apt. Nama Koordinator, S.Farm., M.Si', 'technicians' => 'Staff Laboran 1, Staff Laboran 2'
                ],
                [
                    'id' => 'LAB 9', 'name' => 'MPL 10',
                    'full_title' => 'MULTI-PURPOSE LABORATORY (MPL) 10',
                    'img' => 'images/mpl10.png',
                    'short_desc' => 'MPL 10 Laboratory is a Chemical Testing Laboratory',
                    'long_desc' => 'Laboratorium pengujian kimia komprehensif menggunakan instrumen analisis modern.',
                    'coordinator' => 'Apt. Nama Koordinator, S.Farm., M.Si', 'technicians' => 'Staff Laboran 1, Staff Laboran 2'
                ],
                [
                    'id' => 'LAB 10', 'name' => 'MDPL 2',
                    'full_title' => 'MDPL 2 LABORATORY',
                    'img' => 'images/mdpl2.png',
                    'short_desc' => 'MDPL 2 Laboratory is a Chemical Testing Laboratory.',
                    'long_desc' => 'Menyediakan layanan pengujian kimia tingkat lanjut untuk riset dosen dan mahasiswa.',
                    'coordinator' => 'Apt. Nama Koordinator, S.Farm., M.Si', 'technicians' => 'Staff Laboran 1, Staff Laboran 2'
                ],
                [
                    'id' => 'LAB 11', 'name' => 'PUAPT',
                    'full_title' => 'PUAPT HA-DD LABORATORY',
                    'img' => 'images/puapt.png',
                    'short_desc' => 'The PUAPT HA-DD Laboratory is an Inter-University Center of Excellence Laboratory for Health Autonomy-Drug Discovery.',
                    'long_desc' => 'Pusat unggulan antar universitas untuk kemandirian kesehatan dan penemuan obat baru skala nasional.',
                    'coordinator' => 'Apt. Nama Koordinator, S.Farm., M.Si', 'technicians' => 'Staff Laboran 1, Staff Laboran 2'
                ],
            ];
        @endphp

        @foreach($labs as $lab)
        <div onclick="openLabModal({{ json_encode($lab) }})" 
             class="relative h-64 bg-gray-50 rounded-xl shadow-[1px_2px_4px_0px_rgba(0,21,7,0.24)] overflow-hidden group cursor-pointer">
            <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" 
                 src="{{ asset($lab['img']) }}" 
                 onerror="this.src='https://placehold.co/382x267?text={{ urlencode($lab['name']) }}'">
            
            <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/90 via-neutral-950/20 to-transparent"></div>
            
            <div class="absolute bottom-0 left-0 w-full p-6 flex flex-col gap-1">
                <h3 class="text-gray-50 text-2xl font-bold font-['Lato'] tracking-tight">{{ $lab['name'] }}</h3>
                <p class="text-gray-50 text-sm font-normal opacity-90 leading-snug">{{ $lab['short_desc'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>
        </div>

        <x-footer />
    </div>
</div>

<div id="labModal" class="fixed inset-0 z-[100] hidden flex items-center justify-center bg-black/60 backdrop-blur-sm p-4">
    <div class="w-[656px] max-h-[90vh] px-6 py-5 bg-white rounded-lg flex flex-col gap-1.5 overflow-hidden shadow-2xl relative animate-fadeIn">
        
        <div class="self-stretch inline-flex justify-between items-center mb-2">
            <div id="modal-lab-id" class="text-neutral-700 text-base font-bold font-['Lato'] uppercase">LAB 1</div>
            <button onclick="closeLabModal()" class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded-full transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path>
                </svg>
            </button>
        </div>

        <div class="overflow-y-auto modal-content-scroll flex flex-col gap-4 pr-1">
            <img id="modal-img" class="self-stretch h-72 rounded-lg object-cover shadow-sm" src="" alt="Lab Detail">

            <div class="self-stretch flex flex-col gap-4">
                <div class="flex flex-col gap-3">
                    <div id="modal-full-title" class="self-stretch text-neutral-950 text-base font-medium font-['Lato'] uppercase leading-snug">
                        TITLE
                    </div>
                    <div id="modal-long-desc" class="self-stretch text-justify text-neutral-700 text-xs font-normal font-['Lato'] leading-relaxed">
                        DESCRIPTION
                    </div>
                </div>

                <div class="flex flex-col gap-3 border-t border-gray-100 pt-4">
                    <div class="text-neutral-950 text-base font-medium font-['Lato']">Penanggungjawab/Coordinator:</div>
                    <div id="modal-staff" class="text-justify text-neutral-700 text-xs font-normal font-['Lato'] leading-relaxed">
                        STAFF INFO
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const modal = document.getElementById('labModal');
    
    function openLabModal(data) {
        // Set Data ke Modal
        document.getElementById('modal-lab-id').innerText = data.id;
        document.getElementById('modal-img').src = `{{ asset('') }}${data.img}`;
        document.getElementById('modal-full-title').innerText = data.full_title;
        document.getElementById('modal-long-desc').innerText = data.long_desc;
        document.getElementById('modal-staff').innerHTML = `${data.coordinator}<br/>Laboran/ laboratory technician:<br/>${data.technicians}`;

        // Tampilkan Modal
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Lock scroll body
    }

    function closeLabModal() {
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto'; // Unlock scroll body
    }

    // Close modal jika klik di luar area box
    window.onclick = function(event) {
        if (event.target == modal) {
            closeLabModal();
        }
    }
</script>

</body>
</html>