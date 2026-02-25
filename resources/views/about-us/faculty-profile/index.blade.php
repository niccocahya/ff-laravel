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
            <div
                class="heroes h-[45vh] w-full gap-5 text-white bg-gradient-to-r from-[#275CAA] via-[#275CAA] to-[#2E9853] px-28 flex flex-col justify-center">
                <div class="header-top flex items-end gap-3">
                    <h1 class="text-5xl font-medium">Faculty Profile</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" viewBox="0 0 256 256">
                        <path
                            d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z">
                        </path>
                    </svg>
                </div>
                <h1 class="w-[50%] text-justify">An overview of the faculty’s vision, mission, history, and commitment
                    in advancing education, research, and community
                    service in the field of pharmacy to support public health development.</h1>
            </div>
            <x-pagination-faculty-profile active="profile" />
            <div class="main-profile fade-in pb-14 px-28 flex flex-col gap-10 bg-[#F7FFFA]">
                <div class="vision-mission flex w-full gap-10">
                    <div class="vm-left w-[40%] gap-5 flex flex-col">
                        <h1 class="text-4xl font-medium text-left">Vision & Mission</h1>
                        <h1 class="text-justify">Driving global excellence in pharmaceutical science and clinical care,
                            grounded in innovation and moral integrity.</h1>
                    </div>
                    <div class="vm-right flex flex-col flex-1 gap-7 text-justify">
                        <x-accordion title="Vision">
                            To become an innovative Faculty of Pharmacy in Indonesia, leading at the national and
                            international levels, a pioneer in
                            the development of knowledge in the fields of pharmaceutical science - technology and
                            clinical pharmacy - community and
                            producing graduates with superior competencies in pharmaceutical care, based on religious
                            morals.
                        </x-accordion>
                        <x-accordion title="Mission">
                            1. To provide innovative and accredited academic and professional education at both the
                            national and international
                            levels in the fields of pharmaceutical science and technology and clinical-community
                            pharmacy, based on religious
                            morals.
                            <br>2. To develop pharmaceutical science and technology and clinical-community pharmacy
                            through
                            basic and applied research
                            to increase the added value of Indonesia's natural resources.
                            <br>3. To implement community service programs in the field of pharmacy as a social
                            responsibility, for empowerment,
                            improvement of health, and quality of life.
                            <br>4. To collaborate with various parties in education, research, and community service at
                            the
                            national and international
                            levels effectively, efficiently, and sustainably to ensure the development and
                            sustainability of education.
                        </x-accordion>
                        <x-accordion title="Goals">
                            Based on a comprehensive analysis, the strategic objectives of the Faculty of Pharmacy,
                            Airlangga University, are:
                            <br>1. Developing excellence in a trusted Clinical Pharmacy Hub and Pharmaceutical Industry
                            Hub
                            <br>2. Achieving recognition as the best pharmacy higher education institution in Indonesia
                            <br>3. Achieving a global ranking in the top 300 in Pharmacy and Pharmacology by a reputable
                            ranking agency
                            <br>The parameters measured in point 2 are the achievement of key performance indicators and
                            the
                            benefits provided to the
                            community through downstreaming research results, community service that addresses needs,
                            and involvement in solving
                            problems within the SDGs. Indicators to be achieved for global rankings include academic
                            reputation, graduate reputation
                            and job readiness, faculty-student ratio, and the number and mobility of international
                            students.
                        </x-accordion>
                        <x-accordion-last title="Quality Policy">
                            The Faculty of Pharmacy, Airlangga University, is committed to implementing a top-class
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
                    <div class="flex justify-center">
                        <img src="{{ asset('images/image-117.png') }}" class="w-[90%]">
                    </div>
                </x-big-accordion-last>
            </div>
            <x-footer />
        </div>
    </div>
    <script></script>
</body>

</html>