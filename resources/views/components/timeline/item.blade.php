@props([
  'title' => '',
  'description' => '',
  'last' => false
])
<div class="max-w-md mx-auto mb-5">
  <x-headings.h3>
    {{ $title }}
  </x-headings.h3>
  <p class="text-center text-pretty">
    {{ $description }}
  </p>
  @unless($last)
    <x-bar class="h-70 w-6 mx-auto mt-20" variant="y" />
  @endunless
</div>
