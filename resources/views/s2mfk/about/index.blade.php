<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About - Bachelor of Pharmacy</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Lato', sans-serif; }
        
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
        <x-nav-prodi />

        <div class="main-leadership flex flex-col pt-26">
            
           <x-hero-section title='Master of Clinical Pharmacy'
                description='Leading the development of Pharmaceutical Science-Technology and Clinical-Community Pharmacy through innovative education and global collaboration.' />

            <div class="content-area fade-in px-28 py-16 flex flex-col gap-16 bg-white">

                <div class="flex flex-col gap-4">
                    <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">Study Program Profile</h2>
                    <p class="text-justify text-neutral-700 text-lg font-normal leading-relaxed">
                        Advances in science and technology in the fields of health and pharmacy are progressing rapidly. Several methods for diagnosing disease causes and their pathogenesis have been identified molecularly and genetically. Advanced diagnostics can accurately differentiate and quantify disease severity, leading to differences in drug selection for diseases previously thought to be the same due to similar or identical phenotypic signs. This progress has led to the rapid development of drug products with specific therapeutic targets, but also to complex drug problems, including drug selection, which demands high safety and efficacy assurance, as well as pharmacoeconomic considerations regarding drug costs.
                    </p>
                    <p class="text-justify text-neutral-700 text-lg font-normal leading-relaxed">
                        Therapeutic outcomes are no longer measured solely by pharmacological effects and laboratory clinical signs, but also by holistic aspects of the individual patient, including quality of life, morbidity, and mortality. Furthermore, increasing patient awareness of the law and the right to safe and effective therapy demands high-quality professionalism. Professionalism continually updates the knowledge and experience of healthcare teams, including pharmacists. The clinical medical field has long developed its professionalism from general practitioner education to specialist education, then to subspecialties.
                    </p>
                    <p class="text-justify text-neutral-700 text-lg font-normal leading-relaxed">
                        The need for hospital accreditation, which requires clinical pharmacy services, means that the current and future demand for Master of Clinical Pharmacy graduates is highly significant.
                    </p>
                    <p class="text-justify text-neutral-700 text-lg font-normal leading-relaxed">
                        With this in mind, the Faculty of Pharmacy at Airlangga University (UNAIR) has established a Master of Clinical Pharmacy Professional Postgraduate Study Program, a Master of Clinical Pharmacy, with the title Master of Clinical Pharmacy (M.Farm.Klin).
                    </p>
                </div>

                <div class="flex flex-col gap-10">
                    <div class="flex justify-between items-end border-b pb-4 border-gray-100">
                        <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">Leader of Study Program</h2>
                        <div class="text-neutral-700 text-lg font-normal">2025-2030 Period</div>
                    </div>

                    <div class="flex justify-center gap-6">
                        @php
                            $leaders = [
                                ['name' => 'apt. Chrismawan Ardianto, S.Farm., M.Sc., Ph.D.', 'role' => 'Bachelor of Pharmacy Study Program Coordinator', 'img' => 'images/chrismawan-ardianto.png'],
                                ['name' => 'Prof. apt. Helmy Yusuf, S.Si., M.Sc., Ph.D', 'role' => 'Study Program Secretary', 'img' => 'images/image-44.png'],
                            ];
                        @endphp

                        @foreach ($leaders as $leader)
                        <div class="w-[278px] h-[402px] relative bg-gray-50 rounded-xl shadow-md overflow-hidden">
                            <img class="w-full h-full object-cover" 
                                src="{{ asset($leader['img']) }}" 
                                onerror="this.src='https://placehold.co/278x402?text=Photo'">
                            
                            <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/80 via-neutral-950/20 to-transparent"></div>
                            
                            <div class="absolute bottom-0 left-0 w-full p-6 flex flex-col gap-1">
                                <div class="text-gray-50 text-[18px] font-bold leading-tight">{{ $leader['name'] }}</div>
                                <div class="text-gray-50 text-sm font-normal opacity-90 leading-tight">{{ $leader['role'] }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col gap-4">
                    <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">Background</h2>
                    <p class="text-justify text-neutral-700 text-lg font-normal leading-relaxed">
                        Advances in science and technology in the healthcare sector are progressing at a rapid pace. Detection of disease causes and pathogenesis processes has reached the molecular and genetic levels. Advanced diagnostics can accurately differentiate diseases and their severity, leading to differences in drug selection for conditions previously thought to be the same due to similar or identical phenotypic characteristics. This progress has led to the rapid development of drug products with specific therapeutic targets, but also to complex drug problems, including drug selection, which demands high safety and efficacy assurance and pharmacoeconomic considerations regarding drug costs.
                    </p>
                    <p class="text-justify text-neutral-700 text-lg font-normal leading-relaxed">
                        Therapeutic outcomes are no longer measured solely by pharmacological effects and clinical laboratory findings, but also by holistic aspects of the individual patient, including quality of life, morbidity, and mortality. Furthermore, increasing legal awareness among patients of their right to safe and effective therapy has resulted in the need for high-quality professionals who continually update their knowledge and experience within the healthcare team, including pharmacists. The clinical medical field has long developed its professionalism from general practitioners to specialists and then to subspecialties. The pharmacy profession, as part of the healthcare team, should keep pace with these developments.
                    </p>
                </div>

                <div class="flex flex-col gap-4">
                    <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">Vision</h2>
                    <p class="text-justify text-neutral-700 text-lg font-normal leading-relaxed">
                        The vision of the Master of Clinical Pharmacy Study Program is to become an innovative, leading Master of Clinical Pharmacy Study Program at the national and international levels, a pioneer in the development and application of clinical pharmacy science and to produce graduates with superior competencies in pharmaceutical care based on religious morals.
                    </p>
                </div>

                <div class="flex flex-col gap-4">
                    <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">Mission</h2>
                    <p class="text-justify text-neutral-700 text-lg font-normal leading-relaxed">
                        <p>1. To provide an innovative, high-quality, and superior Master of Clinical Pharmacy study program that adheres firmly to professional ethics and religious morals.</p>
                        <p>2. To develop clinical research using biomedical-pharmaceutical and clinical pharmacy concepts to support clinical pharmacy practice.</p>
                        <p>3. To implement community service programs in the field of pharmacy as a social responsibility, to empower and improve the health and quality of life of the community.</p>
                        <p>4. To collaborate effectively, efficiently, and sustainably with various parties in education, research, and community service at the national and international levels to ensure the development and sustainability of the Master of Clinical Pharmacy study program.</p>
                    </p>
                </div>

                <div class="flex flex-col gap-4">
                    <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">Objective</h2>
                    <p class="text-justify text-neutral-700 text-lg font-normal leading-relaxed">
                        <p>In line with the mission of the MFK study program, the following objectives are set:</p>
                        <p>1. Innovative and adaptive to every change and development in clinical pharmacy practice, so that graduates have competitive skills in the national and international workforce and are able to face the challenges and obstacles of global market competition.</p>
                        <p>2. Possess a comprehensive understanding of Biomedical Sciences and Clinical Pharmacy to implement pharmaceutical care and develop scientific knowledge based on clinical research.</p>
                        <p>3. Able to integrate mastery of theory, research findings, and practical experience to apply the principles of quality drug use in pharmaceutical care as a manifestation of professional responsibility to the community.</p>
                        <p>4. Able to collaborate within health teams and other relevant institutions to solve existing problems in the community through concrete programs relevant to needs.</p>
                    </p>
                </div>

                <div class="flex flex-col gap-4">
                    <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">Goals</h2>
                    <p class="text-justify text-neutral-700 text-lg font-normal leading-relaxed">
                        <p>1. Graduates possess the quality, passion, and professionalism to practice clinical pharmacy in both community and hospital settings to achieve optimal public health.</p>
                        <p>2. An academic environment that is continually evolving and progressing through the improvement of the academic performance of the study program's human resources in carrying out the Tri Dharma of Higher Education.</p>
                        <p>3. A strong internal management system to address changes and challenges of progress at the national and international levels.</p>
                        <p>4. High efficiency and productivity in managing funding sources from various sources using a modern management system that ensures sustainable quality change. </p>
                        <p>5. Optimal utilization of facilities and infrastructure resources, as well as the academic capabilities of lecturers and non-lecturers, in generating revenue for the sustainability of the faculty as an educational system that produces superior and high-quality Master of Clinical Pharmacy graduates.</p>
                        <p>6. Strong leadership commitment to policy development that supports the acceleration of change in response to opportunities and challenges of progress at the national and international levels.</p>
                        <p>7. Establishing a culture of quality assurance across various sectors to produce a quality education system that contributes to the creation of competent Master of Clinical Pharmacy graduates.</p>
                    </p>
                </div>

                <div class="flex flex-col gap-6">
                    <button onclick="toggleAccordion()" class="w-full flex justify-between items-center text-left cursor-pointer">
                        <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">
                            Satisfaction Survey
                        </h2>
                        <div id="accordion-icon-container">
                            <svg id="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#0b0a0a" viewBox="0 0 256 256">
                                <path d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z"></path>
                            </svg>
                        </div>
                    </button>
                    <div id="accordion-content" class="hidden">
                        <div class="pt-6 border-t border-gray-100 flex justify-center">
                            <img src="{{ asset('images/bagan-struktur-organisasi.png') }}" alt="Structure" class="w-full h-auto rounded-xl shadow-sm">
                        </div>
                    </div>
                </div>

               <section class="flex flex-col">

            <div class="mt-8">
                
                <div class="tab-content w-full bg-gray-50 rounded-xl shadow-[1px_2px_4px_0px_rgba(0,21,7,0.12)] overflow-hidden">
                    <div class="w-full h-20 bg-[#275CAA] flex items-center px-12">
                        <div class="w-[350px] text-gray-50 text-2xl font-medium">Informasi</div>
                        <div class="text-gray-50 text-2xl font-medium">Keterangan</div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center px-12 py-6 bg-gray-50 border-b border-gray-100">
                            <div class="w-[350px] text-neutral-700 text-lg font-normal">Gelar Lulusan</div>
                            <div class="text-neutral-700 text-lg font-normal">???</div>
                        </div>
                        <div class="flex items-center px-12 py-6 bg-[#F8FAFC]">
                            <div class="w-[350px] text-neutral-700 text-lg font-normal">Pelaksanaan Program</div>
                            <div class="text-neutral-700 text-lg font-normal">???</div>
                        </div>
                        <div class="flex items-center px-12 py-6 bg-gray-50 border-t border-gray-100">
                            <div class="w-[350px] text-neutral-700 text-lg font-normal">Pelaksanaan Perkuliahan</div>
                            <div class="text-neutral-700 text-lg font-normal">???</div>
                        </div>
                        <div class="flex items-center px-12 py-6 bg-gray-50 border-b border-gray-100">
                            <div class="w-[350px] text-neutral-700 text-lg font-normal">Periode Penerimaan</div>
                            <div class="text-neutral-700 text-lg font-normal">???</div>
                        </div>
                        <div class="flex items-center px-12 py-6 bg-[#F8FAFC]">
                            <div class="w-[350px] text-neutral-700 text-lg font-normal">Masa Studi</div>
                            <div class="text-neutral-700 text-lg font-normal">???</div>
                        </div>
                        <div class="flex items-center px-12 py-6 bg-gray-50 border-t border-gray-100">
                            <div class="w-[350px] text-neutral-700 text-lg font-normal">Akreditasi</div>
                            <div class="text-neutral-700 text-lg font-normal">???</div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

            </div>

            <x-footer />
        </div>
    </div>

    <script>
        function toggleAccordion() {
            const content = document.getElementById("accordion-content");
            const iconContainer = document.getElementById("accordion-icon-container");

            const arrowRight = '<svg id="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#0b0a0a" viewBox="0 0 256 256"><path d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z"></path></svg>';
            const arrowDown = '<svg id="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#0b0a0a" viewBox="0 0 256 256"><path d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm34.83-86.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66,0l-32-32a4,4,0,0,1,5.66-5.66L124,158.34V88a4,4,0,0,1,8,0v70.34l25.17-25.17A4,4,0,0,1,162.83,133.17Z"></path></svg>';

            content.classList.toggle("hidden");
            iconContainer.innerHTML = content.classList.contains("hidden") ? arrowRight : arrowDown;
        }
    </script>
</body>
</html>