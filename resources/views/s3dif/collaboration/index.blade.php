<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Collaboration</title>
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
        <x-nav-prodi-s3 />

        <div class="main-leadership flex flex-col pt-26">
            
            <div class="heroes min-h-[45vh] w-full gap-5 text-white bg-gradient-to-r from-[#275CAA] via-[#275CAA] to-[#2E9853] px-6 md:px-16 lg:px-28 flex flex-col justify-center py-10 md:py-0">
                <div class="header-top flex items-end gap-3">
                    <h1 class="text-4xl md:text-5xl font-medium tracking-[-0.04em]">Collaboration</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" viewBox="0 0 256 256" class="w-8 h-8 md:w-10 md:h-10">
                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                    </svg>
                </div>
                <h1 class="w-full md:w-[80%] lg:w-[60%] text-justify leading-relaxed text-sm md:text-base opacity-90">
                    Leading the development of Pharmaceutical Science-Technology and Clinical-Community Pharmacy through innovative education and global collaboration.
                </h1>
            </div>

            <div class="fade-in px-6 md:px-16 lg:px-28 py-12 md:py-20 flex flex-col gap-12 md:gap-16">
                
                <div class="flex flex-col gap-4 md:gap-6">
                    <h2 class="text-3xl md:text-4xl font-normal text-[#1A1A1A]">Education</h2>
                    <ol class="list-decimal pl-5 text-[#333333] text-sm md:text-[15px] leading-relaxed space-y-1">
                        <li>Double degree antara Prodi MIF UNAIR dengan UQ, Australia</li>
                        <li>Double degree antara Prodi FF UNAIR dengan MSU</li>
                        <li>Short Course : Naresuan University-Thailand dalam bidang Natural Products</li>
                        <li>PAGE (Pharmacy Airlangga Global Academy)</li>
                    </ol>
                </div>

                <div class="flex flex-col gap-4 md:gap-6">
                    <h2 class="text-3xl md:text-4xl font-normal text-[#1A1A1A]">Joint Research & Publication</h2>
                    <ol class="list-decimal pl-5 text-[#333333] text-sm md:text-[15px] leading-relaxed space-y-1">
                        <li>Hoshi University, Japan</li>
                        <li>National Chiayi University, Taiwan</li>
                        <li>Kobe University, Japan</li>
                        <li>Queen's University Belfast</li>
                        <li>UiTM, Malaysia</li>
                        <li>The Prince Songkla University, Thailand</li>
                        <li>Pharmaceutical Industry:</li>
                        <li>Kimia Farma, Co. Ltd</li>
                        <li>Konimex, Co. Ltd</li>
                        <li>Daewoong Infion, Co. Ltd</li>
                    </ol>
                </div>

                <div class="flex flex-col gap-4 md:gap-6">
                    <h2 class="text-3xl md:text-4xl font-normal text-[#1A1A1A]">International Conference</h2>
                    <ol class="list-decimal pl-5 text-[#333333] text-sm md:text-[15px] leading-relaxed space-y-1">
                        <li>International Graduate Student Conference on Pharmaceutical Sciences (IGSCPS) 2024</li>
                        <li>Joint Conference with Tagum Univ: 5th Liyang 2023</li>
                        <li>International Graduate Student Conference on Pharmaceutical Sciences (IGSCPS) 2023</li>
                        <li>Joint Conference with USM: ICPHS 2022</li>
                    </ol>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 mt-4">
                    <img src="{{ asset('images/collab1.png') }}" alt="International Conference Group Photo 1" class="w-full h-auto object-cover shadow-xl hover:shadow-2xl transition-shadow duration-300">
                    <img src="{{ asset('images/collab2.png') }}" alt="International Conference Group Photo 2" class="w-full h-auto object-cover shadow-xl hover:shadow-2xl transition-shadow duration-300">
                </div>

            </div>

            <x-footer />
        </div>
    </div>
</body>
</html>