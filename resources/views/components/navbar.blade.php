<nav id="main-nav"
    class="fixed top-0 left-0 w-full h-16 bg-[#275CAA] flex flex-col p-3 px-10 md:px-20 transition-all duration-500 ease-in-out z-50 overflow-hidden">

    <div class="flex flex-row justify-between items-center w-full h-10 min-h-[40px]">
        <a href="/">
            <img src="{{ asset('images/logo-ff.png') }}" alt="logo-ff" class="h-8 w-auto">
        </a>

        <div class="nav-right flex items-center gap-4">
            <div class="lang flex text-xs gap-1 items-center text-[#F7FFFA]">
                <a href="#" class="font-semibold hover:underline underline-offset-2">EN</a>
                <h1>|</h1>
                <a href="#" class="hover:underline underline-offset-2">ID</a>
            </div>
            <a href="https://ppmb.unair.ac.id/">
                <button
                    class="hidden md:block px-8 bg-[#F7FFFA] border border-transparent hover:border-[#F7FFFA] hover:text-[#F7FFFA] transition-all duration-200 hover:bg-[#275CAA] text-[#275CAA] rounded-lg font-semibold p-1.5">
                    Apply Now
                </button>
            </a>

            <div id="menu-btn" class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                    stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="transition-transform duration-300">
                    <path id="line1" d="M4 6h16" class="transition-all duration-300 ease-in-out origin-center" />
                    <path id="line2" d="M4 12h16" class="transition-all duration-300 ease-in-out origin-center" />
                    <path id="line3" d="M4 18h16" class="transition-all duration-300 ease-in-out origin-center" />
                </svg>
            </div>
        </div>
    </div>

    <div id="menu-content"
        class="opacity-0 invisible w-full transition-all py-14 duration-500 flex justify-between flex-grow gap-8 text-[#F7FFFA] overflow-y-auto h-full overscroll-contain scrollbar-hide">
        <div class="nav-menu-left w-[30%] pl-14 flex flex-col gap-7">
            <a href="https://unair.ac.id/" class="font-light underline-offset-3 hover:underline">UNAIR's Official
                Website</a>
            <div class="acad-portals flex flex-col">
                <h1 class="text-xl font-medium">Academic Portals</h1>
                <a href="https://mahasiswa.unair.ac.id/"
                    class="font-light underline-offset-3 hover:underline">Cybercampus</a>
                <a href="https://hebat.elearning.unair.ac.id/"
                    class="font-light underline-offset-3 hover:underline">Hebat e-learning</a>
            </div>
            <div class="students-portals flex flex-col">
                <h1 class="text-xl font-medium">Students Portals</h1>
                <a href="https://ailis.lib.unair.ac.id/" class="font-light underline-offset-3 hover:underline">Airlangga
                    Integrated Library Systems</a>
                <a href="https://pusatbahasa.unair.ac.id/" class="font-light underline-offset-3 hover:underline">Pusat
                    Bahasa dan Multibudaya</a>
                <a href="https://ff.unair.ac.id/susiakad/"
                    class="font-light underline-offset-3 hover:underline">SUSIAKAD</a>
            </div>
            <div class="lecturer-portals flex flex-col">
                <h1 class="text-xl font-medium">Lecturer Portals</h1>
                <a href="https://bima.kemdiktisaintek.go.id/"
                    class="font-light underline-offset-3 hover:underline">BIMA</a>
                <a href="https://amerta.lppm.unair.ac.id/"
                    class="font-light underline-offset-3 hover:underline">AMERTA</a>
                <a href="https://sister.kemdiktisaintek.go.id/beranda"
                    class="font-light underline-offset-3 hover:underline">SISTER</a>
                <a href="https://e-ipki.ppjpi.unair.ac.id/"
                    class="font-light underline-offset-3 hover:underline">E-IPKI</a>
                <a href="https://sinta.kemdiktisaintek.go.id/"
                    class="font-light underline-offset-3 hover:underline">SINTA</a>
            </div>
            <div class="quick-links flex flex-col">
                <h1 class="text-xl font-medium">Quick Links</h1>
                <a href="/services-information/forms-downloads/forms"
                    class="font-light underline-offset-3 hover:underline">Accreditation</a>
                <a href="/faculty-profile/integrity-zone"
                    class="font-light underline-offset-3 hover:underline">Integrity Zone</a>
                <a href="/services-information/PPID" class="font-light underline-offset-3 hover:underline">PPID</a>
                <a href="/academics/calendar-schedule" class="font-light underline-offset-3 hover:underline">Academic
                    Calendar</a>
            </div>
        </div>
        <div class="nav-menu-right border-l-[1px] h-full border-white flex-1 flex flex-col">
            <x-nav-accordion title="About Us" :items="[
        ['label' => 'Faculty Profile', 'link' => '/about-us/faculty-profile'],
        ['label' => 'Leadership and Organization', 'link' => '/about-us/leadership-organization'],
        ['label' => 'Academic Society', 'link' => '/about-us/academic-society'],
        ['label' => 'Facilities and Units', 'link' => '/about-us/facilities-units'],
        ['label' => 'Partnerships', 'link' => '/about-us/partnerships'],
    ]" />
            <x-nav-accordion title="Academics" :items="[
        ['label' => 'Bachelor of Pharmacy and Apothecary Professional Education', 'link' => '#'],
        ['label' => 'Master of Clinical Pharmacy', 'link' => '/#'],
        ['label' => 'Master of Pharmaceutical Sciences', 'link' => '#'],
        ['label' => 'Doctor of Pharmaceutical Sciences', 'link' => '#'],
        ['label' => 'Calendar and Schedule', 'link' => '/academics/calendar-schedule'],
    ]" />
            <x-nav-accordion title="Students & Alumni" :items="[
        ['label' => 'Student Organizations', 'link' => '/students-alumni/students-organization'],
        ['label' => 'Student Information', 'link' => '/students-alumni/students-information'],
        ['label' => 'Alumnipedia', 'link' => 'https://alumni.unair.ac.id/'],
        ['label' => 'FarmaPos Magazine', 'link' => 'https://ff.unair.ac.id/files/content/1749807704-25-Majalah-Farmapos-ed-39.pdf'],
    ]" />
            <x-nav-accordion title="Research & Community Service" :items="[
        ['label' => 'Research Group', 'link' => '/research-publication/research-groups'],
        ['label' => 'Community Services', 'link' => '/research-publication/community-services'],
        ['label' => 'Publication and Intellectual Property Rights', 'link' => '/research-publication/publication-and-IPR'],
        ['label' => 'Journals', 'link' => '/research-publication/journals'],
        ['label' => 'Ethics', 'link' => '/research-publication/ethics'],
    ]" />
            <x-nav-accordion title="Services & Information " :items="[
        ['label' => 'News & Events', 'link' => '/services-information/news-events/events'],
        ['label' => 'Survey & Evaluation', 'link' => '/services-information/survey-evaluation'],
        ['label' => 'Public Services', 'link' => '/services-information/public-services'],
        ['label' => 'Forms & Downloads', 'link' => '/services-information/forms-downloads/forms'],
        ['label' => 'PPID', 'link' => '/services-information/PPID'],
        ['label' => 'Important Links', 'link' => '/services-information/important-links'],
    ]" />
        </div>
    </div>
