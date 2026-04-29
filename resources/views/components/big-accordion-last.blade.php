@props([
 'title',
 'description' => null,
 'id' => uniqid()
])

<div class="w-full flex flex-col gap-4 md:gap-5" id="accordion-{{ $id }}">
 
 <button 
  onclick="toggleAccordion{{ $id }}()"
  class="flex items-start md:items-center justify-between w-full gap-4 md:gap-10 text-left cursor-pointer"
 >
  <div class="w-full md:w-[70%] lg:w-[40%] flex flex-col gap-2 md:gap-5 pr-2 md:pr-0">
   <h1 class="text-2xl md:text-3xl lg:text-4xl font-medium text-gray-800">
    {{ $title }}
   </h1>

   @if($description)
<p class="text-sm md:text-base text-justify text-gray-600">
    {{ $description }}
</p>
@endif
  </div>

  <svg 
   id="icon-{{ $id }}"
   class="w-10 h-10 md:w-14 md:h-14 lg:w-[60px] lg:h-[60px] shrink-0 transform transition-transform duration-300 mt-1 md:mt-0"
   xmlns="http://www.w3.org/2000/svg"
   fill="#0a0000"
   viewBox="0 0 256 256"
  >
   <path
    d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z">
   </path>
  </svg>
 </button>

  <div 
  id="content-{{ $id }}"
  class="w-full overflow-hidden transition-all duration-500 ease-in-out max-h-0 text-sm md:text-base text-gray-700"
 >
  {{ $slot }}
 </div>

</div>

<script>
function toggleAccordion{{ $id }}() {
 const content = document.getElementById("content-{{ $id }}");
 const icon = document.getElementById("icon-{{ $id }}");

 if (content.style.maxHeight) {
  content.style.maxHeight = null;
  icon.classList.remove("rotate-90");
 } else {
  content.style.maxHeight = content.scrollHeight + "px";
  icon.classList.add("rotate-90");
 }
}
</script>