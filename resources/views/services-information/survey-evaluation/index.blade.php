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
            
            <div class="heroes h-[45vh] w-full gap-5 text-white bg-gradient-to-r from-[#275CAA] via-[#275CAA] to-[#2E9853] px-28 flex flex-col justify-center">
                <div class="header-top flex items-end gap-3">
                    <h1 class="text-5xl font-medium">Survey and Evaluation</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" viewBox="0 0 256 256">
                        <path
                            d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z">
                        </path>
                    </svg>
                </div>
                <h1 class="w-[50%] text-justify">Stay updated with key academic dates, lecture schedules, and important
                    events throughout the semester.</h1>
            </div>

            <div class="fade-in py-14 px-28 flex flex-col gap-10 bg-[#F7FFFA]">
                
                <div class="w-full flex flex-col gap-7">
                    <h1 class="text-4xl font-medium">
                        Survey
                    </h1>
                    <div class="flex flex-col gap-5">
                        <x-link-card-small title="Citizen Report" href="#" />
                        <x-link-card-small title="Partner Satisfaction Survey" href="#" />
                        <x-link-card-small title="Stakeholder Survey" href="#" />
                        <x-link-card-small title="Vision and Mission Understanding Survey" href="#" />
                        
                        <x-link-card-small-last title="Graduate Competency Survey" href="#" />
                    </div>
                </div>

                <div class="w-full flex flex-col gap-7">
                    <h1 class="text-4xl font-medium">
                        Evaluation Result
                    </h1>
                    <div class="flex flex-col gap-5">
                        <x-accordion title="Partner Satisfaction Survey Result">
                            <div class="w-full flex flex-col items-center gap-6 py-4">
                                <img src="{{ asset('images/partner-satisfaction-1.png') }}" alt="Partner Satisfaction Graph" class="w-[85%] rounded-lg shadow-sm border border-gray-100">
                                <img src="{{ asset('images/partner-satisfaction-2.png') }}" alt="Partner Satisfaction Pie Charts" class="w-[85%] rounded-lg shadow-sm border border-gray-100">
                            </div>
                        </x-accordion>
                        
                        <x-accordion title="Faculty of Pharmacy Cleanliness Satisfaction Survey Result">
                            <div class="w-full flex justify-center py-4">
                                <img src="{{ asset('images/cleanliness-satisfaction.png') }}" alt="Cleanliness Satisfaction Charts" class="w-[85%] rounded-lg shadow-sm border border-gray-100">
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