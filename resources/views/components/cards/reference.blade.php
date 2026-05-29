@props([
  'title' => '',
  'meta' => '',
  'images' => [],
])

<div>
  <x-gallery.carousel class="aspect-square" :images="$images">
    <div class="absolute inset-0 z-10 flex flex-col justify-end pl-30 pb-45 text-cloud bg-gradient-to-t from-black/80 via-black/30 to-transparent">
      <x-headings.h3 class="mb-5 text-left!">
        {{ $title }}
      </x-headings.h3>
      <p class="text-[16px]">
        {!! $meta !!}
      </p>
    </div>
  </x-gallery.carousel>
  <x-bar class="h-10 hidden lg:block" />
</div>
