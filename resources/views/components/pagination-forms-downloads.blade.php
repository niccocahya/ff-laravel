@props([
    'active' => ''
])

<div class="px-28 py-8 flex gap-4 bg-[#F7FFFA]">
    <a href="/services-information/forms-downloads/forms"
        class="px-8 py-2 rounded-full text-sm font-medium transition-all shadow-sm text-center
        {{ $active === 'forms'
            ? 'bg-[#275CAA] text-white'
            : 'border border-[#275CAA] text-[#275CAA] bg-white hover:bg-[#275CAA] hover:text-white' }}">
        Forms
    </a>

    <a href="/services-information/forms-downloads/downloads"
        class="px-8 py-2 rounded-full text-sm font-medium transition-all shadow-sm text-center
        {{ $active === 'downloads'
            ? 'bg-[#275CAA] text-white'
            : 'border border-[#275CAA] text-[#275CAA] bg-white hover:bg-[#275CAA] hover:text-white' }}">
        Downloads
    </a>
</div>