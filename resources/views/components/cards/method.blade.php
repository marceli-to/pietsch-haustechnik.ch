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
  
  @if($description)
    <p class="text-center text-pretty">
      {{ $description }}
    </p>
  @endif
  
  @if(!$last)
    <x-bar class="h-6 max-w-250 mx-auto mt-30 lg:mt-50" />
  @endif
</div>