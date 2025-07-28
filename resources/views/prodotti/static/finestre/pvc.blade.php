<x-layout>

    {{-- Hero sottocategoria --}}
    <div class="position-relative overflow-hidden" style="height: 60vh; min-height: 250px;">
        <img src="{{ asset('img/prodotti/finestre/pvc/finestre-pvc.png') }}"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;" alt="PVC">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-2 fw-bold font-titolo">PVC</h1>
        </div>
    </div>

    {{-- Paragrafo descrittivo --}}
    <div class="container py-5">
        <div class="row text-center justify-content-center mb-5 py-5">
            <div class="col-12">
                <div class="border"></div>
                <p class="lead text-center py-5 paragrafo">
                    I prodotti in PVC Schüco garantiscono un eccellente isolamento termico e acustico, mantenendo un
                    design minimal e prestazioni di lunga durata.
                </p>
                <div class="border"></div>
            </div>
        </div>

        {{-- Griglia prodotti --}}

        {{-- card 1 --}}
        <div class="row g-4 justify-content-center pb-5">
            <div class="col-10">
                <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                    <div class="col-5 p-0 me-4">
                        <img src="{{ asset('img/prodotti/finestre/pvc/schuco-ct-70-classic.png') }}"
                            class="img-prodotto" alt="Schüco CT 70 Classic">
                    </div>

                    <div class="col-5 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                        <h5 class="mb-3 card-title">Schüco CT 70 Classic</h5>

                        <ul class="list-unstyled mb-4">
                            <li><strong>Prestazione energetica:</strong> Uw = 0,83 W/(m²K)</li>
                            <li><strong>Comfort acustico:</strong> Fino a 46 dB</li>
                            <li><strong>Protezione antieffrazione:</strong> Sicurezza RC2</li>
                            <li><strong>Profondità di montaggio:</strong> 72 mm</li>
                            <li><strong>Vetro isolante:</strong> Fino a 48 mm (triplo) o 28 mm (doppio)</li>
                            <li><strong>Maggiore tenuta:</strong> 3 guarnizioni</li>
                            <li><strong>Rinforzo acciaio zincato:</strong> 1,5 mm</li>
                            <li><strong>Ferramenta antieffrazione:</strong> Con ventilazione economica</li>
                        </ul>

                        <a href="{{ asset('pdf/schuco-ct-70-classic.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda">
                            Scheda tecnica
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- card 2 --}}
        <div class="row g-4 justify-content-center pb-5 pt-5">
            <div class="col-10">
                <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                    <div class="col-5 p-0 me-4">
                        <img src="{{ asset('img/prodotti/finestre/pvc/schuco-living-82.png') }}" class="img-prodotto"
                            alt="Schüco LivIng 82">
                    </div>

                    <div class="col-5 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                        <h5 class="mb-3 card-title">Schüco LivIng 82</h5>

                        <ul class="list-unstyled mb-4">
                            <li><strong>Profondità telaio:</strong> 82 mm</li>
                            <li><strong>Valore Uf:</strong> fino a 0,96 W/(m²K)</li>
                            <li><strong>Camere:</strong> 7 camere</li>
                            <li><strong>Vetri supportati:</strong> da 24 a 52 mm</li>
                            <li><strong>Design:</strong> Aspetto classico, ampia gamma colori e finiture</li>
                            <li><strong>Comfort acustico:</strong> Elevato isolamento, chiusura fluida</li>
                            <li><strong>Finitura premium:</strong> Schüco AutomotiveFinish disponibile</li>
                        </ul>

                        <a href="{{ asset('pdf/schuco-living-82.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda">
                            Scheda tecnica
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- fine container principale --}}

        <div class="pt-5 pb-3">
            <div class="border"></div>
        </div>

        {{-- carosello rivestimenti --}}
        <div class="container container-car carosello-rivestimenti-wrapper mb-5 pt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-carosello">
                    <h3 class="text-center mb-4 font-titolo underline-thin">Rivestimenti disponibili</h3>
                    <div class="card card-prodotto px-5 py-3">
                        <div class="position-relative">
                            <div class="swiper px-3">
                                <div class="swiper-wrapper align-items-center">
                                    @php
                                        $rivestimenti = [
                                            'Achatgrau-Glatt',
                                            'Aluminium-Geburstet',
                                            'Anteak-1',
                                            'Anthrazitgrau-Glatt',
                                            'Asteiche',
                                            'Avorio-materico',
                                            'Bergkiefer',
                                            'Bianco-frassino',
                                            'Bianco-materico',
                                            'Bronzo-scuro-materico',
                                            'Canadian',
                                            'Cremeweis',
                                            'Douglasie',
                                            'Golden-Oak',
                                            'Grigio-antracite-materico',
                                            'Grigio-basalto-materico',
                                            'Grigio-finestra-materico',
                                            'Grigio-umbro-materico',
                                            'Hellelfenbein',
                                            'Indian',
                                            'Lichtgrau-Glatt',
                                        ];
                                    @endphp

                                    @foreach ($rivestimenti as $img)
                                        <div class="swiper-slide text-center">
                                            <img src="{{ asset('img/prodotti/finestre/pvc/rivestimenti/' . $img . '.webp') }}"
                                                alt="{{ $img }}"
                                                class="img-fluid rounded-circle img-rivestimento"
                                                style="width: 80px; height: 80px; object-fit: cover; cursor: pointer;"
                                                data-nome="{{ Str::of($img)->replace('-', ' ')->title() }}">
                                            {{-- <div class="mt-2 small text-muted">
                                            {{ Str::of($img)->replace('-', ' ')->title() }}
                                        </div> --}}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Bottoni fuori visivamente -->
                            <div class="swiper-button-prev text-dark"></div>
                            <div class="swiper-button-next text-dark"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- modale carosello --}}
        <div class="modal fade" id="modalRivestimento" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content bg-dark text-white border-0 rounded-4 shadow-lg overflow-hidden p-4"
                    style="width: 350px; height: 350px; margin: auto;">
                    <div
                        class="modal-body d-flex flex-column justify-content-center align-items-center text-center h-100">
                        <h5 class="modal-title fw-bold mb-4" id="rivestimentoNome"></h5>
                        <img id="rivestimentoImg" src="#" alt="Rivestimento" class="img-fluid rounded-3 shadow"
                            style="width: 170px; height: 170px; object-fit: contain;">
                        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                            data-bs-dismiss="modal"></button>
                    </div>
                </div>
            </div>
        </div>

</x-layout>
