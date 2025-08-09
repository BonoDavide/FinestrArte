<x-layout>

    {{-- Hero sottocategoria --}}
    <div class="position-relative overflow-hidden" style="height: 60vh; min-height: 250px;">
        <img src="{{ asset('img/prodotti/finestre/pvc/finestre-pvc.png') }}"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;" alt="PVC">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-2 fw-bold font-titolo underline-thin">Persiane in Legno</h1>
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
        <div class="row text-center justify-content-center mb-5 py-5">
            <div class="col-12">
                <div class="border"></div>
                <p class="lead text-center py-5 paragrafo">
                    Le persiane in legno uniscono eleganza senza tempo e funzionalità, valorizzando l'estetica di ogni
                    abitazione con calore e naturalezza. Realizzate con essenze pregiate e trattamenti protettivi
                    all’avanguardia, offrono un'eccellente resistenza agli agenti atmosferici e un ottimo isolamento
                    termico e acustico.
                </p>
                <div class="border"></div>
            </div>
        </div>

        {{-- Griglia prodotti --}}

        {{-- nuova card --}}
        <div class="row g-4 justify-content-center pb-5 mb-5">
            <div class="col-8">
                <div class="card overflow-hidden card-prodotto card-hover-scale pt-5 text-center">

                    {{-- TITOLO PRINCIPALE --}}
                    <h4 class=" font-titolo underline-thin">Versione a Murare</h4>

                    {{-- IMMAGINE PRINCIPALE CENTRALE --}}
                    <img src="{{ asset('img/prodotti/persiane/legno/persiane/a-murare-chiusa.jpg') }}"
                        alt="Persiana in Legno" class="img-fluid mx-auto mb-4"
                        style="max-height: 400px; object-fit: contain;">
                </div>
            </div>
        </div>

        {{-- card 2 --}}
        <div class="row g-4 justify-content-center pb-5 mb-5">
            <div class="col-8">
                <div class="card overflow-hidden card-prodotto card-hover-scale pt-5 text-center">
                    {{-- TITOLO SEZIONE 2 --}}
                    <h4 class="mb-5 pt-3 font-titolo underline-thin">Versione con Telaio</h4>

                    {{-- IMMAGINE SEZIONE 2 --}}
                    <img src="{{ asset('img/prodotti/persiane/legno/persiane/con-telaio2.png') }}" alt="con-telaio"
                        class="img-fluid mx-auto mb-4" style="max-height: 500px; object-fit: contain;">
                </div>
            </div>
        </div>

        {{-- card 3 --}}
        <div class="row g-4 justify-content-center pb-5 mb-5">
            <div class="col-8">
                <div class="card overflow-hidden card-prodotto card-hover-scale pt-5 text-center">
                    {{-- TITOLO SEZIONE 3 --}}
                    <h4 class="mb-5 pt-3 font-titolo underline-thin">CORNICI</h4>

                    {{-- 3 IMMAGINI IN LINEA CON DESCRIZIONI --}}
                    <div class="row justify-content-between text-center px-5 mx-3 pb-3">
                        <div class="col-12 col-md-3 mb-4">
                            <img src="{{ asset('img/prodotti/persiane/legno/persiane/cornice-medioevo.jpg') }}"
                                alt="MEDIO EVO" class="img-fluid mb-2" style="max-height: 250px; object-fit: contain;">
                            <p class="mb-0 fw-semibold">MEDIO EVO</p>
                            <small>A stecche piane con cornici interne ed esterne riportate.</small>
                        </div>
                        <div class="col-12 col-md-3 mb-4">
                            <img src="{{ asset('img/prodotti/persiane/legno/persiane/cornice-barocco.jpg') }}"
                                alt="BAROCCO" class="img-fluid mb-2" style="max-height: 250px; object-fit: contain;">
                            <p class="mb-0 fw-semibold">BAROCCO</p>
                            <small>A stecche piane con cornici interne ed esterne riportate.</small>
                        </div>
                        <div class="col-12 col-md-3 mb-4">
                            <img src="{{ asset('img/prodotti/persiane/legno/persiane/cornice-planar.jpg') }}"
                                alt="PLANAR" class="img-fluid mb-2" style="max-height: 250px; object-fit: contain;">
                            <p class="mb-0 fw-semibold">PLANAR</p>
                            <small>A stecche piane senza cornici riportate.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" pb-3">
            <div class="border"></div>
        </div>

        {{-- carosello rivestimenti legno --}}
        <div class="container container-car carosello-rivestimenti-wrapper pt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-carosello">
                    <h3 class="text-center mb-4 font-titolo underline-thin">Rivestimenti disponibili</h3>
                    <div class="card card-prodotto px-5 py-3">
                        <div class="position-relative">
                            <div class="swiper px-3">
                                <div class="swiper-wrapper align-items-center">
                                    @php
                                        $rivestimenti = [
                                            'castagno-tinto-noce',
                                            'Colore_PinoRAL9010Graffiato',
                                            'FRASSINO-LACCATO-RAL-9010',
                                            'MOGANOIDE-LACCATO-RAL-6005-2',
                                            'MOGANOIDE-LACCATO-RAL-9010-v4',
                                            'moganoide-miele',
                                            'moganoide-tinto-ciliegio',
                                            'moganoide-tinto-noce',
                                            'moganoide-tinto-wenge-3',
                                            'PINO_GESSO_GRAFFIATO',
                                            'PINO_MOKA_GRAFFIATO',
                                            'pino-gesso',
                                            'PINO-LACCATO-RAL-6005',
                                            'PINO-LACCATO-RAL-9010',
                                            'pino-moka',
                                            'pino-tinto-douglas-cedro',
                                            'pino-tinto-noce',
                                            'pino-verde-bosco',
                                            'ROVERE_RAL_9010_BIANCO-PURO-SPAZZOLATO',
                                            'rovere-ciliegio',
                                            'ROVERE-LACCATO-RAL-9010',
                                            'rovere-naturale',
                                            'rovere-tinto-miele',
                                            'rovere-tinto-noce',
                                            'rovere-tinto-wenge-3',
                                        ];
                                    @endphp

                                    @foreach ($rivestimenti as $img)
                                        <div class="swiper-slide text-center">
                                            <img src="{{ asset('img/prodotti/finestre/legno/rivestimenti/' . $img . '.jpg') }}"
                                                alt="{{ $img }}"
                                                class="img-fluid rounded-circle img-rivestimento"
                                                style="width: 80px; height: 80px; object-fit: cover; cursor: pointer;"
                                                data-nome="{{ Str::of($img)->replace(['-', '_'], ' ')->title() }}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Bottoni swiper -->
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
                            style="width: 170px; height: 170px; object-fit: cover; object-position: center;">
                        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                            data-bs-dismiss="modal"></button>
                    </div>
                </div>
            </div>
        </div>

</x-layout>
