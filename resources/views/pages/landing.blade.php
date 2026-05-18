@extends('app')
@section('meta_description', '')

@section('content')
<div class="min-h-dvh relative">
  <x-media.visual image="pietsch-haustechnik-visual" alt="Pietsch Haustechnik" />

  <div class="absolute bottom-64 md:bottom-auto md:top-1/2 md:-translate-y-1/2 left-1/2 -translate-x-1/2 w-full md:max-w-[680px] flex flex-col items-center gap-y-50 z-20">
    <x-icons.logo variant="neg" class="w-300 md:w-[560px] h-112 md:h-[208px] text-white" />
    <div class="flex flex-col gap-y-20">
      <span class="text-cloud font-bold text-[30px] md:text-[40px] text-center text-balance leading-[1.15]">
        Moderne Haustechnik. Präzise umgesetzt.
      </span>
      <span class="text-cloud text-[20px] text-center text-pretty px-30">
        Seit über 25 Jahren Ihr kompetenter Partner für Sanitär-, Heizungs- und Solaranlagen im Zürcher Oberland.
      </span>
    </div>
  </div>

</div>

<div class="bg-navy md:bg-transparent text-cloud md:absolute z-20 md:w-auto md:left-1/2 md:-translate-x-1/2 md:bottom-72">
  <x-layout.inner class="p-30 pt-0 md:p-0">
    <div class="grid grid-cols-2 gap-20 md:flex md:flex-row md:gap-60 md:justify-center md:items-start" data-reveal-children>
      <x-cards.feature label="Persönliche<br>Beratung">
        <x-icons.consultancy class="w-50 h-auto" />
      </x-cards.feature>
      <x-cards.feature label="Fachmännische<br>Installation">
        <x-icons.installation class="w-48 h-auto" />
      </x-cards.feature>
      <x-cards.feature label="Nachhaltige<br>Qualität">
        <x-icons.sustainability class="w-50 h-auto" />
      </x-cards.feature>
      <x-cards.feature label="Regionaler<br>Service">
        <x-icons.service class="w-44 h-auto" />
      </x-cards.feature>
    </div>
  </x-layout.inner>
</div>
@endsection
