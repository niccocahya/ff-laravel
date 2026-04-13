<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Education - Student Mobility</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
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
    <div class="wrapper-all w-full min-h-screen bg-[#F7FFFA] relative font-sans">
        <x-nav-prodi />

        <div class="main-calendar flex flex-col pt-20 md:pt-26">

            <x-hero-section 
                title="Education" 
                description="Leading the development of Pharmaceutical Science-Technology and Clinical-Community Pharmacy through innovative education and global collaboration." 
            />

            <div class="fade-in py-8 md:py-14 px-6 md:px-16 lg:px-28 flex flex-col gap-6 md:gap-10 bg-[#F7FFFA]">

                <x-pagination-s2mif-education active="student-mobility" />

                <div class="w-full flex flex-col pt-6 md:pt-8 gap-12 md:gap-16">
                    
                    @php
                        $mobilityItems = [
                            ['name' => 'Albertus AS', 'img' => 'albertus.png'],
                            ['name' => 'Ave Rahman', 'img' => 'ave-rahman.png'],
                            ['name' => 'Firman, Maylisa, & Zunita', 'img' => 'firman.png'],
                            ['name' => 'Student Outbound', 'img' => 'student-outbound.png'],
                            ['name' => 'Student Outbound', 'img' => 'aprelita.png'],
                            ['name' => 'Student Outbound', 'img' => 'norhayati.png'],
                        ];
                    @endphp

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 md:gap-14 items-start justify-items-center">
                        
                        @foreach ($mobilityItems as $item)
                        <div class="w-full max-w-[350px] flex flex-col items-center gap-4 md:gap-5">
                            <h2 class="text-neutral-950 text-lg md:text-xl font-medium border-b-2 border-neutral-900 pb-1.5 px-3 text-center w-fit mx-auto leading-tight">
                                {{ $item['name'] }}
                            </h2>
                            
                            <div class="w-full h-auto rounded-lg overflow-hidden shadow-md border border-gray-100 bg-white">
                                <img src="{{ asset('images/' . $item['img']) }}" 
                                     alt="Student Mobility - {{ $item['name'] }}" 
                                     class="w-full h-auto block"
                                     onerror="this.onerror=null;this.src='https://placehold.co/350x500?text={{ $item['img'] }}+Missing'">
                            </div>
                        </div>
                        @endforeach

                    </div>
                    
                </div>

            </div>

            <x-footer />
        </div>
    </div>
</body>

</html>