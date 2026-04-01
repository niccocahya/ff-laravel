@props([
    'active' => ''
])

<div class="sub-page flex gap-3 md:gap-5 px-6 md:px-14 lg:px-28 py-6 md:py-10 overflow-x-auto scrollbar-hide">

    <a href="/about-us/faculty-profile"
        class="whitespace-nowrap shrink-0 px-5 md:px-6 py-2 rounded-full text-sm transition-all duration-200
        {{ $active === 'profile'
    ? 'bg-[#275CAA] text-white'
    : 'border border-[#275CAA] text-[#275CAA] hover:bg-[#275CAA] hover:text-white' }}">
        General Profile
    </a>

    <a href="/about-us/faculty-profile/history"
        class="whitespace-nowrap shrink-0 px-5 md:px-6 py-2 rounded-full text-sm transition-all duration-200
        {{ $active === 'history'
    ? 'bg-[#275CAA] text-white'
    : 'border border-[#275CAA] text-[#275CAA] hover:bg-[#275CAA] hover:text-white' }}">
        History
    </a>

    <a href="/about-us/faculty-profile/faculty-identity"
        class="whitespace-nowrap shrink-0 px-5 md:px-6 py-2 rounded-full text-sm transition-all duration-200
        {{ $active === 'identity'
    ? 'bg-[#275CAA] text-white'
    : 'border border-[#275CAA] text-[#275CAA] hover:bg-[#275CAA] hover:text-white' }}">
        Faculty Identity
    </a>

    <a href="/about-us/faculty-profile/integrity-zone"
        class="whitespace-nowrap shrink-0 px-5 md:px-6 py-2 rounded-full text-sm transition-all duration-200
        {{ $active === 'integrity'
    ? 'bg-[#275CAA] text-white'
    : 'border border-[#275CAA] text-[#275CAA] hover:bg-[#275CAA] hover:text-white' }}">
        Integrity Zone
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