@props([
    'tabs' => [] // format: ['key' => 'Label']
])

@php
$componentId = uniqid('tabs_');
$firstKey = array_key_first($tabs);
@endphp

<div id="{{ $componentId }}" class="w-full">
    <div class="pb-5">
        <div class="w-full bg-[#EEF2EE] rounded-2xl shadow-sm p-1 flex overflow-x-auto scrollbar-hide">

            @foreach($tabs as $key => $label)
                <button
                    data-tab="{{ $key }}"
                    class="tab-btn flex-1 min-w-fit whitespace-nowrap px-6 py-4 rounded-xl text-sm font-medium transition-all duration-300
                    {{ $key === $firstKey ? 'bg-[#2F5DA9] text-white shadow-md' : 'text-gray-700 hover:bg-gray-200' }}"
                >
                    {{ $label }}
                </button>
            @endforeach

        </div>
    </div>

    {{-- TAB CONTENT --}}
    <div class="tab-content-wrapper">
        {{ $slot }}
    </div>

</div>

<style>
    /* Menyembunyikan scrollbar agar UI tetap bersih saat di-scroll menyamping */
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const container = document.getElementById("{{ $componentId }}");
    const buttons = container.querySelectorAll(".tab-btn");
    
    // Perbaikan: gunakan class selector yang tepat untuk content
    // Pastikan di dalam slot, div content memiliki class 'tab-content'
    const contents = container.querySelectorAll(".tab-content");

    buttons.forEach(btn => {
        btn.addEventListener("click", function () {

            const target = this.getAttribute("data-tab");

            // RESET semua button ke inactive
            buttons.forEach(b => {
                b.classList.remove("bg-[#2F5DA9]", "text-white", "shadow-md");
                b.classList.add("text-gray-700", "hover:bg-gray-200");
            });

            // ACTIVE button yang diklik
            this.classList.add("bg-[#2F5DA9]", "text-white", "shadow-md");
            this.classList.remove("text-gray-700", "hover:bg-gray-200");

            // Hide semua content (Gunakan looping manual agar lebih aman)
            contents.forEach(c => {
                c.classList.add("hidden");
            });

            // Show selected content
            const targetContent = container.querySelector(`#content-${target}`);
            if (targetContent) {
                targetContent.classList.remove("hidden");
            }
        });
    });
});
</script>