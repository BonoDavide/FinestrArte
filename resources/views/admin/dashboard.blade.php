<x-layout>
    <div class="container py-5">
        <h1 class="mb-4">Benvenuto, {{ Auth::user()->name }} 👋</h1>
        <p class="text-muted mb-5">Questa è la tua area riservata. Usa i link rapidi qui sotto per gestire il sito.</p>

        <div class="row g-4">

            <div class="col-md-6 col-lg-4">
                <a href="{{ route('admin.contacts.index') }}" class="text-decoration-none">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">Contatti Ricevuti</h5>
                            <p class="card-text text-muted">Consulta le richieste inviate dal form contatti.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="{{ route('admin.categories') }}" class="text-decoration-none">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">Gestione Categorie</h5>
                            <p class="card-text text-muted">Crea, modifica o elimina le categorie di prodotto.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="{{ route('admin.subcategories') }}" class="text-decoration-none">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">Gestione Sottocategorie</h5>
                            <p class="card-text text-muted">Collega e gestisci le sottocategorie associate alle
                                categorie.</p>
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
