@props([
    'active' => ''
])

<div class="px-28 py-8 flex gap-4">
    <a href="/services-information/news-events/events"
        class="px-8 py-2 rounded-full text-sm font-medium transition-all shadow-sm text-center
        {{ $active === 'events'
            ? 'bg-[#275CAA] text-white'
            : 'border border-[#275CAA] text-[#275CAA] bg-white hover:bg-[#275CAA] hover:text-white' }}">
        Events
    </a>

    <a href="/services-information/news-events/news"
        class="px-8 py-2 rounded-full text-sm font-medium transition-all shadow-sm text-center
        {{ $active === 'news'
            ? 'bg-[#275CAA] text-white'
            : 'border border-[#275CAA] text-[#275CAA] bg-white hover:bg-[#275CAA] hover:text-white' }}">
        News
    </a>
</div>