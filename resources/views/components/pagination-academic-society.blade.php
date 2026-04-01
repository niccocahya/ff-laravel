@props([
    'active' => ''
])

<div class="px-6 md:px-14 lg:px-28 py-6 md:py-10 flex gap-3 md:gap-5 bg-[#F7FFFA] overflow-x-auto scrollbar-hide">

    <a href="/about-us/academic-society"
        class="whitespace-nowrap shrink-0 px-5 md:px-6 py-2 rounded-full text-sm transition-all duration-200
        {{ $active === 'practice'
    ? 'bg-[#275CAA] text-white hover:bg-[#1d4f96]'
    : 'border border-[#275CAA] text-[#275CAA] hover:bg-[#275CAA] hover:text-white' }}">
        Department of Pharmacy Practice
    </a>

    <a href="/about-us/academic-society/pharmaceutical-sciences"
        class="whitespace-nowrap shrink-0 px-5 md:px-6 py-2 rounded-full text-sm transition-all duration-200
        {{ $active === 'sciences'
    ? 'bg-[#275CAA] text-white hover:bg-[#1d4f96]'
    : 'border border-[#275CAA] text-[#275CAA] hover:bg-[#275CAA] hover:text-white' }}">
        Department of Pharmaceutical Sciences
    </a>

    <a href="/about-us/academic-society/staff"
        class="whitespace-nowrap shrink-0 px-5 md:px-6 py-2 rounded-full text-sm transition-all duration-200
        {{ $active === 'staff'
    ? 'bg-[#275CAA] text-white hover:bg-[#1d4f96]'
    : 'border border-[#275CAA] text-[#275CAA] hover:bg-[#275CAA] hover:text-white' }}">
        Staff
    </a>

</div>

<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>