<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Education - Competency</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        .fade-in { animation: fadeIn 0.4s ease-in-out; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(5px); }
            to { opacity: 1; transform: translateY(0); }
        }
        /* Custom styling for list numbers */
        ol { counter-reset: item; }
        ol li { display: block; position: relative; margin-bottom: 0.25rem; }
        ol li::before { 
            content: counter(item) ". "; 
            counter-increment: item; 
            position: absolute; 
            left: -1.5rem; 
        }
    </style>
</head>

<body>
    <div class="wrapper-all w-full min-h-screen bg-[#F7FFFA] relative">
        <x-nav-prodi-s2mfk />
        
        <div class="main-calendar flex flex-col pt-26">
            
            <x-hero-section title='Education'
                description='Leading the development of Pharmaceutical Science Technology and Clinical-Community Pharmacy through innovative education and global collaboration.' />

            <div class="fade-in py-14 px-28 flex flex-col gap-10 bg-[#F7FFFA]">
                
                <x-pagination-s2mfk-education active="competency" />

                <div class="w-full flex flex-col gap-10 pt-2">
                    
                    <div class="flex flex-col gap-4">
                        <h2 class="text-3xl font-medium text-[#1E293B]">General Competency</h2>
                        <div class="text-[#475569] text-sm leading-relaxed">
                            <p class="mb-4">Pada akhir pendidikan, lulusan Program Studi Pendidikan Apoteker / Jenjang Sarjana diharapkan mampu menunjukkan sikap :</p>
                            <ol class="pl-6 space-y-1">
                                <li>Bertaqwa kepada Tuhan Yang Maha Esa dan mampu menunjukkan sikap religius;</li>
                                <li>Menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan ajaran agama, moral, dan etika;</li>
                                <li>Berperan sebagai warga negara yang bangga dan cinta tanah air, memiliki nasionalisme serta rasa tanggungjawab pada negara dan bangsa;</li>
                                <li>Mampu berkontribusi dalam peningkatan mutu kehidupan bermasyarakat, berbangsa, dan bernegara;</li>
                                <li>Mampu bekerja sama dan memiliki kepekaan sosial serta kepedulian terhadap masyarakat dan lingkungan;</li>
                                <li>Menghargai keanekaragaman budaya, pandangan, agama, dan kepercayaan, serta pendapat atau temuan orisinal orang lain;</li>
                                <li>Taat hukum dan disiplin dalam kehidupan bermasyarakat dan bernegara.</li>
                                <li>Menunjukkan sikap bertanggung jawab atas pekerjaan di bidang keahliannya secara mandiri</li>
                                <li>Menginternalisasi nilai, norma, etika akademik;</li>
                                <li>Menginternalisasi semangat kemandirian, kejuangan, dan kewirausahaan.</li>
                            </ol>
                        </div>
                    </div>

                    <div class="flex flex-col gap-4">
                        <h2 class="text-3xl font-medium text-[#1E293B]">Graduate Profile</h2>
                        <div class="text-[#475569] text-sm leading-relaxed">
                            <ol class="pl-6 space-y-1">
                                <li>Caregiver: MFK graduates are able to provide pharmaceutical care to patients and interact professionally with healthcare professionals.</li>
                                <li>Educator: MFK graduates are able to provide education on the wise use of medications to patients, their families, and colleagues.</li>
                                <li>Communicator: MFK graduates are able to communicate effectively with patients, their families, the community, and healthcare professionals.</li>
                                <li>Decisionmaker: MFK graduates are able to make clinical pharmacy decisions based on their knowledge, experience, and skills.</li>
                                <li>Researcher: MFK graduates are able to develop research in their work environment related to the field of clinical pharmacy.</li>
                                <li>Leader: MFK graduates are able to become leaders with a clear vision and mission and are able to navigate multidisciplinary service situations, enabling them to make decisions, communicate, and manage effectively.</li>
                                <li>Manager: MFK graduates are able to effectively lead and manage resources (human, physical, and fiscal) and information to provide optimal service</li>
                                <li>Entrepreneur: MFK graduates are able to maintain a position and advance their careers to the highest level, developing their potential in any work environment. Lifelong learners: MFK graduates are able to continuously develop themselves and independently improve their clinical pharmacy knowledge.</li>
                                <li>Agents of positive change: MFK graduates are able to act positively and influence those around them.</li>
                            </ol>
                        </div>
                    </div>

                    <div class="flex flex-col gap-6 pt-6">
                        <h2 class="text-3xl font-medium text-[#1E293B]">Learning Outcome</h2>

                        <div class="fade-in block w-full mt-4">
                            <div class="rounded-xl overflow-hidden border border-gray-200 shadow-sm bg-white">
                                <div class="bg-[#2F5DA9] text-white flex px-6 py-4 font-medium text-sm">
                                    <div class="w-16">No</div>
                                    <div class="flex-1 text-center">Capaian Pembelajaran Lulusan (CPL)</div>
                                </div>
                                <div class="flex flex-col text-sm text-[#475569]">
                                    
                                    <div class="flex px-6 py-5 border-b border-gray-100 bg-[#F8FAFC]">
                                        <div class="w-16 text-center text-gray-500 font-medium pt-1">1</div>
                                        <div class="flex-1 leading-relaxed">Melaksanakan kinerja yang mandiri, terukur, dan bermutu, bekerja dalam tim, melakukan supervisi kepada tenaga yang berada di bawah tanggung jawabnya, mengembangkan jaringan kerja, dan mengelola pembelajaran mandiri dalam mengikuti perkembangan ilmu pengetahuan dan teknologi di bidang kefarmasian</div>
                                    </div>
                                    
                                    <div class="flex px-6 py-5 border-b border-gray-100 bg-white">
                                        <div class="w-16 text-center text-gray-500 font-medium pt-1">2</div>
                                        <div class="flex-1 leading-relaxed">Mengambil keputusan yang tepat dalam melakukan pengawasan dan penilaian pekerjaan kefarmasian melalui pemikiran yang logis, sistematis, dan inovatif yang dilandasi analisis data, peraturan perundang-undangan, kode etik profesi, dan moral agama.</div>
                                    </div>

                                    <div class="flex px-6 py-5 border-b border-gray-100 bg-[#F8FAFC]">
                                        <div class="w-16 text-center text-gray-500 font-medium pt-1">3</div>
                                        <div class="flex-1 leading-relaxed">Melaksanakan kinerja yang mandiri, terukur, dan bermutu, bekerja dalam tim, melakukan supervisi kepada tenaga yang berada di bawah tanggung jawabnya, mengembangkan jaringan kerja, dan mengelola pembelajaran mandiri dalam mengikuti perkembangan ilmu pengetahuan dan teknologi di bidang kefarmasian</div>
                                    </div>

                                    <div class="flex px-6 py-5 border-b border-gray-100 bg-white">
                                        <div class="w-16 text-center text-gray-500 font-medium pt-1">4</div>
                                        <div class="flex-1 leading-relaxed">Mengambil keputusan yang tepat dalam melakukan pengawasan dan penilaian pekerjaan kefarmasian melalui pemikiran yang logis, sistematis, dan inovatif yang dilandasi analisis data, peraturan perundang-undangan, kode etik profesi, dan moral agama.</div>
                                    </div>

                                    <div class="flex px-6 py-5 border-b border-gray-100 bg-[#F8FAFC]">
                                        <div class="w-16 text-center text-gray-500 font-medium pt-1">5</div>
                                        <div class="flex-1 leading-relaxed">Melaksanakan kinerja yang mandiri, terukur, dan bermutu, bekerja dalam tim, melakukan supervisi kepada tenaga yang berada di bawah tanggung jawabnya, mengembangkan jaringan kerja, dan mengelola pembelajaran mandiri dalam mengikuti perkembangan ilmu pengetahuan dan teknologi di bidang kefarmasian</div>
                                    </div>

                                    <div class="flex px-6 py-5 border-b border-gray-100 bg-white">
                                        <div class="w-16 text-center text-gray-500 font-medium pt-1">6</div>
                                        <div class="flex-1 leading-relaxed">Mengambil keputusan yang tepat dalam melakukan pengawasan dan penilaian pekerjaan kefarmasian melalui pemikiran yang logis, sistematis, dan inovatif yang dilandasi analisis data, peraturan perundang-undangan, kode etik profesi, dan moral agama.</div>
                                    </div>

                                    <div class="flex px-6 py-5 border-b border-gray-100 bg-[#F8FAFC]">
                                        <div class="w-16 text-center text-gray-500 font-medium pt-1">7</div>
                                        <div class="flex-1 leading-relaxed">Melaksanakan kinerja yang mandiri, terukur, dan bermutu, bekerja dalam tim, melakukan supervisi kepada tenaga yang berada di bawah tanggung jawabnya, mengembangkan jaringan kerja, dan mengelola pembelajaran mandiri dalam mengikuti perkembangan ilmu pengetahuan dan teknologi di bidang kefarmasian</div>
                                    </div>

                                    <div class="flex px-6 py-5 bg-white">
                                        <div class="w-16 text-center text-gray-500 font-medium pt-1">8</div>
                                        <div class="flex-1 leading-relaxed">Mengambil keputusan yang tepat dalam melakukan pengawasan dan penilaian pekerjaan kefarmasian melalui pemikiran yang logis, sistematis, dan inovatif yang dilandasi analisis data, peraturan perundang-undangan, kode etik profesi, dan moral agama.</div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            
            <x-footer />
        </div>
    </div>

    <script>
        function switchOutcomeTab(tab) {
            const btnBachelor = document.getElementById('btn-bachelor');
            const btnApo = document.getElementById('btn-apothecary');
            const contentBachelor = document.getElementById('content-bachelor');
            const contentApo = document.getElementById('content-apothecary');

            const toggleActive = "bg-[#2F5DA9] text-white shadow-md";
            const toggleInactive = "text-[#2F5DA9] bg-transparent hover:bg-gray-200";

            if (tab === 'bachelor') {
                contentBachelor.classList.remove('hidden');
                contentApo.classList.add('hidden');
                
                btnBachelor.className = `flex-1 py-4 rounded-xl text-sm font-medium transition-all duration-300 ${toggleActive}`;
                btnApo.className = `flex-1 py-4 rounded-xl text-sm font-medium transition-all duration-300 ${toggleInactive}`;
            } else {
                contentApo.classList.remove('hidden');
                contentBachelor.classList.add('hidden');
                
                btnApo.className = `flex-1 py-4 rounded-xl text-sm font-medium transition-all duration-300 ${toggleActive}`;
                btnBachelor.className = `flex-1 py-4 rounded-xl text-sm font-medium transition-all duration-300 ${toggleInactive}`;
            }
        }
    </script>
</body>

</html>