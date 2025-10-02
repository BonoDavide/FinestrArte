<section class="promo-hero text-white" role="region" aria-label="Promozione Korus">
    <div class="container">
        <div class="row align-items-center justify-content-between py-3 g-3">
            <div class="col-12 col-md-8">
                <p class="mb-1 small text-uppercase opacity-75">Offerta speciale</p>
                <h3 class="h5 mb-2 fw-bold">Anticipi solo il 50%</h3>
                <p class="mb-0">
                    Con Korus puoi acquistare infissi nuovi senza sconto in fattura:
                    <span class="fw-semibold">anticipi solo la metà</span>.
                    <span class="badge bg-light text-dark ms-2">Fino al 31/12</span>
                </p>
            </div>

            @php
                use Illuminate\Support\Facades\Route;
                // Se la rotta nominata esiste, usala; altrimenti fallback URL "muto"
                $promoUrl = Route::has('promo.korus50') ? route('promo.korus50') : url('/promozioni/korus-50');
            @endphp

            <div class="col-12 col-md-auto text-md-end">
                <a href="{{ $promoUrl }}" class="btn btn-light px-4 fw-semibold" data-promo="korus-50"
                    aria-label="Scopri la promozione Korus">
                    Scopri l'offerta Korus
                </a>
            </div>
        </div>
    </div>
</section>
