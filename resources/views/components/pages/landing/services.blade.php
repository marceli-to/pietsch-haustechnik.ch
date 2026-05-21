<section>
   <x-layout.inner class="px-30 py-60 lg:py-100">
      <x-headings.h2>
        Dienstleistungen
      </x-headings.h2>
      <div class="flex flex-col lg:flex-row gap-y-40 lg:gap-y-0 lg:gap-x-64">
        <div>
          <x-headings.h3 class="mb-0">
            Sanitär
          </x-headings.h3>
          <x-bar class="h-6 max-w-[75%] mx-auto my-15" />
          <p class="text-center text-pretty">
            Sanitärinstallationen für Neubauten, Badumbauten und Renovationen sowie Service- und Unterhaltsarbeiten.
          </p>
        </div>
        <div>
          <x-headings.h3 class="mb-0">
            Heizung
          </x-headings.h3>
          <x-bar class="h-6 max-w-[75%] mx-auto my-15" />
          <p class="text-center text-pretty">
            Heizungsanlagen für Neubauten, Umbauten und Sanierungen – inklusive Wärmepumpen, Holzheizungen, Wartung und Reparatur.
          </p>
        </div>
        <div>
          <x-headings.h3 class="mb-0">
            Solaranlage
          </x-headings.h3>
          <x-bar class="h-6 max-w-[75%] mx-auto my-15" />
          <p class="text-center text-pretty">
            Nachhaltige Lösungen mit thermischen Solaranlagen für Warmwasser und Heizungsunterstützung.
          </p>
        </div>
      </div>

      <div class="flex justify-center mt-40 lg:mt-50">
        <x-buttons.primary 
          href="{{ route('page.services') }}" 
          class="inline-flex w-auto"
          title="Erfahren Sie mehr über unsere Dienstleistungen">
          Mehr erfahren
        </x-buttons.primary>
      </div>

   </x-layout.inner>
</section>