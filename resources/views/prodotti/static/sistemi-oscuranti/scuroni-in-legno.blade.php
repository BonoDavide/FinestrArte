<x-layout>

    {{-- SEO --}}
    @section('title', 'Scuroni in Legno — FinestrArte 3.0')
    @section('meta_description', 'Scuroni in legno: doghe orizzontali/verticali, alla Romanina, Pocket e alla Veneta.
        Soluzioni tradizionali e moderne per oscuramento e stile.')
    @section('og_title', 'Scuroni in Legno — FinestrArte 3.0')
    @section('og_description', 'Scuroni in legno: estetica, solidità e configurazioni versatili. Scopri le tipologie e
        le finiture disponibili.')
    @section('og_image', asset('img/og-scuroni-legno.jpg'))

    @push('structured-data')
        @php
            // Breadcrumbs: Home > Prodotti > Sistemi Oscuranti > Scuroni in Legno
            $breadcrumbs = [
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')],
                    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Prodotti', 'item' => route('prodotti.index')],
                    [
                        '@type' => 'ListItem',
                        'position' => 3,
                        'name' => $categoria->name ?? 'Sistemi Oscuranti',
                        'item' => url('/prodotti/' . ($categoria->slug ?? 'oscuranti')),
                    ],
                    ['@type' => 'ListItem', 'position' => 4, 'name' => 'Scuroni in Legno', 'item' => url()->current()],
                ],
            ];

            // Tipologie presenti in pagina per ItemList
            $types = [
                ['name' => 'Scuroni Classici — Doghe Orizzontali', 'url' => url()->current() . '#scuroni-classici'],
                ['name' => 'Scuroni alla Romanina', 'url' => url()->current() . '#scuroni-romanina'],
                ['name' => 'Scuroni Pocket', 'url' => url()->current() . '#scuroni-pocket'],
                ['name' => 'Scuroni alla Veneta', 'url' => url()->current() . '#scuroni-veneta'],
            ];
            $itemList = [];
            foreach ($types as $i => $t) {
                $itemList[] = [
                    '@type' => 'ListItem',
                    'position' => $i + 1,
                    'name' => $t['name'],
                    'url' => $t['url'],
                ];
            }

            // CollectionPage con ItemList (pagina elenco tipologie)
            $collection = [
                '@context' => 'https://schema.org',
                '@type' => 'CollectionPage',
                'name' => 'Scuroni in Legno',
                'url' => url()->current(),
                'about' => 'Tipologie di scuroni in legno',
                'mainEntity' => [
                    '@type' => 'ItemList',
                    'itemListElement' => $itemList,
                ],
            ];
        @endphp
        <script type="application/ld+json">{!! json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
        <script type="application/ld+json">{!! json_encode($collection,  JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
    @endpush

    {{-- Hero sottocategoria --}}
    <div class="position-relative overflow-hidden" style="height: 60vh; min-height: 250px;">
        <img src="{{ asset('img/prodotti/persiane/legno/sportelloni/header-scuroni-legno.jpg') }}"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;"
            alt="Scuroni in legno — panoramica">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-2 fw-bold font-titolo underline-thin">Scuroni in Legno</h1>
        </div>
    </div>

    {{-- bottone indietro --}}
    <div class="container pt-5">
        <a href="{{ url('/prodotti/' . $categoria->slug) }}" class="btn btn-pag-prod px-4"
            aria-label="Torna alla categoria {{ $categoria->name }}">
            <i class="bi bi-arrow-return-left me-2"></i> Torna a {{ $categoria->name }}
        </a>
    </div>

    {{-- Paragrafo descrittivo --}}
    <div class="container pb-5">
        <div class="row text-center justify-content-center mb-5 py-5">
            <div class="col-12">
                <div class="border"></div>
                <p class="lead text-center py-5 paragrafo">
                    Gli Scuroni in legno rappresentano una scelta tradizionale ma sempre attuale, in grado di
                    valorizzare
                    l’estetica dell’edificio con calore, solidità e carattere. Disponibili in diverse configurazioni e
                    lavorazioni, offrono soluzioni funzionali e versatili, adatte sia a contesti rustici che moderni.
                </p>
                <div class="border"></div>
            </div>
        </div>

        {{-- Griglia prodotti --}}

        {{-- card 1 --}}
        <div class="row g-4 justify-content-center pb-5 mb-5" id="scuroni-classici">
            <div class="col-8">
                <div class="card overflow-hidden card-prodotto card-hover-scale pt-5 text-center">
                    <h4 class="mb-5 underline-thin">Scuroni Classici</h4>
                    <div class="row justify-content-between text-center px-5 mx-5 pb-3">
                        <div class="col-12 col-md-5 mb-4">
                            <img src="{{ asset('img/prodotti/persiane/legno/sportelloni/doghe-orizzontali.png') }}"
                                alt="Scuroni classici a doghe orizzontali" class="img-fluid mb-2"
                                style="width: 400px; height: 400px; transform: scale(1.4); transform-origin: center; object-fit: contain;">
                            <h6 class="mb-0 fw-semibold">DOGHE ORIZZONTALI</h6>
                        </div>
                        <div class="col-12 col-md-5 mb-4">
                            <img src="{{ asset('img/prodotti/persiane/legno/sportelloni/doghe-verticali.png') }}"
                                alt="Scuroni classici a doghe verticali" class="img-fluid mb-2"
                                style="width: 400px; height: 400px; transform: scale(1.4); transform-origin: center; object-fit: contain;">
                            <h6 class="mb-0 fw-semibold">DOGHE VERTICALI</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- card 2 --}}
        <div class="row g-4 justify-content-center pb-5 mb-5" id="scuroni-romanina">
            <div class="col-8">
                <div class="card overflow-hidden card-prodotto card-hover-scale pt-5 text-center">
                    <h4 class="mb-5 pt-3 underline-thin">Scuroni alla Romanina</h4>
                    <div class="row justify-content-between text-center px-5 mx-5 pb-3">
                        <div class="col-12 col-md-5 mb-4">
                            <img src="{{ asset('img/prodotti/persiane/legno/sportelloni/romanina1.png') }}"
                                alt="Scuroni alla Romanina — variante 1" class="img-fluid mb-2"
                                style="max-height: 400px; object-fit: contain;">
                        </div>
                        <div class="col-12 col-md-5 mb-4">
                            <img src="{{ asset('img/prodotti/persiane/legno/sportelloni/romanina2.png') }}"
                                alt="Scuroni alla Romanina — variante 2" class="img-fluid mb-2"
                                style="max-height: 400px; object-fit: contain;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- card 3 --}}
        <div class="row g-4 justify-content-center pb-5 mb-5" id="scuroni-pocket">
            <div class="col-8">
                <div class="card overflow-hidden card-prodotto card-hover-scale pt-5 text-center">
                    <h4 class="mb-5 pt-3 underline-thin">Scuroni Pocket</h4>
                    <div class="row justify-content-between text-center px-5 mx-5 pb-3">
                        <div class="col-12 col-md-5 mb-4">
                            <img src="{{ asset('img/prodotti/persiane/legno/sportelloni/pocket1.png') }}"
                                alt="Scuroni Pocket — variante 1" class="img-fluid mb-2"
                                style="width: 400px; height: 400px; transform: scale(1.4); transform-origin: center; object-fit: contain;">
                        </div>
                        <div class="col-12 col-md-5 mb-4">
                            <img src="{{ asset('img/prodotti/persiane/legno/sportelloni/pocket2.png') }}"
                                alt="Scuroni Pocket — variante 2" class="img-fluid mb-2"
                                style="width: 400px; height: 400px; transform: scale(1.5); transform-origin: center; object-fit: contain;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- card 4 --}}
        <div class="row g-4 justify-content-center pb-5 mb-5" id="scuroni-veneta">
            <div class="col-8">
                <div class="card overflow-hidden card-prodotto card-hover-scale pt-5 text-center">
                    <h4 class="mb-5 pt-3 underline-thin">Scuroni alla Veneta</h4>
                    <div class="row justify-content-between text-center px-5 mx-5 pb-3">
                        <div class="col-12 col-md-5 mb-4">
                            <img src="{{ asset('img/prodotti/persiane/legno/sportelloni/veneta1.png') }}"
                                alt="Scuroni alla Veneta — variante 1" class="img-fluid mb-2"
                                style="width: 350px; height: 350px; transform: scale(1.5); transform-origin: center; object-fit: contain;">
                        </div>
                        <div class="col-12 col-md-5 mb-4">
                            <img src="{{ asset('img/prodotti/persiane/legno/sportelloni/veneta2.png') }}"
                                alt="Scuroni alla Veneta — variante 2" class="img-fluid mb-2"
                                style="width: 350px; height: 350px; transform: scale(1.5); transform-origin: center; object-fit: contain;">
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
                    <h3 class="text-center mb-4 underline-thin">Rivestimenti disponibili</h3>
                    <div class="card card-prodotto px-5 py-3">
                        <div class="position-relative">
                            <div class="swiper px-3" aria-label="Carosello rivestimenti scuroni in legno">
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
                                        @php
                                            $label = Str::of($img)
                                                ->replace(['-', '_'], ' ')
                                                ->title();
                                        @endphp
                                        <div class="swiper-slide text-center">
                                            <img src="{{ asset('img/prodotti/finestre/legno/rivestimenti/' . $img . '.jpg') }}"
                                                alt="Finitura legno: {{ $label }}"
                                                class="img-fluid rounded-circle img-rivestimento"
                                                style="width: 80px; height: 80px; object-fit: cover; cursor: pointer;"
                                                data-nome="{{ $label }}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Bottoni swiper -->
                            <div class="swiper-button-prev text-dark" aria-label="Precedente"></div>
                            <div class="swiper-button-next text-dark" aria-label="Successivo"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- modale carosello --}}
        <div class="modal fade" id="modalRivestimento" tabindex="-1" aria-hidden="true"
            aria-labelledby="rivestimentoNome">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content bg-dark text-white border-0 rounded-4 shadow-lg overflow-hidden p-4"
                    style="width: 350px; height: 350px; margin: auto;">
                    <div
                        class="modal-body d-flex flex-column justify-content-center align-items-center text-center h-100">
                        <h5 class="modal-title fw-bold mb-4" id="rivestimentoNome"></h5>
                        <img id="rivestimentoImg" src="#" alt="Rivestimento"
                            class="img-fluid rounded-3 shadow"
                            style="width: 170px; height: 170px; object-fit: cover; object-position: center;">
                        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                            data-bs-dismiss="modal" aria-label="Chiudi"></button>
                    </div>
                </div>
            </div>
        </div>

</x-layout>
