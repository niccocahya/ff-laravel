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
            <x-pagination-faculty-profile active="integrity" />
            <div class="main-integrity fade-in pb-14 px-28 flex flex-col gap-10 bg-[#F7FFFA]">
                <div class="w-full flex flex-col gap-10">
                    <div class="areas flex w-full gap-10">
                        <div class="areas-left w-[40%] gap-5 flex flex-col">
                            <h1 class="text-4xl font-medium text-left">Areas</h1>
                            <h1 class="text-justify">Driving global excellence in pharmaceutical science and clinical
                                care, grounded in innovation and moral integrity</h1>
                        </div>
                        <div class="areas-right flex flex-col flex-1 gap-7 text-justify">
                            <x-accordion title="Change Management">
                                <span class="font-semibold">Objectives</span><br>
                                Systematically and consistently change the work mechanisms, mindset, and work culture of
                                individuals in the established
                                work units, to improve them in line with the goals and objectives of developing an
                                Integrity Zone.<br><br>
            
                                <span class="font-semibold">Targets to be Achieved</span><br>
                                1. Increased commitment of all work unit leaders and employees in building an Integrity
                                Zone towards WBK/WBBM;<br>
                                2. Changes in mindset and work culture in work units proposed as Integrity Zones towards
                                WBK/WBBM; and<br>
                                3. Reduced risk of failure due to potential resistance to change.<br><br>
                                <span class="font-semibold">How to Achieve</span><br>
                                Account for all activities undertaken and document them in supporting documents/data
                                that are publicly accessible.
                            </x-accordion>
                            <x-accordion title="Governance Management">
                                <span class="font-semibold">Objectives</span><br>
                                To improve the efficiency and effectiveness of clear, effective, efficient, and
                                measurable work systems, processes, and
                                procedures in the Integrity Zone towards WBK/WBBM.<br><br>
            
                                <span class="font-semibold">Targets to be Achieved</span><br>
                                1. Increased use of information technology in government management processes in the
                                Integrity Zone towards WBK/WBBM;<br>
                                2. Increased efficiency and effectiveness of government management processes in the
                                Integrity Zone towards WBK/WBBM; <br>
                                3. Increased performance in the Integrity Zone towards WBK/WBBM.<br><br>
                                <span class="font-semibold">How to Achieve</span><br>
                                Account for all activities undertaken and document them in supporting documents/data
                                that are accessible to the public.
                            </x-accordion>
                            <x-accordion title="Civil Service Human Resource Management">
                                <span class="font-semibold">Objectives</span><br>
                                To improve the professionalism of civil servant human resources in the Integrity Zone
                                towards WBK/WBBM.<br><br>
            
                                <span class="font-semibold">Targets to be Achieved</span><br>
                                1. Increased compliance with civil servant human resource management in each Integrity
                                Zone towards WBK/WBBM;<br>
                                2. Increased transparency and accountability in civil s
                                ervant human resource management in each Integrity Zone towards
                                WBK/WBBM;<br>
            
                                3. Increased discipline of civil servant human resourc
                                e s in each Integrity Zone towards WBK/WBBM;<br>
                                4. Increased effectiveness of civil servant human r
                                e source management in the Integrity Zone towards WBK/WBBM; and<br>
                                5. Increased professionalism of civil servant human resources in the Integrity Zone
                                towards WBK/WBBM. <br>
                                6. Methods of Achievement
                                <br><br>
            
                                <span class="font-semibold">Methods of Achievement</span><br>
            
                                Account for all activities carried out and document them in supporting documents/data
                                that are accessible to the public.
                            </x-accordion>
                            <x-accordion title="Strengthening Accountability">
                                <span class="font-semibold">Objectives</span><br>
                                To improve the capacity and accountability of government agency performance.<br><br>
            
                                <span class="font-semibold">Targets to be Achieved</span><br>
                                1. To improve the performance of government agencies;<br>
                                2. To improve the accountability of government agencies. <br>
                                3. Measures of Achievement
                                <br><br>
            
                                <span class="font-semibold">Methods of Achievement</span><br>
                                To account for all activities undertaken and to document them in supporting
                                documents/data that are accessible to the
                                public.
                            </x-accordion>
                            <x-accordion title="Strengthening Oversight">
                                <span class="font-semibold">Objectives</span><br>
                                To improve clean and corruption-free governance in Work Units towards WBK/WBBM.<br><br>
            
                                <span class="font-semibold">Targets to be Achieved</span><br>
                                1. Increased compliance with state financial management in Work Units towards WBK/WBBM;
                                <br>
                                2. Increased effectiveness of state financial management in Work Units towards WBK/WBBM;
                                <br>
                                3. Decreased levels of abuse of authority in Work Units towards WBK/WBBM.
                                <br><br>
            
                                <span class="font-semibold">How to Achieve</span><br>
                                1. Gratification Control. <br>
                                2. Implementation of the Government Internal Control System (SPIP). <br>
                                3. Public Complaints. <br>
                                4. Whistle-Blowing System. <br>
                                5. Management of Conflicts of Interest.
                            </x-accordion>
                            <x-accordion-last title="Improving the Quality of Public Services">
                                <span class="font-semibold">Objectives</span><br>
                                To improve the quality of public services in each ministry/institution/regional
                                government according to the needs and
                                expectations of the community.<br><br>
            
                                <span class="font-semibold">Targets to be Achieved</span><br>
                                1. To improve the quality of public services (faster, cheaper, safer, and more
                                accessible) in
                                ministries/institutions/regional governments; <br>
                                2. To increase the number of service units achieving international service standards in
                                ministries/institutions/regional
                                governments; <br>
                                3. To increase the public satisfaction index with the provision of public services by
                                each ministry/institution/regional
                                government.
                                <br><br>
            
                                <span class="font-semibold">How to Achieve</span><br>
                                To account for all activities carried out and document them in supporting documents/data
                                that are accessible to the
                                public.
                            </x-accordion-last>
                        </div>
                    </div>
                    <div class="iz flex w-full gap-10">
                        <div class="iz-left w-[40%] gap-5 flex flex-col">
                            <h1 class="text-4xl font-medium text-left">Integrity Zone Team Structure</h1>
                            <h1 class="text-justify">Driving global excellence in pharmaceutical science and clinical
                                care, grounded in innovation and moral integrity</h1>
                        </div>
                        <div class="iz-right flex flex-col flex-1 gap-7 text-justify">
                            <x-accordion title="Steering Committee">
                                Dean
                            </x-accordion>
                            <x-accordion title="Change Management">
                                Vice Dean I
                            </x-accordion>
                            <x-accordion title="Administration & Business Process">
                                Vice Dean II
                            </x-accordion>
                            <x-accordion title="HR Management System">
                                Vice Dean III
                            </x-accordion>
                            <x-accordion title="Change Management">
                                <span class="font-semibold">Manager</span><br>
                                apt. Gusti Noorrizka Veronika Achmad, S.Si., M .Sc. <br><br>
                                <span class="font-semibold">Staff</span><br>
                                1. apt. Anila Impian Sukorini, S.Si ., M.Farm. <br>
                                2. apt. Yusuf Alif Pratama, S.Farm., M.Farm.<br>
                                3. Vivi Andriani, S.Si.
                            </x-accordion>
                            <x-accordion title="Governance and Administrative Structuring">
                                <span class="font-semibold">Manager</span><br>
                                apt. Chrismawan Ardianto, S.Farm., M.Sc., Ph.D.<br><br>
                                <span class="font-semibold">Staff</span><br>
                                1. apt. Dini Retnowati, S.Farm., M.Si.<br>
                                2. Amien Mariyanto
                            </x-accordion>
                            <x-accordion title="Human Resource Management System Structuring">
                                <span class="font-semibold">Manager</span><br>
                                Henky Soekma Poetra, ST. <br><br>
                                <span class="font-semibold">Staff</span><br>
                                1. Habib Umar Abdunahim, S.EI.<br>
                                2. Septiawan Prambudi, A.Md.
                            </x-accordion>
                            <x-accordion title="Supervision Strengthening">
                                <span class="font-semibold">Manager</span><br>
                                apt. Suciati, S.Si., M.Phil., Ph.D. <br><br>
                                <span class="font-semibold">Staff</span><br>
                                1. Furqan Daniel Akhsani Taqwim, S.Kom. <br>
                                2. Sudarmaji
                            </x-accordion>
                            <x-accordion title="Accountability Strengthening">
                                <span class="font-semibold">Manager</span><br>
                                Prof. apt. Rr. Retno Widyowati, S.Si., M.Pharm., Ph.D. <br><br>
                                <span class="font-semibold">Staff</span><br>
                                1. Anik Pujiati, SE. <br>
                                2. Arifa Norma Sari
                            </x-accordion>
                            <x-accordion title="Public Service Quality Improvement">
                                <span class="font-semibold">Manager</span><br>
                                apt. Andi Hermansyah, S.Farm., M.Sc., Ph.D. <br><br>
                                <span class="font-semibold">Staff</span><br>
                                1. Titi Savitri, S.Pd. <br>
                                2. Budi Santoso, S.Sos. <br>
                                3. apt. Firmansyah Ardian Ramadhani, S.Farm., M.Farm.
                            </x-accordion>
                            <x-accordion title="Integrity Zone Administration">
                                1. apt. Rosita Handayani, S.Farm., M.Si. <br>
                                2. Ari Ardhi Asih Setjowijono, S.Pd
                            </x-accordion>
                            <x-accordion-last title="IT and Public Relations">
                                Deddy Dwi Sutanto, S.Farm.
                            </x-accordion-last>
                        </div>
                    </div>
                    <x-link-card title="Complaint Service Form"
                        description="Educational program organized by the Faculty of Pharmacy, Airlangga University."
                        href="https://google.com" />
                </div>
            </div>
            <x-footer />
        </div>
    </div>
    <script>
        
    </script>
</body>

</html>