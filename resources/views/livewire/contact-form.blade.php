<div>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input wire:model.lazy="name" type="text" class="form-control @error('name') is-invalid @enderror"
                id="name">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input wire:model.lazy="email" type="email" class="form-control @error('email') is-invalid @enderror"
                id="email">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Messaggio</label>
            <textarea wire:model.lazy="message" class="form-control @error('message') is-invalid @enderror" id="message"
                rows="5"></textarea>
            @error('message')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-color border border-dark">Invia</button>
    </form>
</div>
