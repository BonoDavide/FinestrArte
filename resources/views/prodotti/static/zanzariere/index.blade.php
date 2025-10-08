<x-layout>

    {{-- SEO — Zanzariere --}}
    @section('title', 'Zanzariere — Estetika, Neoscenica, Virtus, Jolly, Klip40 | FinestrArte 3.0')
    @section('meta_description', 'Zanzariere su misura: Estetika, Neoscenica, Virtus, Jolly e Klip40. Scorrimento
        fluido, tenuta anticimice, installazione rapida e design minimale per finestre e portefinestre.')
    @section('og_title', 'Zanzariere su misura — FinestrArte 3.0')
    @section('og_description', 'Proteggi i tuoi ambienti con zanzariere eleganti e funzionali: Estetika, Neoscenica,
        Virtus, Jolly e Klip40.')
    @section('og_image', asset('img/prodotti/zanzariere/categoria-zanzariera.jpg'))

    @push('structured-data')
        @php
            // Breadcrumbs: Home > Prodotti > Zanzariere
            $breadcrumbs = [
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')],
                    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Prodotti', 'item' => route('prodotti.index')],
                    ['@type' => 'ListItem', 'position' => 3, 'name' => 'Zanzariere', 'item' => url()->current()],
                ],
            ];

            // ItemList dei prodotti (pagina categoria)
            $itemList = [
                '@context' => 'https://schema.org',
                '@type' => 'ItemList',
                'name' => 'Zanzariere su misura',
                'description' => 'Selezione di zanzariere: Estetika, Neoscenica, Virtus, Jolly e Klip40.',
                'numberOfItems' => 5,
                'itemListElement' => [
                    [
                        '@type' => 'Product',
                        'position' => 1,
                        'name' => 'Estetika',
                        'description' =>
                            'Zanzariera anti-cimice con installazione anche senza viti e design a cornice piena.',
                        'url' => url('/prodotti/zanzariere#estetika'),
                        'image' => asset('img/prodotti/zanzariere/estetika.jpg'),
                        'isRelatedTo' => [
                            [
                                '@type' => 'CreativeWork',
                                'name' => 'Scheda tecnica Estetika',
                                'url' => asset('pdf/bettio_brochure-estetika.pdf'),
                            ],
                        ],
                    ],
                    [
                        '@type' => 'Product',
                        'position' => 2,
                        'name' => 'Neoscenica',
                        'description' => 'Zanzariera senza barriere con guida inferiore piatta per passaggi frequenti.',
                        'url' => url('/prodotti/zanzariere#neoscenica'),
                        'image' => asset('img/prodotti/zanzariere/neoscenica.jpg'),
                        'isRelatedTo' => [
                            [
                                '@type' => 'CreativeWork',
                                'name' => 'Scheda tecnica Neoscenica',
                                'url' => asset('pdf/bettio_brochure-neoscenica.pdf'),
                            ],
                        ],
                    ],
                    [
                        '@type' => 'Product',
                        'position' => 3,
                        'name' => 'Virtus',
                        'description' =>
                            'Zanzariera laterale con Clic-Clak®, sistema antivento Anima21® e tecnologia anticimice.',
                        'url' => url('/prodotti/zanzariere#virtus'),
                        'image' => asset('img/prodotti/zanzariere/virtus_assemblato-foro.jpg'),
                        'isRelatedTo' => [
                            [
                                '@type' => 'CreativeWork',
                                'name' => 'Scheda tecnica Virtus',
                                'url' => asset('pdf/bettio_brochure-virtus-by-bettio_ita-deu.pdf'),
                            ],
                        ],
                    ],
                    [
                        '@type' => 'Product',
                        'position' => 4,
                        'name' => 'Jolly',
                        'description' =>
                            'Zanzariera a scorrimento verticale con rete sempre tesa e cassonetto compatto.',
                        'url' => url('/prodotti/zanzariere#jolly'),
                        'image' => asset('img/prodotti/zanzariere/jolly-1.jpg'),
                        'isRelatedTo' => [
                            [
                                '@type' => 'CreativeWork',
                                'name' => 'Scheda tecnica Jolly',
                                'url' => asset('pdf/Jolly.pdf'),
                            ],
                        ],
                    ],
                    [
                        '@type' => 'Product',
                        'position' => 5,
                        'name' => 'Klip40',
                        'description' =>
                            'Zanzariera a montaggio rapido senza viti, chiusura magnetica e profilo da 40 mm.',
                        'url' => url('/prodotti/zanzariere#klip40'),
                        'image' => asset('img/prodotti/zanzariere/klip_40-1.jpg'),
                        'isRelatedTo' => [
                            [
                                '@type' => 'CreativeWork',
                                'name' => 'Scheda tecnica Klip40',
                                'url' => asset('pdf/Klip40.pdf'),
                            ],
                        ],
                    ],
                ],
            ];
        @endphp

        <script type="application/ld+json">{!! json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
        <script type="application/ld+json">{!! json_encode($itemList, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
    @endpush


    {{-- Hero sottocategoria --}}
    <div class="position-relative overflow-hidden" style="height: 60vh; min-height: 250px;">
        <img src="{{ asset('img/prodotti/zanzariere/header-zanzariere.jpg') }}"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;" alt="Zanzariere">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-2 fw-bold font-titolo underline-thin">Zanzariere</h1>
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
                    Le zanzariere uniscono tecnologia, design e praticità d’uso per offrire
                    comfort e protezione in ogni ambiente.
                    Realizzate con materiali resistenti e sistemi brevettati, garantiscono scorrimento
                    fluido,
                    chiusure sicure e massima tenuta contro gli insetti.
                </p>
                <div class="border"></div>
            </div>
        </div>

        {{-- griglia prodotti --}}
        {{-- card Zanzariera – Estetika --}}
        <div class="row g-4 justify-content-center pb-5 pt-4" id="estetika">
            <div class="col-10">
                <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                    <div class="col-5 p-0 me-4">
                        <img src="{{ asset('img/prodotti/zanzariere/estetika.jpg') }}" class="img-prodotto"
                            style="max-height: 550px" alt="Zanzariera Estetika — sezione prodotto">
                    </div>

                    <div class="col-5 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                        {{-- LOGHI AFFIANCATI AL POSTO DEL TITOLO (solo nome modello) --}}
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="h4 fw-bold m-0 underline-thin">Estetika</span>
                        </div>

                        <ul class="list-unstyled mb-4">
                            <li><strong>Anti-cimice:</strong> nuova tecnologia collaudata per bloccare l’ingresso degli
                                insetti.</li>
                            <li><strong>Autoregolante:</strong> compensazione automatica dei fuori squadra per un
                                montaggio preciso.</li>
                            <li><strong>Installazione rapida:</strong> sicura e possibile anche <em>senza viti</em>.
                            </li>
                            <li><strong>Design a cornice piena:</strong> finitura pulita, con nappino a scomparsa e
                                spazzolino retrattile.</li>
                            <li><strong>Versioni disponibili:</strong> ad incasso e motorizzata (batteria ricaricabile).
                            </li>
                        </ul>

                        <a href="{{ asset('pdf/bettio_brochure-estetika.pdf') }}" target="_blank"
                            rel="noopener noreferrer" class="btn btn-scheda"
                            aria-label="Apri scheda tecnica Estetika (PDF)">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- card Zanzariera – Neoscenica --}}
        <div class="row g-4 justify-content-center pb-5 pt-5" id="neoscenica">
            <div class="col-10">
                <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                    <div class="col-5 p-0 me-4">
                        <img src="{{ asset('img/prodotti/zanzariere/neoscenica.jpg') }}" class="img-prodotto"
                            style="max-height: 550px" alt="Zanzariera Neoscenica — sezione prodotto">
                    </div>

                    <div class="col-5 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                        {{-- TITOLO AL POSTO DEI LOGHI --}}
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="h4 fw-bold m-0 underline-thin">Neoscenica</span>
                        </div>

                        <ul class="list-unstyled mb-4">
                            <li><strong>Senza barriere a pavimento:</strong> guida inferiore piatta e sicura per il
                                passaggio.</li>
                            <li><strong>Scorrimento fluido e silenzioso:</strong> grazie al sistema magnetico e ai
                                materiali anti-attrito.</li>
                            <li><strong>Perfetta tenuta all’aria e agli insetti:</strong> grazie al brevetto
                                <em>Scenica®</em> evoluto.
                            </li>
                            <li><strong>Installazione rapida:</strong> applicazione frontale o in nicchia, senza opere
                                murarie.</li>
                            <li><strong>Design minimale:</strong> profili ridotti, estetica essenziale, adatta a ogni
                                contesto.</li>
                        </ul>

                        <a href="{{ asset('pdf/bettio_brochure-neoscenica.pdf') }}" target="_blank"
                            rel="noopener noreferrer" class="btn btn-scheda"
                            aria-label="Apri scheda tecnica Neoscenica (PDF)">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- card Zanzariera – Virtus --}}
        <div class="row g-4 justify-content-center pb-5 pt-5" id="virtus">
            <div class="col-10">
                <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                    <div class="col-5 p-0 me-4">
                        <img src="{{ asset('img/prodotti/zanzariere/virtus_assemblato-foro.jpg') }}"
                            class="img-prodotto" style="max-height: 550px" alt="Zanzariera Virtus — sezione prodotto">
                    </div>

                    <div class="col-5 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                        {{-- TITOLO AL POSTO DEI LOGHI --}}
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="h4 fw-bold m-0 underline-thin">Virtus</span>
                        </div>

                        <ul class="list-unstyled mb-4">
                            <li><strong>Movimento laterale:</strong> scorrimento fluido e affidabile.</li>
                            <li><strong>Tecnologia anticimice:</strong> tenuta efficace contro l’ingresso degli insetti.
                            </li>
                            <li><strong>Sistema antivento Anima21®:</strong> stabilità della rete anche in caso di
                                raffiche.</li>
                            <li><strong>Chiusura Clic-Clak®:</strong> pratica e sicura, senza maniglie sporgenti.</li>
                            <li><strong>Installazione rapida:</strong> in foro o a incasso; guida inferiore
                                <em>calpestabile</em> da 18&nbsp;mm.
                            </li>
                        </ul>

                        <a href="{{ asset('pdf/bettio_brochure-virtus-by-bettio_ita-deu.pdf') }}" target="_blank"
                            rel="noopener noreferrer" class="btn btn-scheda"
                            aria-label="Apri scheda tecnica Virtus (PDF)">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- card Zanzariera – Jolly --}}
        <div class="row g-4 justify-content-center pb-5 pt-5" id="jolly">
            <div class="col-10">
                <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                    <div class="col-5 p-0 me-4 img-border-right">
                        <img src="{{ asset('img/prodotti/zanzariere/jolly-1.jpg') }}" class="img-prodotto"
                            style="max-height: 550px" alt="Zanzariera Jolly — sezione prodotto">
                    </div>

                    <div class="col-5 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                        {{-- TITOLO --}}
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="h4 fw-bold m-0 underline-thin">Jolly</span>
                        </div>

                        <ul class="list-unstyled mb-4">
                            <li><strong>Scorrimento verticale:</strong> sistema a molla con rete sempre tesa e movimento
                                fluido.</li>
                            <li><strong>Ingombro ridotto:</strong> cassonetto compatto ideale per finestre di piccole
                                dimensioni.</li>
                            <li><strong>Guida bassa:</strong> profilo inferiore minimo per passaggi comodi e pulizia
                                facilitata.</li>
                            <li><strong>Facile manutenzione:</strong> rimozione e pulizia della rete in pochi gesti.
                            </li>
                            <li><strong>Design essenziale:</strong> linee pulite e adattabili a ogni tipo di infisso.
                            </li>
                        </ul>

                        <a href="{{ asset('pdf/Jolly.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda" aria-label="Apri scheda tecnica Jolly (PDF)">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- card Zanzariera – Klip40 --}}
        <div class="row g-4 justify-content-center pb-5 pt-5" id="klip40">
            <div class="col-10">
                <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                    <div class="col-5 p-0 me-4 img-border-right">
                        <img src="{{ asset('img/prodotti/zanzariere/klip_40-1.jpg') }}" class="img-prodotto"
                            style="max-height: 550px" alt="Zanzariera Klip40 — sezione prodotto">
                    </div>

                    <div class="col-5 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                        {{-- TITOLO --}}
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="h4 fw-bold m-0 underline-thin">Klip40</span>
                        </div>

                        <ul class="list-unstyled mb-4">
                            <li><strong>Installazione rapida:</strong> montaggio senza viti grazie al sistema a
                                pressione brevettato.</li>
                            <li><strong>Ingombro ridotto:</strong> solo 40&nbsp;mm di profondità, ideale per spazi
                                limitati.</li>
                            <li><strong>Chiusura magnetica:</strong> garantisce aderenza perfetta e sicurezza d’uso.
                            </li>
                            <li><strong>Rete tesa e stabile:</strong> sistema a molla calibrata per un movimento dolce e
                                controllato.</li>
                            <li><strong>Design pulito:</strong> profili lineari, adattabile a ogni tipo di infisso.</li>
                        </ul>

                        <a href="{{ asset('pdf/Klip40.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda" aria-label="Apri scheda tecnica Klip40 (PDF)">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- fine griglia prodotti --}}
    </div>

</x-layout>
