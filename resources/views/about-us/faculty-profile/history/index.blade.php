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

            <x-pagination-faculty-profile active="history" />

            <div
                class="main-history fade-in pb-14 w-full px-6 md:px-14 lg:px-28 flex flex-col gap-10 lg:gap-14 bg-[#F7FFFA]">

                <div class="history w-full flex flex-col gap-6 md:gap-8 mt-4 md:mt-0">
                    <h2 class="history-head text-3xl md:text-4xl font-medium w-full text-gray-800">History</h2>

                    <div
                        class="history-1 flex flex-col lg:flex-row text-justify w-full items-start lg:items-center gap-6 lg:gap-10">
                        <div
                            class="w-full lg:w-[55%] text-gray-700 text-sm md:text-base leading-relaxed flex flex-col gap-4">
                            <p>
                                Based on the Instruction of the Minister of Higher Education and Science of
                                the Republic of Indonesia at the Conference
                                of State University/Institute Presidents in August 1962, the President of Airlangga
                                University, through Decree No.
                                Um/251/8/62 dated December 31, 1962, formed a committee named “Committee for
                                Investigating
                                Efforts to Establish the
                                Faculty of Exact and Natural Sciences (FIPIA) at Airlangga University” with Prof. Ir.
                                Soemadio as Chair and Drs.
                                Marsoedi Soemonitihardjo as Secretary.
                            </p>
                            <p>
                                The committee was tasked with drafting a plan for the establishment of FIPIA at
                                Airlangga
                                University, which consisted of
                                four departments, namely the Department of Mathematics, the Department of Physics, the
                                Department of Biology, and the
                                Department of Chemistry. Long before that time, several senior educators at the Faculty
                                of
                                Medicine at Airlangga
                                University had come up with the idea of establishing a pharmaceutical education and
                                public
                                health education institution
                                with the aim of complementing the “Airlangga University Medical Center” in connection
                                with
                                the existing Faculty of
                                Medicine and Faculty of Dentistry, which were located in a complex with a “teaching
                                hospital,” namely Dr. Soetomo
                                General Hospital.
                            </p>
                        </div>

                        <div class="img-hist w-full lg:flex-1">
                            <img src="{{ asset('images/history-img.png') }}" class="w-full rounded-xl object-cover"
                                alt="History of Faculty">
                        </div>
                    </div>
                </div>

                <div class="description w-full flex flex-col gap-6 md:gap-8">
                    <h2 class="description-head text-3xl md:text-4xl font-medium w-full text-gray-800">Description</h2>

                    <div
                        class="description-1 text-justify w-full flex flex-col gap-4 text-gray-700 text-sm md:text-base leading-relaxed">
                        <p>
                            The Faculty of Pharmacy at Airlangga University was established on August 17, 1963, based on
                            Decree No. 96 of 1963 from
                            the Minister of Education and Science, and was renamed the Faculty of Pharmacy in 1965.
                            Currently, the Faculty of
                            Pharmacy at Airlangga University (FFUA) offers six study programs: the Pharmacist Education
                            Program at the undergraduate
                            and professional levels, the Master's Program in Pharmaceutical Science, the Master's
                            Program in
                            Clinical Pharmacy, the
                            Specialist Program in Pharmacy, and the Doctoral Program in Pharmaceutical Science.
                        </p>
                        <p>
                            Based on Rector's Decree No. 9936/JO3/HK/2007, dated October 22, 2007, FFUA was established
                            to
                            consist of five
                            departments: Pharmaceutical Chemistry, Pharmacognosy and Phytochemistry, Pharmaceutics,
                            Community Pharmacy, and Clinical
                            Pharmacy, as structural units responsible for scientific development, human resource
                            development, and faculty
                            performance portfolio management. Starting in 2008, the department was further empowered to
                            plan
                            and implement annual
                            programs, both routine educational/teaching and development programs, in accordance with the
                            organizational structure
                            developed to reflect the changing dynamics of the UA-PTN-BH (State Universities). The
                            department
                            was also required to
                            demonstrate its capacity for scientific development through superior research that benefits
                            humanity. Furthermore, the
                            department was required to design a development program-based budget in accordance with
                            applicable provisions and
                            requirements related to the development of facilities, resources, and sustainable
                            development
                            projections.
                        </p>
                        <p>
                            In 2013, the Faculty of Pharmacy underwent a change in nomenclature (Rector's Decree No.
                            9626/UN3/KR/2013) to the
                            Pharmacist Education Program, which integrates Undergraduate and Professional Pharmacists.
                        </p>
                    </div>

                    <div
                        class="description-2 flex flex-col-reverse lg:flex-row text-justify w-full items-start lg:items-center gap-6 lg:gap-10 mt-4 md:mt-0">
                        <div class="img-hist w-full lg:w-[55%]">
                            <img src="{{ asset('images/description-img.png') }}" class="w-full rounded-xl object-cover"
                                alt="Description Detail">
                        </div>
                        <div class="flex-1 text-gray-700 text-sm md:text-base leading-relaxed flex flex-col gap-4">
                            <p>
                                In addition, there was also the possibility of utilizing the lecture and
                                practicum facilities available at the Faculty
                                of Medicine for the purposes of implementing pharmaceutical education. This
                                pharmaceutical
                                education, because it is
                                located within the “Medical Center” environment, is expected to give its graduates a
                                distinctive character, namely
                                pharmacists who are medically/clinically-oriented, in addition to being drug-oriented.
                                On
                                August 7, 1963, with Rector's
                                Decree No. 1782/8/63, a Sub-Committee was formed to investigate the establishment of
                                FIPIA's
                                Pharmacy Department in
                                Surabaya, with the following members: Prof. Oei Hway Kiem as Chair, Mrs. Nanizar Zaman
                                Joenoes, Pharm. D., Prof. Moh.
                                Imanuddin, Drs. Soemartojo, and Drs. Soendoro.
                            </p>
                            <p>
                                At the same time as the activities of the Investigation Subcommittee for the
                                Establishment
                                of the Faculty of Mathematics
                                and Natural Sciences, Department of Pharmacy, the Minister of Education and Science
                                (PTIP)
                                Decree No. 96 of 1963 dated
                                August 15, 1963, established the Faculty of Mathematics and Natural Sciences at
                                Airlangga
                                University, effective August
                                17, 1963. This date was then designated as the founding date of Higher Pharmacy
                                Education at
                                Airlangga University.
                            </p>
                        </div>
                    </div>

                    <div
                        class="description-3 text-justify w-full flex flex-col gap-4 text-gray-700 text-sm md:text-base leading-relaxed mt-4 md:mt-0">
                        <p>
                            With Rector's Decree No. Um.2034/10/63, in September 1963, the opening of the Faculty of
                            Pharmacy and Natural Sciences
                            (FIPIA) Department of Pharmacy was officially announced, and the following were appointed:
                        </p>
                        <div class="pl-4 border-l-2 border-[#275CAA] bg-gray-50 py-2 px-3 rounded-r-md">
                            <p><strong>Head of the Department of Pharmacy:</strong> Mrs. Nanizar Zaman Joenoes, Pharm.D
                            </p>
                            <p><strong>Secretary:</strong> Prof. Moh. Imanuddin (August 17, 1963)</p>
                        </div>
                        <p>
                            as the birth date of Pharmacy Higher Education at Airlangga University Guidebook for the
                            Pharmacist Education Study
                            Program 2016/2017 7 On October 1, 1963, lectures began at the Department of Pharmacy, FIPIA,
                            Airlangga University, with
                            39 students. For the 1963/1964 academic year, the Pharmacy Department was the only
                            department
                            that could be opened by
                            utilizing the existing lecture, laboratory, and administrative facilities at the Faculty of
                            Medicine, Airlangga
                            University. At that time, there were four permanent pharmacist educators, while most of the
                            other staff were from the
                            Faculty of Medicine. All administrative staff were administrative staff from the Faculty of
                            Medicine who worked in dual
                            roles.
                        </p>
                    </div>
                </div>
            </div>

            <x-footer />
        </div>
    </div>
    <script>

    </script>
</body>

</html>