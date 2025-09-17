<x-layout>

    {{-- SEO --}}
    @section('title', 'Finestre in Legno — FinestrArte 3.0')
    @section('meta_description', 'Finestre in legno: calore estetico e prestazioni moderne. Scopri i modelli Dynamic
        Diamante e Dynamic 80: isolamento termico/acustico, vernici all’acqua e dettagli costruttivi.')
    @section('og_title', 'Finestre in Legno — FinestrArte 3.0')
    @section('og_description', 'Modelli Dynamic Diamante e Dynamic 80: legno selezionato, verniciatura all’acqua,
        isolamento e durata nel tempo.')
    @section('og_image', asset('img/og-finestre-legno.jpg'))

    @push('structured-data')
        @php
            // Breadcrumbs: Home > Prodotti > Finestre > Legno
            $breadcrumbs = [
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')],
                    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Prodotti', 'item' => route('prodotti.index')],
                    [
                        '@type' => 'ListItem',
                        'position' => 3,
                        'name' => $categoria->name ?? 'Finestre',
                        'item' => url('/prodotti/' . ($categoria->slug ?? 'finestre')),
                    ],
                    ['@type' => 'ListItem', 'position' => 4, 'name' => 'Finestre in Legno', 'item' => url()->current()],
                ],
            ];

            // Elenco modelli presenti nella pagina (per ItemList)
            $models = [
                [
                    'name' => 'Finestra Dynamic Diamante',
                    'image' => asset('img/prodotti/finestre/legno/dynamic2.png'),
                    'url' => url()->current() . '#dynamic-diamante',
                    'brand' => '—',
                ],
                [
                    'name' => 'Finestra Dynamic 80',
                    'image' => asset('img/prodotti/finestre/legno/dynamic3.png'),
                    'url' => url()->current() . '#dynamic-80',
                    'brand' => '—',
                ],
            ];

            $itemList = [];
            foreach ($models as $i => $m) {
                $itemList[] = [
                    '@type' => 'ListItem',
                    'position' => $i + 1,
                    'url' => $m['url'],
                    'name' => $m['name'],
                    'image' => $m['image'],
                ];
            }

            // CollectionPage con la lista dei modelli (pagina elenco, non scheda singola)
            $collection = [
                '@context' => 'https://schema.org',
                '@type' => 'CollectionPage',
                'name' => 'Finestre in Legno',
                'url' => url()->current(),
                'about' => 'Finestre in legno — modelli Dynamic',
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
        <img src="{{ asset('img/prodotti/finestre/pvc/finestre-pvc.png') }}"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;"
            alt="Finestre in legno — anteprima">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-2 fw-bold font-titolo underline-thin">Finestre in Legno</h1>
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
                    Le finestre in legno uniscono calore estetico e prestazioni moderne. Realizzate con materiali
                    naturali e cicli di verniciatura all’acqua ecocompatibili, garantiscono eccellente isolamento
                    termico e acustico, durata nel tempo e un’eleganza senza tempo.
                </p>
                <div class="border"></div>
            </div>
        </div>

        {{-- Griglia prodotti --}}

        {{-- card finestra dynamic diamante --}}
        <div class="row g-4 justify-content-center pb-5 mb-5" id="dynamic-diamante">
            <div class="col-10">
                <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                    <div class="col-5 p-0 me-4">
                        <img src="{{ asset('img/prodotti/finestre/legno/dynamic2.png') }}" class="img-prodotto"
                            alt="Finestra Dynamic Diamante — legno">
                    </div>

                    {{-- border --}}
                    <div class="border"></div>

                    <div class="col-5 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                        <h5 class="mb-3 card-title underline-thin">Finestra Dynamic Diamante</h5>

                        <ul class="list-unstyled mb-4">
                            <li><strong>Trasmittanza termica:</strong> Uw fino a 1,3 W/m²K</li>
                            <li><strong>Abbattimento acustico:</strong> fino a 44 dB</li>
                            <li><strong>Spessore vetro:</strong> fino a 29 mm</li>
                            <li><strong>Montante centrale:</strong> simmetria ante e maggiore stabilità</li>
                            <li><strong>Ferramenta:</strong> cerniere trend a regolazione tridimensionale</li>
                            <li><strong>Siliconatura vetro:</strong> doppia, automatica, con rasatura robot</li>
                            <li><strong>Doppia guarnizione:</strong> in TPE espanso, a scomparsa</li>
                            <li><strong>Verniciatura:</strong> a 4 mani, interamente all’acqua</li>
                            <li><strong>Vetro standard:</strong> basso emissivo, doppia sigillatura robotizzata</li>
                            <li><strong>High Fix System®:</strong> perni in legno ad espansione</li>
                            <li><strong>Asta monocomando:</strong> chiusura superiore e inferiore con leva</li>
                            <li><strong>Gocciolatoio:</strong> in legno, integrato con clip a scomparsa</li>
                        </ul>

                        {{-- <a href="{{ asset('pdf/finestra-dynamic-diamante.pdf') }}" target="_blank"
                            rel="noopener noreferrer" class="btn btn-scheda">
                            Scheda tecnica
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>

        {{-- card finestra dynamic 80 --}}
        <div class="row g-4 justify-content-center pb-5" id="dynamic-80">
            <div class="col-10">
                <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                    <div class="col-5 p-0 me-4">
                        <img src="{{ asset('img/prodotti/finestre/legno/dynamic3.png') }}" class="img-prodotto"
                            alt="Finestra Dynamic 80 — legno">
                    </div>

                    {{-- border --}}
                    <div class="border"></div>

                    <div class="col-5 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                        <h5 class="mb-3 card-title underline-thin">Finestra Dynamic 80</h5>

                        <ul class="list-unstyled mb-4">
                            <li><strong>Trasmittanza termica:</strong> Uw fino a 0,9 W/m²K</li>
                            <li><strong>Abbattimento acustico:</strong> fino a 46 dB</li>
                            <li><strong>Spessore vetro:</strong> fino a 43 mm</li>
                            <li><strong>Profili maggiorati:</strong> da 80 mm per vetri a doppia camera</li>
                            <li><strong>Ferramenta:</strong> cerniere trend a regolazione tridimensionale</li>
                            <li><strong>Siliconatura vetro:</strong> doppia, automatica, con rasatura robot</li>
                            <li><strong>Doppia guarnizione:</strong> in TPE espanso, a scomparsa</li>
                            <li><strong>Verniciatura:</strong> a 4 mani, interamente all’acqua</li>
                            <li><strong>Vetro standard:</strong> vetro triplo basso emissivo con gas Argon</li>
                            <li><strong>Canalina:</strong> Warm Edge “borgo caldo” di serie</li>
                            <li><strong>High Fix System®:</strong> perni in legno ad espansione</li>
                            <li><strong>Asta monocomando:</strong> chiusura superiore e inferiore con leva</li>
                            <li><strong>Gocciolatoio:</strong> in legno, integrato con clip a scomparsa</li>
                        </ul>

                        {{-- <a href="{{ asset('pdf/finestra-dynamic-80.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda">
                            Scheda tecnica
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5 pb-3">
            <div class="border"></div>
        </div>

        {{-- carosello rivestimenti legno --}}
        <div class="container container-car carosello-rivestimenti-wrapper pt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-carosello">
                    <h3 class="text-center mb-4 underline-thin">Rivestimenti disponibili</h3>
                    <div class="card card-prodotto px-5 py-3">
                        <div class="position-relative">
                            <div class="swiper px-3" aria-label="Carosello rivestimenti legno">
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
                                                alt="Rivestimento legno: {{ $label }}"
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
                        <img id="rivestimentoImg" src="#" alt="Rivestimento" class="img-fluid rounded-3 shadow"
                            style="width: 170px; height: 170px; object-fit: cover; object-position: center;">
                        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                            data-bs-dismiss="modal" aria-label="Chiudi"></button>
                    </div>
                </div>
            </div>
        </div>

</x-layout>
