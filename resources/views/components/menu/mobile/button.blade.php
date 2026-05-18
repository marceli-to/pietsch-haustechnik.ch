<button 
  @click="menu = !menu" 
  class="md:hidden fixed top-10 right-0 w-28 h-28 {{ $class ?? '' }}">
  <x-icons.burger class="w-full h-auto" />
</button>