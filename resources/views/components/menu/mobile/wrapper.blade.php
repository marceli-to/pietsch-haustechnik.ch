<div 
  x-cloak 
  x-show="menu"
  class="fixed inset-0 z-50 flex items-center justify-center w-full h-dvh md:!hidden">

  <nav>
    <ul class="flex flex-col gap-y-48 items-center">

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
</div>
  