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
            <div class="sub-page flex gap-5 px-28 py-10">
                <button onclick=toggleShowProfile()
                    class="button-profile px-6 py-2 rounded-full bg-[#275CAA] text-white text-sm hover:bg-[#1d4f96] transition-all duration-200">
                    General Profile
                </button>
                <button onclick=toggleShowHistory()
                    class="button-history px-6 py-2 rounded-full border border-[#275CAA] text-[#275CAA] text-sm hover:bg-[#275CAA] hover:text-white transition-all duration-200">
                    History
                </button>
                <button onclick=toggleShowIdentity()
                    class="button-identity px-6 py-2 rounded-full border border-[#275CAA] text-[#275CAA] text-sm hover:bg-[#275CAA] hover:text-white transition-all duration-200">
                    Faculty Identity
                </button>
                <button onclick=toggleShowIntegrity()
                    class="button-integrity px-6 py-2 rounded-full border border-[#275CAA] text-[#275CAA] text-sm hover:bg-[#275CAA] hover:text-white transition-all duration-200">
                    Integrity Zone
                </button>
            </div>
            <div class="main-profile fade-in pb-10 hidden px-28 flex flex-col gap-10 bg-[#F7FFFA]">
                <div class="vision-mission flex w-full gap-10">
                    <div class="vm-left w-[40%] gap-5 flex flex-col">
                        <h1 class="text-4xl font-medium text-left">Vision & Mission</h1>
                        <h1 class="text-justify">Driving global excellence in pharmaceutical science and clinical care,
                            grounded in innovation and moral integrity.</h1>
                    </div>
                    <div class="vm-right flex flex-col flex-1 gap-7 text-justify">
                        <div class="vision flex flex-col gap-5">
                            <button onclick=toggleAccordionVision()
                                class="vision-head flex justify-between items-center">
                                <h1 class="text-2xl">Vision</h1>
                                <svg class="vision-icon transform transition-all duration-100"
                                    xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#0a0000"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z">
                                    </path>
                                </svg>
                            </button>
                            <div class="vision-content hidden">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat vel facilis quisquam
                                explicabo, dolorum ad doloribus quo mollitia et ea, minus expedita! Pariatur
                                consequuntur maxime mollitia enim numquam minus doloribus ipsum ut quaerat soluta
                                tempore, praesentium temporibus omnis rem eos laborum sequi quos nostrum modi velit
                                exercitationem ipsa. Officia mollitia temporibus facilis illo nam optio laudantium,
                                quibusdam, magni molestias perferendis similique accusantium libero nobis amet. Deserunt
                                ex id sequi aperiam vel totam, nemo rerum placeat neque temporibus? A, quibusdam.
                                Consequatur aliquid molestiae itaque magni odio veritatis laboriosam, harum provident
                                aut, in cumque totam est perspiciatis recusandae reiciendis deleniti asperiores
                                expedita!
                            </div>
                            <div class="w-full bg-black h-[1px] rounded-full"></div>
                        </div>
                        <div class="mission flex flex-col gap-5">
                            <button onclick=toggleAccordionMission()
                                class="mission-head flex justify-between items-center">
                                <h1 class="text-2xl">Mission</h1>
                                <svg class="mission-icon transform transition-all duration-100"
                                    xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#0a0000"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z">
                                    </path>
                                </svg>
                            </button>
                            <div class="mission-content hidden">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat vel facilis quisquam
                                explicabo, dolorum ad doloribus quo mollitia et ea, minus expedita! Pariatur
                                consequuntur maxime mollitia enim numquam minus doloribus ipsum ut quaerat soluta
                                tempore, praesentium temporibus omnis rem eos laborum sequi quos nostrum modi velit
                                exercitationem ipsa. Officia mollitia temporibus facilis illo nam optio laudantium,
                                quibusdam, magni molestias perferendis similique accusantium libero nobis amet. Deserunt
                                ex id sequi aperiam vel totam, nemo rerum placeat neque temporibus? A, quibusdam.
                                Consequatur aliquid molestiae itaque magni odio veritatis laboriosam, harum provident
                                aut, in cumque totam est perspiciatis recusandae reiciendis deleniti asperiores
                                expedita!
                            </div>
                            <div class="w-full bg-black h-[0.5px] rounded-full"></div>
                        </div>
                        <div class="goals flex flex-col gap-5">
                            <button onclick=toggleAccordionGoals() class="goals-head flex justify-between items-center">
                                <h1 class="text-2xl">Goals</h1>
                                <svg class="goals-icon transform transition-all duration-100"
                                    xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#0a0000"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z">
                                    </path>
                                </svg>
                            </button>
                            <div class="goals-content hidden">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat vel facilis quisquam
                                explicabo, dolorum ad doloribus quo mollitia et ea, minus expedita! Pariatur
                                consequuntur maxime mollitia enim numquam minus doloribus ipsum ut quaerat soluta
                                tempore, praesentium temporibus omnis rem eos laborum sequi quos nostrum modi velit
                                exercitationem ipsa. Officia mollitia temporibus facilis illo nam optio laudantium,
                                quibusdam, magni molestias perferendis similique accusantium libero nobis amet. Deserunt
                                ex id sequi aperiam vel totam, nemo rerum placeat neque temporibus? A, quibusdam.
                                Consequatur aliquid molestiae itaque magni odio veritatis laboriosam, harum provident
                                aut, in cumque totam est perspiciatis recusandae reiciendis deleniti asperiores
                                expedita!
                            </div>
                            <div class="w-full bg-black h-[1px] rounded-full"></div>
                        </div>
                        <div class="quality flex flex-col gap-5">
                            <button onclick=toggleAccordionQuality()
                                class="quality-head flex justify-between items-center">
                                <h1 class="text-2xl">Quality</h1>
                                <svg class="quality-icon transform transition-all duration-100"
                                    xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#0a0000"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z">
                                    </path>
                                </svg>
                            </button>
                            <div class="quality-content hidden">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat vel facilis quisquam
                                explicabo, dolorum ad doloribus quo mollitia et ea, minus expedita! Pariatur
                                consequuntur maxime mollitia enim numquam minus doloribus ipsum ut quaerat soluta
                                tempore, praesentium temporibus omnis rem eos laborum sequi quos nostrum modi velit
                                exercitationem ipsa. Officia mollitia temporibus facilis illo nam optio laudantium,
                                quibusdam, magni molestias perferendis similique accusantium libero nobis amet. Deserunt
                                ex id sequi aperiam vel totam, nemo rerum placeat neque temporibus? A, quibusdam.
                                Consequatur aliquid molestiae itaque magni odio veritatis laboriosam, harum provident
                                aut, in cumque totam est perspiciatis recusandae reiciendis deleniti asperiores
                                expedita!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="quality-objects w-full flex flex-col gap-5">
                    <button onclick=toggleAccordionQO() class="qo-head flex items-center justify-between w-full gap-10">
                        <div class="qo-left w-[40%] gap-5 flex flex-col">
                            <h1 class="text-4xl font-medium text-left">Quality Objectives</h1>
                            <h1 class="text-justify">Defining Excellence through Data and Strategic Goals.</h1>
                        </div>
                        <div>
                            <svg class="qo-icon transform transition-all duration-100"
                                xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#0a0000"
                                viewBox="0 0 256 256">
                                <path
                                    d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z">
                                </path>
                            </svg>
                        </div>
                    </button>
                    <div class="qo-img w-full hidden flex justify-center">
                        <img class="w-[90%]" src="{{ asset('images/image-117.png') }}" alt="Peneliti">
                    </div>
                </div>
            </div>
            <div class="main-history fade-in pb-10 hidden w-full px-28 flex flex-col gap-10 bg-[#F7FFFA]">
                <div class="history w-full flex flex-col gap-5">
                    <h1 class="history-head text-4xl font-medium w-full">History</h1>
                    <div class="history-1 flex text-justify w-full items-center gap-5">
                        <h1 class="w-[55%]">Based on the Instruction of the Minister of Higher Education and Science of
                            the Republic of Indonesia at the Conference
                            of State University/Institute Presidents in August 1962, the President of Airlangga
                            University, through Decree No.
                            Um/251/8/62 dated December 31, 1962, formed a committee named “Committee for Investigating
                            Efforts to Establish the
                            Faculty of Exact and Natural Sciences (FIPIA) at Airlangga University” with Prof. Ir.
                            Soemadio as Chair and Drs.
                            Marsoedi Soemonitihardjo as Secretary.
                            <br>
                            <br>
                            The committee was tasked with drafting a plan for the establishment of FIPIA at Airlangga
                            University, which consisted of
                            four departments, namely the Department of Mathematics, the Department of Physics, the
                            Department of Biology, and the
                            Department of Chemistry. Long before that time, several senior educators at the Faculty of
                            Medicine at Airlangga
                            University had come up with the idea of establishing a pharmaceutical education and public
                            health education institution
                            with the aim of complementing the “Airlangga University Medical Center” in connection with
                            the existing Faculty of
                            Medicine and Faculty of Dentistry, which were located in a complex with a “teaching
                            hospital,” namely Dr. Soetomo
                            General Hospital.
                        </h1>
                        <div class="img-hist flex-1">
                            <img src="{{ asset('images/history-img.png') }}" class="w-full" alt="">
                        </div>
                    </div>
                </div>
                <div class="description w-full flex flex-col gap-5">
                    <h1 class="description-head text-4xl font-medium w-full">Description</h1>
                    <div class="description-1 text-justify w-full flex">
                        The Faculty of Pharmacy at Airlangga University was established on August 17, 1963, based on
                        Decree No. 96 of 1963 from
                        the Minister of Education and Science, and was renamed the Faculty of Pharmacy in 1965.
                        Currently, the Faculty of
                        Pharmacy at Airlangga University (FFUA) offers six study programs: the Pharmacist Education
                        Program at the undergraduate
                        and professional levels, the Master's Program in Pharmaceutical Science, the Master's Program in
                        Clinical Pharmacy, the
                        Specialist Program in Pharmacy, and the Doctoral Program in Pharmaceutical Science.
                        <br><br>
                        Based on Rector's Decree No. 9936/JO3/HK/2007, dated October 22, 2007, FFUA was established to
                        consist of five
                        departments: Pharmaceutical Chemistry, Pharmacognosy and Phytochemistry, Pharmaceutics,
                        Community Pharmacy, and Clinical
                        Pharmacy, as structural units responsible for scientific development, human resource
                        development, and faculty
                        performance portfolio management. Starting in 2008, the department was further empowered to plan
                        and implement annual
                        programs, both routine educational/teaching and development programs, in accordance with the
                        organizational structure
                        developed to reflect the changing dynamics of the UA-PTN-BH (State Universities). The department
                        was also required to
                        demonstrate its capacity for scientific development through superior research that benefits
                        humanity. Furthermore, the
                        department was required to design a development program-based budget in accordance with
                        applicable provisions and
                        requirements related to the development of facilities, resources, and sustainable development
                        projections.
                        <br><br>
                        In 2013, the Faculty of Pharmacy underwent a change in nomenclature (Rector's Decree No.
                        9626/UN3/KR/2013) to the
                        Pharmacist Education Program, which integrates Undergraduate and Professional Pharmacists.
                    </div>
                    <div class="description-2 flex text-justify w-full items-center gap-5">
                        <div class="img-hist w-[55%]">
                            <img src="{{ asset('images/description-img.png') }}" class="w-full" alt="">
                        </div>
                        <h1 class="flex-1">In addition, there was also the possibility of utilizing the lecture and
                            practicum facilities available at the Faculty
                            of Medicine for the purposes of implementing pharmaceutical education. This pharmaceutical
                            education, because it is
                            located within the “Medical Center” environment, is expected to give its graduates a
                            distinctive character, namely
                            pharmacists who are medically/clinically-oriented, in addition to being drug-oriented. On
                            August 7, 1963, with Rector's
                            Decree No. 1782/8/63, a Sub-Committee was formed to investigate the establishment of FIPIA's
                            Pharmacy Department in
                            Surabaya, with the following members: Prof. Oei Hway Kiem as Chair, Mrs. Nanizar Zaman
                            Joenoes, Pharm. D., Prof. Moh.
                            Imanuddin, Drs. Soemartojo, and Drs. Soendoro.
                            <br><br>
                            At the same time as the activities of the Investigation Subcommittee for the Establishment
                            of the Faculty of Mathematics
                            and Natural Sciences, Department of Pharmacy, the Minister of Education and Science (PTIP)
                            Decree No. 96 of 1963 dated
                            August 15, 1963, established the Faculty of Mathematics and Natural Sciences at Airlangga
                            University, effective August
                            17, 1963. This date was then designated as the founding date of Higher Pharmacy Education at
                            Airlangga University.
                        </h1>
                    </div>
                    <div class="description-3 text-justify w-full flex">
                        With Rector's Decree No. Um.2034/10/63, in September 1963, the opening of the Faculty of
                        Pharmacy and Natural Sciences
                        (FIPIA) Department of Pharmacy was officially announced, and the following were appointed:
                        <br><br>
                        Head of the Department of Pharmacy: Mrs. Nanizar Zaman Joenoes, Pharm.D
                        Secretary: Prof. Moh. Imanuddin August 17, 1963
                        <br><br>
                        as the birth date of Pharmacy Higher Education at Airlangga University Guidebook for the
                        Pharmacist Education Study
                        Program 2016/2017 7 On October 1, 1963, lectures began at the Department of Pharmacy, FIPIA,
                        Airlangga University, with
                        39 students. For the 1963/1964 academic year, the Pharmacy Department was the only department
                        that could be opened by
                        utilizing the existing lecture, laboratory, and administrative facilities at the Faculty of
                        Medicine, Airlangga
                        University. At that time, there were four permanent pharmacist educators, while most of the
                        other staff were from the
                        Faculty of Medicine. All administrative staff were administrative staff from the Faculty of
                        Medicine who worked in dual
                        roles.
                    </div>
                </div>
            </div>
            <div class="main-identity fade-in pb-10 hidden w-full px-28 flex flex-col gap-10 bg-[#F7FFFA]">
                <div class="logo w-full flex flex-col gap-5">
                    <h1 class="logo-head text-4xl font-medium w-full mb-2">Logo</h1>
                    <div class="logo-1 flex flex-col text-justify w-full items-center gap-5">
                        <div class="img-hist w-full flex justify-center">
                            <img src="{{ asset('images/identity-img.png') }}" alt="">
                        </div>
                        <h1 class="w-full">
                            The emblem of Universitas Airlangga is Garuda Mukti with Lord Vishnu as its rider. Lord
                            Vishnu symbolizes King Airlangga himself, representing his wisdom, strength, and noble
                            character.
                            <br><br>
                            The emblem of Universitas Airlangga depicts Garuda Mukti carrying a jar, surrounded by an
                            outer circle in the form of a golden chain. The reason the emblem does not directly portray
                            King Airlangga, but instead features Garuda Mukti, his mount, is rooted in the university’s
                            early history. At the time of the establishment of Universitas Airlangga, the first rector
                            discovered a royal seal of King Airlangga at the Arca Building in Jakarta. The seal depicted
                            Garuda, the mount of Lord Vishnu (King Airlangga), carrying a jar containing Amerta water,
                            which is believed to grant immortality. Therefore, Garuda Mukti was chosen as the emblem of
                            Universitas Airlangga, symbolizing an eternal source of knowledge.
                            <br><br>
                            The outer golden chain circle represents the students of Universitas Airlangga, who are
                            expected to become an unbroken chain contributing to the enduring glory of the alma mater,
                            the nation, and humanity. The yellow and blue colors originate from the inauguration
                            ceremony of Universitas Airlangga, during which a statue of Lord Vishnu was unveiled,
                            covered by a yellow and blue cloth. Indonesia’s first President, the late Ir. Soekarno, who
                            officially inaugurated the university, instructed that the statue be preserved.
                            Consequently, the colors of the covering cloth were adopted as the official colors of
                            Universitas Airlangga. Yellow symbolizes greatness, while blue represents chivalry and depth
                            of spirit.
                        </h1>
                    </div>
                </div>
            </div>
            <div class="main-integrity fade-in pb-10 hidden px-28 flex flex-col gap-10 bg-[#F7FFFA]">
                <div class="w-full flex flex-col gap-10">
                    <div class="areas flex w-full gap-10">
                        <div class="areas-left w-[40%] gap-5 flex flex-col">
                            <h1 class="text-4xl font-medium text-left">Areas</h1>
                            <h1 class="text-justify">Driving global excellence in pharmaceutical science and clinical
                                care, grounded in innovation and moral integrity</h1>
                        </div>
                        <div class="areas-right flex flex-col flex-1 gap-7 text-justify">
                            <div class="vision flex flex-col gap-5">
                                <button onclick=toggleAccordionVision()
                                    class="vision-head flex justify-between items-center">
                                    <h1 class="text-2xl">Change Management</h1>
                                    <svg class="vision-icon transform transition-all duration-100"
                                        xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#0a0000"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z">
                                        </path>
                                    </svg>
                                </button>
                                <div class="cm-content hidden">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat vel facilis
                                    quisquam
                                    explicabo, dolorum ad doloribus quo mollitia et ea, minus expedita! Pariatur
                                    consequuntur maxime mollitia enim numquam minus doloribus ipsum ut quaerat soluta
                                    tempore, praesentium temporibus omnis rem eos laborum sequi quos nostrum modi velit
                                    exercitationem ipsa. Officia mollitia temporibus facilis illo nam optio laudantium,
                                    quibusdam, magni molestias perferendis similique accusantium libero nobis amet.
                                    Deserunt
                                    ex id sequi aperiam vel totam, nemo rerum placeat neque temporibus? A, quibusdam.
                                    Consequatur aliquid molestiae itaque magni odio veritatis laboriosam, harum
                                    provident
                                    aut, in cumque totam est perspiciatis recusandae reiciendis deleniti asperiores
                                    expedita!
                                </div>
                                <div class="w-full bg-black h-[1px] rounded-full"></div>
                            </div>
                            <div class="mission flex flex-col gap-5">
                                <button onclick=toggleAccordionMission()
                                    class="mission-head flex justify-between items-center">
                                    <h1 class="text-2xl">Mission</h1>
                                    <svg class="mission-icon transform transition-all duration-100"
                                        xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#0a0000"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z">
                                        </path>
                                    </svg>
                                </button>
                                <div class="mission-content hidden">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat vel facilis
                                    quisquam
                                    explicabo, dolorum ad doloribus quo mollitia et ea, minus expedita! Pariatur
                                    consequuntur maxime mollitia enim numquam minus doloribus ipsum ut quaerat soluta
                                    tempore, praesentium temporibus omnis rem eos laborum sequi quos nostrum modi velit
                                    exercitationem ipsa. Officia mollitia temporibus facilis illo nam optio laudantium,
                                    quibusdam, magni molestias perferendis similique accusantium libero nobis amet.
                                    Deserunt
                                    ex id sequi aperiam vel totam, nemo rerum placeat neque temporibus? A, quibusdam.
                                    Consequatur aliquid molestiae itaque magni odio veritatis laboriosam, harum
                                    provident
                                    aut, in cumque totam est perspiciatis recusandae reiciendis deleniti asperiores
                                    expedita!
                                </div>
                                <div class="w-full bg-black h-[0.5px] rounded-full"></div>
                            </div>
                            <div class="goals flex flex-col gap-5">
                                <button onclick=toggleAccordionGoals()
                                    class="goals-head flex justify-between items-center">
                                    <h1 class="text-2xl">Goals</h1>
                                    <svg class="goals-icon transform transition-all duration-100"
                                        xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#0a0000"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z">
                                        </path>
                                    </svg>
                                </button>
                                <div class="goals-content hidden">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat vel facilis
                                    quisquam
                                    explicabo, dolorum ad doloribus quo mollitia et ea, minus expedita! Pariatur
                                    consequuntur maxime mollitia enim numquam minus doloribus ipsum ut quaerat soluta
                                    tempore, praesentium temporibus omnis rem eos laborum sequi quos nostrum modi velit
                                    exercitationem ipsa. Officia mollitia temporibus facilis illo nam optio laudantium,
                                    quibusdam, magni molestias perferendis similique accusantium libero nobis amet.
                                    Deserunt
                                    ex id sequi aperiam vel totam, nemo rerum placeat neque temporibus? A, quibusdam.
                                    Consequatur aliquid molestiae itaque magni odio veritatis laboriosam, harum
                                    provident
                                    aut, in cumque totam est perspiciatis recusandae reiciendis deleniti asperiores
                                    expedita!
                                </div>
                                <div class="w-full bg-black h-[1px] rounded-full"></div>
                            </div>
                            <div class="quality flex flex-col gap-5">
                                <button onclick=toggleAccordionQuality()
                                    class="quality-head flex justify-between items-center">
                                    <h1 class="text-2xl">Quality</h1>
                                    <svg class="quality-icon transform transition-all duration-100"
                                        xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#0a0000"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z">
                                        </path>
                                    </svg>
                                </button>
                                <div class="quality-content hidden">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat vel facilis
                                    quisquam
                                    explicabo, dolorum ad doloribus quo mollitia et ea, minus expedita! Pariatur
                                    consequuntur maxime mollitia enim numquam minus doloribus ipsum ut quaerat soluta
                                    tempore, praesentium temporibus omnis rem eos laborum sequi quos nostrum modi velit
                                    exercitationem ipsa. Officia mollitia temporibus facilis illo nam optio laudantium,
                                    quibusdam, magni molestias perferendis similique accusantium libero nobis amet.
                                    Deserunt
                                    ex id sequi aperiam vel totam, nemo rerum placeat neque temporibus? A, quibusdam.
                                    Consequatur aliquid molestiae itaque magni odio veritatis laboriosam, harum
                                    provident
                                    aut, in cumque totam est perspiciatis recusandae reiciendis deleniti asperiores
                                    expedita!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="quality-objects w-full flex flex-col gap-5">
                        <button onclick=toggleAccordionQO()
                            class="qo-head flex items-center justify-between w-full gap-10">
                            <div class="qo-left w-[40%] gap-5 flex flex-col">
                                <h1 class="text-4xl font-medium text-left">Quality Objectives</h1>
                                <h1 class="text-justify">Defining Excellence through Data and Strategic Goals.</h1>
                            </div>
                            <div>
                                <svg class="qo-icon transform transition-all duration-100"
                                    xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#0a0000"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z">
                                    </path>
                                </svg>
                            </div>
                        </button>
                        <div class="qo-img w-full hidden flex justify-center">
                            <img class="w-[90%]" src="{{ asset('images/image-117.png') }}" alt="Peneliti">
                        </div>
                    </div>
                </div>
            </div>
            <x-footer />
        </div>
    </div>
    <script>
        function toggleAccordionVision() {
            const visionContent = document.getElementsByClassName('vision-content')[0];
            const visionIcon = document.getElementsByClassName('vision-icon')[0];
            visionContent.classList.toggle('hidden');
            if (!visionContent.classList.contains('hidden')) {
                visionIcon.style.transform = "rotate(90deg)"
            } else {
                visionIcon.style.transform = "rotate(0deg)"
            }
        }
        function toggleAccordionMission() {
            const missionContent = document.getElementsByClassName('mission-content')[0];
            const missionIcon = document.getElementsByClassName('mission-icon')[0];
            missionContent.classList.toggle('hidden');
            if (!missionContent.classList.contains('hidden')) {
                missionIcon.style.transform = "rotate(90deg)"
            } else {
                missionIcon.style.transform = "rotate(0deg)"
            }
        }
        function toggleAccordionGoals() {
            const goalsContent = document.getElementsByClassName('goals-content')[0];
            const goalsIcon = document.getElementsByClassName('goals-icon')[0];
            goalsContent.classList.toggle('hidden');
            if (!goalsContent.classList.contains('hidden')) {
                goalsIcon.style.transform = "rotate(90deg)"
            } else {
                goalsIcon.style.transform = "rotate(0deg)"
            }
        }
        function toggleAccordionQuality() {
            const qualityContent = document.getElementsByClassName('quality-content')[0];
            const qualityIcon = document.getElementsByClassName('quality-icon')[0];
            qualityContent.classList.toggle('hidden');
            if (!qualityContent.classList.contains('hidden')) {
                qualityIcon.style.transform = "rotate(90deg)"
            } else {
                qualityIcon.style.transform = "rotate(0deg)"
            }
        }
        function toggleAccordionQO() {
            const qoContent = document.getElementsByClassName('qo-img')[0];
            const qoIcon = document.getElementsByClassName('qo-icon')[0];
            qoContent.classList.toggle('hidden');
            if (!qoContent.classList.contains('hidden')) {
                qoIcon.style.transform = "rotate(90deg)"
            } else {
                qoIcon.style.transform = "rotate(0deg)"
            }
        }

        const profile = document.getElementsByClassName('main-profile')[0]
        const history = document.getElementsByClassName('main-history')[0]
        const identity = document.getElementsByClassName('main-identity')[0]
        const integrity = document.getElementsByClassName('main-integrity')[0]
        const btnProfile = document.getElementsByClassName('button-profile')[0]
        const btnHistory = document.getElementsByClassName('button-history')[0]
        const btnIdentity = document.getElementsByClassName('button-identity')[0]
        const btnIntegrity = document.getElementsByClassName('button-integrity')[0]

        document.addEventListener("DOMContentLoaded", function () {
            const profile = document.querySelector(".main-profile");

            if (profile) {
                profile.classList.remove("hidden");
            }
        });

        function toggleShowProfile() {
            profile.classList.remove('hidden')
            history.classList.add('hidden')
            identity.classList.add('hidden')
            integrity.classList.add('hidden')

            btnProfile.classList.remove('px-6', 'py-2', 'rounded-full', 'border', 'border-[#275CAA]', 'text-[#275CAA]', 'text-sm', 'hover:bg-[#275CAA]', 'hover:text-white', 'transition-all', 'duration-200')
            btnProfile.classList.add('px-6', 'py-2', 'rounded-full', 'bg-[#275CAA]', 'text-white', 'text-sm', 'hover:bg-[#1d4f96]')
            btnHistory.classList.remove('px-6', 'py-2', 'rounded-full', 'bg-[#275CAA]', 'text-white', 'text-sm', 'hover:bg-[#1d4f96]')
            btnHistory.classList.add('px-6', 'py-2', 'rounded-full', 'border', 'border-[#275CAA]', 'text-[#275CAA]', 'text-sm', 'hover:bg-[#275CAA]', 'hover:text-white', 'transition-all', 'duration-200')
            btnIdentity.classList.remove('px-6', 'py-2', 'rounded-full', 'bg-[#275CAA]', 'text-white', 'text-sm', 'hover:bg-[#1d4f96]')
            btnIdentity.classList.add('px-6', 'py-2', 'rounded-full', 'border', 'border-[#275CAA]', 'text-[#275CAA]', 'text-sm', 'hover:bg-[#275CAA]', 'hover:text-white', 'transition-all', 'duration-200')
            btnIntegrity.classList.remove('px-6', 'py-2', 'rounded-full', 'bg-[#275CAA]', 'text-white', 'text-sm', 'hover:bg-[#1d4f96]')
            btnIntegrity.classList.add('px-6', 'py-2', 'rounded-full', 'border', 'border-[#275CAA]', 'text-[#275CAA]', 'text-sm', 'hover:bg-[#275CAA]', 'hover:text-white', 'transition-all', 'duration-200')
        }

        function toggleShowHistory() {
            history.classList.remove('hidden')
            profile.classList.add('hidden')
            identity.classList.add('hidden')
            integrity.classList.add('hidden')

            btnHistory.classList.remove('px-6', 'py-2', 'rounded-full', 'border', 'border-[#275CAA]', 'text-[#275CAA]', 'text-sm', 'hover:bg-[#275CAA]', 'hover:text-white', 'transition-all', 'duration-200')
            btnHistory.classList.add('px-6', 'py-2', 'rounded-full', 'bg-[#275CAA]', 'text-white', 'text-sm', 'hover:bg-[#1d4f96]')
            btnProfile.classList.remove('px-6', 'py-2', 'rounded-full', 'bg-[#275CAA]', 'text-white', 'text-sm', 'hover:bg-[#1d4f96]')
            btnProfile.classList.add('px-6', 'py-2', 'rounded-full', 'border', 'border-[#275CAA]', 'text-[#275CAA]', 'text-sm', 'hover:bg-[#275CAA]', 'hover:text-white', 'transition-all', 'duration-200')
            btnIdentity.classList.remove('px-6', 'py-2', 'rounded-full', 'bg-[#275CAA]', 'text-white', 'text-sm', 'hover:bg-[#1d4f96]')
            btnIdentity.classList.add('px-6', 'py-2', 'rounded-full', 'border', 'border-[#275CAA]', 'text-[#275CAA]', 'text-sm', 'hover:bg-[#275CAA]', 'hover:text-white', 'transition-all', 'duration-200')
            btnIntegrity.classList.remove('px-6', 'py-2', 'rounded-full', 'bg-[#275CAA]', 'text-white', 'text-sm', 'hover:bg-[#1d4f96]')
            btnIntegrity.classList.add('px-6', 'py-2', 'rounded-full', 'border', 'border-[#275CAA]', 'text-[#275CAA]', 'text-sm', 'hover:bg-[#275CAA]', 'hover:text-white', 'transition-all', 'duration-200')
        }

        function toggleShowIdentity() {
            identity.classList.remove('hidden')
            profile.classList.add('hidden')
            history.classList.add('hidden')
            integrity.classList.add('hidden')

            btnIdentity.classList.remove('px-6', 'py-2', 'rounded-full', 'border', 'border-[#275CAA]', 'text-[#275CAA]', 'text-sm', 'hover:bg-[#275CAA]', 'hover:text-white', 'transition-all', 'duration-200')
            btnIdentity.classList.add('px-6', 'py-2', 'rounded-full', 'bg-[#275CAA]', 'text-white', 'text-sm', 'hover:bg-[#1d4f96]')
            btnProfile.classList.remove('px-6', 'py-2', 'rounded-full', 'bg-[#275CAA]', 'text-white', 'text-sm', 'hover:bg-[#1d4f96]')
            btnProfile.classList.add('px-6', 'py-2', 'rounded-full', 'border', 'border-[#275CAA]', 'text-[#275CAA]', 'text-sm', 'hover:bg-[#275CAA]', 'hover:text-white', 'transition-all', 'duration-200')
            btnHistory.classList.remove('px-6', 'py-2', 'rounded-full', 'bg-[#275CAA]', 'text-white', 'text-sm', 'hover:bg-[#1d4f96]')
            btnHistory.classList.add('px-6', 'py-2', 'rounded-full', 'border', 'border-[#275CAA]', 'text-[#275CAA]', 'text-sm', 'hover:bg-[#275CAA]', 'hover:text-white', 'transition-all', 'duration-200')
            btnIntegrity.classList.remove('px-6', 'py-2', 'rounded-full', 'bg-[#275CAA]', 'text-white', 'text-sm', 'hover:bg-[#1d4f96]')
            btnIntegrity.classList.add('px-6', 'py-2', 'rounded-full', 'border', 'border-[#275CAA]', 'text-[#275CAA]', 'text-sm', 'hover:bg-[#275CAA]', 'hover:text-white', 'transition-all', 'duration-200')
        }

        function toggleShowIntegrity() {
            integrity.classList.remove('hidden')
            profile.classList.add('hidden')
            history.classList.add('hidden')
            identity.classList.add('hidden')

            btnIntegrity.classList.remove('px-6', 'py-2', 'rounded-full', 'border', 'border-[#275CAA]', 'text-[#275CAA]', 'text-sm', 'hover:bg-[#275CAA]', 'hover:text-white', 'transition-all', 'duration-200')
            btnIntegrity.classList.add('px-6', 'py-2', 'rounded-full', 'bg-[#275CAA]', 'text-white', 'text-sm', 'hover:bg-[#1d4f96]')
            btnProfile.classList.remove('px-6', 'py-2', 'rounded-full', 'bg-[#275CAA]', 'text-white', 'text-sm', 'hover:bg-[#1d4f96]')
            btnProfile.classList.add('px-6', 'py-2', 'rounded-full', 'border', 'border-[#275CAA]', 'text-[#275CAA]', 'text-sm', 'hover:bg-[#275CAA]', 'hover:text-white', 'transition-all', 'duration-200')
            btnIdentity.classList.remove('px-6', 'py-2', 'rounded-full', 'bg-[#275CAA]', 'text-white', 'text-sm', 'hover:bg-[#1d4f96]')
            btnIdentity.classList.add('px-6', 'py-2', 'rounded-full', 'border', 'border-[#275CAA]', 'text-[#275CAA]', 'text-sm', 'hover:bg-[#275CAA]', 'hover:text-white', 'transition-all', 'duration-200')
            btnHistory.classList.remove('px-6', 'py-2', 'rounded-full', 'bg-[#275CAA]', 'text-white', 'text-sm', 'hover:bg-[#1d4f96]')
            btnHistory.classList.add('px-6', 'py-2', 'rounded-full', 'border', 'border-[#275CAA]', 'text-[#275CAA]', 'text-sm', 'hover:bg-[#275CAA]', 'hover:text-white', 'transition-all', 'duration-200')
        }

    </script>
</body>

</html>