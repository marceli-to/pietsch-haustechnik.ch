
@props([
  'limit' => null,
])

@php
  $references = [
    [
      'title' => 'Heizungssanierung',
      'meta' => 'Hittnau Bünkliholzweg – 2024 bis 2025<br>Mehrfamilienhaus (6 Eigentumswohnungen)',
      'images' => [
        '/img/referenzen/pietsch-haustechnik-referenzen-hittnau-buenkliholz-01',
      ],
    ],
    [
      'title' => 'Heizungsinstallation',
      'meta' => 'Hittnau Laetenstrasse – 2023 bis 2024<br>Mehrfamilienhaus (8 Mietwohnungen)',
      'images' => [
        '/img/referenzen/pietsch-haustechnik-referenzen-hittnau-laetenstrasse-01',
        '/img/referenzen/pietsch-haustechnik-referenzen-hittnau-laetenstrasse-02',
      ],
    ],
    [
      'title' => 'Heizungsinstallation',
      'meta' => 'Rüti Sechten – 2018 bis 2020<br>Mehrfamilienhaus (74 Wohnungen)',
      'images' => [
        '/img/referenzen/pietsch-haustechnik-referenzen-rueti-sechten-01',
        '/img/referenzen/pietsch-haustechnik-referenzen-rueti-sechten-02',
      ],
    ],
    [
      'title' => 'Heizungsinstallation',
      'meta' => 'Hittnau Fohlenhof – 2018 bis 2019<br>Mehrfamilienhaus (11 Mietwohnungen)',
      'images' => [
        '/img/referenzen/pietsch-haustechnik-referenzen-hittnau-fohlenhof-01',
      ],
    ],
    [
      'title' => 'Sanitär- und Heizungsinstallation',
      'meta' => 'Dürnten – 2015 bis 2016<br>Einfamilienhaus',
      'images' => [
        '/img/referenzen/pietsch-haustechnik-referenzen-duernten-eschberg-01',
        '/img/referenzen/pietsch-haustechnik-referenzen-duernten-eschberg-02',
        '/img/referenzen/pietsch-haustechnik-referenzen-duernten-eschberg-03',
        '/img/referenzen/pietsch-haustechnik-referenzen-duernten-eschberg-04',
      ],
    ],
    [
      'title' => 'Heizungsinstallation',
      'meta' => 'Saland – 2014 bis 2015<br>Wohn- und Gewerbehaus',
      'images' => [
        '/img/referenzen/pietsch-haustechnik-referenzen-saland-01',
        '/img/referenzen/pietsch-haustechnik-referenzen-saland-02',
      ],
    ],
    [
      'title' => 'Heizungsinstallation',
      'meta' => 'Tann Chrähbühl<br>Mehrfamilienhaus (53 Wohnungen)',
      'images' => [
        '/img/referenzen/pietsch-haustechnik-referenzen-tann-chraehbuehl-01',
        '/img/referenzen/pietsch-haustechnik-referenzen-tann-chraehbuehl-02',
      ],
    ],
  ];

  $items = $limit ? array_slice($references, 0, (int) $limit) : $references;
@endphp

<div class="flex flex-col lg:grid lg:grid-cols-3 gap-y-5 lg:gap-20 {{ $class ?? '' }}">

  @foreach($items as $reference)
    <x-cards.reference
      :title="$reference['title']"
      :meta="$reference['meta']"
      :images="$reference['images']" />
  @endforeach

</div>
