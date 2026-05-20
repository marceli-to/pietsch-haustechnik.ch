@props([
  'image' => '',
  'alt' => '',
  'class' => '',
  'width' => '',
  'height' => '',
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
    width="{{ $width }}"
    height="{{ $height }}"
    class="{{ $class }}">
</picture>