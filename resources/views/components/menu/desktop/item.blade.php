@props([
  'href',
  'active' => false,
  'title' => null,
])
<li>
  <a 
    href="{{ $href }}"
    aria-label="{{ $title }}"
    class="font-bold text-[24px] hover:text-sky {{ $active ? 'text-sky' : 'text-cloud' }}">
    {{ $title }}
  </a>
</li>