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
        <x-navbar />
        <div class="main-calendar flex flex-col pt-16">
            <div
                class="heroes h-[45vh] w-full gap-5 text-white bg-gradient-to-r from-[#275CAA] via-[#275CAA] to-[#2E9853] px-28 flex flex-col justify-center">
                <div class="header-top flex items-end gap-3">
                    <h1 class="text-5xl font-medium">Journals</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" viewBox="0 0 256 256">
                        <path
                            d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z">
                        </path>
                    </svg>
                </div>
                <h1 class="w-[50%] text-justify">Stay updated with key academic dates, lecture schedules, and important
                    events throughout the semester.</h1>
            </div>
            <div class="fade-in py-14 px-28 flex flex-col gap-10 bg-[#F7FFFA]">
                <div class="ethic w-full flex flex-col gap-7">
                    <h1 class="text-4xl font-medium">
                        UNAIR Faculty of Medicine Health Research Ethics Commission
                    </h1>
                    <div class="ethic flex flex-col gap-5">
                        <x-accordion title="Komisi Etik Penelitian Kesehatan (KEPK) Ethics Review Document">
                            <span class="font-medium">
                                Before registering, please complete the required ethical documents, including:
                            </span> <br>

                            1. Cover Letter<br>
                            2. Research Protocol<br>
                            3. Proof of Payment<br>
                            4. Student ID Card (KTM) or National Identity Card (general)<br>
                            5. Researcher's Curriculum Vitae<br>
                            6. Name of Sponsor/Research Grant (if any)<br>
                            7. Researcher's Statement Letter<br>
                            8. Research Instrument/Questionnaire<br>
                            9. Informed Consent (IC) and Informed Consent (PSP).<br><br>

                            <span class="font-medium">
                                The ethical review document files can be downloaded below.
                            </span> <br>

                            1. WHO Informed Consent Form<br>
                            2. Human Ethics Protocol<br>
                            3. Student Cover Letter Document<br>
                            4. Researcher Cover Letter Document<br>
                            5. Researcher Statement Letter Document<br>
                            6. PSP or IC Document<br>
                            7. Example of PSP or IC Completion<br>
                            8. Example of Verbal or Oral Informed Consent<br>
                            9. Serious Adverse Events Report Form<br>
                            10. Risk Criteria and Monitoring Guidelines<br>
                            11. FFUA KEPK Final Report Form
                        </x-accordion>
                        <x-accordion title="Composition of the Health Research Ethics Commission, Faculty of Pharmacy, UNAIR">
                            <span class="font-medium">
                                Patron:
                            </span> <br>
                            Prof. Junaidi Khotib, S.Si., M.Kes., Ph.D., Apt.<br><br>

                            <span class="font-medium">
                                Chair:
                            </span> <br>
                            Andi Hermansyah, S.Farm.,M.Sc., Ph.D., Apt.<br><br>

                            <span class="font-medium">
                                Secretary:
                            </span> <br>
                            Dr. Tri Widiandani, S.Si.,Sp.FRS.,Apt.<br><br>

                            <span class="font-medium">
                                Members:
                            </span> <br>

                            1. Prof. Dr. Umi Athiyah, M.S.,Apt.<br>
                            2. Dr. Isnaeni, M.S., Apt.<br>
                            3. Dr. Budi Suprapti, M.Si.,Apt.<br>
                            4. Drs. Marcellino Rudyanto, M.Si.,Ph.D.<br>
                            5. Drs. Hadi Poerwono, M.Sc.,Ph.D.<br>
                            6. Dr. Abdul Rahem, M.Kes.,Apt.<br>
                            7. Dr. Idha Kusumawati, M.Si.,Apt.<br>
                            8. Dr. Juni Ekowati, M.Si.,Apt.<br>
                            9. Dr. Retno Sari, M.Sc.,Apt.<br>
                            10. Dr. Muh. Agus Syamsur Rijal, S.Si, M.Si., Apt.<br>
                            11. Elida Zairina, S.Si.,M.P.H.,Ph.D.,Apt.<br>
                            12. Chrismawan Ardianto, S.Farm., M.Sc., Ph.D., Apt.<br>
                            13. Ahmad Dzulfikri Nurhan, S.Farm., M.Farm., Apt.<br>
                            14. Dr. Dewi Retno Suminar, M.Si Psikologi<br>
                            15. Maradona SH, LL.M., Ph.D.<br>
                            16. Prof. Dr. Mustofa Helmi Effendi, DTAPH., drh
                        </x-accordion>
                        <x-accordion-last title="Ethics Test Fees">
                            <div class="w-full flex justify-center">
                                <img src="{{ asset('images/ethic-fees.png') }}" class="w-[75%]">
                            </div>
                        </x-accordion-last>
                    </div>
                    <x-link-card title="Download the Ethical Compliance Certificate"
                        description="A page that allows users to download the Ethical Compliance Certificate as proof of meeting required ethical standards."
                        href="https://google.com" />
                </div>
            </div>
            <x-footer />
        </div>
    </div>
    <script></script>
</body>

</html>