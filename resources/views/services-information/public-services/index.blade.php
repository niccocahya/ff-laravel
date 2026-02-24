<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Public Services</title>
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
            
            <div class="heroes h-[45vh] w-full gap-5 text-white bg-gradient-to-r from-[#275CAA] via-[#275CAA] to-[#2E9853] px-28 flex flex-col justify-center">
                <div class="header-top flex items-center gap-3">
                    <h1 class="text-5xl font-medium inline-block ">
                        Public Services
                    </h1>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 opacity-90 cursor-pointer mt-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <h1 class="w-[50%] text-justify text-sm leading-relaxed">
                    Stay updated with key academic dates, lecture schedules, and important events throughout the semester.
                </h1>
            </div>

            <div class="fade-in py-14 px-28 flex flex-col gap-12 bg-[#F7FFFA]">
                
                <div class="w-full flex justify-center py-4">
                    <img src="{{ asset('images/maklumat-pelayanan.png') }}" alt="Maklumat Pelayanan Informasi Publik" class="w-[85%] rounded-2xl shadow-md border border-gray-100">
                </div>
                
                <div class="w-full flex flex-col gap-7 pt-4">
                    <h1 class="text-3xl font-medium text-[#1E293B]">
                        Types of Public Services
                    </h1>
                    
                    <div class="flex flex-col gap-5">
                        <x-link-card-small title="Internship Standard Operating Procedures" href="#" />
                        <x-link-card-small title="Internship Permit Application Form for Internship 1 and 2" href="#" />
                        <x-link-card-small title="Diploma Legalization Processing" href="#" />
                        <x-link-card-small title="Standard Service for Room Rentals at the Faculty of Pharmacy, Airlangga University" href="#" />
                        
                        <x-link-card-small-last title="Graduation Announcement 255" href="#" />
                    </div>
                </div>

            </div>
            
            <x-footer />
        </div>
    </div>
    <script></script>
</body>

</html>