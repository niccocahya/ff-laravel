@props([
    'title',
    'id' => uniqid(),
    'href' => '#'
])

<div class="w-full flex flex-col gap-3 items-center" id="accordion-{{ $id }}">
    
    <a 
    href="{{ $href }}"
        onclick="toggleAccordion{{ $id }}()"
        class="flex items-center justify-between w-full gap-10 text-left"
    >
        <div class="w-full flex flex-col gap-3">
            <h1 class="text-2xl">
                {{ $title }}
            </h1>
        </div>

        <svg 
            id="icon-{{ $id }}"
            class="transform transition-all duration-200 rotate-[-45deg]"
            xmlns="http://www.w3.org/2000/svg"
            width="44"
            height="44"
            fill="#0a0000"
            viewBox="0 0 256 256"
        >
            <path
                d="M128,28A100,100,0,1,0,228,128,100.11,100,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z">
            </path>
        </svg>
    </a>
</div>