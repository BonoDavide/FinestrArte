<x-layout>

    <div class="pt-5 mt-5">
        {{-- div per dare spazio --}}
    </div>

    <div class="position-relative text-white mb-5 mx-0">
        <img src="https://picsum.photos/seed/prodotti/1920/500" class="w-100 h-100 object-fit-cover" alt="Prodotti">
        <div class="position-absolute top-50 start-50 translate-middle text-center p-3 rounded">
            <h1 class="display-1">Scopri i nostri prodotti</h1>
            <h2>Soluzioni su misura per ogni esigenza di casa, sicurezza e design</h2>
        </div>
    </div>

    <div class="container py-5">

        <h5 class="text-center pb-3">Seleziona una categoria</h5>

        <div class="row g-4 justify-content-center">
            @foreach ($categories as $category)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card h-100 text-white border-0 position-relative overflow-hidden">
                        {{-- Immagine di sfondo --}}
                        {{-- <img src="{{ $category->image_url }}" class="w-100" style="height: 180px; object-fit: cover;"
                            alt="{{ $category->name }}"> --}}

                        <img src="https://picsum.photos/seed/{{ $category->id }}/400/180" class="w-100"
                            style="height: 180px; object-fit: cover;" alt="{{ $category->name }}">


                        {{-- Overlay con nome --}}
                        <div class="position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-50 text-center py-2">
                            <h5 class="mb-0">{{ $category->name }}</h5>
                        </div>

                        {{-- Link cliccabile su tutta la card --}}
                        <a href="{{ route('prodotti.categoria', $category->slug) }}" class="stretched-link"></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
