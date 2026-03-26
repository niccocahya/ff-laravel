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
            
            <x-hero-section 
                title="Public Services" 
                description="Stay updated with key academic dates, lecture schedules, and important
                    events throughout the semester." 
            />

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