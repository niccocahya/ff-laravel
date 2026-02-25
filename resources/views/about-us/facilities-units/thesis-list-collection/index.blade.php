<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facilities Unit - Thesis List Collection</title>

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

        {{-- HERO BANNER SAMA --}}
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

        {{-- TAB NAVIGATION --}}
        <x-pagination-facilities-units active="thesis" />

        <div class="fade-in px-28 py-16 flex flex-col items-center bg-[#F7FFFA]">
            
            <div class="w-full max-w-[1184px] flex flex-col shadow-[0px_4px_10px_rgba(0,0,0,0.05)] rounded-xl overflow-hidden">
                
                {{-- TABLE HEADER --}}
                <div class="w-full h-20 bg-[#275CAA] flex items-center px-6">
                    <div class="w-[160px] text-gray-50 text-xl font-medium">Call Number</div>
                    <div class="w-[160px] text-gray-50 text-xl font-medium text-center">NIM</div>
                    <div class="w-[220px] text-gray-50 text-xl font-medium text-center">Name</div>
                    <div class="flex-1 text-gray-50 text-xl font-medium px-4">Title</div>
                    <div class="w-[120px] text-gray-50 text-xl font-medium text-center">Year</div>
                </div>

                {{-- TABLE BODY --}}
                <div class="flex flex-col">
                    @php
                        $thesis = [
                            [
                                'call' => 'TH-001',
                                'nim' => '2021001',
                                'name' => 'Alya Putri',
                                'title' => 'Formulation and Evaluation of Herbal Antibacterial Gel',
                                'year' => '2023'
                            ],
                            [
                                'call' => 'TH-002',
                                'nim' => '2021002',
                                'name' => 'Rafi Mahendra',
                                'title' => 'Comparative Study of Antioxidant Activity in Medicinal Plants',
                                'year' => '2023'
                            ],
                        ];
                    @endphp

                    @for ($i = 0; $i < 10; $i++)
                        @php
                            $row = $thesis[$i % 2];
                            $rowBg = ($i % 2 == 0) ? 'bg-gray-50' : 'bg-[#F8FAFC]';
                        @endphp

                        <div class="w-full min-h-[80px] flex items-center px-6 {{ $rowBg }} border-b border-gray-100 hover:bg-blue-50/50 transition-colors">
                            
                            <div class="w-[160px] text-[#275CAA] font-mono font-bold text-base">
                                {{ $row['call'] }}
                            </div>

                            <div class="w-[160px] text-center text-neutral-700 text-base">
                                {{ $row['nim'] }}
                            </div>

                            <div class="w-[220px] text-center text-neutral-800 text-base">
                                {{ $row['name'] }}
                            </div>

                            <div class="flex-1 px-4 text-neutral-900 text-base leading-snug">
                                {{ $row['title'] }}
                            </div>

                            <div class="w-[120px] text-center text-neutral-700 text-base">
                                {{ $row['year'] }}
                            </div>

                        </div>
                    @endfor
                </div>

            </div>

            {{-- PAGINATION BAWAH (SAMA DENGAN READING ROOM) --}}
            <div class="flex justify-center items-center gap-4 pb-20 pt-8 text-[#1E293B]">
    <button class="hover:text-[#275CAA] transition-colors p-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
            <path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path>
        </svg>
    </button>
    
    <div class="flex items-center gap-2">
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
    </div>
   
    <button class="hover:text-[#275CAA] transition-colors p-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
            <path d="M90.34,202.34a8,8,0,0,0,11.32,11.32l80-80a8,8,0,0,0,0-11.32l-80-80a8,8,0,0,0-11.32,11.32L164.69,128Z"></path>
        </svg>
    </button>
</div>

        </div>

        <x-footer />
    </div>
</div>

</body>
</html>