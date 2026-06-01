@props([
  'images' => [],
  'class' => '',
])

<div 
  data-gallery 
  class="relative {{ $class }}">
  <x-swiper.wrapper>
    @foreach($images as $image)
      <x-swiper.slide>
        <picture class="block w-full h-full">
          <source srcset="{{ $image }}.avif" type="image/avif">
          <source srcset="{{ $image }}.webp" type="image/webp">
          <img src="{{ $image }}.jpg" alt="" class="w-full h-full object-cover" />
        </picture>
      </x-swiper.slide>
    @endforeach
  </x-swiper.wrapper>
  @if(count($images) > 1)
    <x-swiper.buttons.prev class="z-40" />
    <x-swiper.buttons.next class="z-40" />
  @endif
  {{ $slot }}
  @if(count($images) > 1)
    <div class="swiper-pagination absolute bottom-15 left-0 right-0 z-40"></div>
  @endif
</div>
