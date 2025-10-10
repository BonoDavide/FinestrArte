<x-layout>

    {{-- SEO — Portoni Blindati --}}
    @section('title', 'Portoni Blindati su misura — 1 anta e doppia anta | FinestrArte 3.0')
    @section('meta_description', 'Portoni blindati su misura con struttura in lamiera 20/10, telaio parastrappi e
        chiusure multipunto. Versioni a un’anta e a doppia anta, finiture personalizzabili e componenti certificati.')
    @section('og_title', 'Portoni Blindati su misura — FinestrArte 3.0')
    @section('og_description', 'Sicurezza e design: portoni blindati a 1 anta e doppia anta con lamiera 20/10, cilindro
        europeo e finiture personalizzabili.')
    @section('og_image', asset('img/prodotti/portoni_blindati/anta-singola/porta_blindata2.jpg'))

    @push('structured-data')
        @php
            // Breadcrumbs: Home > Prodotti > Portoni Blindati
            $breadcrumbs = [
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')],
                    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Prodotti', 'item' => route('prodotti.index')],
                    ['@type' => 'ListItem', 'position' => 3, 'name' => 'Portoni Blindati', 'item' => url()->current()],
                ],
            ];

            // ItemList (pagina categoria Portoni Blindati)
            $itemList = [
                '@context' => 'https://schema.org',
                '@type' => 'ItemList',
                'name' => 'Portoni Blindati su misura',
                'description' => 'Selezione di portoni blindati in versione a un’anta e a doppia anta.',
                'numberOfItems' => 2,
                'itemListElement' => [
                    [
                        '@type' => 'Product',
                        'position' => 1,
                        'name' => 'Porta blindata ad anta unica',
                        'description' =>
                            'Struttura in lamiera 20/10, telaio parastrappi, chiusure multipunto con deviatori e asta superiore, cilindro europeo con corazza.',
                        'url' => url('/prodotti/portoni-blindati#anta-singola'),
                        'image' => asset('img/prodotti/portoni_blindati/anta-singola/porta_blindata2.jpg'),
                        'brand' => ['@type' => 'Brand', 'name' => 'FinestrArte 3.0'],
                    ],
                    [
                        '@type' => 'Product',
                        'position' => 2,
                        'name' => 'Porta blindata a doppia anta',
                        'description' =>
                            'Versione a due ante con lamiera 20/10, 6 cerniere rinforzate, chiusure multipunto e finiture personalizzabili.',
                        'url' => url('/prodotti/portoni-blindati#doppia-anta'),
                        'image' => asset('img/prodotti/portoni_blindati/doppia-anta/porta_blindata5.jpg'),
                        'brand' => ['@type' => 'Brand', 'name' => 'FinestrArte 3.0'],
                    ],
                ],
            ];
        @endphp

        <script type="application/ld+json">{!! json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
        <script type="application/ld+json">{!! json_encode($itemList, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
    @endpush


    {{-- Hero sottocategoria --}}
    <div class="position-relative overflow-hidden" style="height: 60vh; min-height: 250px;">
        <img src="{{ asset('img/prodotti/portoni_blindati/header-porte-blindate.jpg') }}"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;" alt="Portoni Blindati">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-2 fw-bold font-titolo underline-thin">Portoni Blindati</h1>
        </div>
    </div>

    {{-- bottone indietro --}}
    <div class="container pt-5">
        <a href="{{ route('prodotti.index') }}" class="btn btn-pag-prod px-4" aria-label="Torna alla pagina Prodotti">
            <i class="bi bi-arrow-return-left me-2"></i> Torna a Prodotti
        </a>
    </div>

    {{-- Paragrafo descrittivo --}}
    <div class="container pb-5">
        <div class="row text-center justify-content-center mb-5 py-5">
            <div class="col-12">
                <div class="border"></div>
                <p class="lead text-center paragrafo pb-5 pt-5">
                    Portoni blindat realizzati a misura con struttura in lamiera 20/10, telaio parastrappi e chiusure
                    multipunto.
                    Finiture personalizzabili e componenti certificati per sicurezza e durata nel tempo.
                </p>
                <div class="border"></div>
            </div>
        </div>

        {{-- perchè sceglierci --}}
        <section class="bg-light pb-5 mb-5">
            <div class="container">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-3 text-center"">
                    <div class="col">
                        <div class="p-3 h-100 bg-dark border rounded-3">
                            <div class="fw-semibold mb-1 text-warning">Sicurezza multipunto</div>
                            <small class="text-white">Deviatori + asta superiore</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 h-100 bg-dark border rounded-3">
                            <div class="fw-semibold mb-1 text-warning">Lamiera 20/10</div>
                            <small class="text-white">Struttura rinforzata</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 h-100 bg-dark border rounded-3">
                            <div class="fw-semibold mb-1 text-warning">Telaio parastrappi</div>
                            <small class="text-white">Doppia battuta lato serratura</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 h-100 bg-dark border rounded-3">
                            <div class="fw-semibold mb-1 text-warning">Cilindro europeo</div>
                            <small class="text-white">Con corazza esterna</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 h-100 bg-dark border rounded-3">
                            <div class="fw-semibold mb-1 text-warning">Accessori inclusi</div>
                            <small class="text-white">Spioncino, pomolo, maniglia</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 h-100 bg-dark border rounded-3">
                            <div class="fw-semibold mb-1 text-warning">Finiture</div>
                            <small class="text-white">Mogano / Tanganica / RAL</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- sezioni prodotti --}}
        {{-- SEZIONE 1 — PORTA A UN’ANTA --}}
        <section class="container py-5">
            <div class="row align-items-center justify-content-between">
                {{-- Colonna IMMAGINI --}}
                <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                    <div id="swiperAntaMain" class="swiper swiper-gallery-main"
                        aria-label="Galleria porta blindata 1 anta">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('img/prodotti/portoni_blindati/anta-singola/porta_blindata5.jpg') }}"
                                    alt="Porta 1 anta - nera" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('img/prodotti/portoni_blindati/anta-singola/porta_blindata6.jpg') }}"
                                    alt="Porta 1 anta - marrone" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('img/prodotti/portoni_blindati/anta-singola/porta_blindata3.jpg') }}"
                                    alt="Porta 1 anta - decorata" loading="lazy">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('img/prodotti/portoni_blindati/anta-singola/porta_blindata4.jpg') }}"
                                    alt="Porta 1 anta - classica" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev" aria-label="Slide precedente"></div>
                        <div class="swiper-button-next" aria-label="Slide successiva"></div>
                    </div>
                </div>

                {{-- Colonna TESTO (sorella, non annidata) --}}
                <div class="col-12 col-lg-6">
                    <h2 class="mb-3 underline-thin">Porta blindata ad anta unica</h2>
                    <ul class="list-unstyled small mb-3">
                        <li class="h6 mb-3"><strong>Struttura:</strong> porta su misura in lamiera 20/10; telaio
                            parastrappi con doppia
                            battuta lato serratura.</li>
                        <li class="h6 mb-3"><strong>Chiusure:</strong> 2 deviatori a due punte (4 punti) + 1 asta
                            superiore (1 punto).
                        </li>
                        <li class="h6 mb-3"><strong>Cerniere e rinforzi:</strong> 3 cerniere; canotti di rinforzo in
                            lamiera 10/10.</li>
                        <li class="h6 mb-3"><strong>Serratura:</strong> singolo cilindro europeo (3 punti) con corazza
                            esterna e borchia
                            Yale.</li>
                        <li class="h6 mb-3"><strong>Accessori:</strong> spioncino, pomolo esterno, mezza maniglia
                            interna, paletto
                            notte/limitatore.</li>
                        <li class="h6 mb-3"><strong>Rivestimenti e vernici:</strong> pannelli lisci Mogano/Tanganica;
                            verniciatura a
                            polvere RAL 8017 bucciata.</li>
                    </ul>
                </div>
            </div>
        </section>


        {{-- SEZIONE 2 — PORTA A DOPPIA ANTA --}}
        <section class="container pb-5 pt-5">
            <div class="row align-items-center justify-content-between flex-lg-row-reverse">
                {{-- Galleria (main + thumbs) --}}
                <div class="col-12 col-lg-6 mb-4 mb-lg-0">

                    <!-- MAIN -->
                    <div id="swiperDoppiaMain" class="swiper swiper-gallery-main"
                        aria-label="Galleria porta blindata doppia anta">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img
                                    src="{{ asset('img/prodotti/portoni_blindati/doppia-anta/porta_blindata1.jpg') }}"
                                    alt="Porta doppia anta - legno" loading="lazy"></div>
                            <div class="swiper-slide"><img
                                    src="{{ asset('img/prodotti/portoni_blindati/doppia-anta/porta_blindata2.jpg') }}"
                                    alt="Porta doppia anta - pannelli" loading="lazy"></div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev" aria-label="Slide precedente"></div>
                        <div class="swiper-button-next" aria-label="Slide successiva"></div>
                    </div>
                </div>

                {{-- Testo --}}
                <div class="col-12 col-lg-6">
                    <h2 class="mb-3 underline-thin">Porta blindata a doppia anta</h2>
                    <ul class="list-unstyled small mb-3">
                        <li class="h6 mb-3"><strong>Struttura:</strong> lamiera 20/10 a misura; telaio parastrappi con
                            doppia battuta
                            lato serratura.</li>
                        <li class="h6 mb-3"><strong>Cerniere e rinforzi:</strong> 6 cerniere; canotti di rinforzo in
                            lamiera 10/10.</li>
                        <li class="h6 mb-3"><strong>Chiusure:</strong> 2 deviatori a due punte (4 punti) + 1 asta
                            superiore (1 punto).
                        </li>
                        <li class="h6 mb-3"><strong>Serratura:</strong> singolo cilindro europeo (3 punti) con corazza
                            esterna e borchia
                            Yale.</li>
                        <li class="h6 mb-3"><strong>Accessori:</strong> spioncino, pomolo esterno, mezza maniglia
                            interna, paletto
                            notte/limitatore.</li>
                        <li class="h6 mb-3"><strong>Rivestimenti e vernici:</strong> pannelli lisci Mogano/Tanganica;
                            verniciatura a
                            polvere RAL 8017 bucciata.</li>
                    </ul>
                </div>
            </div>
        </section>


    </div>

</x-layout>
