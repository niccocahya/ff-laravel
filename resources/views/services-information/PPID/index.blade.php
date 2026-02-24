<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPID Faculty of Pharmacy</title>
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
                    <h1 class="text-5xl font-medium">PPID</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mb-1 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <h1 class="w-[50%] text-justify">An overview of the faculty's vision, mission, history, and commitment in advancing education, research, and community service in the field of pharmacy to support public health development.</h1>
            </div>

            <div class="fade-in py-14 px-28 flex flex-col gap-10 bg-[#F7FFFA]">
                
                <div class="w-full flex flex-col gap-7">
                    <h1 class="text-4xl font-medium">
                        PPID Faculty Of Pharmacy
                    </h1>
                    <div class="flex flex-col gap-5">
                        <div class="w-full flex justify-center py-4">
                            <img src="{{ asset('images/smart-university.png') }}" alt="Smart University Logo" class="w-[50%] rounded-lg">
                        </div>

                        <div class="flex flex-col gap-4 text-[13px] text-justify text-[#475569] leading-relaxed">
                            <p>
                                The emblem of Universitas Airlangga is Garuda Mukti with Lord Vishnu as its rider. Lord Vishnu symbolizes King Airlangga himself, representing his wisdom, strength, and noble character.
                            </p>
                            <p>
                                The emblem of Universitas Airlangga depicts Garuda Mukti carrying a jar, surrounded by an outer circle in the form of a golden chain. The reason the emblem does not directly portray King Airlangga, but instead features Garuda Mukti, his mount, is rooted in the university's early history. At the time of the establishment of Universitas Airlangga, the first rector discovered a royal seal of King Airlangga at the Arca Building in Jakarta. The seal depicted Garuda, the mount of Lord Vishnu (King Airlangga), carrying a jar containing Amerta water, which is believed to grant immortality. Therefore, Garuda Mukti was chosen as the emblem of Universitas Airlangga, symbolizing an eternal source of knowledge.
                            </p>
                            <p>
                                The outer golden chain circle represents the students of Universitas Airlangga, who are expected to become an unbroken chain contributing to the enduring glory of the alma mater, the nation, and humanity. The yellow and blue colors originate from the inauguration ceremony of Universitas Airlangga, during which a statue of Lord Vishnu was unveiled, covered by a yellow and blue cloth. Indonesia's first President, the late Ir. Soekarno, who officially inaugurated the university, instructed that the statue be preserved. Consequently, the colors of the covering cloth were adopted as the official colors of Universitas Airlangga. Yellow symbolizes greatness, while blue represents chivalry and depth of spirit.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full flex flex-col gap-7">
                    <h1 class="text-4xl font-medium">
                        Periodic Mandatory Information
                    </h1>
                    <div class="flex flex-col gap-5">
                        <x-link-card-small title="Faculty Profile" href="#" />
                        <x-link-card-small title="Faculty Vision and Mission" href="#" />
                        <x-link-card-small title="Events" href="#" />
                        <x-link-card-small title="Facilities" href="#" />
                        <x-link-card-small title="New Student Admissions Information (PPMB)" href="#" />
                        <x-link-card-small title="2025 Performance Contract" href="#" />
                        <x-link-card-small title="Faculty Performance Report" href="#" />
                        <x-link-card-small title="Faculty Annual Report" href="#" />
                        <x-link-card-small title="LHKPN" href="#" />
                        <x-link-card-small title="Accreditation Information" href="#" />
                        
                        <x-link-card-small-last title="Statistical Data on the Number of Lecturers, Staff, and Students" href="#" />
                    </div>
                </div>

                <div class="w-full flex flex-col gap-7">
                    <h1 class="text-4xl font-medium">
                        Information Available Anytime
                    </h1>
                    <div class="flex flex-col gap-5">
                        <x-link-card-small title="Public Information List (DIP)" href="#" />
                        <x-link-card-small title="Faculty Strategic Plan (Renstra)" href="#" />
                        <x-link-card-small title="Academic Calendar" href="#" />
                        <x-link-card-small title="Leadership Profiles" href="#" />
                        <x-link-card-small title="Course List per Study Program" href="#" />
                        <x-link-card-small title="Faculty Treasury and Inventory Data" href="#" />
                        <x-link-card-small title="Scholarships and Social Services" href="#" />
                        <x-link-card-small title="Faculty Research" href="#" />
                        <x-link-card-small title="Scientific Concentrations/Fields of Expertise" href="#" />
                        <x-link-card-small title="Faculty Community Service" href="#" />
                        <x-link-card-small title="Student Activity Information" href="#" />
                        
                        <x-link-card-small-last title="Public Services" href="#" />
                    </div>
                </div>

                <div class="w-full flex flex-col gap-7">
                    <h1 class="text-4xl font-medium">
                        Information Request
                    </h1>
                    <div class="flex flex-col gap-5">
                        <x-link-card-small title="Information Services" href="#" />
                        
                        <x-link-card-small-last title="Public Information Request Form" href="#" />
                    </div>
                </div>

            </div>
            <x-footer />
        </div>
    </div>
    <script></script>
</body>

</html>