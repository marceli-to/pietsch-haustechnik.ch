<footer class="bg-cloud">

  <x-layout.inner class="p-30 lg:pb-60">

    <div class="flex flex-col items-center md:items-end md:grid md:grid-cols-12 gap-y-30 text-[16px]">

      <div class="flex flex-col md:flex-row items-center md:items-end md:justify-start gap-y-30 md:gap-y-0 md:gap-x-30 lg:gap-x-60 md:col-span-9">

        <x-icons.logo variant="pos" class="w-160 h-60 mx-auto md:mx-0" />

        <div class="flex flex-col md:flex-row gap-y-15 md:gap-y-0 md:gap-x-30 lg:gap-x-60">

          <div class="text-center md:text-left">
            <a 
              href="https://maps.app.goo.gl/T8iXmVj5NtgYGyU6A" 
              target="_blank" 
              rel="noopener noreferrer" 
              aria-label="Standort anzeigen"
              class="hover:underline underline-offset-2 decoration-1">
              Brunnenweg 9<br>8335 Hittnau
            </a>
          </div>

          <div class="text-center md:text-left flex flex-col">
            <a 
              href="tel:044 950 04 55"
              aria-label="Rufen Sie uns an"
              class="block hover:underline underline-offset-2 decoration-1">
              044 950 04 55
            </a>
            <a 
              href="mailto:info@pietsch-haustechnik.ch"
              aria-label="Schreiben Sie uns eine E-Mail"
              class="block hover:underline underline-offset-2 decoration-1">
              info@pietsch-haustechnik.ch
            </a>
          </div>
        </div>
      </div>

      <nav class="md:col-span-3">
        <ul class="flex flex-col items-center md:items-end gap-y-2">
          <li>
            <a 
              href="{{ route('page.imprint') }}"
              aria-label="Impressum anzeigen"
              class="block hover:underline underline-offset-2 decoration-1">
              Impressum
            </a>
          </li>
          <li>
            <a 
              href="{{ route('page.privacy') }}"
              aria-label="Datenschutz anzeigen"
              class="block hover:underline underline-offset-2 decoration-1">
              Datenschutz
            </a>
          </li>
          <li>
            <a 
              href="https://stoz.ch"
              target="_blank"
              rel="noopener noreferrer"
              aria-label="design by stoz"
              class="block hover:underline underline-offset-2 decoration-1">
              design by stoz
            </a>
          </li>
        </ul>
      </nav>

    </div>

  </x-layout.inner>

</footer>