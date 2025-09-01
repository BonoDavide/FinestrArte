<x-layout>

    {{-- Hero --}}
    <div class="position-relative overflow-hidden" style="height: 60vh; min-height: 250px;">
        <img src="https://picsum.photos/seed/controtelai-monoblocco-termici-header/1920/600"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;" alt="Controtelai">

        <div class="position-absolute top-50 start-50 translate-middle text-center text-white px-3">
            <h1 class="display-3 fw-bold font-titolo">Controtelai</h1>
            <h2 class="h4">Scegli la tipologia che fa per te</h2>
        </div>
    </div>
    
    <x-banner/>

    {{-- Sottocategorie --}}
    <div class="container py-5">
        <h3 class="text-center pb-3 font-titolo pt-5 pb-5 underline-thin">Seleziona il materiale</h3>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">

            @foreach ($sottocategorie as $sottocategoria)
                <div class="col-6">
                    <div class="card h-100 text-white border-0 position-relative overflow-hidden">
                        <img src="{{ $sottocategoria->image ? asset('img/' . $sottocategoria->image) : 'https://picsum.photos/seed/' . $categoria->slug . '-' . $sottocategoria->slug . '/400/180' }}"
                            class="w-100" style="height: 180px; object-fit: cover;" alt="{{ $sottocategoria->name }}">

                        <div class="position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-50 text-center py-2">
                            <h5 class="mb-0">{{ $sottocategoria->name }}</h5>
                        </div>

                        <a href="{{ route('prodotti.sottocategoria', [
                            'categoria' => $categoria->slug,
                            'sottocategoria' => $sottocategoria->slug,
                        ]) }}"
                            class="stretched-link"></a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</x-layout>
