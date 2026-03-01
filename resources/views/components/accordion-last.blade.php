@props([
  'title',
  'id' => uniqid()
])

<div class="flex flex-col gap-3" id="accordion-{{ $id }}">
  
  <button 
    onclick="toggleAccordion{{ $id }}()"
    class="flex justify-between items-center w-full text-left cursor-pointer"
  >
    <h1 class="text-2xl">{{ $title }}</h1>

    <svg 
      id="icon-{{ $id }}"
      class="transform transition-transform duration-300"
      xmlns="http://www.w3.org/2000/svg"
      width="44"
      height="44"
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
    class="overflow-hidden transition-all duration-500 ease-in-out max-h-0"
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