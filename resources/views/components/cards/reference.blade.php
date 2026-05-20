@props([
  'title' => '',
  'meta' => '',
  'images' => [],
])

<div>
  <x-gallery.carousel class="aspect-square" :images="$images">
    <div class="absolute inset-0 z-10 flex flex-col justify-end pl-30 pb-45 text-cloud bg-black/20">
      <x-headings.h3 class="text-[24px] lg:text-30 mb-5">
        {{ $title }}
      </x-headings.h3>
      <p class="text-[16px]">
        {!! $meta !!}
      </p>
    </div>
  </x-gallery.carousel>
  <x-bar class="h-10 hidden lg:block" />
</div>
