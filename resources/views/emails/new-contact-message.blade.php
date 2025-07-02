<h2>Hai ricevuto un nuovo messaggio da FinestrArte:</h2>

<p><strong>Nome:</strong> {{ $contact->name }}</p>
<p><strong>Email:</strong> {{ $contact->email }}</p>
<p><strong>Messaggio:</strong></p>
<p>{{ $contact->message }}</p>

<hr>
<p>Inviato il {{ $contact->created_at->format('d/m/Y H:i') }}</p>
