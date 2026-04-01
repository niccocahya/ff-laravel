@props([
    'active' => ''
])

<div class="px-6 md:px-14 lg:px-28 py-6 md:py-8 flex gap-3 md:gap-4 overflow-x-auto scrollbar-hide">
    
    <a href="/services-information/news-events/events"
        class="whitespace-nowrap shrink-0 px-6 md:px-8 py-2 rounded-full text-sm font-medium transition-all shadow-sm text-center
        {{ $active === 'events'
            ? 'bg-[#275CAA] text-white'
            : 'border border-[#275CAA] text-[#275CAA] bg-transparent hover:bg-[#275CAA] hover:text-white' }}">
        Events
    </a>

    <a href="/services-information/news-events/news"
        class="whitespace-nowrap shrink-0 px-6 md:px-8 py-2 rounded-full text-sm font-medium transition-all shadow-sm text-center
        {{ $active === 'news'
            ? 'bg-[#275CAA] text-white'
            : 'border border-[#275CAA] text-[#275CAA] bg-transparent hover:bg-[#275CAA] hover:text-white' }}">
        News
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