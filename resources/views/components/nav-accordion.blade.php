@props([
    'title' => '',
    'items' => []
])

<div class="w-full px-7 py-5 border-b border-white">
    <div onclick="toggleNavAccordion(this)"
        class="flex justify-between items-center cursor-pointer select-none">

        <h1 class="text-xl">{{ $title }}</h1>

        <svg class="arrow transition-transform duration-300"
            xmlns="http://www.w3.org/2000/svg"
            width="26"
            height="26"
            fill="#ffffff"
            viewBox="0 0 256 256">
            <path d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z"></path>
        </svg>
    </div>

    <div class="accordion-content overflow-hidden transition-all duration-500 ease-in-out max-h-0">
        <div class="flex flex-col gap-3 mt-4">
            @foreach($items as $item)
                <a href="{{ $item['link'] }}"
                   class="font-light underline-offset-3 hover:underline">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>
    </div>
</div>