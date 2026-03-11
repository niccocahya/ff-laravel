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
            <x-hero-section title='Calendar and Schedule'
                description='Stay updated with key academic dates, lecture schedules, and important
                    events throughout the semester.' />
            <div class="fac-cal fade-in py-14 px-28 flex flex-col gap-10 bg-[#F7FFFA]">
                <x-link-card title="UNAIR’s Academic Calendar"
                    description="Access UNAIR’s official academic calendar, including important dates for registration, lectures, examinations, and academic holidays."
                    href="https://pendidikan.unair.ac.id/v2/index.php/kalender-akademik-2/" />
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