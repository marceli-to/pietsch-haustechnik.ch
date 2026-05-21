<header
  @class([
    'bg-navy w-full top-0 z-50 min-h-100 hidden md:block',
    'sticky' => ! request()->routeIs('page.landing'),
    'fixed opacity-0 -translate-y-full transition-opacity transition-transform duration-600 delay-500 ease-out [.has-scroll_&]:opacity-100 [.has-scroll_&]:translate-y-0' => request()->routeIs('page.landing'),
  ])
  @if (request()->routeIs('page.landing'))
    data-fade-in="header"
  @endif
  >
  <x-layout.inner class="px-30 min-h-100 flex justify-between items-center relative">
    <a href="{{ route('page.landing') }}" class="text-white">
      <x-icons.logo class="w-145 h-auto" variant="neg" />
    </a>
    <x-menu.desktop.wrapper />
  </x-layout.inner>
</header>

<header class="md:hidden h-60 absolute top-70 left-1/2 -translate-x-1/2">
  <a href="{{ route('page.landing') }}" class="w-161 h-60">
    <x-icons.logo class="w-full h-auto" variant="pos" />
  </a>  
</header>

<x-menu.mobile.button />
<x-menu.mobile.wrapper />

