<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms and Downloads - Forms</title>
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
                <div class="header-top flex items-end gap-3">
                    <h1 class="text-5xl font-medium">Forms and Downloads</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mb-1 cursor-pointer opacity-90" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <h1 class="w-[50%] text-justify text-sm leading-relaxed">
                    Stay updated with key academic dates, lecture schedules, and important events throughout the semester.
                </h1>
            </div>

            <x-pagination-forms-downloads active="forms" />

            <div class="fade-in pb-14 px-28 flex flex-col gap-10 bg-[#F7FFFA]">
                
                <div class="w-full flex gap-4">
                    <input type="text" placeholder="Search..." 
                        class="flex-grow rounded-lg border border-gray-300 px-4 py-3 text-sm focus:outline-none focus:border-[#275CAA] transition-colors bg-white">
                    <button class="bg-[#275CAA] hover:bg-[#1d4f96] text-white px-12 py-3 rounded-lg text-sm font-medium transition-colors shadow-sm">
                        Browse
                    </button>
                </div>
                
                <div class="w-full flex flex-col gap-7">
                    <div class="flex flex-col gap-5">
                        <x-link-card-small title="Collaboration Partner Satisfaction Survey" href="#" />
                        <x-link-card-small title="Complaint Service Form" href="#" />
                        <x-link-card-small title="Graduates Competence Survey" href="#" />
                        <x-link-card-small title="New Partnership Application Form" href="#" />
                        <x-link-card-small title="Thesis Examination Application Form" href="#" />
                        <x-link-card-small title="Thesis Follow-up Test Application Form" href="#" />
                        <x-link-card-small title="Student Achievement Reporting Form" href="#" />
                        
                        <x-link-card-small-last title="Widya Husada Foundation Scholarship Form" href="#" />
                    </div>
                </div>

            </div>
            
            <x-footer />
        </div>
    </div>
    <script></script>
</body>

</html>