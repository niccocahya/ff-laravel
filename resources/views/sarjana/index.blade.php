<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="wrapper-all w-full min-h-screen bg-[#F7FFFA] relative">
        <x-nav-prodi />
        <div class="main-home flex flex-col gap-24 pt-26">

            <div class="heroes w-full h-[82vh] flex items-center overflow-hidden relative">
                <div class="z-40 w-full h-full flex items-center justify-center absolute px-6 md:px-0">
                    <div
                        class="flex text-white text-center flex-col items-center justify-center w-full md:w-[50%] gap-14">
                        <div class="head-top flex flex-col w-full items-center gap-3">
                            <h1 class="text-3xl md:text-5xl font-medium tracking-[-1px]">Bachelor of Pharmacy &
                                Apothecary Professional Education</h1>
                            <h1 class="w-full md:w-[55%] font-regular">Developing education, research, and community
                                service in the
                                field of pharmacy to support public health.</h1>
                        </div>
                        <div class="head-top flex flex-col w-[80%] md:w-[35%]">
                            <button
                                class="w-full p-3 rounded-md bg-[#275CAA] hover:bg-[#194d9b] transition-all duration-200">
                                <a href="/sarjana/education">
                                    <h1 class="text-[#F7FFFA] text-sm font-regular">Explore Academic Programs</h1>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full bg-black/40 z-30 absolute h-full">
                </div>
                <img src="{{ asset('images/baner-s1.png') }}"
                    class="w-full blur-xs object-cover z-10 absolute h-full md:h-auto" alt="Gedung FF">
            </div>

            <div class="about px-6 md:px-28 flex flex-col gap-20">
                <div class="main-about flex flex-col md:flex-row items-center gap-10 md:gap-20">
                    <div class="main-about-left flex flex-col w-full md:w-[60%] gap-5">
                        <h1 class="text-4xl font-medium">Profile</h1>
                        <h1 class="text-justify">Based on the Instruction of the Minister of Higher Education and
                            Science of the Republic of Indonesia in August 1962,
                            the President of Universitas Airlangga with Decree No. Um/251/8/62 dated December 31st,
                            1962, formed a committee, namely
                            "Committee for Investigating Establishment of the Fakultas Ilmu Pasti dan Ilmu Alam (FIPIA)
                            Universitas Airlangga". The
                            committee prepared a plan to establish FIPIA Universitas Airlangga, which consists of four
                            departments: the Department
                            of Mathematics, the Department of Physics, the Department of Biology, and the Department of
                            Chemistry. In connection
                            with the FIPIA establishment, the idea to add a pharmaceutical education institution and
                            public health education to
                            complement the "University of Airlangga Medical Center" in connection with the existing
                            Faculty of Medicine and Faculty
                            of Dentistry was proposed. The idea was supported by the possibility of utilizing lecture
                            and practicum facilities at
                            the Faculty of Medicine to implement pharmaceutical education. On August 7th, 1963, with the
                            Rector's Decree No.
                            1782/8/63, a Sub-Committee for Investigating Establishments of the Pharmacy Department of
                            FIPIA was formed in Surabaya.
                            <span class="text-[#275CAA] hover:underline underline-offset-2"><a href="#">Read
                                    More</a></span>
                        </h1>
                    </div>
                    <div class="image-about w-full md:flex-1 h-64 md:h-full overflow-hidden rounded-xl ">
                        <img src="{{ asset('images/lab-1.png') }}" class="object-cover w-full h-full">
                    </div>
                </div>

                <div class="about-programs flex w-full">
                    <x-tabs :tabs="['bop' => 'Bachelor of Pharmacy', 'ape' => 'Apothecary Professional Education', 'iup' => 'International Undergraduate Program']">
                        <div id="content-bop" class="tab-content gap-10 flex flex-col w-full">
                            <div class="program-top flex flex-col gap-5">
                                <x-link-card title="About Study Program"
                                    href="https://pendidikan.unair.ac.id/v2/index.php/kalender-akademik-2/" />
                                <h1 class="text-justify">The Bachelor of Pharmacy study program is a pioneer in
                                    developing
                                    knowledge in the
                                    fields of pharmaceutical science and
                                    technology and clinical and community pharmacy. For over 60 years, this study
                                    program
                                    has produced quality graduates who
                                    occupy strategic positions throughout the country. International collaborations with
                                    pharmaceutical universities across
                                    continents have also successfully led students to achieve globally reputable
                                    achievements. Committed to developing
                                    quality education, students have access to comprehensive facilities, including
                                    information and communication technology,
                                    classrooms, and complete experimental instruments.
                                </h1>
                            </div>

                            <div class="learning-outcome flex flex-col md:flex-row w-full gap-10">
                                <div class="lo-left w-full md:w-[40%] gap-5 flex flex-col">
                                    <h1 class="text-4xl font-medium text-left">Learning Outcome</h1>
                                    <h1 class="text-justify">Cultivating professional pharmacists who integrate
                                        scientific excellence with moral
                                        integrity to serve the global
                                        community</h1>
                                </div>
                                <div class="lo-right flex flex-col w-full md:flex-1 gap-7 text-justify">
                                    <x-accordion title="Attitude">
                                        1. A1: Realize excellence based on religious morals (excellence with morality),
                                        able to work together, and
                                        show a
                                        responsible attitude to work in their field of expertise independently
                                        (Caregiver, Communicator, Manager,
                                        Teacher,
                                        Researcher) <br>
                                        2. A2: Internalize the spirit of independence, struggle, and entrepreneurship
                                        (Decision-maker, Leader,
                                        Life-long learner )
                                    </x-accordion>
                                    <x-accordion title="General Skills">
                                        Graduates are able to : <br>
                                        1. GS1: Apply logical, systematic, and innovative thinking in the context of
                                        science and technology
                                        development, review its
                                        outcome, and apply the humanity values to create solution, idea, design and
                                        scientific description as a
                                        thesis or a
                                        final report (Life-long learner, Teacher, Researcher ) <br>
                                        2. GS2: Make decisions correctly in the context of problem-solving based on
                                        analyzing information and data,
                                        document and
                                        assure data validity, and prevent plagiarism (Caregiver, Decision-maker, Leader,
                                        Researcher )<br>
                                        3. GS3: Perform independent, measurable, and quality performance, do a group
                                        work, supervise workers under
                                        their
                                        responsibility, and develop networks with mentors, associates, and colleagues in
                                        and out of the institution
                                        (Communicator, Manager, Leader)
                                    </x-accordion>
                                    <x-accordion title="Knowledge">
                                        BACHELOR DEGREE<br>
                                        Graduates are able to :<br>
                                        1. K1: Explain fundamental and applied basic sciences, basic medical sciences
                                        and basic social sciences to
                                        support the
                                        pharmaceutical sciences (Caregiver, Life-long learner, Teacher)<br>
                                        2. K2: Explain basic principles of pharmaceutical science and technology
                                        relevant to the drug development,
                                        from the
                                        invention to the marketing aspect of new pharmaceutical products. (Life-long
                                        learner, Teacher )<br>
                                        3. K3: Explain the concept of quality control for drug raw material and
                                        pharmaceutical preparations (drugs,
                                        traditional
                                        medicines, and cosmetics), food and beverages in accordance with scientific
                                        principles and standards
                                        (Teacher,
                                        Decision-maker, Communicator)<br><br>

                                        PROFESSIONAL DEGREE<br>
                                        Graduates are able to :<br>
                                        1. K4: Uphold professionalism, moral, ethical, and legal aspects, in the
                                        practice of pharmacy (Caregiver,
                                        Decision-maker,
                                        Teacher).<br>
                                        2. K5: Perform pharmaceutical care and collaborate with patients, colleagues,
                                        and other health professionals
                                        by considering
                                        all legal, ethical, professional, sociocultural, and economic aspects to ensure
                                        the rational drug therapy
                                        and
                                        participate in preventive and promotive efforts (Caregiver,
                                        Communicator,Manager,Teacher)
                                    </x-accordion>
                                    <x-accordion-last title="Quality Policy">
                                        BACHELOR DEGREE<br>
                                        Graduates are able to:<br>
                                        1. SS1: Prepare pharmaceutical products (drugs, traditional medicines and
                                        cosmetics) covering aspects of the
                                        formulation,
                                        manufacture and quality assurance based on logical, critical, systematic, and
                                        innovative thinking (Manager,
                                        Decision-maker)<br>
                                        2. SS2: Assess the scientific validity of drug-related information by
                                        considering legal, ethical,
                                        professional,
                                        sociocultural, and economicaspects for the benefits of patients (Decision-maker,
                                        Caregiver, Communicator,
                                        Manager)<br>
                                        3. SS3: Conduct scientific review, research, publish the results, and be able to
                                        communicate and responsible
                                        for the
                                        results on the basis of scientific rules and principles (Leader, Life-long
                                        learner, Researcher)<br>
                                        4. SS4: Inform and communicate pharmaceuticals, special drug group & medical
                                        supplies to patients,
                                        colleagues, communities
                                        and health professionals based on the principle of rational drug therapy
                                        (Caregiver, Communicator)<br>
                                        5. SS5: Communicate ideas and information in pharmaceutical field effectively,
                                        through various forms of
                                        media to the
                                        academic community, and support preventive and promotive efforts to improve the
                                        quality of public
                                        health (Caregiver,
                                        Communicator, Researcher).<br>
                                        6. SS6: Make the right decisions in supervising and evaluating the pharmacy work
                                        based on the data analysis,
                                        government law
                                        and regulation, and professional code of ethics (Decision-maker, Leader,
                                        Manager)<br>
                                        7. SS7: Manage independent learning to catch up with science and technology
                                        development in the field of
                                        pharmacy (Communicator, Manager, Life-long learner)<br><br>

                                        PROFESSIONAL DEGREE<br>
                                        Graduates are able to :<br>
                                        1. SS8: Manage and serve the demand of pharmaceutical and medical devices
                                        according to the prevailing
                                        standards, either by
                                        prescription or non-prescription, accurately and safely ( Caregiver, Leader,
                                        Manager).<br>
                                        2. SS9: Perform formulation, manufacturing and quality assurance of
                                        pharmaceutical preparations, on the
                                        basis of
                                        pharmaceutical science and technology (Decision-maker,Researcher)<br>
                                        3. SS10: Be introspective and do self development according to the development
                                        of pharmaceutical science and
                                        technology
                                        ( Life-long learner, Researcher)
                                    </x-accordion-last>
                                </div>
                            </div>
                        </div>

                        <div id="content-ape" class="tab-content gap-10 flex flex-col hidden w-full">
                            <div class="program-top flex flex-col gap-5">
                                <x-link-card title="About Study Program"
                                    href="https://pendidikan.unair.ac.id/v2/index.php/kalender-akademik-2/" />
                                <h1 class="text-justify">The Bachelor of Pharmacy study program is a pioneer in
                                    developing
                                    knowledge in the
                                    fields of pharmaceutical science and
                                    technology and clinical and community pharmacy. For over 60 years, this study
                                    program
                                    has produced quality graduates who
                                    occupy strategic positions throughout the country. International collaborations with
                                    pharmaceutical universities across
                                    continents have also successfully led students to achieve globally reputable
                                    achievements. Committed to developing
                                    quality education, students have access to comprehensive facilities, including
                                    information and communication technology,
                                    classrooms, and complete experimental instruments.
                                </h1>
                            </div>
                            <div class="learning-outcome flex flex-col md:flex-row w-full gap-10">
                                <div class="lo-left w-full md:w-[40%] gap-5 flex flex-col">
                                    <h1 class="text-4xl font-medium text-left">Learning Outcome</h1>
                                    <h1 class="text-justify">Cultivating professional pharmacists who integrate
                                        scientific excellence with moral
                                        integrity to serve the global
                                        community</h1>
                                </div>
                                <div class="lo-right flex flex-col w-full md:flex-1 gap-7 text-justify">
                                    <x-accordion title="Attitude">
                                        1. A1: Realize excellence based on religious morals (excellence with morality),
                                        able to work together, and
                                        show a
                                        responsible attitude to work in their field of expertise independently
                                        (Caregiver, Communicator, Manager,
                                        Teacher,
                                        Researcher) <br>
                                        2. A2: Internalize the spirit of independence, struggle, and entrepreneurship
                                        (Decision-maker, Leader,
                                        Life-long learner )
                                    </x-accordion>
                                    <x-accordion title="General Skills">
                                        Graduates are able to : <br>
                                        1. GS1: Apply logical, systematic, and innovative thinking in the context of
                                        science and technology
                                        development, review its
                                        outcome, and apply the humanity values to create solution, idea, design and
                                        scientific description as a
                                        thesis or a
                                        final report (Life-long learner, Teacher, Researcher ) <br>
                                        2. GS2: Make decisions correctly in the context of problem-solving based on
                                        analyzing information and data,
                                        document and
                                        assure data validity, and prevent plagiarism (Caregiver, Decision-maker, Leader,
                                        Researcher )<br>
                                        3. GS3: Perform independent, measurable, and quality performance, do a group
                                        work, supervise workers under
                                        their
                                        responsibility, and develop networks with mentors, associates, and colleagues in
                                        and out of the institution
                                        (Communicator, Manager, Leader)
                                    </x-accordion>
                                    <x-accordion title="Knowledge">
                                        BACHELOR DEGREE<br>
                                        Graduates are able to :<br>
                                        1. K1: Explain fundamental and applied basic sciences, basic medical sciences
                                        and basic social sciences to
                                        support the
                                        pharmaceutical sciences (Caregiver, Life-long learner, Teacher)<br>
                                        2. K2: Explain basic principles of pharmaceutical science and technology
                                        relevant to the drug development,
                                        from the
                                        invention to the marketing aspect of new pharmaceutical products. (Life-long
                                        learner, Teacher )<br>
                                        3. K3: Explain the concept of quality control for drug raw material and
                                        pharmaceutical preparations (drugs,
                                        traditional
                                        medicines, and cosmetics), food and beverages in accordance with scientific
                                        principles and standards
                                        (Teacher,
                                        Decision-maker, Communicator)<br><br>

                                        PROFESSIONAL DEGREE<br>
                                        Graduates are able to :<br>
                                        1. K4: Uphold professionalism, moral, ethical, and legal aspects, in the
                                        practice of pharmacy (Caregiver,
                                        Decision-maker,
                                        Teacher).<br>
                                        2. K5: Perform pharmaceutical care and collaborate with patients, colleagues,
                                        and other health professionals
                                        by considering
                                        all legal, ethical, professional, sociocultural, and economic aspects to ensure
                                        the rational drug therapy
                                        and
                                        participate in preventive and promotive efforts (Caregiver,
                                        Communicator,Manager,Teacher)
                                    </x-accordion>
                                    <x-accordion-last title="Quality Policy">
                                        BACHELOR DEGREE<br>
                                        Graduates are able to:<br>
                                        1. SS1: Prepare pharmaceutical products (drugs, traditional medicines and
                                        cosmetics) covering aspects of the
                                        formulation,
                                        manufacture and quality assurance based on logical, critical, systematic, and
                                        innovative thinking (Manager,
                                        Decision-maker)<br>
                                        2. SS2: Assess the scientific validity of drug-related information by
                                        considering legal, ethical,
                                        professional,
                                        sociocultural, and economicaspects for the benefits of patients (Decision-maker,
                                        Caregiver, Communicator,
                                        Manager)<br>
                                        3. SS3: Conduct scientific review, research, publish the results, and be able to
                                        communicate and responsible
                                        for the
                                        results on the basis of scientific rules and principles (Leader, Life-long
                                        learner, Researcher)<br>
                                        4. SS4: Inform and communicate pharmaceuticals, special drug group & medical
                                        supplies to patients,
                                        colleagues, communities
                                        and health professionals based on the principle of rational drug therapy
                                        (Caregiver, Communicator)<br>
                                        5. SS5: Communicate ideas and information in pharmaceutical field effectively,
                                        through various forms of
                                        media to the
                                        academic community, and support preventive and promotive efforts to improve the
                                        quality of public
                                        health (Caregiver,
                                        Communicator, Researcher).<br>
                                        6. SS6: Make the right decisions in supervising and evaluating the pharmacy work
                                        based on the data analysis,
                                        government law
                                        and regulation, and professional code of ethics (Decision-maker, Leader,
                                        Manager)<br>
                                        7. SS7: Manage independent learning to catch up with science and technology
                                        development in the field of
                                        pharmacy (Communicator, Manager, Life-long learner)<br><br>

                                        PROFESSIONAL DEGREE<br>
                                        Graduates are able to :<br>
                                        1. SS8: Manage and serve the demand of pharmaceutical and medical devices
                                        according to the prevailing
                                        standards, either by
                                        prescription or non-prescription, accurately and safely ( Caregiver, Leader,
                                        Manager).<br>
                                        2. SS9: Perform formulation, manufacturing and quality assurance of
                                        pharmaceutical preparations, on the
                                        basis of
                                        pharmaceutical science and technology (Decision-maker,Researcher)<br>
                                        3. SS10: Be introspective and do self development according to the development
                                        of pharmaceutical science and
                                        technology
                                        ( Life-long learner, Researcher)
                                    </x-accordion-last>
                                </div>
                            </div>
                        </div>

                        <div id="content-iup" class="tab-content gap-10 flex flex-col hidden w-full">
                            <div class="program-top flex flex-col gap-5">
                                <x-link-card title="About Study Program"
                                    href="https://pendidikan.unair.ac.id/v2/index.php/kalender-akademik-2/" />
                                <h1 class="text-justify">The Bachelor of Pharmacy study program is a pioneer in
                                    developing
                                    knowledge in the
                                    fields of pharmaceutical science and
                                    technology and clinical and community pharmacy. For over 60 years, this study
                                    program
                                    has produced quality graduates who
                                    occupy strategic positions throughout the country. International collaborations with
                                    pharmaceutical universities across
                                    continents have also successfully led students to achieve globally reputable
                                    achievements. Committed to developing
                                    quality education, students have access to comprehensive facilities, including
                                    information and communication technology,
                                    classrooms, and complete experimental instruments.
                                </h1>
                            </div>
                            <div class="learning-outcome flex flex-col md:flex-row w-full gap-10">
                                <div class="lo-left w-full md:w-[40%] gap-5 flex flex-col">
                                    <h1 class="text-4xl font-medium text-left">Learning Outcome</h1>
                                    <h1 class="text-justify">Cultivating professional pharmacists who integrate
                                        scientific excellence with moral
                                        integrity to serve the global
                                        community</h1>
                                </div>
                                <div class="lo-right flex flex-col w-full md:flex-1 gap-7 text-justify">
                                    <x-accordion title="Attitude">
                                        1. A1: Realize excellence based on religious morals (excellence with morality),
                                        able to work together, and
                                        show a
                                        responsible attitude to work in their field of expertise independently
                                        (Caregiver, Communicator, Manager,
                                        Teacher,
                                        Researcher) <br>
                                        2. A2: Internalize the spirit of independence, struggle, and entrepreneurship
                                        (Decision-maker, Leader,
                                        Life-long learner )
                                    </x-accordion>
                                    <x-accordion title="General Skills">
                                        Graduates are able to : <br>
                                        1. GS1: Apply logical, systematic, and innovative thinking in the context of
                                        science and technology
                                        development, review its
                                        outcome, and apply the humanity values to create solution, idea, design and
                                        scientific description as a
                                        thesis or a
                                        final report (Life-long learner, Teacher, Researcher ) <br>
                                        2. GS2: Make decisions correctly in the context of problem-solving based on
                                        analyzing information and data,
                                        document and
                                        assure data validity, and prevent plagiarism (Caregiver, Decision-maker, Leader,
                                        Researcher )<br>
                                        3. GS3: Perform independent, measurable, and quality performance, do a group
                                        work, supervise workers under
                                        their
                                        responsibility, and develop networks with mentors, associates, and colleagues in
                                        and out of the institution
                                        (Communicator, Manager, Leader)
                                    </x-accordion>
                                    <x-accordion title="Knowledge">
                                        BACHELOR DEGREE<br>
                                        Graduates are able to :<br>
                                        1. K1: Explain fundamental and applied basic sciences, basic medical sciences
                                        and basic social sciences to
                                        support the
                                        pharmaceutical sciences (Caregiver, Life-long learner, Teacher)<br>
                                        2. K2: Explain basic principles of pharmaceutical science and technology
                                        relevant to the drug development,
                                        from the
                                        invention to the marketing aspect of new pharmaceutical products. (Life-long
                                        learner, Teacher )<br>
                                        3. K3: Explain the concept of quality control for drug raw material and
                                        pharmaceutical preparations (drugs,
                                        traditional
                                        medicines, and cosmetics), food and beverages in accordance with scientific
                                        principles and standards
                                        (Teacher,
                                        Decision-maker, Communicator)<br><br>

                                        PROFESSIONAL DEGREE<br>
                                        Graduates are able to :<br>
                                        1. K4: Uphold professionalism, moral, ethical, and legal aspects, in the
                                        practice of pharmacy (Caregiver,
                                        Decision-maker,
                                        Teacher).<br>
                                        2. K5: Perform pharmaceutical care and collaborate with patients, colleagues,
                                        and other health professionals
                                        by considering
                                        all legal, ethical, professional, sociocultural, and economic aspects to ensure
                                        the rational drug therapy
                                        and
                                        participate in preventive and promotive efforts (Caregiver,
                                        Communicator,Manager,Teacher)
                                    </x-accordion>
                                    <x-accordion-last title="Quality Policy">
                                        BACHELOR DEGREE<br>
                                        Graduates are able to:<br>
                                        1. SS1: Prepare pharmaceutical products (drugs, traditional medicines and
                                        cosmetics) covering aspects of the
                                        formulation,
                                        manufacture and quality assurance based on logical, critical, systematic, and
                                        innovative thinking (Manager,
                                        Decision-maker)<br>
                                        2. SS2: Assess the scientific validity of drug-related information by
                                        considering legal, ethical,
                                        professional,
                                        sociocultural, and economicaspects for the benefits of patients (Decision-maker,
                                        Caregiver, Communicator,
                                        Manager)<br>
                                        3. SS3: Conduct scientific review, research, publish the results, and be able to
                                        communicate and responsible
                                        for the
                                        results on the basis of scientific rules and principles (Leader, Life-long
                                        learner, Researcher)<br>
                                        4. SS4: Inform and communicate pharmaceuticals, special drug group & medical
                                        supplies to patients,
                                        colleagues, communities
                                        and health professionals based on the principle of rational drug therapy
                                        (Caregiver, Communicator)<br>
                                        5. SS5: Communicate ideas and information in pharmaceutical field effectively,
                                        through various forms of
                                        media to the
                                        academic community, and support preventive and promotive efforts to improve the
                                        quality of public
                                        health (Caregiver,
                                        Communicator, Researcher).<br>
                                        6. SS6: Make the right decisions in supervising and evaluating the pharmacy work
                                        based on the data analysis,
                                        government law
                                        and regulation, and professional code of ethics (Decision-maker, Leader,
                                        Manager)<br>
                                        7. SS7: Manage independent learning to catch up with science and technology
                                        development in the field of
                                        pharmacy (Communicator, Manager, Life-long learner)<br><br>

                                        PROFESSIONAL DEGREE<br>
                                        Graduates are able to :<br>
                                        1. SS8: Manage and serve the demand of pharmaceutical and medical devices
                                        according to the prevailing
                                        standards, either by
                                        prescription or non-prescription, accurately and safely ( Caregiver, Leader,
                                        Manager).<br>
                                        2. SS9: Perform formulation, manufacturing and quality assurance of
                                        pharmaceutical preparations, on the
                                        basis of
                                        pharmaceutical science and technology (Decision-maker,Researcher)<br>
                                        3. SS10: Be introspective and do self development according to the development
                                        of pharmaceutical science and
                                        technology
                                        ( Life-long learner, Researcher)
                                    </x-accordion-last>
                                </div>
                            </div>
                        </div>
                    </x-tabs>
                </div>
            </div>

            <div
                class="alumni w-full flex flex-col md:flex-row bg-[#275CAA] py-12 items-center gap-10 px-6 md:px-28 overflow-hidden">
                <div class="alumni-left text-white flex flex-col gap-5 w-full md:w-[40%]">
                    <h1 class="text-4xl font-medium">What Our Alumni Say</h1>
                    <h1 class="text-justify">Discover inspiring stories and meaningful insights shared by those who have
                        grown, learned, and succeeded through their
                        journey with us. From valuable lessons to unforgettable experiences, their voices reflect the
                        impact of being part of
                        our community and how it has shaped their personal and professional paths.</h1>
                </div>
                <div
                    class="alumni-right p-4 flex flex-col md:flex-row bg-white w-full md:flex-1 gap-3 rounded-xl text-black">
                    <img src="{{ asset('images/alumni-photo-1.png') }}"
                        class="object-cover rounded-md w-full sm:w-[30%] md:w-[200px] shrink-0">
                    <div class="alumni-detail flex flex-col justify-between gap-5">
                        <h1 class="text-justify">“Words cannot describe how lucky I am as one of the alumni of
                            department of community pharmacy UNAIR. The faculty is
                            always helpful and caring. They provided me a strong fundamental knowledge about theory and
                            research as a healthcare
                            professional. Being a student at the faculty my analytical, and practical’s skills improved
                            beyond my imaginations.”</h1>
                        <div class="alumni-bio flex flex-col gap-1">
                            <h1>Shah Faisal., Pharm. D., M.Farm.</h1>
                            <h1>Pakistan</h1>
                        </div>
                    </div>
                </div>
            </div>

            <x-event-hook />
            <x-news-hook />
            <x-footer />
        </div>
    </div>
</body>

</html>