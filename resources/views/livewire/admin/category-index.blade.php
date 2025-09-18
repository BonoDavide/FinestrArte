<div class="container py-4 pt-5 mt-5">
    <h2 class="mb-4">Gestione Categorie</h2>

    <form wire:submit.prevent="save" class="mb-4" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Nome categoria</label>
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
            <label class="form-label">Immagine (opzionale)</label>
            <input type="file" wire:model="image" class="form-control">
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            {{-- anteprima upload corrente --}}
            @if ($image)
                <div class="mt-2">
                    <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail" width="120">
                </div>
            @endif

            {{-- immagine già salvata quando sto modificando e NON ho scelto un nuovo file --}}
            @if ($isEditing && $categoryId && !$image)
                @php
                    $current = $categories->firstWhere('id', $categoryId);
                @endphp
                @if ($current && $current->image)
                    <div class="mt-2 d-flex align-items-start gap-2">
                        <img src="{{ asset('img/' . $current->image) }}?v={{ $current->updated_at->timestamp }}"
                            class="img-thumbnail" width="120">
                        <button type="button" class="btn btn-outline-danger btn-sm"
                            wire:click="removeImage({{ $categoryId }})"
                            onclick="confirm('Rimuovere l\'immagine attuale?') || event.stopImmediatePropagation()">
                            Rimuovi immagine
                        </button>
                    </div>
                @endif
            @endif
        </div>

        <div class="form-check form-switch mb-3">
            <input class="form-check-input" type="checkbox" wire:model="is_active" role="switch" id="visibleSwitch">
            <label class="form-check-label" for="visibleSwitch">Visibile sul sito</label>
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
                <th>Immagine</th>
                <th>Visibile</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>
                        @if ($category->image)
                            <div class="d-flex flex-column align-items-start gap-2">
                                <img src="{{ asset('img/' . $category->image) }}?v={{ $category->updated_at->timestamp }}"
                                    width="80" class="img-thumbnail">
                                <button class="btn btn-outline-danger btn-sm"
                                    wire:click="removeImage({{ $category->id }})"
                                    onclick="confirm('Eliminare solo l\'immagine?') || event.stopImmediatePropagation()">
                                    Rimuovi immagine
                                </button>
                            </div>
                        @else
                            <span class="text-muted">—</span>
                        @endif
                    </td>
                    <td>
                        @if ($category->is_active)
                            <span class="badge bg-success">Sì</span>
                        @else
                            <span class="badge bg-secondary">No</span>
                        @endif
                    </td>
                    <td>
                        <button wire:click="edit({{ $category->id }})" class="btn btn-sm btn-warning">Modifica</button>
                        <button wire:click="delete({{ $category->id }})" class="btn btn-sm btn-danger"
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
