@props([
    'active' => ''
])

<div class="sub-page flex gap-5 px-28 py-10">
    <a href="/services-information/news-events/events"
        class="px-6 py-2 rounded-full text-sm transition-all duration-200
        {{ $active === 'events'
            ? 'bg-[#275CAA] text-white'
            : 'border border-[#275CAA] text-[#275CAA] bg-transparent hover:bg-[#275CAA] hover:text-white' }}">
        Events
    </a>

    <a href="/services-information/news-events/news"
        class="px-6 py-2 rounded-full text-sm transition-all duration-200
        {{ $active === 'news'
            ? 'bg-[#275CAA] text-white'
            : 'border border-[#275CAA] text-[#275CAA] bg-transparent hover:bg-[#275CAA] hover:text-white' }}">
        News
    </a>
</div>