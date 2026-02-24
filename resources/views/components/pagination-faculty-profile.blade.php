@props([
    'active' => ''
])

<div class="sub-page flex gap-5 px-28 py-10">

    <a href="/about-us/faculty-profile"
        class="px-6 py-2 rounded-full text-sm transition-all duration-200
        {{ $active === 'profile'
    ? 'bg-[#275CAA] text-white'
    : 'border border-[#275CAA] text-[#275CAA] hover:bg-[#275CAA] hover:text-white' }}">
        General Profile
    </a>

    <a href="/about-us/faculty-profile/history"
        class="px-6 py-2 rounded-full text-sm transition-all duration-200
        {{ $active === 'history'
    ? 'bg-[#275CAA] text-white'
    : 'border border-[#275CAA] text-[#275CAA] hover:bg-[#275CAA] hover:text-white' }}">
        History
    </a>

    <a href="/about-us/faculty-profile/faculty-identity"
        class="px-6 py-2 rounded-full text-sm transition-all duration-200
        {{ $active === 'identity'
    ? 'bg-[#275CAA] text-white'
    : 'border border-[#275CAA] text-[#275CAA] hover:bg-[#275CAA] hover:text-white' }}">
        Faculty Identity
    </a>

    <a href="/about-us/faculty-profile/integrity-zone"
        class="px-6 py-2 rounded-full text-sm transition-all duration-200
        {{ $active === 'integrity'
    ? 'bg-[#275CAA] text-white'
    : 'border border-[#275CAA] text-[#275CAA] hover:bg-[#275CAA] hover:text-white' }}">
        Integrity Zone
    </a>

</div>