<x-layout>

    {{-- SEO --}}
    @section('title', 'Chi siamo — FinestrArte 3.0')
    @section('meta_description',
        'Chi è FinestrArte 3.0: storia, valori e team che realizza serramenti su misura a Roma
        con posa professionale.')
    @section('og_title', 'Chi siamo — FinestrArte 3.0')
    @section('og_description',
        'La nostra storia e il team: affidabilità, precisione e materiali eccellenti per infissi
        su misura a Roma.')
    @section('og_image', asset('img/og-about.jpg'))

    @push('structured-data')
        @php
            $breadcrumbs = [
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')],
                    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Chi siamo', 'item' => url()->current()],
                ],
            ];

            $about = [
                '@context' => 'https://schema.org',
                '@type' => 'AboutPage',
                'name' => 'Chi siamo — FinestrArte 3.0',
                'url' => url()->current(),
                'about' => [
                    '@type' => 'Organization',
                    'name' => 'FinestrArte 3.0 SRLS',
                    'url' => url('/'),
                    'logo' => asset('img/Logo.png'),
                    // "sameAs" => ["https://www.instagram.com/...","https://www.facebook.com/..."] // aggiungi se li usi
                ],
            ];
        @endphp
        <script type="application/ld+json">{!! json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
        <script type="application/ld+json">{!! json_encode($about, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
    @endpush

    {{-- Hero Image con scritta centrata --}}
    <div class="position-relative" style="height: 100vh; min-height: 250px;">
        <img src="{{ asset('img/negozio/IMG_0249B.JPG') }}" class="position-absolute top-0 start-0 w-100 h-100"
            style="object-fit: cover;" alt="Il team FinestrArte al lavoro su serramenti su misura">

        {{-- Overlay --}}
        <div class="image-dark-overlay"></div>

        {{-- Testo sopra --}}
        <div class="position-absolute start-50 translate-middle-x text-center text-white" style="top: 50%; z-index: 2;">
            <h1 class="display-2 fw-bold text-shadow font-titolo">Chi Siamo</h1>
        </div>
    </div>

    {{-- Descrizione azienda --}}
    <div class="container py-5 my-5">
        {{-- border --}}
        <div class="border"></div>
        <div class="row justify-content-center pt-5">
            <div class="col-lg-10 text-center">
                <h4 class="fw-light">
                    Affidabilità, precisione e materiali eccellenti: realizziamo serramenti su misura collaborando solo
                    con
                    i migliori produttori del settore. Ogni progetto è seguito con attenzione per garantire comfort,
                    durata e design in ogni ambiente.
                </h4>
                <h4 class="fw-light mt-4 pb-5">
                    Che si tratti di nuove costruzioni o ristrutturazioni, accompagniamo ogni cliente con competenza e
                    disponibilità.
                </h4>
            </div>
        </div>
        {{-- border --}}
        <div class="border"></div>
    </div>

    {{-- Team aziendale --}}
    <div class="container py-5 mb-5">
        <div class="row pb-5">
            <div class="col text-center" data-aos="fade-up">
                <h2 class="fw-bold font-titolo underline-thin">Il nostro Team</h2>
                <p class="text-muted mt-4">
                    Competenze e attenzione al cliente in ogni fase del lavoro.
                </p>
            </div>
        </div>

        <div class="row justify-content-center g-4 pt-3">

            {{-- Persona 1 --}}
            <div class="col-md-4" data-aos="fade-up" data-aos-offset="100" data-aos-delay="200">
                <div class="team-card h-100 text-center">
                    <h4 class="mb-2 font-titolo">Marica</h4>
                    <p class="team-role mb-3">Ufficio Commerciale</p>
                    <p class="mb-0">
                        Segue il cliente nella scelta dei serramenti più adatti, proponendo soluzioni personalizzate e
                        preventivi su misura.
                    </p>
                </div>
            </div>

            {{-- Persona 2 --}}
            <div class="col-md-4" data-aos="fade-up" data-aos-offset="100" data-aos-delay="400">
                <div class="team-card h-100 text-center">
                    <h4 class="mb-2 font-titolo">Marta</h4>
                    <p class="team-role mb-3">Ufficio Amministrativo</p>
                    <p class="mb-0">
                        Gestisce pratiche, documenti e organizzazione interna con precisione e discrezione.
                    </p>
                </div>
            </div>

            {{-- Persona 3 --}}
            <div class="col-md-4" data-aos="fade-up" data-aos-offset="100" data-aos-delay="600">
                <div class="team-card h-100 text-center">
                    <h4 class="mb-2 font-titolo">Giovanni</h4>
                    <p class="team-role mb-3">Tecnico Rilevatore e Installatore</p>
                    <p class="mb-0">
                        Effettua sopralluoghi, rilievi precisi e si occupa dell’installazione degli infissi con
                        competenza
                        tecnica e attenzione ai dettagli.
                    </p>
                </div>
            </div>

        </div>
    </div>

</x-layout>
