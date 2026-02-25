<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facilities Unit - Airlangga Farmasi</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        body { font-family: 'Lato', sans-serif; }
        .fade-in { animation: fadeIn 0.4s ease-in-out; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(5px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body class="bg-[#F7FFFA] antialiased">

<div class="wrapper-all w-full min-h-screen relative">

    <x-navbar />

    <div class="main-content flex flex-col pt-16">

        {{-- HERO --}}
        <div class="heroes h-[45vh] w-full gap-5 text-white bg-gradient-to-r from-[#275CAA] via-[#275CAA] to-[#2E9853] px-28 flex flex-col justify-center">
            <div class="header-top flex items-end gap-3">
                <h1 class="text-5xl font-medium tracking-[-0.04em]">Facilities & Units</h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                </svg>
            </div>
            <p class="w-[50%] text-justify leading-relaxed text-lg opacity-90">
                An overview of academic facilities, laboratories, and supporting units that enhance learning, research, and professional development within the faculty.
            </p>
        </div>

        {{-- TAB NAVIGATION --}}
        <x-pagination-facilities-units active="pharmacy" />

        <div class="fade-in bg-[#F7FFFA] px-28 py-20 flex flex-col gap-24">

            <div class="max-w-[1184px] mx-auto flex flex-col gap-6">
                <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">Airlangga Pharmacy</h2>
                
                <div class="flex justify-start items-start gap-12">
                    <img class="w-[567px] h-[756px] object-cover rounded-xl shadow-md" 
                         src="{{ asset('images/apotek1.png') }}" 
                         onerror="this.src='https://placehold.co/567x756?text=Apotek+1'" />
                    
                    <div class="w-[569px] flex flex-col gap-12">
                        <div class="flex flex-col gap-4">
                            <h3 class="text-neutral-950 text-2xl font-medium">A brief History</h3>
                            <p class="text-justify text-neutral-700 text-lg font-normal leading-relaxed">
                                Airlangga Pharmacy was inaugurated on August 29, 1998 and was established on land owned by Airlangga University measuring 384 M2 with a building area of ​​135 M2 consisting of 2 floors. Construction funds came from Airlangga University, the Faculty of Pharmacy, donations from IKOMA, alumni, and other participating institutions. On March 26, 2016, Airlangga Pharmacy moved to the Airlangga Corner Building, Jalan Dharmawangsa No. 1 Surabaya, which is its current location.
                            </p>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-neutral-950 text-2xl font-medium">Background</h3>
                            <p class="text-justify text-neutral-700 text-lg font-normal leading-relaxed">
                                The rationale for establishing the Pharmacy was to improve the skills of pharmacist graduates particularly their professionalism. As the first Educational Pharmacy in Indonesia, it adheres to the motto <strong>"No Pharmacist, No Service,"</strong> ensuring that a pharmacist is always present. Currently, services are provided by 4 pharmacists, 2 pharmacist assistants, 2 prescription clerks, and 1 cleaning staff.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="max-w-[1184px] mx-auto flex justify-start items-start gap-11">
                
                <div class="w-[567px] flex flex-col gap-12">
                    
                    <div class="flex flex-col gap-4">
                        <h3 class="text-neutral-950 text-2xl font-medium">Objective</h3>
                        <ul class="text-justify text-neutral-700 text-lg font-normal leading-relaxed list-disc pl-5 flex flex-col gap-2">
                            <li>To serve as a learning center for pharmacy students and a role model for prospective pharmacists.</li>
                            <li>To serve as a community service center providing accurate healthcare information.</li>
                            <li>To conduct research in the field of community pharmacy.</li>
                            <li>To provide sustainable pharmaceutical services to the community.</li>
                        </ul>
                    </div>

                    <div class="flex flex-col gap-4">
                        <h3 class="text-neutral-950 text-2xl font-medium">Benefits</h3>
                        <p class="text-justify text-neutral-700 text-lg font-normal leading-relaxed">
                            Supporting academic activities and providing professional service training for students as prospective pharmacists while improving public health services.
                        </p>
                    </div>

                    <div class="flex flex-col gap-4">
                        <h3 class="text-neutral-950 text-2xl font-medium">Services</h3>
                        <p class="text-justify text-neutral-700 text-lg font-normal leading-relaxed">
                            - Pharmaceutical services for JKN & INHEALTH participants.<br/>
                            - Services for UNAIR students and the general public.<br/>
                            - Comprehensive Drug Information Services.
                        </p>
                    </div>

                    <div class="flex flex-col gap-4">
                        <h3 class="text-neutral-950 text-2xl font-medium">Location</h3>
                        <div class="w-full h-60 rounded-xl overflow-hidden shadow-sm border border-gray-100">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7335607317765!2d112.75624797587635!3d-7.271168171441865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2499708761121%3A0x7d672956f4d1e2e!2sApotek%20Farmasi%20Airlangga!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid" 
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                        <p class="text-neutral-700 text-lg">Airlangga Pharmacy, Jl. Dharmawangsa No. 1 Surabaya</p>
                    </div>

                    <div class="flex flex-col gap-4">
                        <h3 class="text-neutral-950 text-2xl font-medium">Contact & Information</h3>
                        <div class="text-neutral-700 text-lg font-normal leading-relaxed">
                            Tel/Fax: 031-99441672<br/>
                            WhatsApp: 081214354317<br/>
                            <div class="mt-4 p-4 bg-gray-50 rounded-lg border-l-4 border-[#2E9853]">
                                <strong>Opening Hours:</strong><br/>
                                Mon – Fri: 07.30 - 21.00<br/>
                                Sat: 08.00 – 21.00
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-[572px] flex flex-col gap-6">
                    <img class="w-full h-96 object-cover rounded-xl shadow-md" 
                         src="{{ asset('images/apotek2.png') }}" 
                         onerror="this.src='https://placehold.co/572x384?text=Apotek+2'" />
                    
                    <img class="w-full h-[857px] object-cover rounded-xl shadow-md" 
                         src="{{ asset('images/apotek3.png') }}" 
                         onerror="this.src='https://placehold.co/572x857?text=Apotek+3'" />
                    
                    <img class="w-full h-96 object-cover rounded-xl shadow-md" 
                         src="{{ asset('images/apotek4.png') }}" 
                         onerror="this.src='https://placehold.co/572x384?text=Apotek+4'" />
                </div>

            </div>

        </div>

        <x-footer />

    </div>
</div>

</body>
</html>