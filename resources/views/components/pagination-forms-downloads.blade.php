@props([
    'active' => ''
])

<div class="sub-page flex gap-5 px-28 py-10">
    <a href="/services-information/forms-downloads/forms"
        class="px-6 py-2 rounded-full text-sm transition-all duration-200
        {{ $active === 'forms'
            ? 'bg-[#275CAA] text-white'
            : 'border border-[#275CAA] text-[#275CAA] hover:bg-[#275CAA] hover:text-white' }}">
        Forms
    </a>

    <a href="/services-information/forms-downloads/downloads"
        class="px-6 py-2 rounded-full text-sm transition-all duration-200
        {{ $active === 'downloads'
            ? 'bg-[#275CAA] text-white'
            : 'border border-[#275CAA] text-[#275CAA] hover:bg-[#275CAA] hover:text-white' }}">
        Downloads
    </a>
</div>