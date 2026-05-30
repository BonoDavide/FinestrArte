<x-layout>
    {{-- SEO --}}
    @section('title', 'Contatti — FinestrArte 3.0')
    @section('meta_description',
        'Contatta FinestrArte 3.0 a Roma: indirizzo, telefoni, orari e modulo richieste per
        infissi su misura.')
    @section('og_title', 'Contatti — FinestrArte 3.0')
    @section('og_description', 'Telefono, indirizzo e orari. Scrivici per sopralluoghi e preventivi.')
    @section('og_image', asset('img/og-contact.jpg'))

    @push('structured-data')
        @php
            $breadcrumbs = [
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')],
                    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Contatti', 'item' => url()->current()],
                ],
            ];

            $contact = [
                '@context' => 'https://schema.org',
                '@type' => 'ContactPage',
                'name' => 'Contatti — FinestrArte 3.0',
                'url' => url()->current(),
                'mainEntity' => [
                    '@type' => 'HomeAndConstructionBusiness',
                    'name' => 'FinestrArte 3.0 SRLS',
                    'url' => url('/'),
                    'telephone' => '+39 350 536 2216',
                    'address' => [
                        '@type' => 'PostalAddress',
                        'streetAddress' => 'Piazza dei Gerani, 26',
                        'addressLocality' => 'Roma',
                        'postalCode' => '00172',
                        'addressRegion' => 'RM',
                        'addressCountry' => 'IT',
                    ],
                    'openingHoursSpecification' => [
                        [
                            '@type' => 'OpeningHoursSpecification',
                            'dayOfWeek' => ['Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                            'opens' => '09:00',
                            'closes' => '13:00',
                        ],
                        [
                            '@type' => 'OpeningHoursSpecification',
                            'dayOfWeek' => ['Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                            'opens' => '14:30',
                            'closes' => '18:30',
                        ],
                    ],
                    'contactPoint' => [
                        [
                            '@type' => 'ContactPoint',
                            'telephone' => '+39 350 536 2216',
                            'contactType' => 'sales',
                            'areaServed' => 'IT',
                            'availableLanguage' => ['it'],
                        ],
                        [
                            '@type' => 'ContactPoint',
                            'telephone' => '+39 350 536 2207',
                            'contactType' => 'billing',
                            'areaServed' => 'IT',
                            'availableLanguage' => ['it'],
                        ],
                    ],
                ],
            ];
        @endphp
        <script type="application/ld+json">{!! json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
        <script type="application/ld+json">{!! json_encode($contact, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
    @endpush

    <section aria-labelledby="contatti-title">

        {{-- Immagine decorativa in alto con testo centrato --}}
        <div class="position-relative" style="height: 100vh; min-height: 250px;">
            <img src="{{ asset('img/negozio/header-contatti.jpg') }}" class="position-absolute top-0 start-0 w-100 h-100"
                style="object-fit: cover;" alt="Il team FinestrArte al lavoro su serramenti su misura">

            {{-- Overlay --}}
            <div class="image-dark-overlay"></div>

            {{-- Testo sopra --}}
            <div class="position-absolute start-50 translate-middle-x text-center text-white"
                style="top: 50%; z-index: 2;">
                <h1 class="display-2 fw-bold text-shadow font-titolo">Contatti</h1>
            </div>
        </div>

        {{-- Contenuto centrale --}}
        <div class="container py-5">

            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-7">
                    <h1 class="mb-3 underline-thin">
                        Contattaci
                    </h1>

                    <p class="text-muted mb-0">
                        Hai bisogno di informazioni, un sopralluogo o un preventivo? Scrivici o contattaci direttamente.
                    </p>
                </div>
            </div>

            <div class="row g-4 align-items-stretch">

                {{-- Colonna Contatti --}}
                <div class="col-12 col-lg-5">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-body p-4 p-lg-5">

                            <h2 id="contatti-title" class="h4 mb-4 underline-thin">
                                Informazioni utili
                            </h2>

                            <div class="mb-4">
                                <p class="text-muted mb-1">Indirizzo</p>
                                <a href="https://maps.google.com/?q=Piazza%20dei%20Gerani%2026%2000172%20Roma"
                                    class="text-reset fw-semibold text-decoration-underline" rel="noopener"
                                    target="_blank">
                                    Piazza dei Gerani, 26 – 00172 Roma (RM)
                                </a>
                            </div>

                            <div class="mb-4">
                                <p class="text-muted mb-1">Telefono ufficio</p>
                                <a href="tel:+390683447220" class="text-reset fw-semibold">
                                    +39 06 834 472 20
                                </a>
                            </div>

                            <div class="mb-4">
                                <p class="text-muted mb-1">Telefono commerciale</p>
                                <a href="tel:+393505362216" class="text-reset fw-semibold">
                                    +39 350 536 2216
                                </a>
                            </div>

                            <div class="mb-4">
                                <p class="text-muted mb-1">Telefono amministrazione</p>
                                <a href="tel:+393505362207" class="text-reset fw-semibold">
                                    +39 350 536 2207
                                </a>
                            </div>

                            <div>
                                <p class="text-muted mb-1">Orari</p>
                                <p class="fw-semibold mb-0">
                                    Mar–Sab: 9:00–13:00 / 14:30–18:30
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- Colonna Form --}}
                <div class="col-12 col-lg-7">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-body p-4 p-lg-5">

                            <h2 class="h4 mb-4 underline-thin">
                                Scrivici
                            </h2>

                            <livewire:contact-form />

                        </div>
                    </div>
                </div>

            </div>

        </div>

        {{-- Mappa Google --}}
        <div class="container pb-5">

            <div class="row justify-content-center text-center mb-4">
                <div class="col-lg-7">
                    <h3 class="mb-3 underline-thin">
                        Dove trovarci
                    </h3>

                    <p class="text-muted mb-0">
                        Ci trovi in Piazza dei Gerani, a Roma.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">

                    <div class="ratio ratio-16x9 shadow-sm rounded overflow-hidden">
                        <iframe title="Mappa sede FinestrArte 3.0 — Piazza dei Gerani 26, Roma"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d742.5846732505905!2d12.566970369663848!3d41.885572596627924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f625ba4ef94c3%3A0xc364056b1ca8811a!2sPiazza%20dei%20Gerani%2C%2026%2C%2000172%20Roma%20RM!5e0!3m2!1sit!2sit!4v1751291255191!5m2!1sit!2sit"
                            class="border-0 w-100 h-100" allowfullscreen loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                </div>
            </div>

        </div>

    </section>
</x-layout>
