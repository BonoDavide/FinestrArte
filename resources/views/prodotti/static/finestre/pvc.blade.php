<x-layout>

    {{-- SEO --}}
    @section('title', 'Finestre in PVC — FinestrArte 3.0')
    @section('meta_description',
        'Finestre in PVC Schüco e Korus: prestazioni termiche e acustiche, design e durata.
        Scopri CT 70 Classic, LivIng 82, FocusIng e Korus Fiber Slim con schede tecniche PDF e rivestimenti.')
    @section('og_title', 'Finestre in PVC — FinestrArte 3.0')
    @section('og_description',
        'Gamma PVC Schüco e Korus: CT 70 Classic, LivIng 82, FocusIng e Korus Fiber Slim. Alte
        prestazioni, schede tecniche in PDF e rivestimenti disponibili.')
    @section('og_image', asset('img/og-finestre-pvc.jpg'))

    @push('structured-data')
        @php
            // Breadcrumbs: Home > Prodotti > Finestre > PVC
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
                    ['@type' => 'ListItem', 'position' => 4, 'name' => 'Finestre in PVC', 'item' => url()->current()],
                ],
            ];

            // Elenco modelli presenti nella pagina (per ItemList)
            $models = [
                [
                    'name' => 'Schüco CT 70 Classic',
                    'image' => asset('img/prodotti/finestre/pvc/schuco-ct-70-classic.png'),
                    'url' => url()->current() . '#ct70-classic',
                    'brand' => 'Schüco',
                ],
                [
                    'name' => 'Schüco LivIng 82',
                    'image' => asset('img/prodotti/finestre/pvc/schuco-living-82.png'),
                    'url' => url()->current() . '#living-82',
                    'brand' => 'Schüco',
                ],
                [
                    'name' => 'Schüco FocusIng',
                    'image' => asset('img/prodotti/finestre/pvc/schuco-focusing.png'),
                    'url' => url()->current() . '#schuco-focusing',
                    'brand' => 'Schüco',
                ],
                [
                    'name' => 'Korus Fiber Slim',
                    'image' => asset('img/prodotti/finestre/pvc/korus-fiber-slim.png'),
                    'url' => url()->current() . '#fiber-slim',
                    'brand' => 'Korus',
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

            // CollectionPage con la lista dei modelli (pagina di raccolta, non singolo prodotto)
            $collection = [
                '@context' => 'https://schema.org',
                '@type' => 'CollectionPage',
                'name' => 'Finestre in PVC',
                'url' => url()->current(),
                'about' => 'Finestre in PVC Schüco e Korus',
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
            alt="Finestre in PVC — anteprima">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-2 fw-bold font-titolo underline-thin">Finestre in PVC</h1>
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
                <h1 class="underline-thin pt-5">Schüco</h1>
                <p class="lead text-center paragrafo pb-5">
                    I prodotti in PVC Schüco garantiscono un eccellente isolamento termico e acustico, mantenendo un
                    design minimal e prestazioni di lunga durata.
                </p>
                <div class="border"></div>
            </div>
        </div>

        {{-- SCHUCO --}}
        {{-- Griglia prodotti --}}

        {{-- card 1 --}}
        <div class="row g-4 justify-content-center pb-5" id="ct70-classic">
            <div class="col-10">
                <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                    <div class="col-5 p-0 me-4">
                        <img src="{{ asset('img/prodotti/finestre/pvc/schuco-ct-70-classic.png') }}"
                            class="img-prodotto" alt="Schüco CT 70 Classic — finestra in PVC">
                    </div>

                    <div class="col-5 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                        <h5 class="mb-3 card-title underline-thin">Schüco CT 70 Classic</h5>

                        <ul class="list-unstyled mb-4">
                            <li><strong>Prestazione energetica:</strong> Uw = 0,83 W/(m²K)</li>
                            <li><strong>Comfort acustico:</strong> Fino a 46 dB</li>
                            <li><strong>Protezione antieffrazione:</strong> Sicurezza RC2</li>
                            <li><strong>Profondità di montaggio:</strong> 72 mm</li>
                            <li><strong>Vetro isolante:</strong> Fino a 48 mm (triplo) o 28 mm (doppio)</li>
                            <li><strong>Maggiore tenuta:</strong> 3 guarnizioni</li>
                            <li><strong>Rinforzo acciaio zincato:</strong> 1,5 mm</li>
                            <li><strong>Ferramenta antieffrazione:</strong> Con ventilazione economica</li>
                        </ul>

                        <a href="{{ asset('pdf/schuco-ct-70-classic.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda" aria-label="Apri scheda tecnica Schüco CT 70 Classic (PDF)">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- card 2 --}}
        <div class="row g-4 justify-content-center pb-5 pt-5" id="living-82">
            <div class="col-10">
                <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                    <div class="col-5 p-0 me-4">
                        <img src="{{ asset('img/prodotti/finestre/pvc/schuco-living-82.png') }}" class="img-prodotto"
                            alt="Schüco LivIng 82 — finestra in PVC">
                    </div>

                    <div class="col-5 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                        <h5 class="mb-3 card-title underline-thin">Schüco LivIng 82</h5>

                        <ul class="list-unstyled mb-4">
                            <li><strong>Profondità telaio:</strong> 82 mm</li>
                            <li><strong>Valore Uf:</strong> fino a 0,96 W/(m²K)</li>
                            <li><strong>Camere:</strong> 7 camere</li>
                            <li><strong>Vetri supportati:</strong> da 24 a 52 mm</li>
                            <li><strong>Design:</strong> Aspetto classico, ampia gamma colori e finiture</li>
                            <li><strong>Comfort acustico:</strong> Elevato isolamento, chiusura fluida</li>
                            <li><strong>Finitura premium:</strong> Schüco AutomotiveFinish disponibile</li>
                        </ul>

                        <a href="{{ asset('pdf/schuco-living-82.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda" aria-label="Apri scheda tecnica Schüco LivIng 82 (PDF)">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- card Schüco FocusIng --}}
        <div class="row g-4 justify-content-center pb-5 pt-5" id="schuco-focusing">
            <div class="col-10">
                <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                    <div class="col-5 p-0 me-4">
                        <img src="{{ asset('img/prodotti/finestre/pvc/schuco-focusing.png') }}" class="img-prodotto"
                            alt="Schüco FocusIng — finestra in PVC">
                    </div>

                    <div class="col-5 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                        <h5 class="mb-3 card-title underline-thin">Schüco FocusIng</h5>

                        <ul class="list-unstyled mb-4">
                            <li><strong>Isolamento termico (profilo):</strong> Uf = 1,1 W/(m²K)</li>
                            <li><strong>Comfort acustico:</strong> Fino a Rw 48 dB</li>
                            <li><strong>Protezione antieffrazione:</strong> Sicurezza RC2</li>
                            <li><strong>Profondità di montaggio:</strong> Telaio 70 mm / Anta 76 mm</li>
                            <li><strong>Vetro isolante:</strong> 16–52 mm (doppi o tripli)</li>
                            <li><strong>Resistenza agenti atmosferici:</strong> Aria Classe 4 · Acqua 9A · Vento B5</li>
                            <li><strong>Struttura camere:</strong> Tecnologia 5/6 camere</li>
                            <li><strong>Peso anta massimo:</strong> 120 kg</li>
                        </ul>

                        <a href="{{ asset('pdf/Schuco-FocusIng.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda" aria-label="Apri scheda tecnica Schüco FocusIng (PDF)">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- carosello rivestimenti --}}
        <div class="container container-car carosello-rivestimenti-wrapper mb-5 pt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-carosello">
                    <h3 class="text-center mb-4 underline-thin">Rivestimenti disponibili</h3>
                    <div class="card card-prodotto px-5 py-3">
                        <div class="position-relative">
                            <div class="swiper px-3" aria-label="Carosello rivestimenti PVC">
                                <div class="swiper-wrapper align-items-center">
                                    @php
                                        $rivestimenti = [
                                            'Achatgrau-Glatt',
                                            'Aluminium-Geburstet',
                                            'Anteak-1',
                                            'Anthrazitgrau-Glatt',
                                            'Asteiche',
                                            'Avorio-materico',
                                            'Bergkiefer',
                                            'Bianco-frassino',
                                            'Bianco-materico',
                                            'Bronzo-scuro-materico',
                                            'Canadian',
                                            'Cremeweis',
                                            'Douglasie',
                                            'Golden-Oak',
                                            'Grigio-antracite-materico',
                                            'Grigio-basalto-materico',
                                            'Grigio-finestra-materico',
                                            'Grigio-umbro-materico',
                                            'Hellelfenbein',
                                            'Indian',
                                            'Lichtgrau-Glatt',
                                        ];
                                    @endphp

                                    @foreach ($rivestimenti as $img)
                                        @php
                                            $label = Str::of($img)->replace('-', ' ')->title();
                                        @endphp
                                        <div class="swiper-slide text-center">
                                            <img src="{{ asset('img/prodotti/finestre/pvc/rivestimenti/' . $img . '.webp') }}"
                                                alt="Rivestimento PVC: {{ $label }}"
                                                class="img-fluid rounded-circle img-rivestimento"
                                                style="width: 80px; height: 80px; object-fit: cover; cursor: pointer;"
                                                data-nome="{{ $label }}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Bottoni fuori visivamente -->
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
                        <img id="rivestimentoImg" src="#" alt="Rivestimento"
                            class="img-fluid rounded-3 shadow"
                            style="width: 170px; height: 170px; object-fit: contain;">
                        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                            data-bs-dismiss="modal" aria-label="Chiudi"></button>
                    </div>
                </div>
            </div>
        </div>

        {{-- KORUS --}}
        {{-- Paragrafo descrittivo --}}
        <div class="container pb-5 pt-5">
            <div class="row text-center justify-content-center mb-5 py-5">
                <div class="col-12">
                    <div class="border"></div>
                    <h1 class="underline-thin pt-5">Korus</h1>
                    <p class="lead text-center paragrafo pb-5">
                        I prodotti Korus Fiber Slim uniscono la leggerezza della fibra di vetro a un design essenziale e
                        moderno, garantendo un’elevata luminosità e ottime prestazioni di isolamento termico e acustico.
                    </p>
                    <div class="border"></div>
                </div>
            </div>

            {{-- Griglia prodotti --}}

            {{-- card Korus Fiber Slim --}}
            <div class="row g-4 justify-content-center pb-5" id="fiber-slim">
                <div class="col-10">
                    <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                        <div class="col-5 p-0 me-4">
                            <img src="{{ asset('img/prodotti/finestre/pvc/korus/korus-fiber-slim.PNG') }}"
                                class="img-prodotto" alt="Korus Fiber Slim — finestra in PVC">
                        </div>

                        {{-- border --}}
                        <div class="border"></div>

                        <div class="col-6 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                            <h5 class="mb-3 card-title underline-thin">Korus Fiber Slim</h5>

                            <ul class="list-unstyled mb-4">
                                <li><strong>+30% di luce:</strong> sezioni ridotte per maggiore superficie vetrata</li>
                                <li><strong>Trasmittanza migliorata:</strong> assenza di rinforzo in ferro</li>
                                <li><strong>Più leggerezza:</strong> anima in <em>fibra di vetro</em></li>
                                <li><strong>Nodo centrale:</strong> versione <em>slim</em> simmetrica o asimmetrica</li>
                                <li><strong>Comfort acustico:</strong> RW = 34–42 dB</li>
                                <li><strong>Resistenza agenti:</strong> Aria Classe 4 · Acqua 9A · Vento C4</li>
                                <li><strong>Maggiore tenuta:</strong> 3 guarnizioni · 6 camere nel telaio</li>
                                <li><strong>Profondità telaio:</strong> 76 mm</li>
                            </ul>
                            <a href="{{ asset('pdf/korus-fiber-slim.pdf') }}" target="_blank"
                                rel="noopener noreferrer" class="btn btn-scheda"
                                aria-label="Apri scheda tecnica Korus Fiber Slim (PDF)">
                                <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Carosello rivestimenti Korus --}}
            <div class="container container-car carosello-rivestimenti-wrapper mb-5 pt-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8 col-carosello">
                        <h3 class="text-center mb-4 underline-thin">Rivestimenti disponibili</h3>
                        <div class="card card-prodotto px-5 py-3">
                            <div class="position-relative">
                                <div class="swiper px-3" aria-label="Carosello rivestimenti Korus">
                                    <div class="swiper-wrapper align-items-center">
                                        @php
                                            // Elenco file così come presenti nella cartella /public/img/prodotti/finestre/pvc/korus/rivestimenti
                                            $rivestimentiKorus = [
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
                                                'V002_Bianco-Avorio-RAL.jpeg',
                                                'V004_Grigio-Anracite-RAL.jpeg',
                                                'V006_Grigio-Chiaro-RAL.jpeg',
                                                'V008_Woodec-Rovere-Golden.jpeg',
                                                'V009_Woodec-Noce.jpeg',
                                                'V010_Woodec-Rovere-Naturale.jpeg',
                                                'V012_Woodec-White.jpeg',
                                            ];
                                        @endphp

                                        @foreach ($rivestimentiKorus as $file)
                                            @php
                                                // Etichetta pulita dal nome file (senza estensione, underscore e trattini)
                                                $base = Str::of($file)
                                                    ->beforeLast('.') // toglie estensione
                                                    ->replace(['_', '-'], ' ') // spazi al posto di _ e -
                                                    ->replace('VLF', '') // rimuove eventuale suffisso VLF
                                                    ->trim()
                                                    ->value();

                                                // Manteniamo 'RAL' in maiuscolo
                                                $label = preg_replace('/\bral\b/i', 'RAL', $base);
                                            @endphp

                                            <div class="swiper-slide text-center">
                                                <img src="{{ asset('img/prodotti/finestre/pvc/korus/rivestimenti/' . $file) }}"
                                                    alt="Rivestimento Korus: {{ $label }}"
                                                    class="img-fluid rounded-circle img-rivestimento"
                                                    style="width: 80px; height: 80px; object-fit: cover; cursor: pointer;"
                                                    data-nome="{{ $label }}">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Bottoni fuori visivamente -->
                                <div class="swiper-button-prev text-dark" aria-label="Precedente"></div>
                                <div class="swiper-button-next text-dark" aria-label="Successivo"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div> {{-- fine container principale --}}

</x-layout>
