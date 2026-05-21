@props([
  'variant' => 'x',
  'class' => ''
])
<div class="{{ $variant == 'x' ? 'bg-gradient-x' : 'bg-gradient-y-reverse' }} {{ $class ?? '' }}"></div>