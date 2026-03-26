@props([
    'active' => ''
])

<div class="w-full flex gap-5 mb-6">
    <a href="/sarjana/education"
        class="px-6 py-2 rounded-full text-sm font-base transition-all shadow-sm text-center
        {{ $active === 'curriculum'
            ? 'bg-[#275CAA] text-white hover:bg-[#1d4f96]'
            : 'border border-[#275CAA] text-[#275CAA] bg-transparent hover:bg-[#275CAA] hover:text-white' }}">
        Curriculum Structure
    </a>

    <a href="/sarjana/education/competency"
        class="px-6 py-2 rounded-full text-sm font-base transition-all shadow-sm text-center
        {{ $active === 'competency'
            ? 'bg-[#275CAA] text-white hover:bg-[#1d4f96]'
            : 'border border-[#275CAA] text-[#275CAA] bg-transparent hover:bg-[#275CAA] hover:text-white' }}">
        Competency
    </a>

    <a href="/sarjana/education/scholarship"
        class="px-6 py-2 rounded-full text-sm font-base transition-all shadow-sm text-center
        {{ $active === 'scholarship'
            ? 'bg-[#275CAA] text-white hover:bg-[#1d4f96]'
            : 'border border-[#275CAA] text-[#275CAA] bg-transparent hover:bg-[#275CAA] hover:text-white' }}">
        Scholarship
    </a>
</div>