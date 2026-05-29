
@props([
  'limit' => null,
])

@php
  $references = [
    [
      'title' => 'Heizungsinstallation',
      'meta' => 'Rüti – 2020<br>Mehrfamilienhaus (74 Wohnungen)',
      'images' => [
        '/img/referenzen/pietsch-haustechnik-referenzen-rueti-sechten-01',
        '/img/referenzen/pietsch-haustechnik-referenzen-rueti-sechten-02',
      ],
    ],
    [
      'title' => 'Heizungsinstallation',
      'meta' => 'Hittnau – 2025<br>Mehrfamilienhaus',
      'images' => [
        '/img/referenzen/pietsch-haustechnik-referenzen-hittnau-laetenstrasse-01',
        '/img/referenzen/pietsch-haustechnik-referenzen-hittnau-laetenstrasse-02',
      ],
    ],
    [
      'title' => 'Heizungsinstallation',
      'meta' => 'Saland – 2015<br>Wohn- und Gewerbehaus',
      'images' => [
        '/img/referenzen/pietsch-haustechnik-referenzen-saland-01',
        '/img/referenzen/pietsch-haustechnik-referenzen-saland-02',
      ],
    ],
    [
      'title' => 'Heizungsinstallation',
      'meta' => 'Hittnau – 2025<br>Mehrfamilienhaus',
      'images' => [
        '/img/referenzen/pietsch-haustechnik-referenzen-hittnau-buenkliholz-01',
      ],
    ],
    [
      'title' => 'Heizungsinstallation',
      'meta' => 'Hittnau – 2025<br>Mehrfamilienhaus',
      'images' => [
        '/img/referenzen/pietsch-haustechnik-referenzen-hittnau-fohlenhof-01',
      ],
    ],
    [
      'title' => 'Heizungsinstallation',
      'meta' => 'Dürnten – 2015<br>Wohn- und Gewerbehaus',
      'images' => [
        '/img/referenzen/pietsch-haustechnik-referenzen-duernten-eschberg-01',
        '/img/referenzen/pietsch-haustechnik-referenzen-duernten-eschberg-02',
        '/img/referenzen/pietsch-haustechnik-referenzen-duernten-eschberg-03',
        '/img/referenzen/pietsch-haustechnik-referenzen-duernten-eschberg-04',
      ],
    ],
    [
      'title' => 'Heizungsinstallation',
      'meta' => 'Tann – 2015<br>Wohn- und Gewerbehaus',
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
