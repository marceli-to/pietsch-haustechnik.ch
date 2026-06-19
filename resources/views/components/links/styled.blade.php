@props([
  'href' => '',
  'target' => '_self',
  'ariaLabel' => '',
  'class' => 'underline underline-offset-4 decoration-1 hover:no-underline',
])

<a href="{{ $href }}" target="{{ $target }}" aria-label="{{ $ariaLabel ?: trim(strip_tags($slot)) }}" class="{{ $class }}">{{ $slot }}</a>
