<x-layout>
    {{-- SEO --}}
    @section('title', 'Prodotti — Categorie | FinestrArte 3.0')
    @section('meta_description',
        'Scopri tutte le categorie di prodotti FinestrArte: finestre, persiane, grate e
        soluzioni su misura per casa, sicurezza e design a Roma.')
    @section('og_title', 'Prodotti — Categorie | FinestrArte 3.0')
    @section('og_description',
        'Seleziona la categoria che ti interessa: soluzioni su misura per la tua casa, con
        installazione professionale.')
    @section('og_image', asset('img/og-prodotti.jpg'))

    @push('structured-data')
        @php
            // Breadcrumbs: Home > Prodotti
            $breadcrumbs = [
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')],
                    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Prodotti', 'item' => url()->current()],
                ],
            ];

            // ItemList delle categorie
            $itemList = [];
            if (isset($categorie)) {
                foreach ($categorie as $i => $categoria) {
                    $itemList[] = [
                        '@type' => 'ListItem',
                        'position' => $i + 1,
                        'url' => route('prodotti.categoria', $categoria->slug),
                        'name' => $categoria->name,
                    ];
                }
            }

            // CollectionPage con ItemList
            $collection = [
                '@context' => 'https://schema.org',
                '@type' => 'CollectionPage',
                'name' => 'Prodotti — Categorie',
                'url' => url()->current(),
                'mainEntity' => [
                    '@type' => 'ItemList',
                    'itemListElement' => $itemList,
                ],
            ];
        @endphp
        <script type="application/ld+json">{!! json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
        <script type="application/ld+json">{!! json_encode($collection,  JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
    @endpush

    <div class="position-relative overflow-hidden" style="height: 70vh; min-height: 250px;">
        <img src="{{ asset('img/prodotti/prodotti.png') }}" class="position-absolute top-0 start-0 w-100 h-100"
            style="object-fit: cover;" alt="Prodotti: infissi e soluzioni su misura">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-3 fw-bold font-titolo underline-thin">Scopri i nostri prodotti</h1>
            <p class="fs-5 m-0">Soluzioni su misura per casa, sicurezza e design</p>
        </div>
    </div>

    <x-banner />

    <div class="container py-5">

        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-7">
                <h2 class="mb-3 underline-thin">Seleziona una categoria</h2>
                <p class="text-muted mb-0">
                    Scegli la tipologia di prodotto e scopri le soluzioni più adatte alla tua casa.
                </p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">

            @forelse ($categorie as $categoria)
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div
                        class="card category-card h-100 text-white border-0 position-relative overflow-hidden shadow-sm">

                        <img src="{{ $categoria->image
                            ? asset('img/' . $categoria->image) . '?v=' . $categoria->updated_at->timestamp
                            : 'https://picsum.photos/seed/' . $categoria->slug . '/500/320' }}"
                            class="category-card-img" alt="{{ $categoria->name }}" loading="lazy">

                        <div class="category-card-overlay"></div>

                        <div class="category-card-content position-absolute bottom-0 start-0 w-100 p-3">
                            <h5 class="mb-1">{{ $categoria->name }}</h5>
                            <span class="small">Scopri la categoria →</span>
                        </div>

                        <a href="{{ route('prodotti.categoria', $categoria->slug) }}" class="stretched-link"
                            aria-label="Apri categoria {{ $categoria->name }}">
                        </a>

                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center text-muted mb-0">
                        Nessuna categoria disponibile.
                    </p>
                </div>
            @endforelse

        </div>

    </div>
</x-layout>
