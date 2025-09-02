<footer class="bg-light text-muted border-top pt-5 pb-4 mt-5">
    <div class="container">
        <div class="row justify-content-between">

            {{-- Descrizione azienda --}}
            <div class="col-md-3 mb-4 text-center">
                <h5 class="text-uppercase">FinestrArte 3.0 SRLS</h5>
                <p class="small">
                    Realizziamo infissi su misura collaborando solo con
                    i migliori produttori del settore.
                </p>
            </div>

            {{-- Navigazione --}}
            <div class="col-md-3 mb-4 text-center">
                <h6 class="text-uppercase">Navigazione</h6>
                <ul class="list-unstyled small">
                    <li><a href="{{ route('prodotti.index') }}" class="text-reset text-decoration-none">Prodotti</a></li>
                    <li><a href="{{ route('about') }}" class="text-reset text-decoration-none">Chi siamo</a></li>
                    {{-- <li><a href="#" class="text-reset text-decoration-none">Servizi</a></li> --}}
                    {{-- <li><a href="#" class="text-reset text-decoration-none">Progetti</a></li> --}}
                    <li><a href="{{ route('contact') }}" class="text-reset text-decoration-none">Contatti</a></li>
                </ul>
            </div>

            {{-- Contatti --}}
            <div class="col-md-3 mb-4 text-center">
                <h6 class="text-uppercase">Contatti</h6>
                <ul class="list-unstyled small">
                    <li><i class="bi bi-geo-alt"></i> Piazza dei Gerani, 26 – 00172 Roma (RM)</li>
                    <li><i class="bi bi-clock"></i> Mar-Sab: 9:00–13:00/14.30–18.30</li>
                    <li><i class="bi bi-telephone"></i> Commerciale: +39 350 536 2216</li>
                    <li><i class="bi bi-telephone"></i> Amministrazione: +39 350 536 2207</li>
                </ul>
            </div>

            {{-- Social icons --}}
            {{-- <div class="col-md-3 mb-4 text-center">
                <h6 class="text-uppercase">Seguici sui Social</h6>
                <div class="mt-4">
                    <a href="#" class="text-reset me-3"><i class="bi bi-facebook fs-5"></i></a>
                    <a href="#" class="text-reset me-3"><i class="bi bi-instagram fs-5"></i></a>
                    <a href="#" class="text-reset"><i class="bi bi-linkedin fs-5"></i></a>
                </div>
            </div> --}}
        </div>

        {{-- Area riservata + copyright --}}
        <div class="text-center mt-4 small">
            {{-- <a href="{{ route('login') }}" class="text-decoration-none text-muted">Area riservata</a> · --}}
            &copy; {{ date('Y') }} FinestrArte 3.0 SRLS – Tutti i diritti riservati
        </div>
    </div>
</footer>
