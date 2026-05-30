<x-layout>

    {{-- Hero --}}
    <div class="position-relative overflow-hidden" style="height: 60vh; min-height: 250px;">
        <img src="https://picsum.photos/seed/avvolgibili-header/1920/600"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;" alt="Avvolgibili">

        <div class="position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-3 fw-bold font-titolo">Avvolgibili</h1>
            <h2 class="h4">Scegli la tipologia che fa per te</h2>
        </div>
    </div>

    <x-banner />

    {{-- Sottocategorie --}}
    <div class="container py-5">

        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-7">
                <h3 class="mb-3 underline-thin">
                    Seleziona una tipologia
                </h3>

                <p class="text-muted mb-0">
                    Scegli la soluzione più adatta alle tue esigenze.
                </p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">

            @forelse ($sottocategorie as $sottocategoria)
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">

                    <div
                        class="card category-card h-100 text-white border-0 position-relative overflow-hidden shadow-sm">

                        <img src="{{ $sottocategoria->image
                            ? asset('img/' . $sottocategoria->image) . '?v=' . $sottocategoria->updated_at->timestamp
                            : 'https://picsum.photos/seed/' . $categoria->slug . '-' . $sottocategoria->slug . '/500/320' }}"
                            class="category-card-img" alt="{{ $sottocategoria->name }}" loading="lazy">

                        <div class="category-card-overlay"></div>

                        <div class="category-card-content position-absolute bottom-0 start-0 w-100 p-3">
                            <h5 class="mb-1">
                                {{ $sottocategoria->name }}
                            </h5>

                            <span class="small">
                                Scopri i prodotti →
                            </span>
                        </div>

                        <a href="{{ route('prodotti.sottocategoria', [
                            'categoria' => $categoria->slug,
                            'sottocategoria' => $sottocategoria->slug,
                        ]) }}"
                            class="stretched-link" aria-label="Apri sottocategoria {{ $sottocategoria->name }}">
                        </a>

                    </div>

                </div>
            @empty
                <div class="col-12">
                    <p class="text-center text-muted mb-0">
                        Nessuna sottocategoria disponibile.
                    </p>
                </div>
            @endforelse

        </div>

    </div>

</x-layout>
