<div class="container py-5 mt-5">

    <div class="row align-items-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-2">
                Gestione Categorie
            </h1>

            <p class="text-muted mb-0">
                Crea, modifica e gestisci le categorie prodotto visibili sul sito.
            </p>
        </div>

        <div class="col-md-4 text-md-end mt-3 mt-md-0">
            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                Torna alla Dashboard
            </a>
        </div>
    </div>

    <div class="row g-4">

        {{-- Form categoria --}}
        <div class="col-12">
            <div class="card border-0 shadow">
                <div class="card-body p-4">

                    <h2 class="h4 mb-4 underline-thin">
                        {{ $isEditing ? 'Modifica categoria' : 'Aggiungi categoria' }}
                    </h2>

                    <form wire:submit.prevent="save" enctype="multipart/form-data">

                        <div class="row g-3">

                            <div class="col-12 col-md-6">
                                <label class="form-label">Nome categoria</label>
                                <input type="text" wire:model.defer="name" class="form-control">

                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label">Slug</label>
                                <input type="text" wire:model="slug" class="form-control" readonly>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Immagine</label>
                                <input type="file" wire:model="image" class="form-control">

                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            @if ($image)
                                <div class="col-12">
                                    <p class="text-muted small mb-2">
                                        Anteprima nuova immagine
                                    </p>

                                    <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail" width="140">
                                </div>
                            @endif

                            @if ($isEditing && $categoryId && !$image)
                                @php
                                    $current = $categories->firstWhere('id', $categoryId);
                                @endphp

                                @if ($current && $current->image)
                                    <div class="col-12">
                                        <p class="text-muted small mb-2">
                                            Immagine attuale
                                        </p>

                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <img src="{{ asset('img/' . $current->image) }}?v={{ $current->updated_at->timestamp }}"
                                                class="img-thumbnail" width="140">

                                            <button type="button" class="btn btn-outline-danger btn-sm"
                                                wire:click="removeImage({{ $categoryId }})"
                                                onclick="confirm('Rimuovere l\'immagine attuale?') || event.stopImmediatePropagation()">
                                                Rimuovi immagine
                                            </button>
                                        </div>
                                    </div>
                                @endif
                            @endif

                            <div class="col-12">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" wire:model="is_active"
                                        role="switch" id="visibleSwitch">

                                    <label class="form-check-label" for="visibleSwitch">
                                        Visibile sul sito
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ $isEditing ? 'Aggiorna categoria' : 'Aggiungi categoria' }}
                                </button>

                                @if ($isEditing)
                                    <button type="button" wire:click="resetForm" class="btn btn-secondary">
                                        Annulla
                                    </button>
                                @endif
                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>

        {{-- Tabella categorie --}}
        <div class="col-12">
            <div class="card border-0 shadow">
                <div class="card-body p-4">

                    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
                        <div>
                            <h2 class="h4 mb-1 underline-thin">
                                Categorie esistenti
                            </h2>

                            <p class="text-muted mb-0">
                                Elenco delle categorie create nel pannello.
                            </p>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Nome</th>
                                    <th>Slug</th>
                                    <th>Immagine</th>
                                    <th>Visibile</th>
                                    <th class="text-end">Azioni</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class="fw-semibold">
                                            {{ $category->name }}
                                        </td>

                                        <td>
                                            <span class="text-muted">
                                                {{ $category->slug }}
                                            </span>
                                        </td>

                                        <td>
                                            @if ($category->image)
                                                <div class="d-flex align-items-center gap-3 flex-wrap">
                                                    <img src="{{ asset('img/' . $category->image) }}?v={{ $category->updated_at->timestamp }}"
                                                        width="90" class="img-thumbnail">

                                                    <button class="btn btn-outline-danger btn-sm"
                                                        wire:click="removeImage({{ $category->id }})"
                                                        onclick="confirm('Eliminare solo l\'immagine?') || event.stopImmediatePropagation()">
                                                        Rimuovi
                                                    </button>
                                                </div>
                                            @else
                                                <span class="text-muted">Nessuna immagine</span>
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
                                            <div class="d-flex justify-content-end gap-2">
                                                <button wire:click="edit({{ $category->id }})"
                                                    class="btn btn-sm btn-warning">
                                                    Modifica
                                                </button>

                                                <button wire:click="delete({{ $category->id }})"
                                                    class="btn btn-sm btn-danger"
                                                    onclick="confirm('Sicuro?') || event.stopImmediatePropagation()">
                                                    Elimina
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="mt-4 pt-5">
            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                Torna alla Dashboard
            </a>
        </div>
    </div>

</div>
