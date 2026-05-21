<section>
  <div class="relative md:grid md:grid-cols-2">
    <picture>
      {{-- <source srcset="/img/{{ $image }}.avif" type="image/avif">
      <source srcset="/img/{{ $image }}.webp" type="image/webp"> --}}
      <img
        src="/img/pietsch-haustechnik-visual-about.jpg"
        alt="Pietsch Haustechnik Über uns"
        aria-label="Pietsch Haustechnik Über uns"
        width="960"
        height="792"
        class="w-full h-full aspect-3/4 md:aspect-square object-cover block relative z-0">
    </picture>

    <div class="absolute md:relative md:bg-navy w-full px-30 bottom-25 md:bottom-auto z-10 md:flex md:flex-col md:justify-center text-white">
      <div data-reveal>
        <x-headings.h2 class="text-white">
          Über uns
        </x-headings.h2>
        <p class="text-center max-w-2xl mx-auto">
          Erfahren Sie mehr über unseren Betrieb, der seit über 25 Jahren für Qualität, Kompetenz und persönliche Beratung steht.
        </p>
        <div class="flex justify-center mt-30 lg:mt-45">
          <x-buttons.primary 
            href="{{ route('page.about') }}" 
            class="inline-flex w-auto" 
            variant="light"
            title="Erfahren Sie mehr über uns">
            Mehr erfahren
          </x-buttons.primary>
        </div>
      </div>
    </div>
  </div>
  <x-bar class="h-12 md:h-10" />
</section>