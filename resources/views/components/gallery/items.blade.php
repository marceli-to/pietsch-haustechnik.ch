
@props([
  'all' => false,
])

<div class="flex flex-col lg:grid lg:grid-cols-3 gap-y-5 lg:gap-20 {{ $class ?? '' }}">

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

  @unless($all)
    <x-cards.reference
      title="Heizungsinstallation"
      meta="Dürnten – 2015<br>Wohn- und Gewerbehaus"
      :images="[
        '/img/referenzen/pietsch-haustechnik-referenzen-duernten-eschberg-01',
        '/img/referenzen/pietsch-haustechnik-referenzen-duernten-eschberg-02',
        '/img/referenzen/pietsch-haustechnik-referenzen-duernten-eschberg-03',
        '/img/referenzen/pietsch-haustechnik-referenzen-duernten-eschberg-04',
      ]" />

    <x-cards.reference
      title="Heizungsinstallation"
      meta="Tann – 2015<br>Wohn- und Gewerbehaus"
      :images="[
        '/img/referenzen/pietsch-haustechnik-referenzen-tann-chraehbuehl-01',
        '/img/referenzen/pietsch-haustechnik-referenzen-tann-chraehbuehl-02',
      ]" />
  @endunless

</div>