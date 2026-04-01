@props([
    'title',
    'description' => null, 
    'href' => '#'
])

<a 
    href="{{ $href }}"
    class="w-full flex items-start md:items-center justify-between gap-4 md:gap-10 group cursor-pointer"
>
    <div class="w-full flex flex-col gap-2 md:gap-4 pr-2 md:pr-0">
        <h3 class="text-2xl md:text-3xl lg:text-4xl font-medium text-gray-800 group-hover:text-[#275CAA] transition-colors duration-200">
            {{ $title }}
        </h3>

        {{-- Cek apakah description ada isinya --}}
        @if($description)
            <p class="text-sm md:text-base text-justify text-gray-600 leading-relaxed">
                {{ $description }}
            </p>
        @endif
    </div>

    <svg 
        class="w-10 h-10 md:w-14 md:h-14 lg:w-[60px] lg:h-[60px] shrink-0 rotate-[-45deg] text-[#0a0000] group-hover:text-[#275CAA] group-hover:translate-x-1 group-hover:-translate-y-1 transform transition-all duration-300 mt-1 md:mt-0"
        xmlns="http://www.w3.org/2000/svg"
        fill="currentColor"
        viewBox="0 0 256 256"
    >
        <path
            d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z">
        </path>
    </svg>
</a>