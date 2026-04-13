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
        <div class="main-faculty-profile flex flex-col pt-16">
            <x-hero-section title='Faculty Profile'
                description='An overview of the faculty’s vision, mission, history, and commitment in advancing education, research, and community service in the field of pharmacy to support public health development.' />
            <x-pagination-faculty-profile active="profile" />

            <div class="main-profile fade-in pb-14 px-6 md:px-14 lg:px-28 flex flex-col gap-8 md:gap-10 bg-[#F7FFFA]">

                <div class="vision-mission flex flex-col lg:flex-row w-full gap-8 lg:gap-10">

                    <div class="vm-left w-full lg:w-[40%] gap-3 md:gap-5 flex flex-col">
                        <h2 class="text-3xl md:text-4xl font-medium text-left text-gray-800">Vision & Mission</h2>
                        <p class="text-justify text-sm md:text-base text-gray-600 leading-relaxed">Driving global
                            excellence in pharmaceutical science and clinical care,
                            grounded in innovation and moral integrity.</p>
                    </div>

                    <div class="vm-right flex flex-col w-full lg:flex-1 gap-4 md:gap-7 text-justify">
                        <x-accordion title="Vision">
                            To become an innovative Faculty of Pharmacy in Indonesia, leading at the national and
                            international levels, a pioneer in
                            the development of knowledge in the fields of pharmaceutical science, technology, and
                            clinical pharmacy, and
                            producing graduates with superior competencies in pharmaceutical care, based on religious
                            morals.
                        </x-accordion>

                        <x-accordion title="Mission">
                            1. To provide innovative and accredited academic and professional education at both the
                            national and international
                            levels in the fields of pharmaceutical science and technology and clinical community
                            pharmacy, based on religious
                            morals.
                            <br><br>2. To develop pharmaceutical science and technology and clinical community pharmacy
                            through
                            basic and applied research
                            to increase the added value of Indonesia's natural resources.
                            <br><br>3. To implement
                            community service programs in the field of pharmacy as a social
                            responsibility, for empowerment,
                            improvement of health, and quality of life.
                            <br><br>4. To collaborate with various parties in education, research, and community service
                            at
                            the
                            national and international
                            levels effectively, efficiently, and sustainably to ensure the development and
                            sustainability of education.
                        </x-accordion>

                        <x-accordion title="Goals">
                            Based on a comprehensive analysis, the strategic objectives of the Faculty of Pharmacy,
                            Airlangga University, are:
                            <br><br>1. Developing excellence in a trusted Clinical Pharmacy Hub and Pharmaceutical
                            Industry
                            Hub
                            <br>2. Achieving recognition as the best pharmacy higher education institution in Indonesia
                            <br>3. Achieving a global ranking in the top 300 in Pharmacy and Pharmacology by a reputable
                            ranking agency
                            <br><br>The parameters measured in point 2 are the achievement of key performance indicators
                            and
                            the
                            benefits provided to the
                            community through downstreaming research results, community service that addresses needs,
                            and involvement in solving
                            problems within the SDGs. Indicators to be achieved for global rankings include academic
                            reputation, graduate reputation
                            and job readiness, faculty student ratio, and the number and mobility of international
                            students.
                        </x-accordion>

                        <x-accordion-last title="Quality Policy">
                            The Faculty of Pharmacy, Airlangga University, is committed to implementing a top class
                            quality management system for the continuous implementation of the Tri Dharma of Higher
                            Education to produce graduates
                            with superior competencies in
                            the field of pharmaceutical care and are able to work and compete at the national and
                            international levels.
                        </x-accordion-last>
                    </div>
                </div>

                <x-big-accordion-last title="Quality Objectives"
                    description="Defining Excellence through Data and Strategic Goals.">
                    <div class="flex justify-center w-full">
                        <img src="{{ asset('images/image-117.png') }}"
                            class="w-full md:w-[90%] rounded-lg object-contain">
                    </div>
                </x-big-accordion-last>

            </div>
            <x-footer />
        </div>
    </div>
    <script></script>
</body>

</html>