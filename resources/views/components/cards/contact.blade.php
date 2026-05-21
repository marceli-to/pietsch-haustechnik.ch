@props([
  'label_phone' => '',
  'label_email' => '',
  'phone' => '',
  'email' => '',
  'variant' => 'dark',
  'class' => ''
])
<div class="flex items-center justify-center gap-x-16 lg:gap-x-24 {{ $class }}">
  <a 
    href="tel:{{ $phone }}"
    aria-label="{{ $label_phone }}"
    class="w-24 h-24 lg:w-38 lg:h-38 flex items-center justify-center group">
    <x-icons.phone class="w-24 lg:w-30 h-auto {{ $variant == 'dark' ? 'text-cloud' : 'text-navy' }} group-hover:scale-110 transition-transform duration-300" />
  </a>
  <span class="{{ $variant == 'dark' ? 'bg-cloud' : 'bg-navy' }} w-2 h-24 lg:h-32"></span>
  <a 
    href="mailto:{{ $email }}"
    aria-label="{{ $label_email }}"
    class="w-24 h-24 lg:w-38 lg:h-38 flex items-center justify-center group">
    <x-icons.mail class="w-24 lg:w-30 h-auto {{ $variant == 'dark' ? 'text-cloud' : 'text-navy' }} group-hover:scale-110 transition-transform duration-300" />
  </a>
</div>