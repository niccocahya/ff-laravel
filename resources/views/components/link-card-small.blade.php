@props([
    'title',
    'id' => uniqid(),
    'href' => '#'
])

<div class="w-full flex flex-col gap-2 md:gap-3 items-center" id="accordion-{{ $id }}">
    
    <a 
        href="{{ $href }}"
        onclick="toggleAccordion{{ $id }}()"
        class="flex items-start md:items-center justify-between w-full gap-4 md:gap-10 text-left cursor-pointer group"
    >
        <div class="w-full flex flex-col gap-2 md:gap-3 pr-2 md:pr-0">
            <h3 class="text-lg md:text-xl lg:text-2xl font-medium text-gray-800 group-hover:text-[#275CAA] transition-colors duration-200">
                {{ $title }}
            </h3>
        </div>

        <svg 
            id="icon-{{ $id }}"
            class="w-8 h-8 md:w-10 md:h-10 lg:w-[44px] lg:h-[44px] shrink-0 transform transition-all duration-300 rotate-[-45deg] text-[#0a0000] group-hover:text-[#275CAA] group-hover:translate-x-1 group-hover:-translate-y-1 mt-0.5 md:mt-0"
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 256 256"
        >
            <path
                d="M128,28A100,100,0,1,0,228,128,100.11,100,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z">
            </path>
        </svg>
    </a>
    
    <div class="w-full mt-1 md:mt-2 bg-black h-[1px] rounded-full opacity-30 group-hover:opacity-50 transition-opacity"></div>

</div>