<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leadership & Organization - Faculty of Pharmacy</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Lato', sans-serif; }
        
        .fade-in {
            animation: fadeIn 0.4s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(5px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="wrapper-all w-full min-h-screen bg-[#F7FFFA] relative">
        <x-navbar />

        <div class="main-leadership flex flex-col pt-16">
            
            <div class="heroes h-[45vh] w-full gap-5 text-white bg-gradient-to-r from-[#275CAA] via-[#275CAA] to-[#2E9853] px-28 flex flex-col justify-center">
                <div class="header-top flex items-end gap-3">
                    <h1 class="text-5xl font-medium tracking-[-0.04em]">Leadership & Organization</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" viewBox="0 0 256 256">
                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                    </svg>
                </div>
                <h1 class="w-[50%] text-justify leading-relaxed">
                    Information on the faculty’s leadership structure, organizational governance, and administrative roles that support effective academic and institutional management.
                </h1>
            </div>

            <div class="content-area fade-in px-28 py-16 flex flex-col gap-16 bg-white">

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
                            <img src="{{ asset('images/bagan-struktur-organisasi.png') }}" alt="Structure" class="w-full h-auto rounded-xl shadow-sm">
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-10">
                    <div class="flex justify-between items-end border-b pb-4 border-gray-100">
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
                        <div class="w-full h-[402px] relative bg-gray-50 rounded-xl shadow-md overflow-hidden">
                            <img class="w-full h-full object-cover" src="{{ asset($leader['img']) }}" onerror="this.src='https://placehold.co/278x402?text=Photo'">
                            <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/80 via-neutral-950/20 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 w-full p-6 flex flex-col gap-1">
                                <div class="text-gray-50 text-[18px] font-bold leading-tight">{{ $leader['name'] }}</div>
                                <div class="text-gray-50 text-sm font-normal opacity-90">{{ $leader['role'] }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col gap-10">
                    <div class="flex justify-between items-end border-b pb-4 border-gray-100">
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
                        <div class="w-full h-[402px] relative bg-gray-50 rounded-xl shadow-md overflow-hidden">
                            <img class="w-full h-full object-cover" src="{{ asset($head['img']) }}" onerror="this.src='https://placehold.co/278x402?text=Photo'">
                            <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/80 via-neutral-950/0 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 w-full p-6 flex flex-col gap-1">
                                <div class="text-gray-50 text-[18px] font-bold leading-tight">{{ $head['name'] }}</div>
                                <div class="text-gray-50 text-sm font-normal">{{ $head['role'] }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col gap-10">
                    <div class="flex justify-between items-end border-b pb-4 border-gray-100">
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
                        <div class="w-full h-[402px] relative bg-gray-50 rounded-xl shadow-md overflow-hidden">
                            <img class="w-full h-full object-cover" src="{{ asset($coord['img']) }}" onerror="this.src='https://placehold.co/224x402?text=Photo'">
                            <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/90 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 w-full p-5 flex flex-col gap-1">
                                <div class="text-gray-50 text-[18px] font-bold leading-tight">{{ $coord['name'] }}</div>
                                <div class="text-gray-50 text-[12px] font-normal opacity-80 uppercase tracking-wider leading-tight">{{ $coord['role'] }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

            <x-footer />
        </div>
    </div>

    <script>
        function toggleAccordion() {
            const content = document.getElementById("accordion-content");
            const iconContainer = document.getElementById("accordion-icon-container");

            const arrowRight = '<svg id="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#0b0a0a" viewBox="0 0 256 256"><path d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z"></path></svg>';
            const arrowDown = '<svg id="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#0b0a0a" viewBox="0 0 256 256"><path d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm34.83-86.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66,0l-32-32a4,4,0,0,1,5.66-5.66L124,158.34V88a4,4,0,0,1,8,0v70.34l25.17-25.17A4,4,0,0,1,162.83,133.17Z"></path></svg>';

            content.classList.toggle("hidden");
            iconContainer.innerHTML = content.classList.contains("hidden") ? arrowRight : arrowDown;
        }
    </script>
</body>
</html>