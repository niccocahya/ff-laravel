<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lecturer Detail - Faculty of Pharmacy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        body { font-family: 'Lato', sans-serif; }
        /* Utilitas tambahan untuk shadow spesifik Figma */
        .figma-shadow { shadow-[1px_2px_4px_0px_rgba(0,21,7,0.12)]; }
    </style>
</head>

<body class="bg-[#F7FFFA] antialiased">

<div class="w-full min-h-screen relative">

    <x-navbar />


    <main class="max-w-[1440px] mx-auto pt-[120px] pb-[80px] px-[128px] flex flex-col gap-[64px] bg-white">

        <div>
            <a href="javascript:history.back()" class="inline-flex items-center gap-4 group">
                <div class="w-12 h-12 flex items-center justify-center rounded-[100px] border border-neutral-950 transition-all group-hover:bg-neutral-950 group-hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
                    </svg>
                </div>
                <!-- <span class="text-lg font-medium text-neutral-950">Back</span> -->
            </a>
        </div>


        <section class="w-full inline-flex justify-start items-stretch gap-9">
            
            <div class="w-72 h-96 relative bg-gray-50 rounded-[10px] shadow-[1px_2px_4px_0px_rgba(0,21,7,0.24)] overflow-hidden shrink-0">
                <img class="w-full h-full object-cover" 
                     img src="images/image-46.png"
                     alt="Lecturer Photo" />
            </div>

            <div class="w-[855px] flex flex-col justify-between py-1">
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-2">
                        <h1 class="text-neutral-950 text-4xl font-medium tracking-[-0.04em]">
                            apt. Elida Zairina, S.Si., MPH., PhD.
                        </h1>
                        <p class="text-neutral-700 text-xl font-normal italic">
                            Vice Dean III
                        </p>
                    </div>

                    <div class="flex flex-col gap-4">
                        <h2 class="text-neutral-700 text-2xl font-bold">Biography</h2>
                        <p class="text-neutral-700 text-lg font-normal leading-relaxed text-justify">
                            Sally Elizabeth Mitchell is a third-year Biology student at Arizona State University, focusing on biodiversity and sustainable practices. A NCUIRE research scholar researching river pollution, she aims to communicate conservation importance, fueled by an internship at the Phoenix Zoo.
                        </p>
                    </div>
                </div>

                <div class="flex flex-wrap gap-8 pt-6">
    <a href="https://google.com" target="_blank" class="flex items-center gap-2 group text-[#275CAA] no-underline hover:underline transition-all">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail">
            <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/>
        </svg>
        <span class="text-lg font-normal">elida-z@ff.unair.ac.id</span>
    </a>

    <div class="flex gap-6">
        <a href="https://google.com" target="_blank" class="flex items-center gap-2 group text-[#275CAA] no-underline hover:underline transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link">
                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
            </svg>
            <span class="text-lg font-normal">Scholar Unair</span>
        </a>

        <a href="https://google.com" target="_blank" class="flex items-center gap-2 group text-[#275CAA] no-underline hover:underline transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link">
                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
            </svg>
            <span class="text-lg font-normal">Scopus</span>
        </a>

        <a href="https://google.com" target="_blank" class="flex items-center gap-2 group text-[#275CAA] no-underline hover:underline transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link ">
                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
            </svg>
            <span class="text-lg font-normal">Sinta</span>
        </a>

        <a href="https://google.com" target="_blank" class="flex items-center gap-2 group text-[#275CAA] no-underline hover:underline transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link">
                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
            </svg>
            <span class="text-lg font-normal">Orcid</span>
        </a>
    </div>
