<x-layout>
    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="pt-5 mb-4">
                    <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">
                        Torna ai messaggi
                    </a>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">

                <div class="mb-4">
                    <h1 class="mb-2">Dettaglio messaggio</h1>
                    <p class="text-muted mb-0">
                        Visualizza il contenuto completo del messaggio ricevuto.
                    </p>
                </div>

                <livewire:admin.contact-message-show :message="$message" />

            </div>
        </div>

    </div>
</x-layout>
