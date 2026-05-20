@props([
  'class' => '',
])

<button class="swiper-button-next absolute top-1/2 right-30 -translate-y-1/2 z-10 cursor-pointer w-34 h-34 flex items-center justify-center border border-cloud rounded-full text-cloud bg-navy/50 transition-colors {{ $class }}">
  <x-icons.chevron-right class="w-9 h-auto" />
</button>
