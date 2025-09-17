<x-layout>

    {{-- SEO --}}
    @section('title', 'Persiana in Ferro SKUDO — FinestrArte 3.0')
    @section('meta_description', 'Persiana in ferro SKUDO con profili rinforzati e dotazioni antieffrazione RC3. Design
        curato, robustezza e sicurezza per la tua casa.')
    @section('og_title', 'Persiana in Ferro SKUDO — FinestrArte 3.0')
    @section('og_description', 'Persiana in ferro rinforzata SKUDO: profili ad alta resistenza, serratura a 3 punti e
        classe antieffrazione RC3.')
    @section('og_image', asset('img/prodotti/persiane/ferro/header-skudo.png'))

    @push('structured-data')
        @php
            // Breadcrumbs: Home > Prodotti > (categoria) > Persiane in Ferro (SKUDO)
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
                    [
                        '@type' => 'ListItem',
                        'position' => 4,
                        'name' => 'Persiane in Ferro — SKUDO',
                        'item' => url()->current(),
                    ],
                ],
            ];

            // Immagini prodotto
            $productImages = [
                asset('img/prodotti/persiane/ferro/header-skudo.png'),
                asset('img/prodotti/persiane/ferro/skudo-1.jpg'),
                asset('img/prodotti/persiane/ferro/skudo_profili.png'),
            ];

            // Caratteristiche tecniche -> PropertyValue
            $features = [
                ['name' => 'Struttura', 'value' => 'Persiana in ferro rinforzata'],
                ['name' => 'Telaio', 'value' => 'PSH squadrato scatolato a Z con falda in battuta 50 mm'],
                ['name' => 'Traversa inferiore', 'value' => 'Profilo U 25/10 zincato con scarico acqua'],
                ['name' => 'Sicurezza', 'value' => 'Rostri antistrappo'],
                ['name' => 'Serratura', 'value' => 'Basculante ad infilare a tre punti con comando maniglia'],
                ['name' => 'Profilo anta', 'value' => 'PA60 in tubolare zincato 60×40×1,5 mm'],
                ['name' => 'Confort acustico', 'value' => 'Antirumori in gomma sui puntali di chiusura'],
                ['name' => 'Classe antieffrazione', 'value' => 'RC3 (conforme ENV 1627)'],
            ];

            $additionalProps = array_map(function ($f) {
                return ['@type' => 'PropertyValue', 'name' => $f['name'], 'value' => $f['value']];
            }, $features);

            // Product schema (pagina a singolo prodotto)
            $product = [
                '@context' => 'https://schema.org',
                '@type' => 'Product',
                'name' => 'SKUDO',
                'category' => 'Persiana in ferro',
                'brand' => [
                    '@type' => 'Brand',
                    'name' => 'Rinascita',
                ],
                'image' => $productImages,
                'description' =>
                    'Persiana in ferro rinforzata con profili ad elevata resistenza all’effrazione (RC3), cura estetica e componenti di sicurezza.',
                'url' => url()->current(),
                'additionalProperty' => $additionalProps,
                // 'offers' si può aggiungere in futuro se inseriremo prezzo/disponibilità
                'isRelatedTo' => [
                    ['@type' => 'CreativeWork', 'name' => 'Scheda tecnica SKUDO', 'url' => asset('pdf/SKUDO.pdf')],
                ],
            ];
        @endphp
        <script type="application/ld+json">{!! json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
        <script type="application/ld+json">{!! json_encode($product, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
    @endpush

    {{-- Hero sottocategoria --}}
    <div class="position-relative overflow-hidden" style="height: 60vh; min-height: 250px;">
        <img src="{{ asset('img/prodotti/persiane/ferro/header-skudo.png') }}"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;"
            alt="Persiana in ferro SKUDO — vista hero">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-2 fw-bold font-titolo underline-thin">Persiane in Ferro</h1>
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
    <div class="container">
        <div class="row text-center justify-content-center mb-5 py-5">
            <div class="col-12">
                <div class="border"></div>
                <p class="lead text-center py-5 paragrafo">
                    Persiana in ferro rinforzata, curata nei minimi dettagli e progettata con profili ad elevata
                    resistenza all’effrazione (RC3).
                </p>
                <div class="border"></div>
            </div>
        </div>
    </div>

    {{-- Logo azienda + nome prodotto (SKUDO) --}}
    <section class="pb-2">
        <div class="container text-center">
            <img src="{{ asset('img/prodotti/grate/cropped-logo-rinascita.png') }}" alt="Logo Rinascita"
                class="img-fluid mb-4" style="max-height:80px;">
            <img src="{{ asset('img/prodotti/persiane/ferro/SKUDO-BLACK.png') }}" alt="Logo prodotto SKUDO"
                class="img-fluid pb-4" style="max-height:80px;">
        </div>
    </section>

    {{-- Caratteristiche (grid a 2 colonne) --}}
    <section class="py-5">
        <div class="container">
            <div class="card bg-dark text-white border-0 rounded-4 px-4 py-4 col-scheda-toska">
                <h3 class="mb-4 underline-thin text-center">Caratteristiche</h3>
                <ul class="fs-6 ms-5 fw-semibold mb-0 row row-cols-1 row-cols-md-2 g-2 caratteristiche-lista">
                    <li class="col">Persiana in ferro rinforzata per una maggiore resistenza all’intrusione</li>
                    <li class="col">Telaio PSH squadrato scatolato a Z con falda in battuta 50&nbsp;mm</li>
                    <li class="col">Traversa inferiore in profilo U 25/10 zincato con scarico acqua</li>
                    <li class="col">Rostri antistrappo</li>
                    <li class="col">Serratura basculante ad infilare a tre punti di chiusura con comando maniglia
                    </li>
                    <li class="col">Profilo anta PA60 in tubolare zincato 60×40×1,5&nbsp;mm</li>
                    <li class="col">Antirumori in gomma sui puntali di chiusura</li>
                    <li class="col">Doghe con sistema antieffrazione conforme ENV 1627 – Classe 3 (RC3)</li>
                </ul>

                {{-- bottone scheda tecnica --}}
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 ps-5 ms-5 pt-4 btn-caratteristiche">
                        <a href="{{ asset('pdf/SKUDO.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda d-inline-flex align-items-center gap-2 px-4 py-2 text-nowrap"
                            style="min-width: 180px;" aria-label="Apri la scheda tecnica SKUDO in PDF">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Doppia immagine (foto + profili) --}}
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset('img/prodotti/persiane/ferro/skudo-1.jpg') }}"
                        class="img-fluid rounded-4 shadow-sm" alt="Persiana in ferro SKUDO — foto prodotto">
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('img/prodotti/persiane/ferro/skudo_profili.png') }}"
                        class="img-fluid rounded-4 shadow-sm" alt="Profili e dettagli strutturali della persiana SKUDO">
                </div>
            </div>
        </div>
    </section>

    {{-- Carosello RAL --}}
    <section class="py-5 bg-light">
        <div class="container container-car carosello-rivestimenti-wrapper">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-carosello">
                    <h3 class="text-center mb-4 underline-thin">Rivestimenti disponibili</h3>

                    <div class="card card-prodotto px-5 py-3">
                        <div class="position-relative">
                            <div class="swiper px-3" id="swiperRivestimentiCombinati"
                                aria-label="Carosello colori RAL persiana SKUDO">
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

    {{-- Modale rivestimenti --}}
    <div class="modal fade" id="modalRivestimento" tabindex="-1" aria-hidden="true" aria-labelledby="rivestimentoNome">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark text-white border-0 rounded-4 shadow-lg overflow-hidden p-4"
                style="width:350px;height:350px;margin:auto;">
                <div class="modal-body d-flex flex-column justify-content-center align-items-center text-center h-100">
                    <h5 class="modal-title fw-bold mb-4" id="rivestimentoNome"></h5>
                    <img id="rivestimentoImg" src="#" alt="Rivestimento" class="img-fluid rounded-3 shadow"
                        style="width:170px;height:170px;object-fit:cover;object-position:center;">
                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                        data-bs-dismiss="modal" aria-label="Chiudi"></button>
                </div>
            </div>
        </div>
    </div>

</x-layout>
