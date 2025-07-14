<x-layout>

    {{-- Hero sottocategoria --}}
    <div class="position-relative overflow-hidden" style="height: 60vh; min-height: 250px;">
        <img src="https://picsum.photos/seed/pvc-header/1920/600" class="position-absolute top-0 start-0 w-100 h-100"
            style="object-fit: cover;" alt="PVC">

        <div class="position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-3 fw-bold font-titolo">PVC</h1>
        </div>
    </div>

    {{-- Paragrafo descrittivo --}}
    <div class="container py-5">
        <div class="row text-center">
            <div class="border"></div>
            <p class="lead text-center py-5">
                I prodotti in PVC Schüco garantiscono un eccellente isolamento termico e acustico, mantenendo un design
                minimal e prestazioni di lunga durata.
            </p>
            <div class="border"></div>
        </div>

        {{-- Griglia prodotti --}}
        <div class="row g-4 justify-content-center pt-5">

            {{-- Card prodotto 1 --}}
            <div class="card flex-row overflow-hidden border-0 shadow-sm mb-4 justify-content-between">
                {{-- Immagine laterale --}}
                <div class="col-5 p-0">
                    <img src="{{ asset('img/prodotti/finestre/pvc/schuco-ct-70-classic.jpg') }}" class="w-100 h-100"
                        style="object-fit: cover;" alt="Schüco CT 70 Classic">
                </div>

                {{-- Dati tecnici --}}
                <div class="col-7 m-5 p-5 d-flex flex-column justify-content-center">
                    <h5 class="mb-5 pb-5">Schüco CT 70 Classic</h5>

                    <ul class="list-unstyled mb-0">
                        <li class="pb-2"><strong>Prestazione energetica:</strong> Uw = 0,83 W/(m²K)</li>
                        <li class="pb-2"><strong>Comfort acustico:</strong> Fino a 46 dB</li>
                        <li class="pb-2"><strong>Protezione antieffrazione:</strong> Sicurezza RC2</li>
                        <li class="pb-2"><strong>Profondità di montaggio:</strong> 72 mm</li>
                        <li class="pb-2"><strong>Vetro isolante:</strong> Fino a 48 mm (triplo) o 28 mm (doppio)</li>
                        <li class="pb-2"><strong>Maggiore tenuta:</strong> 3 guarnizioni</li>
                        <li class="pb-2"><strong>Rinforzo acciaio zincato:</strong> 1,5 mm</li>
                        <li class="pb-2"><strong>Ferramenta antieffrazione:</strong> Con ventilazione economica</li>
                    </ul>
                </div>
            </div>


            {{-- Fine griglia prodotti --}}
        </div>
    </div>

</x-layout>
