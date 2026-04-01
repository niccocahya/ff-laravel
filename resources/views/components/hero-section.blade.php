@props([
    'title',
    'description'
])
<div
    class="heroes min-h-[40vh] lg:h-[45vh] py-16 lg:py-0 w-full gap-4 md:gap-5 text-white bg-gradient-to-r from-[#275CAA] via-[#275CAA] to-[#2E9853] px-6 md:px-14 lg:px-28 flex flex-col justify-center">
    
    <div class="header-top flex items-end gap-3">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-medium leading-tight">
        {{ $title }}
        </h1>
    </div>
    
<p class="w-full md:w-[80%] lg:w-[50%] text-sm md:text-base text-justify leading-relaxed text-gray-100">
        {{ $description }}
    </p>
    
</div>