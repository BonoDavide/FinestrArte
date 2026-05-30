<x-layout>
    <div class="container py-5">

        <div class="pt-5 mb-5">
            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                Torna alla Dashboard
            </a>
        </div>

        <div class="row justify-content-between align-items-center mb-4">
            <div class="col-12 col-md-8">
                <h1 class="mb-2">Messaggi ricevuti</h1>
                <p class="text-muted mb-0">
                    Gestisci i messaggi inviati dagli utenti tramite il form di contatto.
                </p>
            </div>
        </div>

        @if ($messages->count())
            <div class="card shadow-sm">
                <div class="card-body p-0">

                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Messaggio</th>
                                    <th>Data</th>
                                    <th class="text-end">Azioni</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($messages as $message)
                                    <tr>
                                        <td>
                                            <strong>{{ $message->name }}</strong>
                                        </td>

                                        <td>
                                            <a href="mailto:{{ $message->email }}" class="text-decoration-none">
                                                {{ $message->email }}
                                            </a>
                                        </td>

                                        <td class="text-muted">
                                            {{ Str::limit($message->message, 60) }}
                                        </td>

                                        <td>
                                            {{ $message->created_at->format('d/m/Y H:i') }}
                                        </td>

                                        <td class="text-end">
                                            <a href="{{ route('admin.contacts.show', $message) }}"
                                                class="btn btn-sm btn-primary">
                                                Leggi
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="mt-4">
                {{ $messages->links() }}
            </div>
        @else
            <div class="card shadow-sm">
                <div class="card-body text-center py-5">
                    <h2 class="h5 mb-2">Nessun messaggio ricevuto</h2>
                    <p class="text-muted mb-0">
                        Al momento non ci sono messaggi inviati dal form di contatto.
                    </p>
                </div>
            </div>
        @endif

    </div>
</x-layout>
