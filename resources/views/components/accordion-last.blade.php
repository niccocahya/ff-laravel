@props([
  'title',
  'id' => uniqid()
])

<div class="flex flex-col gap-2 md:gap-3 w-full" id="accordion-{{ $id }}">
  
  <button 
    onclick="toggleAccordion{{ $id }}()"
    class="flex justify-between items-center w-full text-left cursor-pointer gap-4"
  >
    <h1 class="text-lg md:text-xl lg:text-2xl font-medium text-gray-800 pr-2">{{ $title }}</h1>

    <svg 
      id="icon-{{ $id }}"
      class="w-8 h-8 md:w-10 md:h-10 lg:w-11 lg:h-11 shrink-0 transform transition-transform duration-300"
      xmlns="http://www.w3.org/2000/svg"
      fill="#0a0000"
      viewBox="0 0 256 256"
    >
      <path
        d="M128,28A100,100,0,1,0,228,128,100.11,100,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z">
      </path>
    </svg>
  </button>

  <div 
    id="content-{{ $id }}"
    class="overflow-hidden transition-all duration-500 ease-in-out max-h-0 text-sm md:text-base text-gray-700"
  >
    {{ $slot }}
  </div>
</div>

<script>
function toggleAccordion{{ $id }}() {
  const content = document.getElementById("content-{{ $id }}");
  const icon = document.getElementById("icon-{{ $id }}");

  // Cek apakah maxHeight sudah di-set (artinya sedang terbuka)
  if (content.style.maxHeight) {
    // Tutup accordion
    content.style.maxHeight = null;
    icon.classList.remove("rotate-90");
  } else {
    // Buka accordion sesuai dengan tinggi asli kontennya (scrollHeight)
    content.style.maxHeight = content.scrollHeight + "px";
    icon.classList.add("rotate-90");
  }
}
</script>