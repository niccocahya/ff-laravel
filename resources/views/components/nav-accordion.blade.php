@props([
    'title' => '',
    'items' => []
])

<div class="w-full px-4 md:px-7 py-4 md:py-5 border-b border-white/50 text-white">
    
    <div onclick="toggleNavAccordion(this)"
         class="flex justify-between items-center cursor-pointer select-none group">

        <span class="text-lg md:text-xl font-medium group-hover:text-gray-200 transition-colors">
            {{ $title }}
        </span>

        <svg class="arrow w-5 h-5 md:w-6 md:h-6 shrink-0 transition-transform duration-300 group-hover:text-gray-200"
             xmlns="http://www.w3.org/2000/svg"
             fill="currentColor"
             viewBox="0 0 256 256">
            <path d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z"></path>
        </svg>
    </div>

    <div class="accordion-content overflow-hidden transition-all duration-500 ease-in-out max-h-0">
        <div class="flex flex-col gap-3 mt-4 px-2">
            @foreach($items as $item)
                <a href="{{ $item['link'] }}"
                   class="text-sm md:text-base font-light underline-offset-3 hover:underline text-gray-100 hover:text-white transition-colors">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>
    </div>
</div>