@props([
    'active' => ''
])

<div class="w-full flex gap-3 md:gap-4 justify-start mb-6 overflow-x-auto scrollbar-hide pb-2 px-1">
    
    <a href="/s3dif/education"
        class="whitespace-nowrap shrink-0 px-6 py-2 rounded-full text-sm font-base transition-all shadow-sm text-center
        {{ $active === 'curriculum'
            ? 'bg-[#275CAA] text-white hover:bg-[#1d4f96]'
            : 'border border-[#275CAA] text-[#275CAA] bg-transparent hover:bg-[#275CAA] hover:text-white' }}">
        Curriculum Structure
    </a>

    <a href="/s3dif/education/competency"
        class="whitespace-nowrap shrink-0 px-6 py-2 rounded-full text-sm font-base transition-all shadow-sm text-center
        {{ $active === 'competency'
            ? 'bg-[#275CAA] text-white hover:bg-[#1d4f96]'
            : 'border border-[#275CAA] text-[#275CAA] bg-transparent hover:bg-[#275CAA] hover:text-white' }}">
        Competency
    </a>

    <a href="/s3dif/education/staff"
        class="whitespace-nowrap shrink-0 px-6 py-2 rounded-full text-sm font-base transition-all shadow-sm text-center
        {{ $active === 'staff'
            ? 'bg-[#275CAA] text-white hover:bg-[#1d4f96]'
            : 'border border-[#275CAA] text-[#275CAA] bg-transparent hover:bg-[#275CAA] hover:text-white' }}">
        Educational Staff
    </a>

    <a href="/s3dif/education/scholarship"
        class="whitespace-nowrap shrink-0 px-6 py-2 rounded-full text-sm font-base transition-all shadow-sm text-center
        {{ $active === 'scholarship'
            ? 'bg-[#275CAA] text-white hover:bg-[#1d4f96]'
            : 'border border-[#275CAA] text-[#275CAA] bg-transparent hover:bg-[#275CAA] hover:text-white' }}">
        Scholarship
    </a>

    <a href="/s3dif/education/promotor"
        class="whitespace-nowrap shrink-0 px-6 py-2 rounded-full text-sm font-base transition-all shadow-sm text-center
        {{ $active === 'promotor'
            ? 'bg-[#275CAA] text-white hover:bg-[#1d4f96]'
            : 'border border-[#275CAA] text-[#275CAA] bg-transparent hover:bg-[#275CAA] hover:text-white' }}">
        Promotor
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