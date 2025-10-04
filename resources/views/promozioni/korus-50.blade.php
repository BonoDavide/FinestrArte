<x-layout>
    {{-- SEO base --}}
    @section('title', 'Promozione Korus — anticipi solo il 50% | FinestrArte 3.0')
    @section('meta_description',
        'Promozione Korus: infissi senza sconto in fattura, anticipi solo la metà. Valida fino
        al 31/12. Scopri i modelli Korus in PVC e PVC/Alluminio.')
    @section('og_title', 'Promozione Korus — anticipi solo il 50%')
    @section('og_description',
        'Fino al 31/12: infissi Korus con anticipo del 50%. Modelli in PVC e PVC/Alluminio,
        consulenza gratuita.')
    @section('og_image', asset('img/offerta_korus.jpg'))


    @push('structured-data')
        @php
            $aggregate = [
                '@context' => 'https://schema.org',
                '@type' => 'AggregateOffer',
                'name' => 'Promozione Korus: anticipi solo il 50%',
                'description' =>
                    'Infissi nuovi senza sconto in fattura: con Korus anticipi solo la metà. Offerta valida fino al 31/12.',
                'url' => url()->current(),
                'seller' => ['@type' => 'LocalBusiness', 'name' => 'FinestrArte 3.0'],
                'availabilityStarts' => now()->toDateString(),
                'availabilityEnds' => now()->year . '-12-31',
                'eligibleRegion' => 'IT',
                'image' => asset('img/offerta_korus.jpg'),
                'offers' => [
                    [
                        '@type' => 'Offer',
                        'name' => 'Korus Fiber Slim (PVC)',
                        'url' => url('/prodotti/finestre/pvc#fiber-slim'),
                        'itemOffered' => [
                            '@type' => 'Product',
                            'name' => 'Korus Fiber Slim',
                            'brand' => ['@type' => 'Brand', 'name' => 'Korus'],
                            'category' => 'Windows',
                        ],
                        'availabilityEnds' => now()->year . '-12-31',
                    ],
                    [
                        '@type' => 'Offer',
                        'name' => 'Finestre PVC e Alluminio (Korus)',
                        'url' => url('/prodotti/finestre/pvc-e-alluminio'),
                        'itemOffered' => [
                            '@type' => 'Product',
                            'name' => 'Finestre in PVC e Alluminio',
                            'brand' => ['@type' => 'Brand', 'name' => 'Korus'],
                            'category' => 'Windows',
                        ],
                        'availabilityEnds' => now()->year . '-12-31',
                    ],
                ],
            ];

            $faq = [
                '@context' => 'https://schema.org',
                '@type' => 'FAQPage',
                'mainEntity' => [
                    [
                        '@type' => 'Question',
                        'name' => 'Fino a quando è valida la promozione?',
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => 'La promo è valida fino al ' . now()->year . '-12-31' . ' salvo proroghe.',
                        ],
                    ],
                    [
                        '@type' => 'Question',
                        'name' => 'Cosa significa “anticipi solo il 50%”?',
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' =>
                                'Puoi procedere con l’ordine degli infissi anticipando soltanto la metà dell’importo, senza ricorrere allo sconto in fattura.',
                        ],
                    ],
                    [
                        '@type' => 'Question',
                        'name' => 'Quali modelli includono la promozione?',
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' =>
                                'Korus Fiber Slim (PVC) e le finestre in PVC/Alluminio indicate in questa pagina.',
                        ],
                    ],
                ],
            ];
        @endphp
        <script type="application/ld+json">{!! json_encode($aggregate, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
        <script type="application/ld+json">{!! json_encode($faq, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
    @endpush


    {{-- HERO promozione --}}
    <section class="h-hero-promo promo-hero text-white position-relative">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center">
                    <h1 class="display-3 fw-bold mb-2">Promozione Korus: anticipi solo il 50%</h1>
                    <p class="lead mb-0">Offerta valida fino al 31/12 • Consulenza gratuita</p>
                </div>
            </div>
    </section>

    {{-- Layout billboard: promo a sinistra (sticky), card prodotti a destra --}}
    <section class="py-5 mt-5 mb-5">
        <div class="container-fluid">
            <div class="row g-4">
                {{-- Colonna sinistra: immagine promo --}}
                <aside class="col-12 col-lg-4 p-promo">
                    <div class="position-sticky" style="top: 150px;">
                        <div class="card border-0 shadow-sm">
                            <img src="{{ asset('img/offerta_korus.jpg') }}"
                                class="card-img-top img-fluid rounded-bottom-2"
                                alt="Promozione Korus: anticipi solo il 50% — fino al 31 dicembre">
                        </div>
                    </div>
                </aside>

                {{-- Colonna destra: le tue card prodotto esistenti --}}
                <div class="col-12 col-lg-8">

                    {{-- card pvc --}}
                    <div class="row text-center justify-content-center pt-5">
                        <div class="col-12">
                            <h1 class="underline-thin">Korus PVC</h1>
                            <p class="lead text-center paragrafo px-5">
                                I prodotti Korus Fiber Slim uniscono la leggerezza della fibra di vetro a un design
                                essenziale e
                                moderno, garantendo un’elevata luminosità e ottime prestazioni di isolamento termico e
                                acustico.
                            </p>
                        </div>
                    </div>

                    {{-- card Korus Fiber Slim --}}
                    <div class="row g-4 justify-content-center pb-5 pt-5" id="fiber-slim">
                        <div class="col-10">
                            <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                                <div class="col-5 p-0 me-4">
                                    <img src="{{ asset('img/prodotti/finestre/pvc/korus/korus-fiber-slim2.png') }}"
                                        class="img-prodotto" alt="Korus Fiber Slim — finestra in PVC">
                                </div>

                                {{-- border --}}
                                <div class="border"></div>

                                <div class="col-6 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                                    <h5 class="mb-3 card-title underline-thin">Korus Fiber Slim</h5>

                                    <ul class="list-unstyled mb-4">
                                        <li><strong>+30% di luce:</strong> sezioni ridotte per maggiore superficie
                                            vetrata</li>
                                        <li><strong>Trasmittanza migliorata:</strong> assenza di rinforzo in ferro
                                        </li>
                                        <li><strong>Più leggerezza:</strong> anima in <em>fibra di vetro</em></li>
                                        <li><strong>Nodo centrale:</strong> versione <em>slim</em> simmetrica o
                                            asimmetrica</li>
                                        <li><strong>Comfort acustico:</strong> RW = 34–42 dB</li>
                                        <li><strong>Resistenza agenti:</strong> Aria Classe 4 · Acqua 9A · Vento C4
                                        </li>
                                        <li><strong>Maggiore tenuta:</strong> 3 guarnizioni · 6 camere nel telaio
                                        </li>
                                        <li><strong>Profondità telaio:</strong> 76 mm</li>
                                    </ul>
                                    <a href="{{ asset('pdf/korus-fiber-slim.pdf') }}" target="_blank"
                                        rel="noopener noreferrer" class="btn btn-scheda-5"
                                        aria-label="Apri scheda tecnica Korus Fiber Slim (PDF)">
                                        <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- card Korus Win Box --}}
                    <div class="row g-4 justify-content-center pb-5 pt-5" id="win-box">
                        <div class="col-10">
                            <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                                <div class="col-5 p-0 me-4">
                                    <img src="{{ asset('img/prodotti/finestre/pvc/korus/winbox/win-box.jpg') }}"
                                        class="img-prodotto" alt="Korus Win Box — finestra in PVC">
                                </div>

                                {{-- border --}}
                                <div class="border"></div>

                                <div class="col-6 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                                    <h5 class="mb-3 card-title underline-thin">Korus Win Box</h5>

                                    <ul class="list-unstyled mb-4">
                                        <li><strong>Semplicità lineare:</strong> profili essenziali per un design pulito
                                            e
                                            moderno</li>
                                        <li><strong>Maggiore luminosità:</strong> sezioni ottimizzate per incrementare
                                            la
                                            superficie vetrata</li>
                                        <li><strong>Versatile:</strong> disponibile con nodo centrale
                                            <em>simmetrico</em> o
                                            nuova versione <em>asimmetrica</em>
                                        </li>
                                        <li><strong>Isolamento ottimizzato:</strong> studiato per comfort termico e
                                            acustico
                                            nell’uso quotidiano</li>
                                        <li><strong>Durabilità:</strong> materiali resistenti e facile manutenzione</li>
                                        <li><strong>Finiture:</strong> abbinabile a diverse colorazioni e texture</li>
                                    </ul>

                                    <a href="{{ asset('pdf/KORUS-WIN-BOX.pdf') }}" target="_blank"
                                        rel="noopener noreferrer" class="btn btn-scheda"
                                        aria-label="Apri scheda tecnica Korus Win Box (PDF)">
                                        <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- card Korus Win Up --}}
                    <div class="row g-4 justify-content-center pb-5 pt-5" id="win-up">
                        <div class="col-10">
                            <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                                <div class="col-5 p-0 me-4">
                                    <img src="{{ asset('img/prodotti/finestre/pvc/korus/winup/win-up.jpg') }}"
                                        class="img-prodotto" alt="Korus Win Up — finestra in PVC">
                                </div>

                                {{-- border --}}
                                <div class="border"></div>

                                <div class="col-6 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                                    <h5 class="mb-3 card-title underline-thin">Korus Win Up</h5>

                                    <ul class="list-unstyled mb-4">
                                        <li><strong>Modulare e performante:</strong> pensato per coniugare efficienza e
                                            versatilità</li>
                                        <li><strong>Profilo adatto:</strong> ideale per ambienti d’arredo semplici e
                                            tradizionali</li>
                                        <li><strong>Nodo centrale:</strong> struttura che conferisce maggiore stabilità
                                            all’infisso</li>
                                        <li><strong>Facilità d’uso:</strong> manovre semplici e ridotta necessità di
                                            manutenzione</li>
                                        <li><strong>Resistenza agli agenti:</strong> Aria Classe 4 · Acqua 9A · Vento C4
                                        </li>
                                        <li><strong>Comfort acustico:</strong> RW = 34–42 dB</li>
                                    </ul>

                                    <a href="{{ asset('pdf/KORUS-WIN-UP-WINK-UP.pdf') }}" target="_blank"
                                        rel="noopener noreferrer" class="btn btn-scheda"
                                        aria-label="Apri scheda tecnica Korus Win Up (PDF)">
                                        <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- card Korus Lumen --}}
                    <div class="row g-4 justify-content-center pb-5 pt-5" id="lumen">
                        <div class="col-10">
                            <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                                <div class="col-5 p-0 me-4">
                                    <img src="{{ asset('img/prodotti/finestre/pvc/korus/lumen/lumen.jpg') }}"
                                        class="img-prodotto" alt="Korus Lumen — finestra in PVC">
                                </div>

                                {{-- border --}}
                                <div class="border"></div>

                                <div class="col-6 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                                    <h5 class="mb-3 card-title underline-thin">Korus Lumen</h5>

                                    <ul class="list-unstyled mb-4">
                                        <li><strong>Vivi la luce:</strong> sezioni ottimizzate per massima luminosità
                                        </li>
                                        <li><strong>Design minimale:</strong> profilo adatto ad ambienti moderni e
                                            puliti</li>
                                        <li><strong>Stabilità:</strong> nodo centrale che conferisce solidità
                                            all’infisso</li>
                                        <li><strong>Nuova versione:</strong> <em>maniglia centrale</em> per estetica
                                            ancora più
                                            uniforme</li>
                                        <li><strong>Resistenza agli agenti:</strong> Aria Classe 4 · Acqua 9A · Vento C4
                                        </li>
                                        <li><strong>Comfort acustico:</strong> RW = 34–42 dB</li>
                                    </ul>

                                    <a href="{{ asset('pdf/KORUS-LUMEN-LUMENK.pdf') }}" target="_blank"
                                        rel="noopener noreferrer" class="btn btn-scheda"
                                        aria-label="Apri scheda tecnica Korus Lumen (PDF)">
                                        <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- card Korus Win Slide --}}
                    <div class="row g-4 justify-content-center pb-5 pt-5" id="win-slide">
                        <div class="col-10">
                            <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                                <div class="col-5 p-0 me-4">
                                    <img src="{{ asset('img/prodotti/finestre/pvc/korus/winslide/win-slide.jpg') }}"
                                        class="img-prodotto" alt="Korus Win Slide — finestra scorrevole in PVC">
                                </div>

                                {{-- border --}}
                                <div class="border"></div>

                                <div class="col-6 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                                    <h5 class="mb-3 card-title underline-thin">Korus Win Slide</h5>

                                    <ul class="list-unstyled mb-4">
                                        <li><strong>Eleganza e luminosità:</strong> design pensato per ampie superfici
                                            vetrate
                                        </li>
                                        <li><strong>Versatilità di progettazione:</strong> ottimizza spazi e passaggi
                                        </li>
                                        <li><strong>Anta fissa Minimal:</strong> più luce naturale negli ambienti</li>
                                        <li><strong>Comfort termico:</strong> guarnizioni dell’anta per tenuta
                                            migliorata</li>
                                        <li><strong>Scorrimento facile:</strong> utilizzo semplice e manovra fluida</li>
                                        <li><strong>Performance:</strong> Aria Classe 4 · Acqua 8A/9A · Vento C2/C3 · RW
                                            = 32–43
                                            dB</li>
                                    </ul>

                                    <a href="{{ asset('pdf/KORUS-WIN-SLIDE-SLIDEK.pdf') }}" target="_blank"
                                        rel="noopener noreferrer" class="btn btn-scheda"
                                        aria-label="Apri scheda tecnica Korus Win Slide (PDF)">
                                        <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- card Korus Win Up Portoncino --}}
                    <div class="row g-4 justify-content-center pb-5 pt-5" id="win-up-portoncino">
                        <div class="col-10">
                            <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                                <div class="col-5 p-0 me-4">
                                    <img src="{{ asset('img/prodotti/finestre/pvc/korus/winup-portoncino/win_up_portoncino.jpg') }}"
                                        class="img-prodotto" alt="Korus Win Up Portoncino — portoncino in PVC">
                                </div>

                                {{-- border --}}
                                <div class="border"></div>

                                <div class="col-6 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                                    <h5 class="mb-3 card-title underline-thin">Korus Win Up Portoncino</h5>

                                    <ul class="list-unstyled mb-4">
                                        <li><strong>Solido e resistente:</strong> struttura pensata per affidabilità nel
                                            tempo
                                        </li>
                                        <li><strong>Ottimo isolamento termico:</strong> riduce la dispersione e i costi
                                            di
                                            riscaldamento</li>
                                        <li><strong>Protezione acustica:</strong> proprietà fonoassorbenti contro
                                            l’inquinamento
                                            sonoro</li>
                                        <li><strong>Personalizzazione estetica:</strong> disponibile con varie
                                            pannellature e
                                            vetri</li>
                                        <li><strong>Resistenza agli agenti:</strong> Tenuta acqua Classe 4B · Aria
                                            Classe 4 ·
                                            Vento Classe C2/B2</li>
                                        <li><strong>Comfort acustico:</strong> RW = 34–42 dB</li>
                                    </ul>

                                    <a href="{{ asset('pdf/KORUS-WIN-UP-WINK-UP-PORTONCINO.pdf') }}" target="_blank"
                                        rel="noopener noreferrer" class="btn btn-scheda"
                                        aria-label="Apri scheda tecnica Korus Win Up Portoncino (PDF)">
                                        <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- card pvc-alluminio --}}
                    <div class="row text-center justify-content-center pt-5">
                        <div class="col-12">
                            <h1 class="underline-thin">Korus PVC/Alluminio</h1>
                            <p class="lead text-center px-5 paragrafo">
                                Le finestre in PVC e Alluminio offrono elevate prestazioni energetiche e acustiche,
                                richiedono poca
                                manutenzione e permettono una vasta possibilità di personalizzazione, anche con finiture
                                bicolore.
                            </p>
                        </div>
                    </div>

                    {{-- card Korus FiberK Slim --}}
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
                                        <li><strong>Protezione antieffrazione:</strong> Incollaggio strutturale del
                                            vetro</li>
                                        <li><strong>Profilo innovativo:</strong> Anima in fibra di vetro</li>
                                        <li><strong>Vetro isolante:</strong> Disponibile in doppio o triplo vetro
                                        </li>
                                        <li><strong>Tenuta all'aria:</strong> Classe 4</li>
                                        <li><strong>Tenuta all’acqua:</strong> Classe 9A</li>
                                        <li><strong>Resistenza al vento:</strong> Classe C4 (fino a 180 km/h)</li>
                                    </ul>

                                    <a href="{{ asset('pdf/korus-fiberk-slim.pdf') }}" target="_blank"
                                        rel="noopener noreferrer" class="btn btn-scheda-5"
                                        aria-label="Apri scheda tecnica Korus FiberK Slim (PDF)">
                                        <i class="bi bi-file-earmark-pdf me-1"></i>Scheda tecnica
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- card Korus WinK Up --}}
                    <div class="row g-4 justify-content-center pb-5 pt-5" id="wink-up">
                        <div class="col-10">
                            <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                                <div class="col-5 p-0 me-4">
                                    <img src="{{ asset('img/prodotti/finestre/pvc_e_alluminio/winK-up/wink-up.jpg') }}"
                                        class="img-prodotto" alt="Korus WinK Up — finestra in PVC e alluminio">
                                </div>

                                {{-- border --}}
                                <div class="border"></div>

                                <div class="col-6 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                                    <h5 class="mb-3 card-title underline-thin">Korus WinK Up</h5>

                                    <ul class="list-unstyled mb-4">
                                        <li><strong>Modulare e performante:</strong> combinazione ideale di eleganza e
                                            funzionalità
                                        </li>
                                        <li><strong>Profilo versatile:</strong> adatto ad ambienti di arredo sia
                                            classici che
                                            moderni</li>
                                        <li><strong>20 mm di personalizzazione:</strong> grazie alla lamina esterna in
                                            alluminio
                                        </li>
                                        <li><strong>Struttura rinforzata:</strong> per maggiore stabilità e durata nel
                                            tempo</li>
                                        <li><strong>Facilità d’uso:</strong> movimentazione fluida e manutenzione
                                            ridotta</li>
                                        <li><strong>Performance:</strong> Aria Classe 4 · Acqua 9A · Vento C4 · RW =
                                            34–42 dB</li>
                                    </ul>

                                    <a href="{{ asset('pdf/KORUS-WIN-UP-WINK-UP.pdf') }}" target="_blank"
                                        rel="noopener noreferrer" class="btn btn-scheda"
                                        aria-label="Apri scheda tecnica Korus WinK Up (PDF)">
                                        <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- card Korus LumenK --}}
                    <div class="row g-4 justify-content-center pb-5 pt-5" id="lumenk">
                        <div class="col-10">
                            <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                                <div class="col-5 p-0 me-4">
                                    <img src="{{ asset('img/prodotti/finestre/pvc_e_alluminio/lumenK/lumenk.jpg') }}"
                                        class="img-prodotto" alt="Korus LumenK — finestra in PVC e alluminio">
                                </div>

                                {{-- border --}}
                                <div class="border"></div>

                                <div class="col-6 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                                    <h5 class="mb-3 card-title underline-thin">Korus LumenK</h5>

                                    <ul class="list-unstyled mb-4">
                                        <li><strong>Vivi la luce:</strong> anta ridotta con +20% di superficie vetrata
                                        </li>
                                        <li><strong>Profilo moderno:</strong> design minimale con lamina esterna in
                                            alluminio</li>
                                        <li><strong>Stabilità strutturale:</strong> sezione rinforzata per maggiore
                                            solidità</li>
                                        <li><strong>Nuova versione:</strong> <em>maniglia centrale</em> per estetica
                                            uniforme</li>
                                        <li><strong>Resistenza agli agenti:</strong> Aria Classe 4 · Acqua 9A · Vento C4
                                        </li>
                                        <li><strong>Comfort acustico:</strong> RW = 34–42 dB</li>
                                    </ul>

                                    <a href="{{ asset('pdf/KORUS-LUMEN-LUMENK.pdf') }}" target="_blank"
                                        rel="noopener noreferrer" class="btn btn-scheda"
                                        aria-label="Apri scheda tecnica Korus LumenK (PDF)">
                                        <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- card Korus WinK Slide --}}
                    <div class="row g-4 justify-content-center pb-5 pt-5" id="wink-slide">
                        <div class="col-10">
                            <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                                <div class="col-5 p-0 me-4">
                                    <img src="{{ asset('img/prodotti/finestre/pvc_e_alluminio/winK-slide/wink-slide.jpg') }}"
                                        class="img-prodotto" alt="Korus WinK Slide — scorrevole in PVC e alluminio">
                                </div>

                                {{-- border --}}
                                <div class="border"></div>

                                <div class="col-6 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                                    <h5 class="mb-3 card-title underline-thin">Korus WinK Slide</h5>

                                    <ul class="list-unstyled mb-4">
                                        <li><strong>Eleganza e luminosità:</strong> pensato per ampie superfici vetrate
                                        </li>
                                        <li><strong>Cover esterna in alluminio:</strong> maggiore durata e pregio
                                            estetico</li>
                                        <li><strong>Garanzia 20 anni</strong></li>
                                        <li><strong>Anta fissa Minimal:</strong> più luce naturale negli ambienti</li>
                                        <li><strong>Comfort termico:</strong> tre guarnizioni dell’anta per tenuta
                                            superiore</li>
                                        <li><strong>Versatilità progettuale:</strong> scorrimento fluido, uso semplice e
                                            manovra
                                            agevole</li>
                                        <li><strong>Performance:</strong> Aria Classe 4 · Acqua 8A/9A · Vento C2/C3 · RW
                                            = 32–43 dB
                                        </li>
                                    </ul>

                                    <a href="{{ asset('pdf/KORUS-WIN-SLIDE-SLIDEK.pdf') }}" target="_blank"
                                        rel="noopener noreferrer" class="btn btn-scheda"
                                        aria-label="Apri scheda tecnica Korus WinK Slide (PDF)">
                                        <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- card Korus WinK Up Portoncino --}}
                    <div class="row g-4 justify-content-center pb-5 pt-5" id="wink-up-portoncino">
                        <div class="col-10">
                            <div class="card flex-row overflow-hidden card-prodotto card-hover-scale">
                                <div class="col-5 p-0 me-4">
                                    <img src="{{ asset('img/prodotti/finestre/pvc_e_alluminio/winK-up-portoncino/wink-up-portoncino.jpg') }}"
                                        class="img-prodotto"
                                        alt="Korus WinK Up Portoncino — portoncino in PVC e alluminio">
                                </div>

                                {{-- border --}}
                                <div class="border"></div>

                                <div class="col-6 p-4 d-flex flex-column justify-content-center ms-5 ps-5">
                                    <h5 class="mb-3 card-title underline-thin">Korus WinK Up Portoncino</h5>

                                    <ul class="list-unstyled mb-4">
                                        <li><strong>Solido e resistente:</strong> progettato per durare nel tempo con
                                            materiali di
                                            alta qualità</li>
                                        <li><strong>Ottimo isolamento termico:</strong> riduce la dispersione e i costi
                                            di
                                            riscaldamento</li>
                                        <li><strong>Protezione acustica:</strong> eccellenti proprietà fonoassorbenti
                                            contro i
                                            rumori esterni</li>
                                        <li><strong>Personalizzazione estetica:</strong> ampia scelta di pannelli e
                                            finiture in
                                            alluminio</li>
                                        <li><strong>Massima resistenza:</strong> ottime prestazioni anche in condizioni
                                            meteo
                                            avverse</li>
                                        <li><strong>Performance:</strong> Aria Classe 4 · Acqua 4B · Vento C2/B2 · RW =
                                            34–42 dB
                                        </li>
                                    </ul>

                                    <a href="{{ asset('pdf/KORUS-WIN-UP-WINK-UP-PORTONCINO.pdf') }}" target="_blank"
                                        rel="noopener noreferrer" class="btn btn-scheda"
                                        aria-label="Apri scheda tecnica Korus WinK Up Portoncino (PDF)">
                                        <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>
    <hr class="my-5">
    <section>
        {{-- Divider + FAQ + CTA contatto --}}
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-lg-8">
                    <h2 class="h4 mb-3">Domande frequenti</h2>
                    <div class="accordion" id="faqPromo">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q1">
                                <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#a1" aria-expanded="true" aria-controls="a1">
                                    Fino a quando è valida la promozione?
                                </button>
                            </h2>
                            <div id="a1" class="accordion-collapse collapse show" aria-labelledby="q1"
                                data-bs-parent="#faqPromo">
                                <div class="accordion-body">
                                    La promozione è valida fino al 31/12 (salvo proroghe). Contattaci per verificare
                                    disponibilità e tempi.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q2">
                                <button class="accordion-button fw-semibold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#a2" aria-expanded="false"
                                    aria-controls="a2">
                                    Cosa significa “anticipi solo il 50%”?
                                </button>
                            </h2>
                            <div id="a2" class="accordion-collapse collapse" aria-labelledby="q2"
                                data-bs-parent="#faqPromo">
                                <div class="accordion-body">
                                    Puoi procedere con l’ordine degli infissi anticipando soltanto la metà dell’importo.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q3">
                                <button class="accordion-button fw-semibold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#a3" aria-expanded="false"
                                    aria-controls="a3">
                                    Quali modelli rientrano nell’offerta?
                                </button>
                            </h2>
                            <div id="a3" class="accordion-collapse collapse" aria-labelledby="q3"
                                data-bs-parent="#faqPromo">
                                <div class="accordion-body">
                                    Tutti i modelli Korus in PVC e PVC/Alluminio.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="bg-light rounded-3 p-4 h-100 d-flex flex-column justify-content-center">
                        <h3 class="h5">Serve una mano?</h3>
                        <p class="mb-3">Prenota una consulenza gratuita: ti aiutiamo a scegliere la soluzione
                            migliore per te.</p>
                        <a href="{{ url('/contatti') }}" class="btn btn-scheda-5 align-self-start">Richiedi
                            consulenza</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</x-layout>
