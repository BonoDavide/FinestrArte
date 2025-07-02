<x-layout>
    <div class="container py-5">
        <h1 class="mb-4">Messaggi ricevuti dal sito</h1>

        @if ($messages->count())
            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Messaggio</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
                            <tr>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ Str::limit($message->message, 50) }}</td>
                                <td>{{ $message->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{ $messages->links() }}
        @else
            <p class="text-muted">Nessun messaggio ricevuto al momento.</p>
        @endif
    </div>
</x-layout>
