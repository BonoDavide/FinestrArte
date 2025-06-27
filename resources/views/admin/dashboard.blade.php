<x-layout>
    <div class="container py-5">
        <h1 class="mb-4">Benvenuto, {{ Auth::user()->name }} 👋</h1>
        <p class="text-muted mb-5">Questa è la tua area riservata. Usa i link rapidi qui sotto per gestire il sito.</p>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">Modifica Pagine</h5>
                            <p class="card-text text-muted">Aggiorna testi come "Chi siamo", homepage, ecc.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">Gestione Prodotti</h5>
                            <p class="card-text text-muted">Aggiungi o modifica gli infissi e i prodotti offerti.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">Gestione Servizi</h5>
                            <p class="card-text text-muted">Installa, manutieni e personalizza i tuoi servizi.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">Galleria Progetti</h5>
                            <p class="card-text text-muted">Carica immagini dei lavori svolti.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">Contatti Ricevuti</h5>
                            <p class="card-text text-muted">Consulta le richieste inviate dal form contatti.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">Impostazioni</h5>
                            <p class="card-text text-muted">Configura informazioni generali del sito (prossimamente).
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-layout>
