@props([
  'title' => '',
  'description' => '',
  'last' => false,
])
<div>
  @if($title)
    <x-headings.h3 class="mb-5">
      {{ $title }}
    </x-headings.h3>
  @endif
  <x-bar class="h-6 max-w-250 mx-auto my-15" />
  @if($description)
    <p class="text-center text-pretty">
      {{ $description }}
    </p>
  @endif
 

</div>