<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leadership & Organization - Faculty of Pharmacy</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        body { font-family: 'Lato', sans-serif; }
    </style>
</head>

<body class="bg-[#F7FFFA] antialiased">

<div class="w-full min-h-screen relative">

    <nav class="w-full h-16 bg-[#275CAA] flex items-center justify-between px-[128px] fixed top-0 z-50">
        <img src="{{ asset('images/logo-ff.png') }}" alt="logo" class="h-10">
        <h1 class="text-white font-semibold">Leadership & Organization</h1>
    </nav>


    <section class="w-full mt-16 h-[324px] relative bg-gradient-to-r from-[#275CAA] to-[#2E9853] flex items-center px-[128px]">
        <div class="flex flex-col gap-4">
            <div class="inline-flex items-center gap-4">
                <h1 class="text-gray-50 text-[56px] font-bold leading-[67.20px] tracking-[-0.04em]">
                    Leadership and Organization
                </h1>
                <div class="mt-2 p-2 bg-white/10 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 256 256">
                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                    </svg>
                </div>
            </div>
            
            <p class="max-w-[657px] text-gray-50 text-lg font-normal leading-relaxed">
                Information on the faculty’s leadership structure, organizational governance, and administrative roles that support effective academic and institutional management.
            </p>
        </div>
    </section>


    <section class="max-w-[1440px] mx-auto bg-white px-[128px] py-[64px] flex flex-col gap-[64px]">

        <div class="flex flex-col gap-6">
            <button onclick="toggleAccordion()" class="w-full flex justify-between items-center text-left cursor-pointer">
                <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">
                    Organizational structure
                </h2>
                <div id="accordion-icon-container">
                    <svg id="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#0b0a0a" viewBox="0 0 256 256">
                        <path d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z"></path>
                    </svg>
                </div>
            </button>

            <div id="accordion-content" class="hidden">
                <div class="pt-6 border-t border-gray-100 flex justify-center">
                    <img src="{{ asset('images/bagan-struktur-organisasi.png') }}" 
                         alt="Structure" class="w-full h-auto rounded-xl">
                </div>
            </div>
        </div>


        <div class="flex flex-col gap-12">
            <div class="flex justify-between items-end">
                <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">Leadership Profile</h2>
                <div class="text-neutral-700 text-lg font-normal">2025-2030 Period</div>
            </div>

            <div class="grid grid-cols-4 gap-6">
                @php
                    $leaders = [
                        ['name' => 'Prof. apt. Dewi Melani Hariyadi, S.Si., M.Phil., Ph.D.', 'role' => 'Dean', 'img' => 'images/image-43.png'],
                        ['name' => 'Prof. apt. Helmy Yusuf, S.Si., M.Sc., Ph.D', 'role' => 'Vice Dean I', 'img' => 'images/image-44.png'],
                        ['name' => 'apt. Mahardian Rahmadi, S.Si., M.Sc., Ph.D.', 'role' => 'Vice Dean II', 'img' => 'images/image-45.png'],
                        ['name' => 'apt. Elida Zairina, S.Si., MPH., PhD.', 'role' => 'Vice Dean III', 'img' => 'images/image-46.png'],
                    ];
                @endphp

                @foreach ($leaders as $leader)
                <div class="w-full max-w-[278px] h-[402px] relative bg-gray-50 rounded-xl shadow-[1px_2px_4px_0px_rgba(0,21,7,0.24)] overflow-hidden">
                    <img class="w-full h-full object-cover" 
                         src="{{ asset($leader['img']) }}" 
                         onerror="this.src='https://placehold.co/278x402?text=Head+Photo'">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/80 via-neutral-950/20 to-transparent opacity-90"></div>
                    
                    <div class="absolute bottom-0 left-0 w-full p-6 flex flex-col gap-1">
                        <div class="text-gray-50 text-[18px] font-bold leading-tight">{{ $leader['name'] }}</div>
                        <div class="text-gray-50 text-sm font-normal opacity-90">{{ $leader['role'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


        <div class="flex flex-col gap-12">
            <div class="flex justify-between items-end">
                <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">Head of Department</h2>
                <div class="text-neutral-700 text-lg font-normal">2025-2030 Period</div>
            </div>

            <div class="grid grid-cols-4 gap-6">
                @php
                    $heads = [
                        ['name' => 'apt. Andi Hermansyah, S.Farm., M.Sc., Ph.D.', 'role' => 'Head of Department Pharmacy Practice', 'img' => 'images/image-124.png'],
                        ['name' => 'apt. Dinda Monika Nusantara Ratri, S.Farm., M.Farm.Klin.', 'role' => 'Secretary of Department Pharmacy Practice', 'img' => 'images/image-125.png'],
                        ['name' => 'Prof. Dr. apt. Juni Ekowati, M.Si.', 'role' => 'Head of Department Pharmaceutical Sciences', 'img' => 'images/image-126.png'],
                        ['name' => 'Prof. apt. Rr. Retno Widyowati, S.Si., M.Pharm., Ph.D.', 'role' => 'Secretary of Department Pharmaceutical Sciences', 'img' => 'images/image-127.png'],
                    ];
                @endphp

                @foreach ($heads as $head)
                <div class="w-full max-w-[278px] h-[402px] relative bg-gray-50 rounded-xl shadow-[1px_2px_4px_0px_rgba(0,21,7,0.24)] overflow-hidden">
                    <img class="w-full h-full object-cover" 
                         src="{{ asset($head['img']) }}" 
                         onerror="this.src='https://placehold.co/278x402?text=Head+Photo'">
                    <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/80 via-neutral-950/0 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 w-full p-6 flex flex-col gap-1">
                        <div class="text-gray-50 text-[18px] font-bold leading-tight">{{ $head['name'] }}</div>
                        <div class="text-gray-50 text-sm font-normal">{{ $head['role'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


        <div class="flex flex-col gap-12">
            <div class="flex justify-between items-end">
                <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">Study Program Coordinator</h2>
                <div class="text-neutral-700 text-lg font-normal">2025-2030 Period</div>
            </div>

            <div class="grid grid-cols-5 gap-4">
                @php
                    $coords = [
                        ['name' => 'apt. Chrismawan Ardianto, S.Farm., M.Sc., Ph.D.', 'role' => 'Bachelor of Pharmacy Coordinator', 'img' => 'images/image-128.png'],
                        ['name' => 'apt. Dr. Yunita Nita, S.Si., M.Pharm.', 'role' => 'Apothecary Professional Education', 'img' => 'images/image-129.png'],
                        ['name' => 'Prof. Dr. apt. Budi Suprapti, M.Si.', 'role' => 'Master of Clinical Pharmacy', 'img' => 'images/image-130.png'],
                        ['name' => 'Prof. apt. Tutik Sri Wahyuni, S.Si., M.Si., Ph.D.', 'role' => 'Master of Pharmaceutical Sciences', 'img' => 'images/image-131.png'],
                        ['name' => 'Prof. Dr. H. apt. Djoko Agus Purwanto., M.Si', 'role' => 'Doctor of Pharmaceutical Sciences', 'img' => 'images/image-132.png'],
                    ];
                @endphp

                @foreach ($coords as $coord)
                <div class="w-full max-w-[224px] h-[402px] relative bg-gray-50 rounded-xl shadow-[1px_2px_4px_0px_rgba(0,21,7,0.24)] overflow-hidden">
                    <img class="w-full h-full object-cover" 
                         src="{{ asset($coord['img']) }}" 
                         onerror="this.src='https://placehold.co/224x402?text=Coord'">
                    <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/90 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 w-full p-5 flex flex-col gap-1">
                        <div class="text-gray-50 text-[18px] font-bold leading-tight">{{ $coord['name'] }}</div>
                        <div class="text-gray-50 text-[12px] font-normal opacity-80 uppercase tracking-wider">{{ $coord['role'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </section>


    <footer class="w-full px-[128px] py-12 bg-[#275CAA] text-white text-center">
        <p class="text-[14px] opacity-70 italic">© 2025 Felitech Team - Faculty of Pharmacy Universitas Airlangga</p>
    </footer>

</div>


<script>
function toggleAccordion() {
    const content = document.getElementById("accordion-content");
    const iconContainer = document.getElementById("accordion-icon-container");

    // SVG Paths yang kamu berikan
    const arrowRight = '<svg id="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#0b0a0a" viewBox="0 0 256 256"><path d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z"></path></svg>';
    const arrowDown = '<svg id="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#0b0a0a" viewBox="0 0 256 256"><path d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm34.83-86.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66,0l-32-32a4,4,0,0,1,5.66-5.66L124,158.34V88a4,4,0,0,1,8,0v70.34l25.17-25.17A4,4,0,0,1,162.83,133.17Z"></path></svg>';

    content.classList.toggle("hidden");
    
    if (!content.classList.contains("hidden")) {
        iconContainer.innerHTML = arrowDown;
    } else {
        iconContainer.innerHTML = arrowRight;
    }
}
</script>

</body>
</html>