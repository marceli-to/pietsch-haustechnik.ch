@props([
  'name' => '',
  'position' => '',
  'image' => '',
  'phone' => '',
  'email' => '',
  'class' => ''
])

<div class="{{ $class }}">

  <div class="w-270 aspect-square rounded-full bg-gradient-x p-6 mx-auto">
    <picture>
      <source srcset="/img/team/{{ $image }}.avif" type="image/avif">
      <source srcset="/img/team/{{ $image }}.webp" type="image/webp">
      <img
        src="/img/team/{{ $image }}.jpg"
        alt="Pietsch Haustechnik {{ $name }}"
        aria-label="Pietsch Haustechnik {{ $name }}"
        width="1024"
        height="1024"
        class="block w-full h-full aspect-square shrink-0 rounded-full object-cover">
    </picture>
  </div>

  <div class="text-center mt-15">
    <x-headings.h3 class="text-lg!">
      {{ $name }}
    </x-headings.h3>
    <div>
      {{ $position }}
    </div>
  </div>

  <x-cards.contact 
    variant="light" 
    label_phone="Rufen Sie {{ $name }} an" 
    label_email="Schreiben Sie {{ $name }} eine E-Mail"
    phone="{{ $phone }}"
    email="{{ $email }}"
    class="mt-10" />

</div>