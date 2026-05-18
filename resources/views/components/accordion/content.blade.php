<div
  x-show="active === id"
  x-collapse
  x-cloak>
  <div class="pb-15">
    {{ $slot }}
  </div>
</div>
