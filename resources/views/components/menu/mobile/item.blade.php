@props([
  'href',
  'active' => false,
  'title' => null,
])
<li>
  <a 
    href="{{ $href }}"
    aria-label="{{ $title }}"
    class="{{ $active ? '' : '' }}">
    {{ $title }}
  </a>
</li>