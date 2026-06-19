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
  <img src="/img/logo/{{ $img }}" alt="{{ $title }}" width="465" height="165" class="{{ $class }}">
</a>