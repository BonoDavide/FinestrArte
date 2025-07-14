<x-layout>
    <div class="position-relative text-white mb-5 mx-0 prodotti-hero" style="height: 60vh; min-height: 250px;">
        <img src="https://picsum.photos/seed/prodotti/1920/600" alt="Prodotti"
            class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover;">
        <div class="position-absolute top-50 start-50 translate-middle text-center p-3 rounded" style="width: 90%;">
            <h1 class="display-5 font-titolo mb-2">Scopri i nostri prodotti</h1>
            <p class="fs-5 m-0">Soluzioni su misura per casa, sicurezza e design</p>
        </div>
    </div>

    <div class="container py-5">
        <h3 class="text-center pb-3 font-titolo underline-thin pb-5">Seleziona una categoria</h3>

        <div class="row g-4 justify-content-center">
            @php
                $categorie = [
                    ['slug' => 'finestre', 'name' => 'Finestre'],
                    ['slug' => 'grate-in-ferro', 'name' => 'Grate in ferro'],
                    ['slug' => 'persiane', 'name' => 'Persiane'],
                    ['slug' => 'avvolgibili', 'name' => 'Avvolgibili'],
                    ['slug' => 'zanzariere', 'name' => 'Zanzariere'],
                    ['slug' => 'porte-da-interno', 'name' => 'Porte da interno'],
                    ['slug' => 'portoni-blindati', 'name' => 'Portoni blindati'],
                    ['slug' => 'controtelai-monoblocco-termici', 'name' => 'Controtelai Monoblocco'],
                    ['slug' => 'pergole-aluperto', 'name' => 'Pergole Aluperto'],
                    ['slug' => 'tende-tecnotenda', 'name' => 'Tende Tecnotenda'],
                    ['slug' => 'vetrate-panoramiche', 'name' => 'Vetrate panoramiche'],
                ];
            @endphp

            @foreach ($categorie as $categoria)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card h-100 text-white border-0 position-relative overflow-hidden">
                        <img src="https://picsum.photos/seed/{{ $categoria['slug'] }}/400/180" class="w-100"
                            style="height: 180px; object-fit: cover;" alt="{{ $categoria['name'] }}">
                        <div class="position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-50 text-center py-2">
                            <h5 class="mb-0">{{ $categoria['name'] }}</h5>
                        </div>
                        <a href="{{ route('prodotti.categoria', $categoria['slug']) }}" class="stretched-link"></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
