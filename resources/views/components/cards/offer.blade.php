@props([
  'variant' => 'light',
  'title' => '',
  'description' => '',
  'list' => '',
])
<div class="lg:flex-1 lg:flex lg:flex-col">
  
  <div class="p-36 lg:flex-1 {{ $variant == 'dark' ? 'bg-navy text-cloud' : 'bg-cloud text-navy' }}">

    @if($title)
      <x-headings.h3 class="mb-5 lg:mb-10">
        {{ $title }}
      </x-headings.h3>
    @endif

    @if($description)
      <p class="text-center text-pretty mb-15">
        {{ $description }}
      </p>
    @endif

    @if($list)
      <p class="font-bold text-center">
        {!! $list !!}
      </p>
    @endif
  </div>

  <x-bar class="h-10 {{ $variant == 'light' ? 'lg:bg-none! lg:bg-cloud!' : '' }}" />

</div>