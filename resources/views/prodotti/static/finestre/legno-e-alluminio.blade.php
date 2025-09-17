<x-layout>

    {{-- SEO --}}
    @section('title', 'Finestre in Legno e Alluminio — FinestrArte 3.0')
    @section('meta_description', 'Finestre in legno e alluminio: calore del legno all’interno e protezione
        dell’alluminio all’esterno. Scopri Tekna Tonda, Tekna Quadra ed Evolution: prestazioni termiche/acustiche, finiture
        e dettagli tecnici.')
    @section('og_title', 'Finestre in Legno e Alluminio — FinestrArte 3.0')
    @section('og_description', 'Modelli Tekna Tonda, Tekna Quadra ed Evolution: efficienza energetica, vernici all’acqua
        e rivestimenti premium.')
    @section('og_image', asset('img/og-legno-alluminio.jpg'))

    @push('structured-data')
        @php
            // Breadcrumbs: Home > Prodotti > Finestre > Legno e Alluminio
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
                        'name' => 'Finestre in Legno e Alluminio',
                        'item' => url()->current(),
                    ],
                ],
            ];

            // Elenco modelli presenti nella pagina (per ItemList)
            $models = [
                [
                    'name' => 'Finestra Tekna Tonda',
                    'image' => asset('img/prodotti/finestre/legno_e_alluminio/tekna-tonda1.png'),
                    'url' => url()->current() . '#tekna-tonda',
                ],
                [
                    'name' => 'Finestra Tekna Quadra',
                    'image' => asset('img/prodotti/finestre/legno_e_alluminio/tekna-quadra1.png'),
                    'url' => url()->current() . '#tekna-quadra',
                ],
                [
                    'name' => 'Finestra Evolution',
                    'image' => asset('img/prodotti/finestre/legno_e_alluminio/evolution1.png'),
                    'url' => url()->current() . '#evolution',
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

            // CollectionPage con ItemList (pagina elenco, non schede singole)
            $collection = [
                '@context' => 'https://schema.org',
                '@type' => 'CollectionPage',
                'name' => 'Finestre in Legno e Alluminio',
                'url' => url()->current(),
                'about' => 'Finestre ibride legno/alluminio',
                'mainEntity' => [
                    '@type' => 'ItemList',
                    'itemListElement' => $itemList,
                ],
            ];
        @endphp
        <script type="application/ld+json">{!! json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
        <script type="application/ld+json">{!! json_encode($collection,  JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
    @endpush>

    {{-- Hero sottocategoria --}}
    <div class="position-relative overflow-hidden" style="height: 60vh; min-height: 250px;">
        <img src="{{ asset('img/prodotti/finestre/pvc/finestre-pvc.png') }}"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;"
            alt="Finestre in legno e alluminio — anteprima">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-2 fw-bold font-titolo underline-thin">Finestre in Legno e Alluminio</h1>
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
                    Le finestre in legno e alluminio uniscono il calore del legno all’interno con la resistenza
                    e la protezione dell’alluminio all’esterno. Prestazioni termiche e acustiche elevate, cicli
                    di verniciatura all’acqua ed estetica duratura nel tempo.
                </p>
                <div class="border"></div>
            </div>
        </div>

        {{-- Griglia prodotti --}}

        {{-- card: Tekna Tonda --}}
        <div class="row g-4 justify-content-center pb-5" id="tekna-tonda">
            <div class="col-10">
                <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                    <div class="col-5 p-0 me-4">
                        <img src="{{ asset('img/prodotti/finestre/legno_e_alluminio/tekna-tonda1.png') }}"
                            class="img-prodotto ps-4" alt="Finestra Tekna Tonda — legno/alluminio">
                    </div>

                    {{-- border --}}
                    <div class="border"></div>

                    <div class="col-5 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                        <h5 class="mb-3 card-title underline-thin">Finestra Tekna Tonda</h5>

                        <ul class="list-unstyled mb-4">
                            <li><strong>Trasmittanza termica:</strong> Uw fino a 1,2 W/m²K</li>
                            <li><strong>Abbattimento acustico:</strong> fino a 47 dB</li>
                            <li><strong>Spessore vetro:</strong> fino a 31 mm</li>
                            <li><strong>Telaio:</strong> 79×75 mm con soglia ribassata in alluminio a taglio termico
                            </li>
                            <li><strong>Ante mobili:</strong> 87×71 mm con rivestimento</li>
                            <li><strong>Ferramenta:</strong> cerniere trend regolabili in 3D</li>
                            <li><strong>Sigillatura vetro:</strong> doppia: gomma TPE esterna + silicone interno</li>
                            <li><strong>Doppia guarnizione:</strong> TPE espanso, a scomparsa con SEAL PLUS®</li>
                            <li><strong>Verniciatura:</strong> a 4 mani, all’acqua, con robot antropomorfi</li>
                            <li><strong>Vetro standard:</strong> basso emissivo su doppia o tripla lastra</li>
                            <li><strong>High Fix System®:</strong> fissaggio a perni in legno ad espansione</li>
                            <li><strong>Asta monocomando:</strong> doppia chiusura con leva, alta tenuta</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- card: Tekna Quadra --}}
        <div class="row g-4 justify-content-center pb-5 pt-5" id="tekna-quadra">
            <div class="col-10">
                <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                    <div class="col-5 p-0 me-4">
                        <img src="{{ asset('img/prodotti/finestre/legno_e_alluminio/tekna-quadra1.png') }}"
                            class="img-prodotto ps-4" alt="Finestra Tekna Quadra — legno/alluminio">
                    </div>

                    {{-- border --}}
                    <div class="border"></div>

                    <div class="col-5 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                        <h5 class="mb-3 card-title underline-thin">Finestra Tekna Quadra</h5>

                        <ul class="list-unstyled mb-4">
                            <li><strong>Trasmittanza termica:</strong> Uw fino a 1,0 W/m²K</li>
                            <li><strong>Abbattimento acustico:</strong> fino a 50 dB</li>
                            <li><strong>Spessore vetro:</strong> fino a 48 mm</li>
                            <li><strong>Telaio:</strong> 79×75 mm con soglia ribassata in alluminio a taglio termico
                            </li>
                            <li><strong>Ante mobili:</strong> 87×71 mm con rivestimento</li>
                            <li><strong>Ferramenta:</strong> cerniere trend regolabili in 3D</li>
                            <li><strong>Sigillatura vetro:</strong> doppia, interna siliconica + esterna in gomma TPE
                            </li>
                            <li><strong>Doppia guarnizione:</strong> TPE espanso, a scomparsa con sistema SEAL PLUS®
                            </li>
                            <li><strong>Verniciatura:</strong> a 4 mani, all’acqua, con robot antropomorfi</li>
                            <li><strong>Vetro standard:</strong> basso emissivo su doppia o tripla lastra</li>
                            <li><strong>High Fix System®:</strong> fissaggio a perni in legno ad espansione</li>
                            <li><strong>Asta monocomando:</strong> doppia chiusura con leva, alta tenuta</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- card: Evolution --}}
        <div class="row g-4 justify-content-center pb-5 pt-5" id="evolution">
            <div class="col-10">
                <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                    <div class="col-5 p-0 me-4">
                        <img src="{{ asset('img/prodotti/finestre/legno_e_alluminio/evolution1.png') }}"
                            class="img-prodotto ps-4" alt="Finestra Evolution — legno/alluminio">
                    </div>

                    {{-- border --}}
                    <div class="border"></div>

                    <div class="col-5 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                        <h5 class="mb-3 card-title underline-thin">Finestra Evolution</h5>

                        <ul class="list-unstyled mb-4">
                            <li><strong>Trasmittanza termica:</strong> Uw fino a 0,9 W/m²K</li>
                            <li><strong>Abbattimento acustico:</strong> fino a 50 dB</li>
                            <li><strong>Spessore vetro:</strong> fino a 46 mm</li>
                            <li><strong>Telaio:</strong> 77×89 mm con soglia ribassata a taglio termico</li>
                            <li><strong>Ante mobili:</strong> 70×68 mm con rivestimento</li>
                            <li><strong>Ferramenta:</strong> cerniere trend regolabili in 3D</li>
                            <li><strong>Sigillatura vetro:</strong> fermavetro esterno in alluminio + silicone interno
                            </li>
                            <li><strong>Doppia guarnizione:</strong> TPE espanso, a scomparsa con SEAL PLUS®</li>
                            <li><strong>Verniciatura:</strong> a 4 mani, all’acqua, con robot antropomorfi</li>
                            <li><strong>Vetro standard:</strong> basso emissivo su vetro doppio o triplo</li>
                            <li><strong>High Fix System®:</strong> fissaggio a perni in legno ad espansione</li>
                            <li><strong>Asta monocomando:</strong> doppia chiusura con leva, alta tenuta</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5 pb-3">
            <div class="border"></div>
        </div>

        {{-- carosello rivestimenti legno e alluminio --}}
        <div class="container container-car carosello-rivestimenti-wrapper pt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-carosello">
                    <h3 class="text-center mb-4 underline-thin">Rivestimenti disponibili</h3>
                    <div class="card card-prodotto px-5 py-3">
                        <div class="position-relative">
                            <div class="swiper px-3" aria-label="Carosello rivestimenti legno e alluminio">
                                <div class="swiper-wrapper align-items-center">
                                    @php
                                        $rivestimenti = [
                                            'brunelleschi-bianco',
                                            'brunelleschi-grigio',
                                            'brunelleschi-marrone',
                                            'brunelleschi-rosso',
                                            'brunelleschi-verde',
                                            'decorati-legno-douglas',
                                            'decorati-legno-frassino-3d-3',
                                            'decorati-legno-frassino-3d-5',
                                            'decorati-legno-larice-bianco',
                                            'decorati-legno-larice-scuro',
                                            'decorati-legno-rovere-antico',
                                            'decorati-legno-rovere-rustico',
                                            'decorati-metallo-Acciaio-Corten',
                                            'Ossidato-Argento',
                                            'Ossidato-Bronzo-Chiaro',
                                            'Ossidato-Bronzo-Scuro',
                                            'Ossidato-Elettrocolore-Marrone-Scuro',
                                            'Ossidato-Elettrocolore-Marrone',
                                            'Ossidato-Inox',
                                            'Oxipulver-Bronzo',
                                            'Oxipulver-Champagne',
                                            'Oxipulver-Malachite',
                                            'Oxipulver-Marrone',
                                            'Oxipulver-Naturale',
                                            'Oxipulver-Nero',
                                            'Oxipulver-Zaffiro',
                                            'RAL1013-BIANCOPERLA',
                                            'RAL1019–BeigeGrigiastro',
                                            'RAL3005-ROSSOVINO',
                                            'RAL5014-BLUCOLOMBA',
                                            'RAL6005-VERDEMUSCHIO',
                                            'RAL6009-VERDEABETE',
                                            'RAL6019-VERDEBIANCASTRO',
                                            'RAL7001-GRIGIOARGENTO',
                                            'RAL7035-GRIGIOLUCE',
                                            'RAL7039–GrigioQuarzo',
                                            'RAL8014-MARRONESEPPIA',
                                            'RAL8017-MARRONECIOCCOLATA',
                                            'RAL9006-ALLUMINIOBRILLANTE',
                                            'RAL9007-ALLUMINIOGRIGIASTRO',
                                            'RAL9010-BIANCOPURO',
                                            'RAL9016-BIANCOTRAFFICO',
                                            'sable-blu',
                                            'sable-grigio',
                                            'sable-nero',
                                            'sable-verde',
                                        ];
                                    @endphp

                                    @foreach ($rivestimenti as $img)
                                        @php
                                            $label = Str::of($img)
                                                ->replace(['-', '_'], ' ')
                                                ->title();
                                        @endphp
                                        <div class="swiper-slide text-center">
                                            <img src="{{ asset('img/prodotti/finestre/legno_e_alluminio/rivestimenti/' . $img . '.jpg') }}"
                                                alt="Rivestimento legno/alluminio: {{ $label }}"
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
