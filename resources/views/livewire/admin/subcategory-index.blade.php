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

            {{-- anteprima upload corrente --}}
            @if ($image)
                <div class="mt-2">
                    <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail" width="120">
                </div>
            @endif

            {{-- immagine già salvata quando sto modificando e NON ho scelto un nuovo file --}}
            @if ($isEditing && $subcategoryId && !$image)
                @php
                    $current = $subcategories->firstWhere('id', $subcategoryId);
                @endphp
                @if ($current && $current->image)
                    <div class="mt-2 d-flex align-items-start gap-2">
                        <img src="{{ asset('img/' . $current->image) }}" class="img-thumbnail" width="120">
                        <button type="button" class="btn btn-outline-danger btn-sm"
                            wire:click="removeImage({{ $subcategoryId }})"
                            onclick="confirm('Rimuovere l\'immagine attuale?') || event.stopImmediatePropagation()">
                            Rimuovi immagine
                        </button>
                    </div>
                @endif
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Visibile</label>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" wire:model.defer="is_active" role="switch"
                    id="is_active">
                <label class="form-check-label" for="is_active">
                    {{ $is_active ? 'Sì' : 'No' }}
                </label>
            </div>
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
                <th>Visibile</th>
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
                            <div class="d-flex flex-column align-items-start gap-2">
                                <img src="{{ asset('img/' . $sub->image) }}" width="80" class="img-thumbnail">
                                <button class="btn btn-outline-danger btn-sm"
                                    wire:click="removeImage({{ $sub->id }})"
                                    onclick="confirm('Eliminare solo l\'immagine?') || event.stopImmediatePropagation()">
                                    Rimuovi immagine
                                </button>
                            </div>
                        @else
                            <span class="text-muted">—</span>
                        @endif
                    </td>
                    <td>
                        @if ($sub->is_active)
                            <span class="badge bg-success">Sì</span>
                        @else
                            <span class="badge bg-secondary">No</span>
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
