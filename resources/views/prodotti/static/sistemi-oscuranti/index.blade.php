<x-layout>

    {{-- SEO --}}
    @php
        $catName = $categoria->name ?? 'Sistemi Oscuranti';
        $subNames = collect($sottocategorie ?? [])
            ->pluck('name')
            ->filter()
            ->take(6)
            ->implode(', ');
        $metaDesc = 'Sistemi oscuranti per comfort e privacy: ' . ($subNames ?: 'persiane, grate, tapparelle, scuri');
    @endphp
    @section('title', $catName . ' — Sottocategorie | FinestrArte 3.0')
    @section('meta_description', $metaDesc)
    @section('og_title', $catName . ' — Sottocategorie | FinestrArte 3.0')
    @section('og_description', $metaDesc)
    @section('og_image', asset('img/og-oscuranti.jpg'))

    @push('structured-data')
        @php
            // Breadcrumbs: Home > Prodotti > Sistemi Oscuranti
            $breadcrumbs = [
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')],
                    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Prodotti', 'item' => route('prodotti.index')],
                    ['@type' => 'ListItem', 'position' => 3, 'name' => $catName, 'item' => url()->current()],
                ],
            ];

            // ItemList delle sottocategorie
            $subList = [];
            if (isset($sottocategorie)) {
                foreach ($sottocategorie as $i => $s) {
                    $subList[] = [
                        '@type' => 'ListItem',
                        'position' => $i + 1,
                        'name' => $s->name,
                        'url' => route('prodotti.sottocategoria', [
                            'categoria' => $categoria->slug,
                            'sottocategoria' => $s->slug,
                        ]),
                    ];
                }
            }

            // CollectionPage con la lista delle sottocategorie
            $collection = [
                '@context' => 'https://schema.org',
                '@type' => 'CollectionPage',
                'name' => $catName . ' — Sottocategorie',
                'url' => url()->current(),
                'mainEntity' => [
                    '@type' => 'ItemList',
                    'itemListElement' => $subList,
                ],
            ];
        @endphp
        <script type="application/ld+json">{!! json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
        <script type="application/ld+json">{!! json_encode($collection,  JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
    @endpush

    {{-- Hero --}}
    <div class="position-relative overflow-hidden" style="height: 60vh; min-height: 250px;">
        <img src="{{asset('img/prodotti/persiane/legno/persiane/header-p-legno.png')}}" class="position-absolute top-0 start-0 w-100 h-100"
            style="object-fit: cover;" alt="{{ $catName }} — panoramica categorie">
            <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
                <h1 class="display-2 fw-bold font-titolo underline-thin">{{ $catName }}</h1>
                <h2 class="h4">Scegli la tipologia che fa per te</h2>
        </div>
    </div>

    <x-banner />

    {{-- bottone indietro --}}
    <div class="container pt-5">
        <a href="{{ route('prodotti.index') }}" class="btn btn-pag-prod px-4" aria-label="Torna all'elenco Prodotti">
            <i class="bi bi-arrow-return-left me-2"></i> Torna a Prodotti
        </a>
    </div>

    {{-- Sottocategorie --}}
    <div class="container py-5">
        <h3 class="text-center pb-3 pt-5 pb-5 underline-thin">Seleziona il materiale</h3>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
            @foreach ($sottocategorie as $sottocategoria)
                <div class="col-6">
                    <div class="card h-100 text-white border-0 position-relative overflow-hidden">
                        <img src="{{ $sottocategoria->image ? asset('img/' . $sottocategoria->image) : 'https://picsum.photos/seed/' . $categoria->slug . '-' . $sottocategoria->slug . '/400/180' }}"
                            class="w-100" style="height: 180px; object-fit: cover;"
                            alt="{{ $sottocategoria->name }} — sistemi oscuranti">
                        <div class="position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-50 text-center py-2">
                            <h5 class="mb-0">{{ $sottocategoria->name }}</h5>
                        </div>
                        <a href="{{ route('prodotti.sottocategoria', ['categoria' => $categoria->slug, 'sottocategoria' => $sottocategoria->slug]) }}"
                            class="stretched-link" aria-label="Apri sottocategoria {{ $sottocategoria->name }}"></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
