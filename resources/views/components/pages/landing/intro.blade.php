<section class="relative flex flex-col md:h-dvh">
  <x-media.visual image="pietsch-haustechnik-visual-intro" alt="Pietsch Haustechnik" />

  {{-- Centred content: fills the space above the feature icons and stays centred --}}
  <div class="relative z-20 flex flex-col items-center justify-end md:justify-center min-h-dvh md:min-h-0 md:flex-1 pb-64 md:pb-0">
    <div class="w-full md:max-w-[680px] flex flex-col items-center gap-y-50">
      <x-icons.logo variant="neg" class="w-300 md:w-[560px] h-112 md:h-[208px] text-white animate-[fade-in_600ms_900ms_ease-out_both]" />
      <div class="flex flex-col gap-y-20">
        <span class="text-cloud font-bold text-3xl md:text-4xl text-center text-balance leading-[1.15]">
          Moderne Haustechnik. Präzise umgesetzt.
        </span>
        <span class="text-cloud text-center text-pretty px-30">
          Seit über 25 Jahren Ihr kompetenter Partner für Sanitär-, Heizungs- und Solaranlagen im Zürcher Oberland.
        </span>
      </div>
    </div>
  </div>

  {{-- Feature icons: a flex sibling, so they never overlap the centred content --}}
  <x-pages.landing.features />

</section>
