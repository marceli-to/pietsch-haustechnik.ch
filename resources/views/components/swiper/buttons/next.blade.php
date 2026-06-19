@props([
  'class' => '',
])

<button aria-label="Nächstes Bild" class="swiper-button-next absolute top-1/2 right-30 -translate-y-1/2 z-10 cursor-pointer w-34 h-34 flex items-center justify-center rounded-full text-cloud bg-navy transition-colors {{ $class }}">
  <x-icons.chevron-right class="w-9 h-auto -mr-3" />
</button>
