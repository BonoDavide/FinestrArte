<div>
    <div class="card shadow-sm">
        <div class="card-body p-4">

            <div class="d-flex justify-content-between align-items-start gap-3 mb-4">
                <div>
                    <h2 class="h4 mb-1">
                        {{ $message->name }}
                    </h2>

                    <p class="text-muted mb-0">
                        Messaggio ricevuto il {{ $message->created_at->format('d/m/Y H:i') }}
                    </p>
                </div>
            </div>

            <hr>

            <div class="row g-4 mb-4">
                <div class="col-12 col-md-6">
                    <p class="text-muted mb-1">Nome</p>
                    <p class="fw-semibold mb-0">
                        {{ $message->name }}
                    </p>
                </div>

                <div class="col-12 col-md-6">
                    <p class="text-muted mb-1">Email</p>
                    <p class="mb-0">
                        <a href="mailto:{{ $message->email }}" class="text-decoration-none">
                            {{ $message->email }}
                        </a>
                    </p>
                </div>
            </div>

            <div>
                <p class="text-muted mb-2">Messaggio</p>

                <div class="border rounded p-3 bg-light">
                    <p class="mb-0 message-text">
                        {{ $message->message }}
                    </p>
                </div>
            </div>

            <div class="mt-4 d-flex justify-content-end">
                <a href="mailto:{{ $message->email }}" class="btn btn-primary">
                    Rispondi via email
                </a>
            </div>

        </div>
    </div>
</div>
