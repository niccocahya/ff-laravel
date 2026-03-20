@props([
    'title', 
    'description'
    ])

<div
    class="heroes h-[45vh] w-full gap-5 text-white bg-gradient-to-r from-[#275CAA] via-[#275CAA] to-[#2E9853] px-28 flex flex-col justify-center">
    <div class="header-top flex items-end gap-3">
        <h1 class="text-5xl font-medium tracking-[-0.04em]">{{ $title }}</h1>
    </div>
    <h1 class="w-[50%] text-justify">{{ $description }}</h1>
</div>