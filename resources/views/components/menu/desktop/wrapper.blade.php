<div class="{{ $class ?? '' }}">
  <nav>
    <ul class="flex gap-x-40 lg:gap-x-80">

      <x-menu.desktop.item
        href="{{ route('page.services') }}"
        active="{{ request()->routeIs('page.services') }}"
        title="Dienstleistungen" />

      <x-menu.desktop.item
        href="{{ route('page.about') }}"
        active="{{ request()->routeIs('page.about') }}"
        title="Über uns" />

      <x-menu.desktop.item
        href="{{ route('page.references') }}"
        active="{{ request()->routeIs('page.references') }}"
        title="Referenzen" />

    </ul>
  </nav>
</div>
  