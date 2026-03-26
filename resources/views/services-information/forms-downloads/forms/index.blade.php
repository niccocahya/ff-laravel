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

            <x-hero-section 
                title="Forms and Downloads" 
                description="Stay updated with key academic dates, lecture schedules, and important events throughout the semester." 
            />

            <x-pagination-forms-downloads active="forms" />

            <div class="fade-in pb-14 px-28 flex flex-col gap-10 bg-[#F7FFFA]">
                
                <div class="w-full flex gap-4">
                    <input type="text" placeholder="Search..." 
                        class="flex-grow rounded-lg border border-[#3D3D3D] px-4 py-3 text-sm focus:outline-none focus:border-[#3D3D3D] transition-colors bg-transparent">
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