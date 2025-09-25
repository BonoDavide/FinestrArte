<x-layout>

    {{-- SEO --}}
    @section('title', 'Finestre in PVC e Alluminio — FinestrArte 3.0')
    @section('meta_description',
        'Finestre in PVC e alluminio: alte prestazioni termiche e acustiche, manutenzione
        ridotta e personalizzazione bicolore. Scopri Korus FiberK Slim con PDF tecnico e finiture disponibili.')
    @section('og_title', 'Finestre in PVC e Alluminio — FinestrArte 3.0')
    @section('og_description',
        'Profilo ibrido con anima in fibra, doppio/triplo vetro, classi di tenuta elevate.
        Rivestimenti e colori per ogni contesto.')
    @section('og_image', asset('img/og-finestre-pvc-alluminio.jpg'))

    @push('structured-data')
        @php
            // Breadcrumbs: Home > Prodotti > Finestre > PVC e Alluminio
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
                    [
                        '@type' => 'ListItem',
                        'position' => 4,
                        'name' => 'Finestre in PVC e Alluminio',
                        'item' => url()->current(),
                    ],
                ],
            ];

            // Elenco modelli presenti nella pagina (scalabile: ora 1)
            $models = [
                [
                    'name' => 'Korus FiberK Slim',
                    'image' => asset('img/prodotti/finestre/pvc_e_alluminio/korus-fiberk-slim-2.png'),
                    'url' => url()->current() . '#fiberk-slim',
                    'brand' => 'Korus',
                ],
            ];

            $itemList = [];
            foreach ($models as $i => $m) {
                $itemList[] = [
                    '@type' => 'ListItem',
                    'position' => $i + 1,
                    'name' => $m['name'],
                    'url' => $m['url'],
                    'image' => $m['image'],
                ];
            }

            // CollectionPage con ItemList (pagina elenco, non scheda singola)
            $collection = [
                '@context' => 'https://schema.org',
                '@type' => 'CollectionPage',
                'name' => 'Finestre in PVC e Alluminio',
                'url' => url()->current(),
                'about' => 'Finestre ibride PVC/Alluminio',
                'mainEntity' => [
                    '@type' => 'ItemList',
                    'itemListElement' => $itemList,
                ],
            ];

            $offerPvcAll = [
                '@context' => 'https://schema.org',
                '@type' => 'Offer',
                'name' => 'Promozione Korus su Finestre PVC/Alluminio',
                'description' => 'Anticipi solo il 50%. Offerta valida fino al 31/12.',
                'url' => url()->current(),
                'image' => asset('img/offerta_korus.jpg'),
                'seller' => [
                    '@type' => 'LocalBusiness',
                    'name' => 'FinestrArte 3.0',
                ],
                'eligibleRegion' => 'IT',
                'availabilityEnds' => now()->year . '-12-31',
                'itemOffered' => [
                    '@type' => 'Product',
                    'name' => 'Finestre in PVC e Alluminio',
                    'brand' => ['@type' => 'Brand', 'name' => 'Korus'],
                    'category' => 'Windows',
                ],
            ];
        @endphp
        <script type="application/ld+json">{!! json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
        <script type="application/ld+json">{!! json_encode($collection,  JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
        <script type="application/ld+json">{!! json_encode($offerPvcAll, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
    @endpush

    {{-- Hero sottocategoria --}}
    <div class="position-relative overflow-hidden" style="height: 60vh; min-height: 250px;">
        <img src="{{ asset('img/prodotti/finestre/pvc_e_alluminio/header-f-pvc-all.jpg') }}"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;"
            alt="Finestre in PVC e Alluminio — anteprima">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-2 fw-bold font-titolo underline-thin">Finestre in PVC e Alluminio</h1>
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
        <div class="row text-center justify-content-center mb-5 pt-5">
            <div class="col-12">
                <div class="border"></div>
                <p class="lead text-center py-5 paragrafo">
                    Le finestre in PVC e Alluminio offrono elevate prestazioni energetiche e acustiche, richiedono poca
                    manutenzione e permettono una vasta possibilità di personalizzazione, anche con finiture bicolore.
                    Ideali per chi cerca comfort abitativo e resistenza nel tempo.
                </p>
                <div class="border"></div>
            </div>
        </div>

        {{-- Sezione promozione Korus nella pagina PVC e Alluminio --}}
        <section id="promo-korus" class="py-4">
            <div class="container">
                <div class="card border-0 shadow-sm mx-auto" style="max-width: 550px;">
                    <img src="{{ asset('img/offerta_korus.jpg') }}" class="w-100"
                        alt="Promozione Korus: anticipi solo il 50% — offerta valida fino al 31 dicembre">
                </div>
            </div>
        </section>

        {{-- Griglia prodotti --}}
        {{-- card: FiberK Slim --}}
        <div class="row g-4 justify-content-center pb-5 pt-5" id="fiberk-slim">
            <div class="col-10">
                <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                    <div class="col-5 p-0 me-4">
                        <img src="{{ asset('img/prodotti/finestre/pvc_e_alluminio/korus-fiberk-slim-2.png') }}"
                            class="img-prodotto" alt="Korus FiberK Slim — finestra in PVC e alluminio">
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
                            class="btn btn-scheda" aria-label="Apri scheda tecnica Korus FiberK Slim (PDF)">
                            Scheda tecnica
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- fine card FiberK Slim --}}

        <div class="pt-5 pb-3">
            <div class="border"></div>
        </div>

        {{-- carosello rivestimenti --}}
        <div class="container container-car carosello-rivestimenti-wrapper mb-5 pt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-carosello">
                    <h3 class="text-center mb-4 underline-thin">Rivestimenti disponibili</h3>
                    <div class="card card-prodotto px-5 py-3">
                        <div class="position-relative">
                            <div class="swiper px-3" aria-label="Carosello rivestimenti PVC e alluminio">
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
                                        @php
                                            $label = Str::of($img)
                                                ->beforeLast('.')
                                                ->replace(['_', '-'], ' ')
                                                ->title();
                                        @endphp
                                        <div class="swiper-slide text-center">
                                            <img src="{{ asset('img/prodotti/finestre/pvc_e_alluminio/rivestimenti/' . $img) }}"
                                                alt="Rivestimento PVC/Alluminio: {{ $label }}"
                                                class="img-fluid rounded-circle img-rivestimento"
                                                style="width: 80px; height: 80px; object-fit: cover; cursor: pointer;"
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
        {{-- fine carosello --}}

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
                            style="width: 170px; height: 170px; object-fit: contain;">
                        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                            data-bs-dismiss="modal" aria-label="Chiudi"></button>
                    </div>
                </div>
            </div>
        </div>
        {{-- fine modale --}}

</x-layout>
