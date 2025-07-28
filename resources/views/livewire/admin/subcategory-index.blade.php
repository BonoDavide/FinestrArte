<div class="container py-4 pt-5 mt-5">
    <h2 class="mb-4">Gestione Sottocategorie</h2>

    <form wire:submit.prevent="save" class="mb-4" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Nome sottocategoria</label>
            <input type="text" wire:model.defer="name" class="form-control">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Slug</label>
            <input type="text" wire:model="slug" class="form-control" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">Categoria</label>
            <select wire:model.defer="category_id" class="form-select">
                <option value="">-- Seleziona categoria --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Immagine (opzionale)</label>
            <input type="file" wire:model="image" class="form-control">
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            @if ($image)
                <div class="mt-2">
                    <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail" width="120">
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">
            {{ $isEditing ? 'Aggiorna' : 'Aggiungi' }}
        </button>

        @if ($isEditing)
            <button type="button" wire:click="resetForm" class="btn btn-secondary ms-2">Annulla</button>
        @endif
    </form>

    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Slug</th>
                <th>Categoria</th>
                <th>Immagine</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subcategories as $sub)
                <tr>
                    <td>{{ $sub->name }}</td>
                    <td>{{ $sub->slug }}</td>
                    <td>{{ $sub->category->name ?? '-' }}</td>
                    <td>
                        @if ($sub->image)
                            <img src="{{ asset('storage/' . $sub->image) }}" width="80" class="img-thumbnail">
                        @else
                            <span class="text-muted">—</span>
                        @endif
                    </td>
                    <td>
                        <button wire:click="edit({{ $sub->id }})" class="btn btn-sm btn-warning">Modifica</button>
                        <button wire:click="delete({{ $sub->id }})" class="btn btn-sm btn-danger"
                            onclick="confirm('Sicuro?') || event.stopImmediatePropagation()">Elimina</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4 pt-5">
        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
            Torna alla Dashboard
        </a>
    </div>
</div>
