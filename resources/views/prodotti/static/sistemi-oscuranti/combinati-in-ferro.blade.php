<x-layout>

    {{-- SEO --}}
    @section('title', 'Combinati in Ferro UNIKA — FinestrArte 3.0')
    @section('meta_description', 'UNIKA: combinato in ferro con grata + persiana integrate. Struttura zincata, chiusure
        multipunto, lamelle fisse o orientabili e finiture RAL.')
    @section('og_title', 'Combinati in Ferro UNIKA — FinestrArte 3.0')
    @section('og_description', 'Sicurezza e protezione dalle intemperie in un’unica soluzione: combinato UNIKA con grata
        e persiana integrate, personalizzabile nei dettagli.')
    @section('og_image', asset('img/prodotti/persiane/ferro_combinato/header-combinati.png'))

    @push('structured-data')
        @php
            // Breadcrumbs: Home > Prodotti > Combinati in ferro — UNIKA
            $breadcrumbs = [
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')],
                    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Prodotti', 'item' => route('prodotti.index')],
                    [
                        '@type' => 'ListItem',
                        'position' => 3,
                        'name' => 'Combinati in ferro — UNIKA',
                        'item' => url()->current(),
                    ],
                ],
            ];

            // Immagini prodotto
            $productImages = [
                asset('img/prodotti/persiane/ferro_combinato/header-combinati.png'),
                asset('img/prodotti/persiane/ferro_combinato/unika-foto.jpg'),
                asset('img/prodotti/persiane/ferro_combinato/unika-profili.png'),
            ];

            // Caratteristiche -> PropertyValue
            $features = [
                ['name' => 'Configurazione', 'value' => 'Grata di sicurezza + persiana integrate'],
                ['name' => 'Materiale', 'value' => 'Struttura in ferro zincato'],
                ['name' => 'Lamelle', 'value' => 'Fisse o orientabili (a richiesta)'],
                ['name' => 'Telaio', 'value' => 'Rinforzato con scarico acqua e battuta 50 mm'],
                ['name' => 'Sicurezza', 'value' => 'Cerniere antistrappo e chiusure multipunto'],
                ['name' => 'Personalizzazione', 'value' => 'Disegni e pannellature su misura'],
                ['name' => 'Finiture', 'value' => 'Verniciatura RAL con finiture speciali su richiesta'],
            ];
            $additionalProps = array_map(
                fn($f) => [
                    '@type' => 'PropertyValue',
                    'name' => $f['name'],
                    'value' => $f['value'],
                ],
                $features,
            );

            // Product schema (pagina a singolo prodotto)
            $product = [
                '@context' => 'https://schema.org',
                '@type' => 'Product',
                'name' => 'UNIKA',
                'category' => 'Combinato in ferro (grata + persiana)',
                'brand' => ['@type' => 'Brand', 'name' => 'Rinascita'],
                'image' => $productImages,
                'description' =>
                    'Combinato in ferro UNIKA: grata di sicurezza e persiana integrate in un’unica soluzione, con struttura zincata, chiusure multipunto e lamelle fisse o orientabili.',
                'url' => url()->current(),
                'additionalProperty' => $additionalProps,
                'isRelatedTo' => [
                    ['@type' => 'CreativeWork', 'name' => 'Scheda tecnica UNIKA', 'url' => asset('pdf/UNIKA.pdf')],
                ],
            ];
        @endphp
        <script type="application/ld+json">{!! json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
        <script type="application/ld+json">{!! json_encode($product, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
    @endpush

    {{-- HERO --}}
    <div class="position-relative overflow-hidden" style="height:60vh;min-height:250px;">
        <img src="{{ asset('img/prodotti/persiane/ferro_combinato/header-combinati.png') }}"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit:cover;"
            alt="Combinati in ferro UNIKA — immagine di copertina">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-2 fw-bold font-titolo underline-thin">Combinati in ferro</h1>
            <div class="mt-2 fs-5">Sicurezza unita al design</div>
        </div>
    </div>

    {{-- Back --}}
    <div class="container pt-5">
        <a href="{{ route('prodotti.index') }}" class="btn btn-pag-prod px-4" aria-label="Torna alla pagina Prodotti">
            <i class="bi bi-arrow-return-left me-2"></i> Torna a Prodotti
        </a>
    </div>

    {{-- Paragrafo descrittivo --}}
    <div class="container">
        <div class="row text-center justify-content-center mb-5 py-5">
            <div class="col-12">
                <div class="border"></div>
                <p class="lead text-center py-5 paragrafo">
                    La sicurezza della grata abbinata alla protezione dalle intemperie della persiana in un’unica
                    soluzione. Infinite combinazioni per soddisfare ogni gusto ed esigenza senza rinunciare
                    all’estetica.
                </p>
                <div class="border"></div>
            </div>
        </div>
    </div>

    {{-- Logo azienda + nome prodotto (UNIKA) --}}
    <section class="pb-2">
        <div class="container text-center">
            <img src="{{ asset('img/prodotti/grate/cropped-logo-rinascita.png') }}" alt="Logo Rinascita"
                class="img-fluid mb-4" style="max-height:80px;">
            <img src="{{ asset('img/prodotti/grate/UNIKA-BLACK-2.png') }}" alt="Logo prodotto UNIKA"
                class="img-fluid pb-3" style="max-height:120px;">
        </div>
    </section>

    {{-- Caratteristiche (grid a 2 colonne) --}}
    <section class="py-5">
        <div class="container">
            <div class="card bg-dark text-white border-0 rounded-4 px-4 py-4 col-scheda-toska">
                <h3 class="mb-4 underline-thin text-center">Caratteristiche</h3>
                <ul class="fs-5 ms-5 fw-semibold mb-0 row row-cols-1 row-cols-md-2 g-2 caratteristiche-lista">
                    <li class="col">Struttura in ferro zincato con grata + persiana integrate</li>
                    <li class="col">Lamelle fisse o orientabili (a richiesta)</li>
                    <li class="col">Telaio rinforzato con scarico acqua e battuta 50&nbsp;mm</li>
                    <li class="col">Cerniere antistrappo e chiusure multipunto</li>
                    <li class="col">Disegni e pannellature personalizzabili</li>
                    <li class="col">Verniciatura RAL con finiture speciali su richiesta</li>
                </ul>

                {{-- bottone scheda tecnica --}}
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 ps-5 ms-5 pt-4 btn-caratteristiche">
                        <a href="{{ asset('pdf/UNIKA.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda d-inline-flex align-items-center gap-2 px-4 py-2 text-nowrap"
                            style="min-width: 180px;" aria-label="Apri la scheda tecnica UNIKA in PDF">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset('img/prodotti/persiane/ferro_combinato/unika-foto.jpg') }}"
                        class="img-fluid rounded-4 shadow-sm" alt="Combinato UNIKA — vista prodotto" style="max-height: 620px">
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('img/prodotti/persiane/ferro_combinato/unika-profili.png') }}"
                        class="img-fluid rounded-4 shadow-sm" alt="Combinato UNIKA — profili e dettagli tecnici">
                </div>
            </div>
        </div>
    </section>

    {{-- Carosello RAL --}}
    <section class="py-5 bg-light">
        <div class="container container-car carosello-rivestimenti-wrapper">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-carosello">
                    <h3 class="text-center mb-4 underline-thin">Colorazioni RAL</h3>

                    <div class="card card-prodotto px-5 py-3">
                        <div class="position-relative">
                            <div class="swiper px-3" id="swiperRivestimentiCombinati"
                                aria-label="Carosello colori RAL combinato UNIKA">
                                <div class="swiper-wrapper align-items-center">
                                    @php
                                        $ral = [
                                            'RAL-1013',
                                            'RAL-3003',
                                            'RAL-3005',
                                            'RAL-5010',
                                            'RAL-5015',
                                            'RAL-6005',
                                            'RAL-6021',
                                            'RAL-7016',
                                            'RAL-7035',
                                            'RAL-8011',
                                            'RAL-8014',
                                            'RAL-9010',
                                        ];
                                    @endphp
                                    @foreach ($ral as $code)
                                        @php $label = str_replace('-', ' ', $code); @endphp
                                        <div class="swiper-slide text-center">
                                            <img src="{{ asset('img/prodotti/grate/rivestimenti/' . $code . '.jpg') }}"
                                                alt="Colore {{ $label }}"
                                                class="img-fluid rounded-circle img-rivestimento"
                                                style="width:80px;height:80px;object-fit:cover;cursor:pointer;"
                                                data-nome="{{ $label }}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="swiper-button-prev text-dark" aria-label="Precedente"></div>
                            <div class="swiper-button-next text-dark" aria-label="Successivo"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Modale rivestimenti (riuso) --}}
    <div class="modal fade" id="modalRivestimento" tabindex="-1" aria-hidden="true" aria-labelledby="rivestimentoNome">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark text-white border-0 rounded-4 shadow-lg overflow-hidden p-4"
                style="width:350px;height:350px;margin:auto;">
                <div class="modal-body d-flex flex-column justify-content-center align-items-center text-center h-100">
                    <h5 class="modal-title fw-bold mb-4" id="rivestimentoNome"></h5>
                    <img id="rivestimentoImg" src="#" alt="Rivestimento selezionato"
                        class="img-fluid rounded-3 shadow"
                        style="width:170px;height:170px;object-fit:cover;object-position:center;">
                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                        data-bs-dismiss="modal" aria-label="Chiudi"></button>
                </div>
            </div>
        </div>
    </div>

</x-layout>
