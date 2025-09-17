<x-layout>

    {{-- SEO --}}
    @section('title', 'Combinati in Ferro — FinestrArte 3.0')
    @section('meta_description', 'Combinati in ferro per sicurezza e oscuramento: soluzioni robuste con finiture RAL.
        Design curato e componenti rinforzati per resistere all’effrazione.')
    @section('og_title', 'Combinati in Ferro — FinestrArte 3.0')
    @section('og_description', 'Combinati in ferro: sistemi oscuranti robusti e sicuri con ampia gamma colori RAL.')
    @section('og_image', asset('img/prodotti/persiane/alluminio/header-toska.png')) {{-- usa l’header corretto quando disponibile --}}

    @push('structured-data')
        @php
            // Breadcrumbs: Home > Prodotti > (categoria) > Combinati in Ferro
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
                        'name' => 'Combinati in Ferro',
                        'item' => url()->current(),
                    ],
                ],
            ];

            // CollectionPage (pagina di categoria/sottocategoria con possibili modelli multipli)
            // Se in futuro aggiungi blocchi/ancore di modelli, possiamo popolare un ItemList.
            $collection = [
                '@context' => 'https://schema.org',
                '@type' => 'CollectionPage',
                'name' => 'Combinati in Ferro',
                'url' => url()->current(),
                'about' => 'Sistemi oscuranti combinati in ferro con finiture RAL',
            ];
        @endphp
        <script type="application/ld+json">{!! json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
        <script type="application/ld+json">{!! json_encode($collection,  JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
    @endpush

    {{-- Hero sottocategoria --}}
    <div class="position-relative overflow-hidden" style="height: 60vh; min-height: 250px;">
        <img src="{{ asset('img/prodotti/persiane/alluminio/header-toska.png') }}"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;"
            alt="Combinati in ferro — immagine di copertina">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-2 fw-bold font-titolo underline-thin">Combinati in Ferro</h1> {{-- titolo visivo lasciato invariato come da tua struttura --}}
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
                    Sistemi combinati in ferro progettati per garantire sicurezza, oscuramento e durata nel tempo.
                    Strutture rinforzate, ferramenta robusta e ampia scelta di finiture RAL per adattarsi a contesti
                    classici e moderni.
                </p>
                <div class="border"></div>
            </div>
        </div>
    </div>

    {{-- Logo azienda + nome prodotto (lasciati invariati se servono come placeholder) --}}
    <section class="pb-2">
        <div class="container text-center">
            <img src="{{ asset('img/prodotti/grate/cropped-logo-rinascita.png') }}" alt="Logo Rinascita"
                class="img-fluid mb-4" style="max-height:80px;">
            <img src="{{ asset('img/prodotti/persiane/alluminio/TOSKA-BLACK.png') }}" alt="Marchio prodotto"
                class="img-fluid pb-3" style="max-height:70px;">
        </div>
    </section>

    {{-- Caratteristiche (testo invariato nel markup) --}}
    <section class="py-5">
        <div class="container">
            <div class="card bg-dark text-white border-0 rounded-4 px-4 py-4 col-scheda-toska">
                <h3 class="mb-4 underline-thin text-center">Caratteristiche</h3>
                <ul class="fs-5 ms-5 fw-semibold mb-0 row row-cols-1 row-cols-md-2 g-2 caratteristiche-lista">
                    <li class="col">Struttura in ferro con elementi rinforzati</li>
                    <li class="col">Disponibilità con o senza telaio perimetrale</li>
                    <li class="col">Ferramenta robusta e regolabile</li>
                    <li class="col">Ampia gamma colori: RAL ed effetti speciali</li>
                    <li class="col">Adatti a contesti classici e moderni</li>
                    <li class="col">Possibilità di integrazione con sistemi di sicurezza</li>
                </ul>

                {{-- bottone scheda tecnica (placeholder, lascia il tuo PDF corretto quando disponibile) --}}
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 ps-5 ms-5 pt-4 btn-caratteristiche">
                        <a href="{{ asset('pdf/combinati-ferro.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda d-inline-flex align-items-center gap-2 px-4 py-2 text-nowrap"
                            style="min-width: 180px;" aria-label="Apri la scheda tecnica dei combinati in ferro in PDF">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Doppia immagine (lasciate come nel file, con alt coerenti) --}}
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset('img/prodotti/persiane/alluminio/toska-1.jpg') }}"
                        class="img-fluid rounded-4 shadow-sm" alt="Combinati in ferro — foto prodotto">
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('img/prodotti/persiane/alluminio/toska_profili.png') }}"
                        class="img-fluid rounded-4 shadow-sm" alt="Combinati in ferro — profili e dettagli">
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
                                aria-label="Carosello colori RAL combinati in ferro">
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
