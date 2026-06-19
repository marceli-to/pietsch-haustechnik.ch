@props([
  'class' => '',
])

<button class="swiper-button-prev absolute top-1/2 left-30 -translate-y-1/2 z-10 cursor-pointer w-34 h-34 flex items-center justify-center rounded-full text-cloud bg-navy transition-colors {{ $class }}">
  <x-icons.chevron-left class="w-9 h-auto -ml-3" />
</button>
