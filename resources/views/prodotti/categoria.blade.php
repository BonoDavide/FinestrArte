<x-layout>
    {{-- attenzione: se modifichi le dimensioni della pagina in altezza potrebbe spuntare un bordino bianco in alto --}}
    <div class="position-relative text-white pb-5 my-0">
        <img src="https://picsum.photos/seed/{{ $categoria->id }}-header/1920/600"
            class="w-100 object-fit-cover my-0" alt="{{ $categoria->name }}">
        <div class="position-absolute top-50 start-50 translate-middle text-center p-3 rounded">
            <h1 class="display-1">{{ $categoria->name }}</h1>
            <h2>Scegli la tipologia che fa per te</h2>
        </div>
    </div>

    <div class="container py-5"> 
        <h3 class="text-center pb-3">Seleziona il materiale</h3>
        <div class="row g-4 justify-content-center">
            @foreach ($sottocategorie as $sottocategoria)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card h-100 text-white border-0 position-relative overflow-hidden">
                        {{-- Immagine della sottocategoria --}}
                        <img src="https://picsum.photos/seed/sub-{{ $sottocategoria->id }}/400/180" class="w-100"
                            style="height: 180px; object-fit: cover;" alt="{{ $sottocategoria->name }}">

                        {{-- Overlay con nome --}}
                        <div class="position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-50 text-center py-2">
                            <h5 class="mb-0">{{ $sottocategoria->name }}</h5>
                        </div>

                        {{-- Link alla pagina dei prodotti --}}
                        <a href="{{ route('prodotti.sottocategoria', ['categoria' => $categoria->slug, 'sottocategoria' => $sottocategoria->slug]) }}"
                            class="stretched-link"></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
