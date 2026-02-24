<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <div class="wrapper-all w-full min-h-screen bg-[#F7FFFA] relative">
        <x-navbar />
        <div class="main-calendar flex flex-col pt-16">
            <div
                class="heroes h-[45vh] w-full gap-5 text-white bg-gradient-to-r from-[#275CAA] via-[#275CAA] to-[#2E9853] px-28 flex flex-col justify-center">
                <div class="header-top flex items-end gap-3">
                    <h1 class="text-5xl font-medium">Calendar and Schedule</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" viewBox="0 0 256 256">
                        <path
                            d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z">
                        </path>
                    </svg>
                </div>
                <h1 class="w-[50%] text-justify">Stay updated with key academic dates, lecture schedules, and important
                    events throughout the semester.</h1>
            </div>
            <div class="fac-cal fade-in py-10 px-28 flex flex-col gap-10 bg-[#F7FFFA]">
                <x-link-card title="UNAIR’s Academic Calendar"
                    description="Access UNAIR’s official academic calendar, including important dates for registration, lectures, examinations, and academic holidays."
                    href="https://google.com" />
                <div class="w-full flex flex-col gap-5">
                    <h1 class="title-fc text-4xl font-medium">
                        Faculty Calendar
                    </h1>
                    <div class="list-fc w-full flex flex-col gap-7">
                        <x-full-accordion title="Bachelor of Pharmacy Calendar">
                            <x-tabs :tabs="['oddbp' => 'Odd Semester', 'evenbp' => 'Even Semester']">
                                <div id="content-oddbp" class="tab-content">
                                    <div class="flex justify-center">
                                        <img src="{{ asset('images/about-1.png') }}" class="w-[75%]">
                                    </div>
                                </div>

                                <div id="content-evenbp" class="tab-content hidden">
                                    <div class="flex justify-center">
                                        <img src="{{ asset('images/about-2.png') }}" class="w-[75%]">
                                    </div>
                                </div>
                            </x-tabs>
                        </x-full-accordion>
                        <x-full-accordion title="Pharmacist Education Calendar">
                            <x-tabs :tabs="['oddpe' => 'Odd Semester', 'evenpe' => 'Even Semester']">
                                <div id="content-oddpe" class="tab-content">
                                    <div class="flex justify-center">
                                        <img src="{{ asset('images/about-1.png') }}" class="w-[75%]">
                                    </div>
                                </div>

                                <div id="content-evenpe" class="tab-content hidden">
                                    <div class="flex justify-center">
                                        <img src="{{ asset('images/about-2.png') }}" class="w-[75%]">
                                    </div>
                                </div>
                            </x-tabs>
                        </x-full-accordion>
                        <x-full-accordion title="Master of Clinical Pharmacy Calendar">
                            <x-tabs :tabs="['oddmcp' => 'Odd Semester', 'evenmcp' => 'Even Semester']">
                                <div id="content-oddmcp" class="tab-content">
                                    <div class="flex justify-center">
                                        <img src="{{ asset('images/about-1.png') }}" class="w-[75%]">
                                    </div>
                                </div>

                                <div id="content-evenmcp" class="tab-content hidden">
                                    <div class="flex justify-center">
                                        <img src="{{ asset('images/about-2.png') }}" class="w-[75%]">
                                    </div>
                                </div>
                            </x-tabs>
                        </x-full-accordion>
                        <x-full-accordion title="Master of Pharmaceutical Sciences Calendar">
                            <x-tabs :tabs="['oddmps' => 'Odd Semester', 'evenmps' => 'Even Semester']">
                                <div id="content-oddmps" class="tab-content">
                                    <div class="flex justify-center">
                                        <img src="{{ asset('images/about-1.png') }}" class="w-[75%]">
                                    </div>
                                </div>

                                <div id="content-evenmps" class="tab-content hidden">
                                    <div class="flex justify-center">
                                        <img src="{{ asset('images/about-2.png') }}" class="w-[75%]">
                                    </div>
                                </div>
                            </x-tabs>
                        </x-full-accordion>
                        <x-full-accordion-last title="Doctor of Pharmaceutical Sciences Calendar">
                            <x-tabs :tabs="['odddps' => 'Odd Semester', 'evendps' => 'Even Semester']">
                                <div id="content-odddps" class="tab-content">
                                    <div class="flex justify-center">
                                        <img src="{{ asset('images/about-1.png') }}" class="w-[75%]">
                                    </div>
                                </div>

                                <div id="content-evendps" class="tab-content hidden">
                                    <div class="flex justify-center">
                                        <img src="{{ asset('images/about-2.png') }}" class="w-[75%]">
                                    </div>
                                </div>
                            </x-tabs>
                        </x-full-accordion-last>
                    </div>
                </div>
            </div>
            <x-footer />
        </div>
    </div>
    <script></script>
</body>

</html>