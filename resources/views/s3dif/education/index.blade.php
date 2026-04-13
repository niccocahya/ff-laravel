<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Education - Curriculum</title>
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
    <div class="wrapper-all w-full min-h-screen bg-[#F7FFFA] relative font-sans">
        <x-nav-prodi-s3 />

        <div class="main-calendar flex flex-col pt-16 md:pt-26">

            <x-hero-section title="Education"
                description="Leading the development of Pharmaceutical Science-Technology and Clinical-Community Pharmacy through innovative education and global collaboration." />

            <div class="fade-in py-8 md:py-14 px-6 md:px-16 lg:px-28 flex flex-col gap-6 md:gap-10 bg-[#F7FFFA]">

                <x-pagination-s3dif-education active="curriculum" />

                <div class="flex flex-col gap-8 md:gap-12">
                    <div class="flex flex-col gap-4">
                        <h2 class="text-3xl md:text-4xl font-medium text-gray-800 mb-2">Study Program Curriculum</h2>
                        <div
                            class="text-gray-700 text-sm md:text-base leading-relaxed flex flex-col gap-4 text-justify">
                            <p>
                                The curriculum is a set of plans and arrangements regarding graduate learning outcomes,
                                study materials, processes, and assessments used as guidelines for implementing a study
                                program. The curriculum is designed based on expected graduate competencies.
                            </p>
                            <p>
                                In 2016, the Diploma in Foreign Studies (DIF) Study Program changed its curriculum from
                                a doctoral program by coursework to a doctoral program by research (effective starting
                                in the 2016/2017 academic year).
                            </p>
                            <p>
                                The curriculum structure, in accordance with the competencies/learning outcomes, study
                                materials, and courses offered in the DIF Study Program, is outlined in the curriculum
                                document.
                            </p>
                            <p>
                                Students with a Master's degree in a related field are graduates of a Master's degree in
                                Pharmaceutical Science with a minimum GPA of 3.0 from an accredited study program.
                            </p>
                            <p>
                                Students with a Master's degree in a different field are graduates of a Master's degree
                                in Chemistry, Biology, Biomedicine, or other related sciences, or specialist health
                                education programs that include a thesis, with a minimum GPA of 3.0 from a study program
                                accredited by BAN-PT or LAM-PTKes, except for graduates from before 2004.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-4">
                        <h3 class="text-2xl md:text-3xl font-medium text-gray-800">Beban Studi</h3>
                        <p class="text-gray-700 text-sm md:text-base leading-relaxed text-justify">
                            The study load for the DIF by Research study program, effective starting in the 2016/2017
                            academic year, is as follows:
                        </p>
                        <ol
                            class="list-decimal pl-5 md:pl-6 text-gray-700 text-sm md:text-base leading-relaxed text-justify space-y-2">
                            <li>For students with a master's degree (S2) in a non-disciplinary field, the study load is
                                44 (forty-four) credits, which can be completed in less than six (6) semesters or a
                                maximum of fourteen (14) semesters;</li>
                            <li>For students with a master's degree (S2) in a non-disciplinary field, the study load is
                                56 (fifty-six) credits due to the addition of one (1) semester for matriculation,
                                equivalent to 12 credits. Matriculation is conducted through lectures delivered by peer
                                groups within the Faculty of Pharmacy, with a study load of 2 or 3 credits each.</li>
                        </ol>
                    </div>

                    <div class="flex flex-col gap-4">
                        <h3 class="text-2xl md:text-3xl font-medium text-gray-800">Curriculum Structure</h3>

                        <div class="flex flex-col border border-gray-200 rounded-xl overflow-hidden mt-2">
                            <div class="flex flex-col md:flex-row border-b border-gray-200">
                                <div
                                    class="w-full md:w-[35%] lg:w-[30%] border-b md:border-b-0 md:border-r border-gray-200 bg-white p-5 md:p-6 font-medium text-gray-800 flex items-center">
                                    Semester I
                                </div>
                                <div
                                    class="w-full md:w-[65%] lg:w-[70%] p-5 md:p-6 text-gray-700 text-sm md:text-base leading-relaxed bg-white">
                                    Total 10 sks meliputi kegiatan Seminar Topik (2 sks), Ujian Kualifikasi (2 sks) dan
                                    Ujian Proposal Disertasi (6 sks).
                                </div>
                            </div>

                            <div class="flex flex-col md:flex-row">
                                <div
                                    class="w-full md:w-[35%] lg:w-[30%] border-b md:border-b-0 md:border-r border-gray-200 bg-white p-5 md:p-6 font-medium text-gray-800 flex items-center">
                                    Semester II-VI sampai maksimum Semester XIV
                                </div>
                                <div
                                    class="w-full md:w-[65%] lg:w-[70%] p-5 md:p-6 text-gray-700 text-sm md:text-base leading-relaxed bg-white">
                                    Total 34 sks yang terbagi atas:
                                    <ul class="list-disc pl-5 mt-3 space-y-2">
                                        <li>Seminar Berkala pada semester II, III, IV dan V, masing-masing sebesar 0.5
                                            sks (2 sks)</li>
                                        <li>Publikasi pada jurnal internasional bereputasi (6 sks)</li>
                                        <li>Publikasi pada prosiding seminar internasional terindex Scopus (2 sks)</li>
                                        <li>Disertasi (24 sks), meliputi Ujian Kelayakan Naskah Disertasi (7 sks), Ujian
                                            Disertasi Tertutup (14 sks) dan Ujian Disertasi Terbuka (3 sks)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-4">
                        <h3 class="text-2xl md:text-3xl font-medium text-gray-800">Persyaratan</h3>

                        <div class="text-gray-700 text-sm md:text-base leading-relaxed text-justify">
                            <p class="mb-3">Persyaratan publikasi (sebagai ketentuan mengikuti Ujian Tertutup):</p>
                            <ul class="list-disc pl-5 md:pl-6 space-y-4">
                                <li>Hingga tahun akademik 2015/2016 : 1 (satu) Jurnal Internasional dalam bentuk
                                    submitted</li>

                                <li>Mulai tahun akademik 2016/2017 :
                                    <ul class="list-[circle] pl-5 md:pl-6 mt-2 space-y-2">
                                        <li>2 (dua) Jurnal Internasional dalam bentuk published dan accepted</li>
                                        <li>1 (satu) Prosiding Seminar International terindex Scopus dalam bentuk
                                            accepted</li>
                                    </ul>
                                </li>

                                <li>Persyaratan penguasaan Bahasa Inggris : nilai English Language Proficiency Test
                                    (ELPT) sekurang-kurangnya 500 sebelum ujian proposal disertasi.</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <x-footer />
        </div>
    </div>
</body>

</html>