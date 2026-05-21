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

  <div class="pb-60 px-30 flex flex-col items-center gap-y-10 text-[16px] shrink-0">
    <a
      href="tel:044 950 04 55"
      aria-label="Rufen Sie uns an"
      class="hover:text-sky">
      044 950 04 55
    </a>
    <a
      href="mailto:info@pietsch-haustechnik.ch"
      aria-label="Schreiben Sie uns eine E-Mail"
      class="hover:text-sky">
      info@pietsch-haustechnik.ch
    </a>
  </div>

</div>
