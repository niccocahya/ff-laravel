@props([
    'active' => ''
])

<div class="px-28 py-10 flex gap-5 bg-[#F7FFFA]">

    <a href="/about-us/facilities-units"
        class="px-6 py-2 rounded-full text-sm transition-all duration-200
        {{ $active === 'facilities'
    ? 'bg-[#275CAA] text-white hover:bg-[#1d4f96]'
    : 'border border-[#275CAA] text-[#275CAA] hover:bg-[#275CAA] hover:text-white' }}">
        Facilities
    </a>

    <a href="/about-us/facilities-units/reading-room-collection-books"
        class="px-6 py-2 rounded-full text-sm transition-all duration-200
        {{ $active === 'reading-room'
    ? 'bg-[#275CAA] text-white hover:bg-[#1d4f96]'
    : 'border border-[#275CAA] text-[#275CAA] hover:bg-[#275CAA] hover:text-white' }}">
        Reading Room Collection Books
    </a>

    <a href="/about-us/facilities-units/thesis-list-collection"
        class="px-6 py-2 rounded-full text-sm transition-all duration-200
        {{ $active === 'thesis'
    ? 'bg-[#275CAA] text-white hover:bg-[#1d4f96]'
    : 'border border-[#275CAA] text-[#275CAA] hover:bg-[#275CAA] hover:text-white' }}">
        Thesis List Collection
    </a>

    <a href="/about-us/facilities-units/apotek-farmasi"
        class="px-6 py-2 rounded-full text-sm transition-all duration-200
        {{ $active === 'pharmacy'
    ? 'bg-[#275CAA] text-white hover:bg-[#1d4f96]'
    : 'border border-[#275CAA] text-[#275CAA] hover:bg-[#275CAA] hover:text-white' }}">
        Pharmacy
    </a>

    <a href="/about-us/facilities-units/assessment-service-unit"
        class="px-6 py-2 rounded-full text-sm transition-all duration-200
        {{ $active === 'assessment'
    ? 'bg-[#275CAA] text-white hover:bg-[#1d4f96]'
    : 'border border-[#275CAA] text-[#275CAA] hover:bg-[#275CAA] hover:text-white' }}">
        Assessment Service Unit
    </a>

</div>