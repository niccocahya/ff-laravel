<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Education - Curriculum Structure</title>
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
        <x-nav-prodi />
        
        <div class="main-calendar flex flex-col pt-26">
            
            <div class="heroes h-[45vh] w-full gap-5 text-white bg-gradient-to-r from-[#275CAA] via-[#275CAA] to-[#2E9853] px-28 flex flex-col justify-center">
                <div class="header-top flex items-end gap-3">
                    <h1 class="text-5xl font-medium">Education</h1>
                </div>
                <h1 class="w-[50%] text-justify">
                    Leading the development of Pharmaceutical Science-Technology and Clinical-Community Pharmacy through innovative education and global collaboration.
                </h1>
            </div>

            <div class="fade-in py-14 px-28 flex flex-col gap-10 bg-[#F7FFFA]">
                
                <x-pagination-sarjana-education active="curriculum" />

                <div class="w-full flex flex-col gap-7 pt-2">
                    <div class="flex flex-col gap-5">
                        
                        <x-accordion title="Study Program Curriculum Structure">
                            <div class="w-full flex justify-center py-4">
                                <img src="{{ asset('images/struktur-kurikulum.png') }}" alt="Curriculum Structure" class="w-[85%] rounded-lg shadow-sm border border-gray-100">
                            </div>
                        </x-accordion>
                        
                        <x-accordion-last title="Undergraduate Program–Pharmautical Study Program">
                            <div class="w-full flex justify-center py-4">
                                <img src="{{ asset('images/sem-1.png') }}" alt="Semester 1 Curriculum" class="w-[85%] rounded-lg shadow-sm border border-gray-100">
                            </div>
                        </x-accordion-last>

                    </div>
                </div>

            </div>
            
            <x-footer />
        </div>
    </div>
    <script></script>
</body>

</html>