</div>
            </div>
        </section>


        <section class="flex flex-col">
            
            <div class="flex items-center shadow-[1px_2px_4px_0px_rgba(0,21,7,0.12)] rounded-xl overflow-hidden w-fit">
                <button onclick="openTab('education')" id="btn-education" 
                    class="tab-btn w-72 h-16 bg-[#275CAA] text-gray-50 text-lg font-normal transition-all">
                    Education
                </button>
                <button onclick="openTab('course')" id="btn-course" 
                    class="tab-btn w-72 h-16 bg-gray-50 text-neutral-700 text-lg font-normal border-l border-gray-200 transition-all">
                    Courses
                </button>
                <button onclick="openTab('research')" id="btn-research" 
                    class="tab-btn w-72 h-16 bg-gray-50 text-neutral-700 text-lg font-normal border-l border-gray-200 transition-all">
                    Research Interests
                </button>
                <button onclick="openTab('publication')" id="btn-publication" 
                    class="tab-btn w-72 h-16 bg-gray-50 text-neutral-700 text-lg font-normal border-l border-gray-200 transition-all">
                    Publications
                </button>
            </div>

            <div class="mt-8">
                
                <div id="education" class="tab-content w-full bg-gray-50 rounded-xl shadow-[1px_2px_4px_0px_rgba(0,21,7,0.12)] overflow-hidden">
                    <div class="w-full h-20 bg-[#275CAA] flex items-center px-12">
                        <div class="w-[200px] text-gray-50 text-2xl font-medium">Year</div>
                        <div class="text-gray-50 text-2xl font-medium">Education</div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center px-12 py-6 bg-gray-50 border-b border-gray-100">
                            <div class="w-[200px] text-neutral-700 text-lg font-normal">1990</div>
                            <div class="text-neutral-700 text-lg font-normal">Bachelor of Science (Drs), Pharmaceutical Science, Faculty of Pharmacy, Universitas Airlangga, Indonesia</div>
                        </div>
                        <div class="flex items-center px-12 py-6 bg-[#F8FAFC]">
                            <div class="w-[200px] text-neutral-700 text-lg font-normal">1996</div>
                            <div class="text-neutral-700 text-lg font-normal">Master of Science (MSi), Organic Chemistry, Institute Technology Bandung, Indonesia</div>
                        </div>
                        <div class="flex items-center px-12 py-6 bg-gray-50 border-t border-gray-100">
                            <div class="w-[200px] text-neutral-700 text-lg font-normal">2002</div>
                            <div class="text-neutral-700 text-lg font-normal">Doctor of Philosophy (PhD), Pharmaceutical Chemistry, Tohoku University, Japan</div>
                        </div>
                    </div>
                </div>

                <div id="course" class="tab-content hidden p-10 bg-gray-50 rounded-xl shadow-[1px_2px_4px_0px_rgba(0,21,7,0.12)]">
                    <ul class="list-disc pl-6 text-neutral-700 text-lg space-y-4 font-['Lato']">
                        <li>Advanced Pharmaceutical Technology</li>
                        <li>Clinical Pharmacy Practice</li>
                        <li>Pharmacokinetics</li>
                    </ul>
                </div>

                <div id="research" class="tab-content hidden p-10 bg-gray-50 rounded-xl shadow-[1px_2px_4px_0px_rgba(0,21,7,0.12)]">
                    <ul class="list-disc pl-6 text-neutral-700 text-lg space-y-4 font-['Lato']">
                        <li>Drug Delivery Systems</li>
                        <li>Pharmaceutical Nanotechnology</li>
                        <li>Clinical Pharmacy Research</li>
                    </ul>
                </div>

                <div id="publication" class="tab-content hidden p-10 bg-gray-50 rounded-xl shadow-[1px_2px_4px_0px_rgba(0,21,7,0.12)]">
                    <ol class="list-decimal pl-6 text-neutral-700 text-lg space-y-4 font-['Lato']">
                        <li>Journal Article Title One (2024)</li>
                        <li>Journal Article Title Two (2023)</li>
                        <li>Journal Article Title Three (2022)</li>
                        <li>Journal Article Title Four (2021)</li>
                        <li>Journal Article Title Five (2020)</li>
                    </ol>
                    <div class="mt-10">
                        <a href="#" class="text-neutral-900 text-lg font-medium underline hover:text-[#275CAA]">View more</a>
                    </div>
                </div>

            </div>
        </section>

    </main>


    <x-footer />

</div>


<script>
function openTab(tabId) {
    // 1. Sembunyikan semua konten tab
    const contents = document.querySelectorAll(".tab-content");
    contents.forEach(c => c.classList.add("hidden"));

    // 2. Reset semua tombol tab ke style inaktif
    const buttons = document.querySelectorAll(".tab-btn");
    buttons.forEach(b => {
        b.classList.remove("bg-[#275CAA]", "text-gray-50");
        b.classList.add("bg-gray-50", "text-neutral-700");
    });

    // 3. Tampilkan konten yang dipilih
    document.getElementById(tabId).classList.remove("hidden");

    // 4. Ubah tombol yang diklik menjadi style aktif
    const activeBtn = document.getElementById("btn-" + tabId);
    activeBtn.classList.remove("bg-gray-50", "text-neutral-700");
    activeBtn.classList.add("bg-[#275CAA]", "text-gray-50");
}
</script>

</body>
</html>