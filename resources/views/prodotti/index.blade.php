<x-layout>
    <div class="position-relative overflow-hidden" style="height: 70vh; min-height: 250px;">
        <img src="{{ asset('img/prodotti/prodotti.png') }}"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;" alt="PVC">
        <div class="overlay-dark"></div>
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-3 fw-bold font-titolo underline-thin">Scopri i nostri prodotti</h1>
            <p class="fs-5 m-0">Soluzioni su misura per casa, sicurezza e design</p>
        </div>
    </div>

    <div class="container py-5">
        <h3 class="text-center pb-3 font-titolo underline-thin pb-5">Seleziona una categoria</h3>

        <div class="row g-4 justify-content-center">
            <div class="row g-4 justify-content-center">
                @forelse ($categorie as $categoria)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card h-100 text-white border-0 position-relative overflow-hidden">
                            <img src="{{ $categoria->image ? asset('storage/' . $categoria->image) : 'https://picsum.photos/seed/' . $categoria->slug . '/400/180' }}"
                                class="w-100" style="height: 180px; object-fit: cover;" alt="{{ $categoria->name }}">
                            <div
                                class="position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-50 text-center py-2">
                                <h5 class="mb-0">{{ $categoria->name }}</h5>
                            </div>
                            <a href="{{ route('prodotti.categoria', $categoria->slug) }}" class="stretched-link"></a>
                        </div>
                    </div>
                @empty
                    <p class="text-center">Nessuna categoria disponibile.</p>
                @endforelse
            </div>

        </div>
    </div>
</x-layout>
