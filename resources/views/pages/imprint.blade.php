@extends('app')
@section('meta_title', 'Impressum')
@section('meta_description', 'Impressum der Pappelstrasse 2/4 in Dietlikon – Angaben zum Betreiber, Design und Entwicklung.')
@section('content')

<section>
  <x-layout.inner class="px-30 pt-200 pb-60 lg:py-100 text-md">
    <div class="max-w-4xl">
      <x-headings.h1 class="text-left! text-xl! lg:text-3xl!">
        Impressum
      </x-headings.h1>
      <p>
        <strong>Verantwortlich</strong><br>
        Pietsch Haustechnik<br>
        Brunnenweg 9<br>
        8335 Hittnau
      </p>

      <p>
        <strong>Design und Entwicklung</strong><br>
        Stoz Werbeagentur AG<br>
        Barzloostrasse 2<br>
        8330 Pfäffikon ZH<br>
        <x-links.styled href="mailto:hello@stoz.ch">
          hello@stoz.ch
        </x-links.styled><br>
        <x-links.styled href="https://www.stoz.ch" target="_blank">
          www.stoz.ch
        </x-links.styled><br>
      </p>

      <p>
        <strong>Programmierung</strong><br>
        Marcel Stadelmann, Zürich<br>
        <x-links.styled href="https://marceli.to" target="_blank">
          marceli.to
        </x-links.styled>
      </p>
    </div>
  </x-layouts.inner>
</section>

@endsection
