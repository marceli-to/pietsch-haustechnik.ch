@props([
  'image' => '',
  'alt' => '',
])
<picture>
  <source media="(max-width: 767px)" srcset="/img/{{ $image }}-mobile.avif" type="image/avif">
  <source media="(max-width: 767px)" srcset="/img/{{ $image }}-mobile.webp" type="image/webp">
  <source media="(max-width: 767px)" srcset="/img/{{ $image }}-mobile.jpg" type="image/jpeg">
  <source srcset="/img/{{ $image }}.avif" type="image/avif">
  <source srcset="/img/{{ $image }}.webp" type="image/webp">
  <img
    src="/img/{{ $image }}.jpg"
    alt="{{ $alt }}"
    title="{{ $alt }}"
    width="1920"
    height="1080"
    class="absolute inset-0 z-0 w-full h-dvh object-cover">
</picture>
<div class="absolute inset-0 z-10 w-full h-dvh bg-gradient-y"></div>
