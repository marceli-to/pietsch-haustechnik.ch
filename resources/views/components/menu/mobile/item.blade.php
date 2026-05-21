@props([
  'href',
  'active' => false,
  'title' => null,
])
<li>
  <a
    href="{{ $href }}"
    @click="menu = false"
    aria-label="{{ $title }}"
    class="font-bold text-[28px] hover:text-sky {{ $active ? 'text-sky' : 'text-cloud' }}">
    {{ $title }}
  </a>
</li>
