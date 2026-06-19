<div
  x-cloak
  x-show="menu"
  x-transition:enter="transition ease-out duration-300"
  x-transition:enter-start="opacity-0"
  x-transition:enter-end="opacity-100"
  x-transition:leave="transition ease-in duration-200"
  x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0"
  class="fixed inset-0 z-40 bg-navy w-full h-dvh md:hidden! flex flex-col text-cloud">

  <div class="pt-70 px-30 flex justify-center shrink-0">
    <a
      href="{{ route('page.landing') }}"
      @click="menu = false"
      aria-label="Zurück zur Startseite"
      class="block w-161 h-60">
      <x-icons.logo class="w-full h-auto" variant="neg" />
    </a>
  </div>

  <nav class="flex-1 flex items-center justify-center px-30">
    <ul class="flex flex-col gap-y-30 items-center text-center">

      <x-menu.mobile.item
        href="{{ route('page.services') }}"
        active="{{ request()->routeIs('page.services') }}"
        title="Dienstleistungen" />

      <x-menu.mobile.item
        href="{{ route('page.about') }}"
        active="{{ request()->routeIs('page.about') }}"
        title="Über uns" />

      <x-menu.mobile.item
        href="{{ route('page.references') }}"
        active="{{ request()->routeIs('page.references') }}"
        title="Referenzen" />

    </ul>
  </nav>

  <div class="pb-60 px-30 flex justify-center shrink-0">
    <x-cards.contact
      variant="dark"
      label_phone="Rufen Sie uns an"
      label_email="Schreiben Sie uns eine E-Mail"
      phone="044 950 04 55"
      email="info@pietsch-haustechnik.ch" />
  </div>

</div>
