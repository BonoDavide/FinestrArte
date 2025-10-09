<x-layout>

    {{-- SEO — Controtelai --}}
    @section('title', 'Controtelai — FinestrArte 3.0')
    @section('meta_description', 'Controtelai per posa a regola d’arte: PVC rigido, EPS o fibrocemento, predisposizione
        per avvolgibili/zanzariere e varianti su richiesta. Modelli: PROI, PROG, STF3I, STF5, STH3I. Schede tecniche PDF.')
    @section('og_title', 'Controtelai | FinestrArte 3.0')
    @section('og_description', 'Scopri i controtelai PROI, PROG, STF3I, STF5 e STH3I: materiali tecnici, predisposizioni
        e accessori. PDF tecnici e immagini.')
    @section('og_image', asset('img/og-controtelai.jpg'))

    @push('structured-data')
        @php
            // Breadcrumbs: Home > Prodotti > Controtelai
            $breadcrumbs = [
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')],
                    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Prodotti', 'item' => route('prodotti.index')],
                    [
                        '@type' => 'ListItem',
                        'position' => 3,
                        'name' => 'Controtelai',
                        'item' => url('/prodotti/controtelai'),
                    ],
                ],
            ];

            // Elenco modelli presenti in pagina (ancore = id delle sezioni)
            $models = [
                [
                    'name' => 'PROI',
                    'image' => asset('img/prodotti/controtelai_monoblocco/proi/PROI.jpg'),
                    'url' => url()->current() . '#proi',
                ],
                [
                    'name' => 'PROG',
                    'image' => asset('img/prodotti/controtelai_monoblocco/prog/PROG.jpg'),
                    'url' => url()->current() . '#prog',
                ],
                [
                    'name' => 'STF3I',
                    'image' => asset('img/prodotti/controtelai_monoblocco/stf3i/STF3I.jpg'),
                    'url' => url()->current() . '#stf3i',
                ],
                [
                    'name' => 'STF5',
                    'image' => asset('img/prodotti/controtelai_monoblocco/stf5/STF5.jpg'),
                    'url' => url()->current() . '#stf5',
                ],
                [
                    'name' => 'STH3I',
                    'image' => asset('img/prodotti/controtelai_monoblocco/sth3i/STH3I.jpg'),
                    'url' => url()->current() . '#sth3i',
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

            // CollectionPage con la lista dei modelli (pagina di raccolta)
            $collection = [
                '@context' => 'https://schema.org',
                '@type' => 'CollectionPage',
                'name' => 'Controtelai',
                'url' => url()->current(),
                'about' => 'Controtelai e predisposizioni per avvolgibili/zanzariere',
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
        <img src="{{ asset('img/prodotti/controtelai_monoblocco/header-controtelai.jpg') }}"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;" alt="Zanzariere">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-2 fw-bold font-titolo underline-thin">Controtelai</h1>
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
                    I controtelai garantiscono la corretta posa del serramento e contribuiscono all’isolamento
                    termoacustico dell’intero foro finestra. Realizzati in PVC rigido, EPS o fibrocemento ad alta
                    densità, integrano spalletta, vano infisso e predisposizione per avvolgibili o zanzariere,
                    assicurando un allineamento preciso con la muratura e una posa a regola d’arte.
                </p>
                <div class="border"></div>
            </div>
        </div>

        {{-- sezione prodotti --}}
        {{-- PROG --}}
        <section id="prog" class="pb-5 mb-5">
            <div class="container">
                <div class="row align-items-center">
                    {{-- immagine a sinistra --}}
                    <div class="col-12 col-md-6 mb-4 mb-md-0 order-1 order-md-1">
                        <img src="{{ asset('img/prodotti/controtelai_monoblocco/prog/PROG.jpg') }}"
                            alt="Controtelaio PROG" class="img-fluid rounded shadow-sm prod-img" style="min-height: 500px">
                    </div>

                    {{-- testo a destra --}}
                    <div class="col-12 col-md-6 order-2 order-md-2">
                        <h2 class="h3 mb-3 fw-bold underline-thin">PROG</h2>
                        <p class="mb-4">
                            Il controtelaio <strong>PROG</strong> in <strong>PVC rigido</strong> integra la
                            <strong>guida avvolgibile in alluminio</strong> ed è pensato per una posa precisa e stabile.
                            La <strong>sede per serramento variabile</strong> è disponibile in <strong>multistrato
                                fenolico</strong>
                            oppure in <strong>PVC espanso</strong> (con possibilità di rete porta intonaco interna). La
                            <strong>ribattuta</strong> è disponibile in <strong>30, 50 o 70 mm</strong> per adattarsi a
                            diverse esigenze installative.
                        </p>

                        <h3 class="h5 fw-semibold mb-3 underline-thin">Caratteristiche</h3>
                        <ul class="list-unstyled mb-4">
                            <li>• Struttura in <strong>PVC rigido</strong> per stabilità e durata.</li>
                            <li>• <strong>Guida avvolgibile in alluminio</strong> integrata.</li>
                            <li>• <strong>Ribattuta da 30, 50 o 70 mm</strong>.</li>
                            <li>• <strong>Sede infisso variabile</strong> (multistrato fenolico o PVC espanso).</li>
                            <li>• Possibilità di <strong>rete porta intonaco interna</strong> su richiesta.</li>
                            <li>• Trasmittanza termica: <strong>0.2116 W/mK</strong>.</li>
                        </ul>

                        <h3 class="h5 fw-semibold mb-3 underline-thin">Varianti su richiesta</h3>
                        <ul class="list-unstyled mb-4">
                            <li>• Profilo T per stipiti</li>
                            <li>• Rete porta intonaco</li>
                            <li>• Profili 4° lato in PVC (con o senza rete integrata)</li>
                        </ul>

                        <a href="{{ asset('pdf/PROG.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda-6" aria-label="Apri scheda tecnica PROG (PDF)">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                        </a>
                    </div>
                </div>

                {{-- Cassonetti abbinabili --}}
                <div class="row mt-5">
                    <div class="col-12">
                        <h3 class="h5 fw-semibold mb-3 underline-thin">Cassonetti abbinabili</h3>
                        <p class="mb-3">
                            Disponibili: <strong>Ispezione frontale</strong>, <strong>Celino a tampone / doppio
                                tampone</strong>,
                            <strong>Celino a scorrere</strong>.
                        </p>
                        <img src="{{ asset('img/prodotti/controtelai_monoblocco/prog/CASSONETTI-ABBINABILI-PER-PROG.jpg') }}"
                            alt="Cassonetti abbinabili per PROG" class="img-fluid rounded shadow-sm">
                    </div>
                </div>
            </div>
        </section>

        {{-- border --}}
        <hr class="my-0 border-top border-2 border-dark">

        {{-- PROI --}}
        <section id="proi" class="py-5 my-5">
            <div class="container">
                <div class="row align-items-center">
                    {{-- immagine a sinistra --}}
                    <div class="col-12 col-md-6 mb-4 mb-md-0 order-1 order-md-1">
                        <img src="{{ asset('img/prodotti/controtelai_monoblocco/proi/PROI.jpg') }}"
                            alt="Controtelaio PROI" class="img-fluid rounded shadow-sm prod-img" style="min-height: 500px">
                    </div>

                    {{-- testo a destra --}}
                    <div class="col-12 col-md-6 order-2 order-md-2">
                        <h2 class="h3 mb-3 fw-bold underline-thin">PROI</h2>
                        <p class="mb-4">
                            Il controtelaio PROI è realizzato in PVC rigido ed è
                            progettato per
                            l’alloggiamento di infissi con incasso zanzariera in alluminio.
                            Garantisce stabilità, precisione di posa e un perfetto allineamento con la muratura,
                            grazie alla sede per serramento variabile e alla possibilità di scegliere
                            tra ribattuta da 30, 50 o 70 mm. Disponibile con vano infisso in
                            multistrato fenolico o in PVC espanso,
                            rappresenta una soluzione affidabile e versatile per installazioni a filo muro tradizionale.
                        </p>

                        <h3 class="h5 fw-semibold mb-3 underline-thin">Caratteristiche</h3>
                        <ul class="list-unstyled mb-4">
                            <li>• Struttura in <strong>PVC rigido</strong> con ottimo isolamento e stabilità
                                dimensionale.</li>
                            <li>• <strong>Ribattuta da 30, 50 o 70 mm</strong> per diverse tipologie di posa.</li>
                            <li>• <strong>Sede infisso variabile</strong> per maggiore flessibilità installativa.</li>
                            <li>• Possibilità di <strong>rete porta intonaco interna</strong> su richiesta.</li>
                            <li>• Compatibile con <strong>incasso zanzariera in alluminio</strong>.</li>
                            <li>• Trasmittanza termica: <strong>0.2047 W/mK</strong>.</li>
                        </ul>

                        <h3 class="h5 fw-semibold mb-3 underline-thin">Varianti su richiesta</h3>
                        <ul class="list-unstyled mb-4">
                            <li>• Profilo T per stipiti</li>
                            <li>• Rete porta intonaco interna</li>
                            <li>• Profilo 4° lato in PVC (con o senza rete integrata)</li>
                            <li>• Tappo incasso zanzariera in alluminio</li>
                        </ul>

                        <a href="{{ asset('pdf/PROI.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda-6" aria-label="Apri scheda tecnica PROI (PDF)">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- border --}}
        <hr class="my-0 border-top border-2 border-dark">

        {{-- STF3I --}}
        <section id="stf3i" class="py-5 bg-light my-5">
            <div class="container">
                <div class="row align-items-center">
                    {{-- immagine a sinistra --}}
                    <div class="col-12 col-md-6 mb-4 mb-md-0 order-1 order-md-1">
                        <img src="{{ asset('img/prodotti/controtelai_monoblocco/stf3i/STF3I.jpg') }}"
                            alt="Controtelaio STF3I" class="img-fluid rounded shadow-sm prod-img" style="min-height: 500px">
                    </div>

                    {{-- testo a destra --}}
                    <div class="col-12 col-md-6 order-2 order-md-2">
                        <h2 class="h3 mb-3 fw-bold underline-thin">STF3I</h2>
                        <p class="mb-4">
                            Il controtelaio STF3I è realizzato in fibrocemento e
                            XPS ad alta densità,
                            ideale per infissi applicati a filo muro interno con incasso zanzariera.
                            La struttura garantisce un’elevata resistenza meccanica e un efficace isolamento termico,
                            con
                            spalletta termica da 84 mm di spessore standard.
                            È predisposto per l’applicazione di guida in alluminio per avvolgibili e può essere
                            integrato con
                            rete porta intonaco o accessori su richiesta.
                        </p>

                        <h3 class="h5 fw-semibold mb-3 underline-thin">Caratteristiche</h3>
                        <ul class="list-unstyled mb-4">
                            <li>• Struttura in <strong>fibrocemento</strong> e <strong>XPS ad alta densità</strong>.
                            </li>
                            <li>• <strong>Spalletta termica 84 mm</strong> di spessore standard.</li>
                            <li>• <strong>Applicazione a filo muro interno</strong> con incasso zanzariera.</li>
                            <li>• Predisposizione per <strong>guida avvolgibile in alluminio</strong>.</li>
                            <li>• Possibilità di <strong>rete porta intonaco</strong> e <strong>doppio legno su
                                    ribattuta</strong>.</li>
                            <li>• Trasmittanza termica: <strong>0.0674 W/mK</strong>.</li>
                        </ul>

                        <h3 class="h5 fw-semibold mb-3 underline-thin">Varianti su richiesta</h3>
                        <ul class="list-unstyled mb-4">
                            <li>• Spalla standard con profilo rete porta intonaco</li>
                            <li>• Fibrocemento asportato esternamente con preguida</li>
                            <li>• Spalla che termina alla guida per veletta esistente</li>
                            <li>• Tappo incasso zanzariera in alluminio</li>
                            <li>• Doppio legno per ribattuta 48 mm su spalla 84 mm</li>
                        </ul>

                        <a href="{{ asset('pdf/STF3I.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda-6" aria-label="Apri scheda tecnica STF3I (PDF)">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                        </a>
                    </div>
                </div>

                {{-- Cassonetti abbinabili --}}
                <div class="row justify-content-between mt-5">
                    <div class="col-12 col-md-6">
                        <h3 class="h5 fw-semibold mb-3 underline-thin">Cassonetti abbinabili</h3>
                        <p class="mb-3">
                            Disponibili: <strong>Ispezione frontale</strong>, <strong>Celino brandeggiante</strong>,
                            <strong>Celino in
                                PVC</strong>.
                        </p>
                        <img src="{{ asset('img/prodotti/controtelai_monoblocco/stf3i/CASS_FILOMURO-FIBRO.jpg') }}"
                            alt="Cassonetti abbinabili per STF3I" class="img-fluid rounded shadow-sm">
                    </div>

                    {{-- Sezioni controtelaio --}}
                    <div class="col-12 col-md-6">
                        <h3 class="h5 fw-semibold mb-3 underline-thin p-controtelai">Sezioni controtelaio</h3>
                        <p class="mb-3">
                            Sezioni tecniche di riferimento per la corretta posa e misurazione dell’alloggiamento
                            infisso.
                        </p>
                        <img src="{{ asset('img/prodotti/controtelai_monoblocco/stf3i/STF3I-DIS-TECNICO.jpg') }}"
                            alt="Sezioni tecniche controtelaio STF3I" class="img-fluid rounded shadow-sm">
                    </div>
                </div>
            </div>
        </section>

        {{-- border --}}
        <hr class="my-0 border-top border-2 border-dark">

        {{-- STF5 --}}
        <section id="stf5" class="py-5 my-5">
            <div class="container">
                <div class="row align-items-center">
                    {{-- immagine a sinistra --}}
                    <div class="col-12 col-md-6 mb-4 mb-md-0 order-1 order-md-1">
                        <img src="{{ asset('img/prodotti/controtelai_monoblocco/stf5/STF5.jpg') }}"
                            alt="Controtelaio STF5" class="img-fluid rounded shadow-sm prod-img" style="min-height: 500px">
                    </div>

                    {{-- testo a destra --}}
                    <div class="col-12 col-md-6 order-2 order-md-2">
                        <h2 class="h3 mb-3 fw-bold underline-thin">STF5</h2>
                        <p class="mb-4">
                            Il controtelaio STF5 è pensato per l’applicazione dell’infisso interno in
                            mazzetta
                            con persiana esterna.
                            Realizzato in fibrocemento e XPS ad alta densità,
                            garantisce ottime
                            prestazioni di isolamento termico e resistenza meccanica.
                            È disponibile con spessore spalletta da 44 o 64 mm e può essere fornito con
                            sottobancale in EPS dotato di profilo in PVC per un montaggio preciso e
                            duraturo.
                        </p>

                        <h3 class="h5 fw-semibold mb-3 underline-thin">Caratteristiche</h3>
                        <ul class="list-unstyled mb-4">
                            <li>• Struttura in <strong>fibrocemento</strong> e <strong>XPS ad alta densità</strong>.
                            </li>
                            <li>• Adatto per <strong>infisso interno in mazzetta</strong> e <strong>persiana
                                    esterna</strong>.</li>
                            <li>• <strong>Spalletta disponibile da 44 o 64 mm</strong>.</li>
                            <li>• Predisposizione per <strong>sottobancale in EPS</strong> con profilo in PVC.</li>
                            <li>• Ottima stabilità e resistenza all’umidità.</li>
                            <li>• Trasmittanza termica: <strong>0.1589 W/mK</strong>.</li>
                        </ul>

                        <h3 class="h5 fw-semibold mb-3 underline-thin">Varianti su richiesta</h3>
                        <ul class="list-unstyled mb-4">
                            <li>• Spalletta con profilo rete porta intonaco</li>
                            <li>• Sottobancale in EPS con profilo 4° lato in PVC</li>
                            <li>• Spalletta maggiorata da 64 mm</li>
                        </ul>

                        <a href="{{ asset('pdf/STF5.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda-6" aria-label="Apri scheda tecnica STF5 (PDF)">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- border --}}
        <hr class="my-0 border-top border-2 border-dark">

        {{-- STH3I --}}
        <section id="sth3i" class="py-5 mt-5">
            <div class="container">
                <div class="row align-items-center">
                    {{-- immagine a sinistra --}}
                    <div class="col-12 col-md-6 mb-4 mb-md-0 order-1 order-md-1">
                        <img src="{{ asset('img/prodotti/controtelai_monoblocco/sth3i/STH3I.jpg') }}"
                            alt="Controtelaio STH3I" class="img-fluid rounded shadow-sm prod-img" style="min-height: 500px">
                    </div>

                    {{-- testo a destra --}}
                    <div class="col-12 col-md-6 order-2 order-md-2">
                        <h2 class="h3 mb-3 fw-bold underline-thin">STH3I</h2>
                        <p class="mb-4">
                            Il controtelaio STH3I è realizzato in EPS ad alta densità
                            con
                            vano infisso in multistrato fenolico da 18 mm.
                            È progettato per infissi applicati a filo muro interno e integra
                            incasso zanzariera direttamente nella struttura.
                            L’imbotto è dotato di rete porta intonaco e preguida per facilitare la
                            rasatura,
                            mentre la spalletta termica da 320 mm standard garantisce un ottimo
                            isolamento.
                            Predisposto per guida avvolgibile in alluminio fornita separatamente.
                        </p>

                        <h3 class="h5 fw-semibold mb-3 underline-thin">Caratteristiche</h3>
                        <ul class="list-unstyled mb-4">
                            <li>• Struttura in <strong>EPS ad alta densità</strong> con vano infisso in
                                <strong>multistrato fenolico</strong>.
                            </li>
                            <li>• <strong>Applicazione a filo muro interno</strong> con incasso zanzariera integrato.
                            </li>
                            <li>• <strong>Spalletta termica 320 mm</strong> di profondità standard.</li>
                            <li>• Imbotto con <strong>rete porta intonaco</strong> e preguida per rasatura.</li>
                            <li>• Predisposizione per <strong>guida avvolgibile in alluminio</strong>.</li>
                            <li>• Trasmittanza termica: <strong>0.0872 W/mK</strong>.</li>
                        </ul>

                        <h3 class="h5 fw-semibold mb-3 underline-thin">Varianti su richiesta</h3>
                        <ul class="list-unstyled mb-4">
                            <li>• Spalla standard con preguida</li>
                            <li>• Spalla che termina alla guida per veletta esistente</li>
                            <li>• Profondità spalletta superiore a 320 mm</li>
                        </ul>

                        <a href="{{ asset('pdf/STH3I.pdf') }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-scheda-6" aria-label="Apri scheda tecnica STH3I (PDF)">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Scheda tecnica
                        </a>
                    </div>
                </div>

                {{-- Cassonetti abbinabili --}}
                <div class="row mt-5 JUSTIFY-CONTENT-CENTER">
                    <div class="col-12 col-md-6">
                        <h3 class="h5 fw-semibold mb-3 underline-thin">Cassonetti abbinabili</h3>
                        <p class="mb-3">
                            Disponibili: <STRONG>Ispezione frontale</STRONG>, <STRONG>Celino brandeggiante</STRONG>,
                            <STRONG>Celino in
                                PVC</STRONG>.
                        </p>
                        <img src="{{ asset('img/prodotti/controtelai_monoblocco/sth3i/STH3I-CASSONETTI.jpg') }}"
                            alt="Cassonetti abbinabili per STH3I" class="img-fluid rounded shadow-sm">
                    </div>

                    {{-- Sezioni controtelaio --}}
                    <div class="col-12 col-md-6">
                        <h3 class="h5 fw-semibold mb-3 underline-thin p-controtelai">Sezioni controtelaio</h3>
                        <p class="mb-3">
                            Sezioni tecniche di riferimento per la corretta posa e misurazione dell’alloggiamento
                            infisso.
                        </p>
                        <img src="{{ asset('img/prodotti/controtelai_monoblocco/sth3i/STH3I-DIS-TECNICO.jpg') }}"
                            alt="Sezioni tecniche controtelaio STH3I" class="img-fluid rounded shadow-sm">
                    </div>
                </div>
            </div>
        </section>

    </div>

</x-layout>
