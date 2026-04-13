<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About - Doctor of Pharmaceutical Sciences</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', sans-serif;
        }

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
        <x-nav-prodi-s3 />

        <div class="main-leadership flex flex-col pt-16 md:pt-26">

            <x-hero-section title='Doctor of Pharmaceutical Sciences'
                description='Leading the development of Pharmaceutical Science and Technology and Clinical Community Pharmacy through innovative education and global collaboration.' />

            <div
                class="content-area fade-in px-6 md:px-16 lg:px-28 py-10 md:py-16 flex flex-col gap-12 md:gap-16 bg-white">

                <div class="flex flex-col gap-3 md:gap-4">
                    <h2 class="text-neutral-950 text-2xl md:text-3xl lg:text-[40px] font-medium tracking-[-0.04em]">
                        Study Program Profile</h2>
                    <p
                        class="text-justify text-neutral-700 text-sm md:text-base lg:text-lg font-normal leading-relaxed">
                        The Doctoral Program in Pharmaceutical Sciences is under the auspices of the Faculty of
                        Pharmacy, Airlangga University.
                        This program has been running since 2010, based on the Decree of the Rector of Airlangga
                        University (UNAIR) No.
                        1476/H3/KR/2009. This program was initially one of the study programs under the management of
                        the UNAIR Postgraduate
                        Program, then based on the UNAIR Rector's Regulation No. 13/H3/PR/2011 and the UNAIR Rector's
                        Decree No.
                        1947/H3/KR/2011, this program became one of the study programs under the management of the UNAIR
                        Faculty of Pharmacy
                        because it is a monodisciplinary scientific discipline. The study load for the Doctoral Program
                        in Pharmaceutical
                        Sciences is 44 credits. Graduates of this program can become researchers, innovators, leaders,
                        and teachers.
                    </p>
                </div>

                <div class="flex flex-col gap-6 md:gap-10">
                    <div
                        class="flex flex-col md:flex-row justify-between items-start md:items-end border-b pb-4 border-gray-100 gap-2 md:gap-0">
                        <h2 class="text-neutral-950 text-2xl md:text-3xl lg:text-[40px] font-medium tracking-[-0.04em]">
                            Leader of Study Program</h2>
                        <div class="text-neutral-700 text-sm md:text-base lg:text-lg font-normal">2025 to 2030 Period
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row justify-center items-center gap-6 md:gap-8">
                        @php
                            $leaders = [
                                ['name' => 'apt. Chrismawan Ardianto, S.Farm., M.Sc., Ph.D.', 'role' => 'Bachelor of Pharmacy Study Program Coordinator', 'img' => 'images/chrismawan-ardianto.png'],
                                ['name' => 'Prof. apt. Helmy Yusuf, S.Si., M.Sc., Ph.D', 'role' => 'Study Program Secretary', 'img' => 'images/image-44.png'],
                            ];
                        @endphp

                        @foreach ($leaders as $leader)
                            <div
                                class="w-full max-w-[280px] h-[400px] md:h-[402px] relative bg-gray-50 rounded-xl shadow-md overflow-hidden shrink-0">
                                <img class="w-full h-full object-cover" src="{{ asset($leader['img']) }}"
                                    onerror="this.src='https://placehold.co/278x402?text=Photo'">

                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-neutral-950/80 via-neutral-950/20 to-transparent">
                                </div>

                                <div class="absolute bottom-0 left-0 w-full p-5 md:p-6 flex flex-col gap-1">
                                    <div class="text-gray-50 text-base md:text-[18px] font-bold leading-tight">
                                        {{ $leader['name'] }}</div>
                                    <div class="text-gray-50 text-[13px] md:text-sm font-normal opacity-90 leading-tight">
                                        {{ $leader['role'] }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col gap-3 md:gap-4">
                    <h2 class="text-neutral-950 text-2xl md:text-3xl lg:text-[40px] font-medium tracking-[-0.04em]">
                        History</h2>
                    <p
                        class="text-justify text-neutral-700 text-sm md:text-base lg:text-lg font-normal leading-relaxed">
                        The Doctoral Program of Pharmaceutical Science Study Program (PDPSIF) of the Faculty of
                        Pharmacy, Airlangga University,
                        has been running since 2010, based on the Decree of the Rector of Airlangga University (UNAIR)
                        No. 1476/H3/KR/2009. This
                        program was initially one of the study programs under the management of the UNAIR Postgraduate
                        Program, then based on
                        the UNAIR Rector Regulation No. 13/H3/PR/2011 and the UNAIR Rector Decree No. 1947/H3/KR/2011,
                        this program became one
                        of the study programs under the management of the UNAIR Faculty of Pharmacy because it is a mono
                        disciplinary science.
                        The permit to run PDPSIF at the UNAIR Faculty of Pharmacy is based on the Rector Decree No.
                        7426/H3/KR/2012, which was
                        extended again through the Rector Decree No. 1/UN3/KR/2015 and the Rector Decree No.
                        35/UN3/2018. Initially, the
                        educational process at PDPSIF was implemented based on coursework, and since the 2016/2017
                        academic year it has been
                        changed to research based. Currently, the study program is led by Prof. Dr. apt. Djoko Agus
                        Purwanto, M.Si. based on
                        UNAIR Rector's Decree No. 1046/UN3/2020 and assisted by the Secretary of the Study Program apt.
                        Suciati, SSi., MPhil.,
                        PhD.
                    </p>
                </div>

                <div class="flex flex-col gap-3 md:gap-4">
                    <h2 class="text-neutral-950 text-2xl md:text-3xl lg:text-[40px] font-medium tracking-[-0.04em]">
                        Vision</h2>
                    <p
                        class="text-justify text-neutral-700 text-sm md:text-base lg:text-lg font-normal leading-relaxed">
                        To become an innovative and accredited Doctoral (S3) study program in Pharmaceutical Sciences at
                        the national and
                        international levels, a pioneer in the development of science in the field of pharmaceutical
                        science technology and
                        clinical community pharmacy, based on religious morals.
                    </p>
                </div>

                <div class="flex flex-col gap-3 md:gap-4">
                    <h2 class="text-neutral-950 text-2xl md:text-3xl lg:text-[40px] font-medium tracking-[-0.04em]">
                        Mission</h2>
                    <div
                        class="text-justify text-neutral-700 text-sm md:text-base lg:text-lg font-normal leading-relaxed space-y-2">
                        <p>1. To provide Doctoral education in Pharmaceutical Sciences to develop pharmaceutical
                            knowledge and technology, as well as
                            clinical community pharmacy, through research, resulting in creative, original, and proven
                            work.</p>
                        <p>2. To conduct innovative basic and applied research in the field of pharmacy to support the
                            development of education and
                            community service, and to increase the added value of Indonesia's natural resources.</p>
                        <p>3. To dedicate pharmaceutical expertise to the community, as a moral and intellectual
                            responsibility, for empowerment,
                            improved health, and quality of life.</p>
                        <p>4. To enhance collaboration to support the implementation of the Tri Dharma of Higher
                            Education, oriented towards improving
                            quality and the ability to collaborate nationally and internationally.</p>
                    </div>
                </div>

                <div class="flex flex-col gap-3 md:gap-4">
                    <h2 class="text-neutral-950 text-2xl md:text-3xl lg:text-[40px] font-medium tracking-[-0.04em]">
                        Objective</h2>
                    <div
                        class="text-justify text-neutral-700 text-sm md:text-base lg:text-lg font-normal leading-relaxed space-y-2">
                        <p>1. To produce graduates who possess high academic ability, are creative, dynamic, and
                            professional, capable of developing
                            pharmaceutical science and technology and clinical community pharmacy, and who excel at the
                            national and international
                            levels, based on religious morality.</p>
                        <p>2. To produce graduates capable of developing new scientific and technological concepts in
                            the fields of pharmaceutical
                            science and technology and clinical community pharmacy through research, employing a
                            comprehensive scientific approach;
                            and capable of managing, leading, and developing research programs.</p>
                        <p>3. To produce innovative research that encourages the development of pharmaceutical science
                            and technology and
                            clinical community pharmacy, both nationally and internationally, to support education and
                            community service, and to
                            increase the added value of Indonesia's natural resources.</p>
                        <p>4. To foster collaborations to support the implementation of the Tri Dharma of Higher
                            Education, oriented towards improving
                            quality and the ability to collaborate nationally and internationally.</p>
                    </div>
                </div>

                <div class="flex flex-col gap-4 md:gap-6">
                    <button onclick="toggleAccordion()"
                        class="w-full flex justify-between items-center text-left cursor-pointer group">
                        <h2
                            class="text-neutral-950 text-2xl md:text-3xl lg:text-[40px] font-medium tracking-[-0.04em] group-hover:text-[#275CAA] transition-colors duration-200">
                            Satisfaction Survey
                        </h2>
                        <div id="accordion-icon-container"
                            class="w-8 h-8 md:w-12 md:h-12 flex items-center justify-center shrink-0">
                            <svg id="arrow-icon" class="w-full h-full transform transition-transform duration-300"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                                <path
                                    d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z">
                                </path>
                            </svg>
                        </div>
                    </button>

                    <div id="accordion-content" class="hidden fade-in">
                        <div class="pt-6 border-t border-gray-100 flex flex-col gap-8">
                            <p
                                class="text-justify text-neutral-700 text-sm md:text-base lg:text-lg font-normal leading-relaxed">
                                MAPS conducts planning and monitoring of the evaluation process regularly. Regular
                                monitoring through Airlangga Integrated Management System (AIMS) audits every year by
                                the Quality Assurance Unit (Satuan Penjaminan Mutu/SPM) at the faculty and study program
                                level and Quality Assurance Board (Badan Penjaminan Mutu/BPM) at the university level
                                and also every five years by Independent Accreditation Institute for Higher Education in
                                Health Sciences in Indonesia (Lembaga Akreditasi Mandiri Perguruan Tinggi Kesehatan/LAM
                                PTKes). The learning process evaluation is carried out every semester, including
                                lecturer performance evaluation survey and academic advisor and thesis supervisor
                                performance survey. Meanwhile, Stakeholder satisfaction survey is conducted every year.
                            </p>

                            <div class="flex flex-col gap-6 md:gap-8 w-full">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
                                    <img src="{{ asset('images/satisfaction-survei1.png') }}"
                                        alt="Lecturer performance evaluation survey"
                                        class="w-full h-auto rounded-xl shadow-sm border border-gray-100 object-contain">
                                    <img src="{{ asset('images/satisfaction-survei2.png') }}"
                                        alt="Academic advisor and thesis supervisor performance survey"
                                        class="w-full h-auto rounded-xl shadow-sm border border-gray-100 object-contain">
                                </div>
                                <div class="flex justify-center w-full">
                                    <img src="{{ asset('images/satisfaction-survei3.png') }}"
                                        alt="Stakeholder Satisfaction Survey in 2020 to 2022"
                                        class="w-full md:w-3/4 lg:w-2/3 h-auto rounded-xl shadow-sm border border-gray-100 object-contain">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="flex flex-col">
                    <div class="mt-4 md:mt-8">
                        <div
                            class="tab-content w-full bg-gray-50 rounded-xl shadow-[1px_2px_4px_0px_rgba(0,21,7,0.12)] overflow-hidden">
                            <div class="hidden md:flex w-full h-20 bg-[#275CAA] items-center px-12">
                                <div class="w-[350px] text-gray-50 text-xl lg:text-2xl font-medium shrink-0">Informasi
                                </div>
                                <div class="text-gray-50 text-xl lg:text-2xl font-medium">Keterangan</div>
                            </div>

                            <div class="flex flex-col">
                                <div
                                    class="flex flex-col md:flex-row md:items-center px-6 md:px-12 py-4 md:py-6 bg-white md:bg-gray-50 border-b border-gray-200 md:border-gray-100 gap-1 md:gap-0">
                                    <div
                                        class="w-full md:w-[350px] text-[#275CAA] md:text-neutral-700 text-sm md:text-base lg:text-lg font-bold md:font-normal shrink-0">
                                        Gelar Lulusan</div>
                                    <div
                                        class="text-neutral-700 text-sm md:text-base lg:text-lg font-normal mt-1 md:mt-0">
                                        Dr. (Doktor)</div>
                                </div>
                                <div
                                    class="flex flex-col md:flex-row md:items-center px-6 md:px-12 py-4 md:py-6 bg-gray-50 md:bg-[#F8FAFC] border-b border-gray-200 md:border-gray-100 gap-1 md:gap-0">
                                    <div
                                        class="w-full md:w-[350px] text-[#275CAA] md:text-neutral-700 text-sm md:text-base lg:text-lg font-bold md:font-normal shrink-0">
                                        Pelaksanaan Program</div>
                                    <div
                                        class="text-neutral-700 text-sm md:text-base lg:text-lg font-normal mt-1 md:mt-0">
                                        Berbasis Riset</div>
                                </div>
                                <div
                                    class="flex flex-col md:flex-row md:items-center px-6 md:px-12 py-4 md:py-6 bg-white md:bg-gray-50 border-b border-gray-200 md:border-gray-100 gap-1 md:gap-0">
                                    <div
                                        class="w-full md:w-[350px] text-[#275CAA] md:text-neutral-700 text-sm md:text-base lg:text-lg font-bold md:font-normal shrink-0">
                                        Pelaksanaan Perkuliahan</div>
                                    <div
                                        class="text-neutral-700 text-sm md:text-base lg:text-lg font-normal mt-1 md:mt-0">
                                        On Campus / Off Campus</div>
                                </div>
                                <div
                                    class="flex flex-col md:flex-row md:items-center px-6 md:px-12 py-4 md:py-6 bg-gray-50 md:bg-[#F8FAFC] border-b border-gray-200 md:border-gray-100 gap-1 md:gap-0">
                                    <div
                                        class="w-full md:w-[350px] text-[#275CAA] md:text-neutral-700 text-sm md:text-base lg:text-lg font-bold md:font-normal shrink-0">
                                        Periode Penerimaan</div>
                                    <div
                                        class="text-neutral-700 text-sm md:text-base lg:text-lg font-normal mt-1 md:mt-0">
                                        2 Kali Setahun</div>
                                </div>
                                <div
                                    class="flex flex-col md:flex-row md:items-center px-6 md:px-12 py-4 md:py-6 bg-white md:bg-gray-50 border-b border-gray-200 md:border-gray-100 gap-1 md:gap-0">
                                    <div
                                        class="w-full md:w-[350px] text-[#275CAA] md:text-neutral-700 text-sm md:text-base lg:text-lg font-bold md:font-normal shrink-0">
                                        Masa Studi</div>
                                    <div
                                        class="text-neutral-700 text-sm md:text-base lg:text-lg font-normal mt-1 md:mt-0">
                                        3 Tahun</div>
                                </div>
                                <div
                                    class="flex flex-col md:flex-row md:items-center px-6 md:px-12 py-4 md:py-6 bg-gray-50 md:bg-[#F8FAFC] gap-1 md:gap-0">
                                    <div
                                        class="w-full md:w-[350px] text-[#275CAA] md:text-neutral-700 text-sm md:text-base lg:text-lg font-bold md:font-normal shrink-0">
                                        Akreditasi</div>
                                    <div
                                        class="text-neutral-700 text-sm md:text-base lg:text-lg font-normal mt-1 md:mt-0">
                                        UNGGUL (LAMPTKes)</div>
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
            const arrow = document.getElementById("arrow-icon");

            content.classList.toggle("hidden");

            if (content.classList.contains("hidden")) {
                arrow.classList.remove("rotate-90");
            } else {
                arrow.classList.add("rotate-90");
            }
        }
    </script>
</body>

</html>