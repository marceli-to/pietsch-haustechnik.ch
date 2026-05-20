@props([
  'url',
  'img',
  'class' => '',
  'title' => ''
])
<a 
  href="{{ $url }}" 
  target="_blank" 
  aria-label="{{ $title }}">
  <img src="/img/logo/{{ $img }}" alt="{{ $title }}" class="{{ $class }}">
</a>