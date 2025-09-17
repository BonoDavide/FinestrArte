<x-layout>

    {{-- SEO --}}
    @section('title', 'Grata in Ferro KRETA — FinestrArte 3.0')
    @section('meta_description', 'Grata di sicurezza in ferro zincato KRETA con profili 15/10, cerniere antistrappo e
        chiusure multipunto. Disegni personalizzabili e finiture RAL.')
    @section('og_title', 'Grata in Ferro KRETA — FinestrArte 3.0')
    @section('og_description', 'KRETA: grata di sicurezza in ferro zincato con profili rinforzati, chiusure multipunto e
        ampia scelta di finiture RAL.')
    @section('og_image', asset('img/prodotti/grate/header-grate.png'))

    @push('structured-data')
        @php
            // Breadcrumbs: Home > Prodotti > Grate in Ferro (KRETA)
            $breadcrumbs = [
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')],
                    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Prodotti', 'item' => route('prodotti.index')],
                    [
                        '@type' => 'ListItem',
                        'position' => 3,
                        'name' => 'Grate in Ferro — KRETA',
                        'item' => url()->current(),
                    ],
                ],
            ];

            // Immagini principali del prodotto
            $productImages = [
                asset('img/prodotti/grate/header-grate.png'),
                asset('img/prodotti/grate/KRETA-BLACK.png'),
            ];

            // Caratteristiche tecniche -> PropertyValue
            $features = [
                ['name' => 'Materiale', 'value' => 'Ferro zincato con tubolari tondi o squadrati (spessore 15/10)'],
                ['name' => 'Personalizzazione', 'value' => 'Disegni e lavorazioni su misura'],
                ['name' => 'Telaio', 'value' => 'PSH scatolato a Z con falda in battuta 50 mm'],
                ['name' => 'Traversa inferiore', 'value' => 'Profilo U 25/10 con scarico acqua'],
                ['name' => 'Sicurezza', 'value' => 'Cerniere/rostri antistrappo e asta basculante multipunto'],
                ['name' => 'Profilo anta', 'value' => 'PA60 in tubolare 60×40×1,5 mm'],
                ['name' => 'Comfort', 'value' => 'Antirumore in gomma sui puntali di chiusura'],
                ['name' => 'Finiture', 'value' => 'Ampia gamma colori RAL'],
            ];

            $additionalProps = array_map(
                fn($f) => [
                    '@type' => 'PropertyValue',
                    'name' => $f['name'],
                    'value' => $f['value'],
                ],
                $features,
            );

            // Product schema (singolo prodotto KRETA)
            $product = [
                '@context' => 'https://schema.org',
                '@type' => 'Product',
                'name' => 'KRETA',
                'category' => 'Grata di sicurezza in ferro',
                'brand' => ['@type' => 'Brand', 'name' => 'Rinascita'],
                'image' => $productImages,
                'description' =>
                    'Grata di sicurezza KRETA in ferro zincato con profili rinforzati, chiusure multipunto e finiture personalizzabili.',
                'url' => url()->current(),
                'additionalProperty' => $additionalProps,
                'isRelatedTo' => [
                    ['@type' => 'CreativeWork', 'name' => 'Scheda tecnica KRETA', 'url' => asset('pdf/KRETA.pdf')],
                ],
            ];
        @endphp
        <script type="application/ld+json">{!! json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
        <script type="application/ld+json">{!! json_encode($product, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
    @endpush

    {{-- Hero sottocategoria --}}
    <div class="position-relative overflow-hidden" style="height: 60vh; min-height: 250px;">
        <img src="{{ asset('img/prodotti/grate/header-grate.png') }}" class="position-absolute top-0 start-0 w-100 h-100"
            style="object-fit: cover;" alt="Grate in ferro KRETA — immagine di copertina">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-2 fw-bold font-titolo underline-thin">Grate in Ferro</h1>
        </div>
    </div>

    {{-- bottone indietro --}}
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
                    Grata di sicurezza in ferro zincato con profili da 15/10. Un complemento di protezione essenziale
                    contro le intrusioni, personalizzabile per esigenze estetiche e funzionali. Ideale per appartamenti
                    e immobili che richiedono protezione senza rinunciare all’estetica.
                </p>
                <div class="border"></div>
            </div>
        </div>
    </div>

    {{-- LOGO AZIENDA + NOME PRODOTTO --}}
    <section>
        <div class="container text-center">
            <img src="{{ asset('img/prodotti/grate/cropped-logo-rinascita.png') }}" alt="Logo Rinascita"
                class="img-fluid mb-4" style="max-height: 80px;">
            <img src="{{ asset('img/prodotti/grate/KRETA-BLACK.png') }}" alt="Logo prodotto KRETA"
                class="img-fluid pb-3" style="max-height: 150px;">
        </div>
    </section>

    {{-- CARATTERISTICHE (2 colonne) --}}
    <section class="py-5">
        <div class="container">
            <div class="card bg-dark text-white border-0 rounded-4 px-4 py-4 col-scheda-toska">
                <h3 class="mb-4 underline-thin text-center">Caratteristiche</h3>
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <ul class="fs-5 ms-5 fw-semibold mb-0 caratteristiche-lista">
                            <li>Ferro zincato con tubolari tondi o squadrati</li>
                            <li>Disegni e lavorazioni personalizzabili</li>
                            <li>Telaio PSH scatolato a Z, falda in battuta 50&nbsp;mm</li>
                            <li>Traversa inferiore U 25/10 con scarico acqua</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="fs-5 ms-5 fw-semibold mb-0">
                            <li>Cerniere antistrappo</li>
                            <li>Asta basculante con più punti di chiusura</li>
                            <li>Profilo anta PA60 in tubolare 60×40×1,5&nbsp;mm</li>
                            <li>Antirumore in gomma sui puntali di chiusura</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 ps-5 ms-5 pt-4 btn-caratteristiche">
                        <a href="{{ asset('pdf/KRETA.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda d-inline-flex align-items-center gap-2 px-4 py-2 text-nowrap"
                            style="min-width: 180px;" aria-label="Apri la scheda tecnica KRETA in PDF">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- TUBOLARI TONDI --}}
    <section class="py-5">
        <div class="container">
            <h3 class="mb-4 underline-thin text-center">Tubolari tondi</h3>
            <div class="row g-4">
                @foreach (range(1, 10) as $i)
                    @php $fname = $i === 1 ? "t{$i}.png" : "t{$i}.jpg"; @endphp
                    <div class="col-6 col-md-4 col-lg-2 text-center">
                        <img src="{{ asset('img/prodotti/grate/tondi/' . $fname) }}"
                            alt="Grata KRETA tubolare tondo modello T{{ $i }}" class="img-fluid mb-2">
                        <div class="fw-semibold">T{{ $i }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- TUBOLARI SQUADRATI --}}
    <section class="py-5">
        <div class="container">
            <h3 class="mb-4 underline-thin text-center">Tubolari squadrati</h3>
            <div class="row g-4">
                @foreach (range(1, 4) as $i)
                    <div class="col-6 col-md-3 text-center">
                        <img src="{{ asset('img/prodotti/grate/squadrati/s' . $i . '.jpg') }}"
                            alt="Grata KRETA tubolare squadrato modello S{{ $i }}" class="img-fluid mb-2">
                        <div class="fw-semibold">S{{ $i }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CAROSELLO RIVESTIMENTI – GRATE (RAL) --}}
    <div class="container container-car carosello-rivestimenti-wrapper mb-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-carosello">
                <h3 class="text-center mb-4 underline-thin">Rivestimenti disponibili</h3>

                <div class="card card-prodotto px-5 py-3">
                    <div class="position-relative">
                        <div class="swiper px-3" aria-label="Carosello colori RAL per grata KRETA">
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

    {{-- Modale (riuso) --}}
    <div class="modal fade" id="modalRivestimento" tabindex="-1" aria-hidden="true" aria-labelledby="rivestimentoNome">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark text-white border-0 rounded-4 shadow-lg overflow-hidden p-4"
                style="width: 350px; height: 350px; margin: auto;">
                <div class="modal-body d-flex flex-column justify-content-center align-items-center text-center h-100">
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
