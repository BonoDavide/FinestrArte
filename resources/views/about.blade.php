<x-layout>

    {{-- SEO --}}
    @section('title', 'Chi siamo — FinestrArte 3.0')
    @section('meta_description', 'Chi è FinestrArte 3.0: storia, valori e team che realizza serramenti su misura a Roma
        con posa professionale.')
    @section('og_title', 'Chi siamo — FinestrArte 3.0')
    @section('og_description', 'La nostra storia e il team: affidabilità, precisione e materiali eccellenti per infissi
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
        <img src="{{asset('img/negozio/IMG_0249B.JPG')}}" class="position-absolute top-0 start-0 w-100 h-100"
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
    <div class="container pb-5 pt-5">
        <div class="row">
            <div class="col text-center" data-aos="fade-up">
                <h2 class="fw-bold font-titolo underline-thin">Il nostro Team</h2>
            </div>
        </div>

        {{-- Persona 1 --}}
        <div class="row align-items-center pb-5 pt-5 gy-4">
            <div class="col-md-4 text-center" data-aos="fade-right" data-aos-offset="400">
                <img src="https://picsum.photos/300/400?random=1" class="img-fluid rounded shadow-sm border"
                    alt="Marica — Ufficio Commerciale">
            </div>
            <div class="col-md-4 text-center text-md-start" data-aos="fade-up" data-aos-offset="400">
                <h4 class="mb-1 font-titolo">Marica</h4>
                <p class="text-muted">Ufficio Commerciale</p>
                <p>Segue il cliente nella scelta degli serramenti più adatti, proponendo soluzioni personalizzate e
                    preventivi su misura.</p>
            </div>
        </div>

        {{-- Persona 2 --}}
        <div class="row align-items-center pb-5 pt-5 gy-4">
            <div class="col-md-4 text-center" data-aos="fade-right" data-aos-offset="500">
                <img src="https://picsum.photos/300/400?random=2" class="img-fluid rounded shadow-sm border"
                    alt="Marta — Ufficio Amministrativo">
            </div>
            <div class="col-md-4 text-center text-md-start" data-aos="fade-up" data-aos-offset="500">
                <h4 class="mb-1 font-titolo">Marta</h4>
                <p class="text-muted">Ufficio Amministrativo</p>
                <p>Gestisce pratiche, documenti e organizzazione interna con precisione e discrezione.</p>
            </div>
        </div>

        {{-- Persona 3 --}}
        <div class="row align-items-center pb-5 pt-5 gy-4">
            <div class="col-md-4 text-center" data-aos="fade-right" data-aos-offset="700">
                <img src="https://picsum.photos/300/400?random=3" class="img-fluid rounded shadow-sm border"
                    alt="Giovanni — Tecnico Rilevatore e Installatore">
            </div>
            <div class="col-md-4 text-center text-md-start" data-aos="fade-up" data-aos-offset="700">
                <h4 class="mb-1 font-titolo">Giovanni</h4>
                <p class="text-muted">Tecnico Rilevatore e Installatore</p>
                <p>Effettua sopralluoghi, rilievi precisi e si occupa dell’installazione degli infissi con competenza
                    tecnica e attenzione ai dettagli.</p>
            </div>
        </div>
    </div>

</x-layout>
