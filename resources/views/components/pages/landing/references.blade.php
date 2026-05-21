<section class="bg-cloud">
  <x-layout.inner class="md:px-30 py-60 lg:py-100">

    <x-headings.h2>
      Referenzen
    </x-headings.h2>

    <div class="flex flex-col lg:grid lg:grid-cols-3 lg:gap-x-20 gap-y-5">

      <x-cards.reference
        title="Heizungsinstallation"
        meta="Rüti – 2020<br>Mehrfamilienhaus (74 Wohnungen)"
        :images="[
          '/img/referenzen/pietsch-haustechnik-referenzen-rueti-sechten-01',
          '/img/referenzen/pietsch-haustechnik-referenzen-rueti-sechten-02',
        ]" />

      <x-cards.reference
        title="Heizungsinstallation"
        meta="Hittnau – 2025<br>Mehrfamilienhaus (6 Eigentumswohnungen)"
        :images="[
          '/img/referenzen/pietsch-haustechnik-referenzen-hittnau-buenkliholz-01',
          '/img/referenzen/pietsch-haustechnik-referenzen-hittnau-fohlenhof-01',
          '/img/referenzen/pietsch-haustechnik-referenzen-hittnau-laetenstrasse-01',
          '/img/referenzen/pietsch-haustechnik-referenzen-hittnau-laetenstrasse-02',
        ]" />

      <x-cards.reference
        title="Heizungsinstallation"
        meta="Saland – 2015<br>Wohn- und Gewerbehaus"
        :images="[
          '/img/referenzen/pietsch-haustechnik-referenzen-saland-01',
          '/img/referenzen/pietsch-haustechnik-referenzen-saland-02',
        ]" />
    </div>

    <div class="flex justify-center mt-40 lg:mt-50">
      <x-buttons.primary 
        href="{{ route('page.references') }}" 
        class="inline-flex w-auto"
        title="Erfahren Sie mehr über unsere Referenzen">
        Mehr erfahren
      </x-buttons.primary>
    </div>

  </x-layout.inner>
</section>