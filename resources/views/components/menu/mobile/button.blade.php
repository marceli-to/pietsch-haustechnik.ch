<button 
  @click="menu = !menu" 
  class="cursor-pointer flex items-center justify-end md:hidden fixed top-70 right-0 z-50 w-60 h-50 bg-navy rounded-tl-full rounded-bl-full px-16 text-cloud {{ $class ?? '' }}"
  :class="{ 'bg-sky text-navy!': menu }">
  <x-icons.burger class="w-28 h-28" />
</button>