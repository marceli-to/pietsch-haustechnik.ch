<div x-data="{ active: null }" {{ $attributes->merge(['class' => 'border-y border-navy divide-y divide-navy']) }}>
  {{ $slot }}
</div>