</nav>

<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>
<script>
    function toggleNavAccordion(header) {
        const content = header.nextElementSibling;
        const arrow = header.querySelector('.arrow');

        if (content.style.maxHeight) {
            content.style.maxHeight = null;
            arrow.classList.remove('rotate-90');
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
            arrow.classList.add('rotate-90');
        }
    }

    const menuBtn = document.getElementById('menu-btn');
    const mainNav = document.getElementById('main-nav');
    const menuContent = document.getElementById('menu-content');
    const line1 = document.getElementById('line1');
    const line2 = document.getElementById('line2');
    const line3 = document.getElementById('line3');

    menuBtn.addEventListener('click', () => {
        mainNav.classList.toggle('h-16');
        mainNav.classList.toggle('h-screen');

        menuContent.classList.toggle('opacity-0');
        menuContent.classList.toggle('invisible');
        menuContent.classList.toggle('opacity-100');
        menuContent.classList.toggle('visible');

        if (mainNav.classList.contains('h-screen')) {
            line1.setAttribute('d', 'M6 6L18 18');  
            line2.setAttribute('d', 'M6 6L18 18'); 
            line3.setAttribute('d', 'M6 18L18 6'); 

            line1.style.opacity = '1';
            line2.style.opacity = '0';
            line3.style.opacity = '1';

            line1.style.transform = 'rotate(0deg)';
            line3.style.transform = 'rotate(0deg)';
        } else {
            line1.setAttribute('d', 'M4 6h16');   
            line2.setAttribute('d', 'M4 12h16'); 
            line3.setAttribute('d', 'M4 18h16'); 

            line1.style.opacity = '1';
            line2.style.opacity = '1';
            line3.style.opacity = '1';

            line1.style.transform = '';
            line3.style.transform = '';
        }
    });
</script>