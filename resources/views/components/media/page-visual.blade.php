@props([
  'image' => '',
  'alt' => '',
])
<div class="relative w-full aspect-[390/474] md:aspect-[1920/700] overflow-hidden flex items-center justify-center">
  <img
    src="/img/{{ $image }}.jpg"
    alt="{{ $alt }}"
    title="{{ $alt }}"
    width="1920"
    height="1080"
    class="absolute inset-0 z-0 w-full h-full object-cover">
  <x-icons.logo variant="pos" class="relative z-20 md:hidden w-200 h-auto" />
</div>
<x-bar class="h-12 md:h-10" />
