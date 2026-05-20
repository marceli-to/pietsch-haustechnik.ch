@props([
  'href' => '',
  'tag' => 'a',
  'target' => '_self',
  'rel' => '',
  'title' => '',
  'type' => 'button',
  'variant' => 'dark'
])

@if($tag === 'button')
  <button
    type="{{ $type }}"
    title="{{ $title }}"
    class="rounded-full leading-none px-20 pt-10 pb-12 md:font-bold transition-colors {{ $variant === 'light' ? 'bg-white text-navy hover:bg-sky' : 'bg-navy hover:bg-sky text-white' }}">
    {{ $slot }}
  </button>
@else
  <a
    href="{{ $href }}"
    target="{{ $target }}"
    rel="{{ $rel }}"
    title="{{ $title }}"
    class="rounded-full leading-none px-20 pt-10 pb-12 md:font-bold transition-colors {{ $variant === 'light' ? 'bg-cloud text-navy hover:bg-sky' : 'bg-navy hover:bg-sky text-white' }}">
    {{ $slot }}
  </a>
@endif
