<x-layout>

    {{-- SEO --}}
    @section('title', 'Persiana in Alluminio TOSKA — FinestrArte 3.0')
    @section('meta_description', 'Persiana in alluminio TOSKA con lamelle fisse o orientabili, con o senza telaio.
        Ferramenta robusta, ampia gamma RAL ed effetti legno.')
    @section('og_title', 'Persiana in Alluminio TOSKA — FinestrArte 3.0')
    @section('og_description', 'TOSKA: persiana in alluminio con ovaline fisse 50×20 o orientabili a goccia 71×19.
        Telaio perimetrale opzionale, colori RAL ed effetti legno.')
    @section('og_image', asset('img/prodotti/persiane/alluminio/header-toska.png'))

    @push('structured-data')
        @php
            // Breadcrumbs: Home > Prodotti > (categoria) > Persiane in Alluminio (TOSKA)
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
                        'name' => 'Persiane in Alluminio — TOSKA',
                        'item' => url()->current(),
                    ],
                ],
            ];

            // Immagini prodotto
            $productImages = [
                asset('img/prodotti/persiane/alluminio/header-toska.png'),
                asset('img/prodotti/persiane/alluminio/toska-1.jpg'),
                asset('img/prodotti/persiane/alluminio/toska_profili.png'),
            ];

            // Caratteristiche tecniche -> PropertyValue
            $features = [
                ['name' => 'Lamelle', 'value' => 'Fisse 50×20 oppure orientabili a goccia 71×19'],
                ['name' => 'Telaio', 'value' => 'Disponibile versione con telaio perimetrale o senza telaio'],
                ['name' => 'Ferramenta', 'value' => 'Robusta e regolabile'],
                ['name' => 'Finiture', 'value' => 'Ampia gamma colori RAL ed effetti legno'],
                ['name' => 'Design', 'value' => 'Adatta a contesti classici e moderni'],
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
                'name' => 'TOSKA',
                'category' => 'Persiana in alluminio',
                'brand' => ['@type' => 'Brand', 'name' => 'Rinascita'],
                'image' => $productImages,
                'description' =>
                    'Persiana in alluminio con lamelle fisse o orientabili, con o senza telaio. Ferramenta regolabile e ampia scelta di finiture.',
                'url' => url()->current(),
                'additionalProperty' => $additionalProps,
                'isRelatedTo' => [
                    ['@type' => 'CreativeWork', 'name' => 'Scheda tecnica TOSKA', 'url' => asset('pdf/TOSKA.pdf')],
                ],
            ];
        @endphp
        <script type="application/ld+json">{!! json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
        <script type="application/ld+json">{!! json_encode($product, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
    @endpush

    {{-- Hero sottocategoria --}}
    <div class="position-relative overflow-hidden" style="height: 60vh; min-height: 250px;">
        <img src="{{ asset('img/prodotti/persiane/alluminio/header-toska.png') }}"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;"
            alt="Persiana in alluminio TOSKA — vista hero">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-2 fw-bold font-titolo underline-thin">Persiane in Alluminio</h1>
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
                    Persiana in alluminio con lamelle fisse (ovaline da 50/10) o orientabili a goccia (71×19),
                    con o senza telaio. Perfetta per edifici moderni e storici grazie alla combinazione di funzionalità
                    e design.
                </p>
                <div class="border"></div>
            </div>
        </div>
    </div>

    {{-- Logo azienda + nome prodotto (TOSKA) --}}
    <section class="pb-2">
        <div class="container text-center">
            <img src="{{ asset('img/prodotti/grate/cropped-logo-rinascita.png') }}" alt="Logo Rinascita"
                class="img-fluid mb-4" style="max-height:80px;">
            <img src="{{ asset('img/prodotti/persiane/alluminio/TOSKA-BLACK.png') }}" alt="Logo prodotto TOSKA"
                class="img-fluid pb-3" style="max-height:70px;">
        </div>
    </section>

    {{-- Caratteristiche (grid a 2 colonne) --}}
    <section class="py-5">
        <div class="container">
            <div class="card bg-dark text-white border-0 rounded-4 px-4 py-4 col-scheda-toska">
                <h3 class="mb-4 underline-thin text-center">Caratteristiche</h3>
                <ul class="fs-5 ms-5 fw-semibold mb-0 row row-cols-1 row-cols-md-2 g-2 caratteristiche-lista">
                    <li class="col">Persiana in alluminio con lamelle fisse o orientabili</li>
                    <li class="col">Disponibile con telaio perimetrale o versione senza telaio</li>
                    <li class="col">Ovaline fisse 50×20, orientabili a goccia 71×19</li>
                    <li class="col">Ferramenta robusta e regolabile</li>
                    <li class="col">Ampia gamma colori: RAL ed effetti legno</li>
                    <li class="col">Design adatto a contesti classici e moderni</li>
                </ul>

                {{-- bottone scheda tecnica --}}
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 ps-5 ms-5 pt-4 btn-caratteristiche">
                        <a href="{{ asset('pdf/TOSKA.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda d-inline-flex align-items-center gap-2 px-4 py-2 text-nowrap"
                            style="min-width: 180px;" aria-label="Apri la scheda tecnica TOSKA in PDF">
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
                    <img src="{{ asset('img/prodotti/persiane/alluminio/toska-1.jpg') }}"
                        class="img-fluid rounded-4 shadow-sm" alt="Persiana in alluminio TOSKA — foto prodotto">
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('img/prodotti/persiane/alluminio/toska_profili.png') }}"
                        class="img-fluid rounded-4 shadow-sm" alt="Profili e dettagli strutturali della persiana TOSKA">
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
                                aria-label="Carosello colori RAL persiana TOSKA">
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
