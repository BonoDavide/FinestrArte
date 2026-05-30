<x-layout>
    <section class="py-5 bg-light border-bottom">
        <div class="container">

            <div class="row justify-content-center text-center">
                <div class="col-lg-8 pt-5 my-5">

                    <p class="text-uppercase text-muted small mb-2">
                        Area riservata
                    </p>

                    <h1 class="mb-3">
                        Benvenuto, {{ Auth::user()->name }}
                    </h1>

                    <p class="text-muted mb-0">
                        Da questa sezione puoi gestire i contenuti principali del sito FinestrArte 3.0.
                    </p>

                </div>
            </div>

        </div>
    </section>

    <section class="py-5">
        <div class="container">

            <div class="row mb-4 justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="h4 mb-1">Gestione sito</h2>
                    <p class="text-muted mb-0">
                        Usa i collegamenti rapidi per accedere alle sezioni amministrative.
                    </p>
                </div>
            </div>

            <div class="row g-4">

                <div class="col-md-6 col-xl-4">
                    <a href="{{ route('admin.contacts.index') }}" class="text-decoration-none">
                        <div class="card h-100 shadow border-0">
                            <div class="card-body p-4">

                                <div class="d-flex align-items-center mb-3">

                                    <h5 class="card-title mb-0 text-dark">
                                        Contatti ricevuti
                                    </h5>
                                </div>

                                <p class="card-text text-muted mb-4">
                                    Consulta le richieste inviate dagli utenti tramite il form contatti.
                                </p>

                                <span class="fw-semibold text-dark">
                                    Apri sezione →
                                </span>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-xl-4">
                    <a href="{{ route('admin.categories') }}" class="text-decoration-none">
                        <div class="card h-100 shadow border-0">
                            <div class="card-body p-4">

                                <div class="d-flex align-items-center mb-3">

                                    <h5 class="card-title mb-0 text-dark">
                                        Gestione categorie
                                    </h5>
                                </div>

                                <p class="card-text text-muted mb-4">
                                    Crea, modifica o nascondi le categorie principali dei prodotti.
                                </p>

                                <span class="fw-semibold text-dark">
                                    Apri sezione →
                                </span>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-xl-4">
                    <a href="{{ route('admin.subcategories') }}" class="text-decoration-none">
                        <div class="card h-100 shadow border-0">
                            <div class="card-body p-4">

                                <div class="d-flex align-items-center mb-3">

                                    <h5 class="card-title mb-0 text-dark">
                                        Gestione sottocategorie
                                    </h5>
                                </div>

                                <p class="card-text text-muted mb-4">
                                    Collega le sottocategorie alle categorie e gestiscine la visibilità.
                                </p>

                                <span class="fw-semibold text-dark">
                                    Apri sezione →
                                </span>

                            </div>
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </section>
</x-layout>
