<x-layout>

    {{-- Hero sottocategoria --}}
    <div class="position-relative overflow-hidden" style="height: 60vh; min-height: 250px;">
        <img src="{{ asset('img/prodotti/finestre/pvc/finestre-pvc.png') }}"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;" alt="PVC">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-2 fw-bold font-titolo underline-thin">Finestre in PVC e Alluminio</h1>
        </div>
    </div>

    {{-- bottone indietro --}}
    <div class="container pt-5">
        <a href="{{ url('/prodotti/' . $categoria->slug) }}" class="btn btn-pag-prod px-4">
            <i class="bi bi-arrow-return-left me-2"></i> Torna a {{ $categoria->name }}
        </a>
    </div>

    {{-- Paragrafo descrittivo --}}
    <div class="container pb-5">
        <div class="row text-center justify-content-center mb-5 pt-5">
            <div class="col-12">
                <div class="border"></div>
                <p class="lead text-center py-5 paragrafo">
                    Le finestre in PVC e Alluminio offrono elevate prestazioni energetiche e acustiche, richiedono poca manutenzione e permettono una vasta possibilità di personalizzazione, anche con finiture bicolore. Ideali per chi cerca comfort abitativo e resistenza nel tempo.
                </p>
                <div class="border"></div>
            </div>
        </div>

        {{-- Griglia prodotti --}}

        {{-- card FiberK Slim --}}
        <div class="row g-4 justify-content-center pb-5 pt-5">
            <div class="col-10">
                <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                    <div class="col-5 p-0 me-4">
                        <img src="{{ asset('img/prodotti/finestre/pvc_e_alluminio/korus-fiberk-slim-2.png') }}"
                            class="img-prodotto" alt="Korus FiberK Slim">
                    </div>

                    {{-- border --}}
                    <div class="border"></div>

                    <div class="col-5 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                        <h5 class="mb-3 card-title underline-thin">Korus FiberK Slim</h5>

                        <ul class="list-unstyled mb-4">
                            <li><strong>Prestazione energetica:</strong> Uw = 1.0 W/(m²K)</li>
                            <li><strong>Comfort acustico:</strong> RW = 34–42 dB</li>
                            <li><strong>Protezione antieffrazione:</strong> Incollaggio strutturale del vetro</li>
                            <li><strong>Profilo innovativo:</strong> Anima in fibra di vetro</li>
                            <li><strong>Vetro isolante:</strong> Disponibile in doppio o triplo vetro</li>
                            <li><strong>Tenuta all'aria:</strong> Classe 4</li>
                            <li><strong>Tenuta all’acqua:</strong> Classe 9A</li>
                            <li><strong>Resistenza al vento:</strong> Classe C4 (fino a 180 km/h)</li>
                        </ul>

                        <a href="{{ asset('pdf/korus-fiberk-slim.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda">
                            Scheda tecnica
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- fine card FiberK Slim --}}
        {{-- fine grliglia prodotti --}}

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
                                            'AL41.jpg',
                                            'AL43.jpg',
                                            'AL47.jpg',
                                            'F25.jpg',
                                            'H11.jpg',
                                            'H47.jpg',
                                            'H59.jpg',
                                            'H62.jpg',
                                            'H63.jpg',
                                            'H93.jpg',
                                            'M01.jpg',
                                            'M02.jpg',
                                            'P04.jpg',
                                            'P05.jpg',
                                            'P16.jpg',
                                            'P41.jpg',
                                            'P46.jpg',
                                            'P50-Ginger-Oak-VLF.jpg',
                                            'P51.jpg',
                                            'P53.jpg',
                                            'P54.jpg',
                                            'V001_BiancoK.jpeg',
                                            'V002_Bianco-Avorio-RAL-1013.jpeg',
                                            'V004_Grigio-Anracite-RAL-7016.jpeg',
                                            'V006_Grigio-Chiaro-RAL-7035.jpeg',
                                            'V008_Woodec-Rovere-Golden.jpeg',
                                            'V009_Woodec-Noce.jpeg',
                                            'V010_Woodec-Rovere-Naturale.jpeg',
                                            'V012_Woodec-White.jpeg',
                                        ];
                                    @endphp

                                    @foreach ($rivestimenti as $img)
                                        <div class="swiper-slide text-center">
                                            <img src="{{ asset('img/prodotti/finestre/pvc_e_alluminio/rivestimenti/' . $img) }}"
                                                alt="{{ $img }}"
                                                class="img-fluid rounded-circle img-rivestimento"
                                                style="width: 80px; height: 80px; object-fit: cover; cursor: pointer;"
                                                data-nome="{{ Str::of($img)->beforeLast('.')->replace(['_', '-'], ' ')->title() }}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="swiper-button-prev text-dark"></div>
                            <div class="swiper-button-next text-dark"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- fine carosello --}}
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
        {{-- fine modale --}}

</x-layout>
