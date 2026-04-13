@props([
    'active' => ''
])

<div class="px-6 md:px-14 lg:px-28 py-6 md:py-8 flex gap-3 md:gap-4 bg-[#F7FFFA] overflow-x-auto scrollbar-hide">
    
    <a href="/services-information/forms-downloads/forms"
        class="whitespace-nowrap shrink-0 px-6 md:px-8 py-2 rounded-full text-sm font-medium transition-all shadow-sm text-center
        {{ $active === 'forms'
            ? 'bg-[#275CAA] text-white'
            : 'border border-[#275CAA] text-[#275CAA] hover:bg-[#275CAA] hover:text-white' }}">
        Forms
    </a>

    <a href="/services-information/forms-downloads/downloads"
        class="whitespace-nowrap shrink-0 px-6 md:px-8 py-2 rounded-full text-sm font-medium transition-all shadow-sm text-center
        {{ $active === 'downloads'
            ? 'bg-[#275CAA] text-white'
            : 'border border-[#275CAA] text-[#275CAA] hover:bg-[#275CAA] hover:text-white' }}">
        Downloads
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