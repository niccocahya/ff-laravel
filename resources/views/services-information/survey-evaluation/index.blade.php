<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Survey and Evaluation</title>
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
                title="Survey and Evaluation" 
                description="Stay updated with key academic dates, lecture schedules, and important
                    events throughout the semester." 
            />

            <div class="fade-in py-10 md:py-14 px-6 md:px-16 lg:px-28 flex flex-col gap-8 md:gap-10 bg-[#F7FFFA]">
                
                <div class="w-full flex flex-col gap-5 md:gap-7">
                    <h1 class="text-2xl md:text-3xl lg:text-4xl font-medium text-[#1E293B]">
                        Survey
                    </h1>
                    <div class="flex flex-col gap-3 md:gap-5">
                        <x-link-card-small title="Citizen Report" href="#" />
                        <x-link-card-small title="Partner Satisfaction Survey" href="#" />
                        <x-link-card-small title="Stakeholder Survey" href="#" />
                        <x-link-card-small title="Vision and Mission Understanding Survey" href="#" />
                        
                        <x-link-card-small-last title="Graduate Competency Survey" href="#" />
                    </div>
                </div>

                <div class="w-full flex flex-col gap-5 md:gap-7">
                    <h1 class="text-2xl md:text-3xl lg:text-4xl font-medium text-[#1E293B]">
                        Evaluation Result
                    </h1>
                    <div class="flex flex-col gap-3 md:gap-5">
                        <x-accordion title="Partner Satisfaction Survey Result">
                            <div class="w-full flex flex-col items-center gap-4 md:gap-6 py-4">
                                <img src="{{ asset('images/partner-satisfaction-1.png') }}" alt="Partner Satisfaction Graph" class="w-full md:w-[85%] rounded-lg shadow-sm border border-gray-100">
                                <img src="{{ asset('images/partner-satisfaction-2.png') }}" alt="Partner Satisfaction Pie Charts" class="w-full md:w-[85%] rounded-lg shadow-sm border border-gray-100">
                            </div>
                        </x-accordion>
                        
                        <x-accordion title="Faculty of Pharmacy Cleanliness Satisfaction Survey Result">
                            <div class="w-full flex justify-center py-4">
                                <img src="{{ asset('images/cleanliness-satisfaction.png') }}" alt="Cleanliness Satisfaction Charts" class="w-full md:w-[85%] rounded-lg shadow-sm border border-gray-100">
                            </div>
                        </x-accordion>

                        <x-link-card-small-last title="Stakeholder Satisfaction Index" href="#" />
                    </div>
                </div>

            </div>
            <x-footer />
        </div>
    </div>
    <script></script>
</body>

</html>