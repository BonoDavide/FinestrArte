<div class="container py-5 mt-5">

    <div class="row align-items-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-2">
                Gestione Sottocategorie
            </h1>

            <p class="text-muted mb-0">
                Crea, modifica e collega le sottocategorie alle rispettive categorie prodotto.
            </p>
        </div>

        <div class="col-md-4 text-md-end mt-3 mt-md-0">
            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                Torna alla Dashboard
            </a>
        </div>
    </div>

    <div class="row g-4">

        {{-- Form sottocategoria --}}
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">

                    <h2 class="h4 mb-4 underline-thin">
                        {{ $isEditing ? 'Modifica sottocategoria' : 'Aggiungi sottocategoria' }}
                    </h2>

                    <form wire:submit.prevent="save" enctype="multipart/form-data">

                        <div class="row g-3">

                            <div class="col-12 col-md-6">
                                <label class="form-label">Nome sottocategoria</label>
                                <input type="text" wire:model.defer="name" class="form-control">

                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label">Slug</label>
                                <input type="text" wire:model="slug" class="form-control" readonly>
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label">Categoria</label>

                                <select wire:model.defer="category_id" class="form-select">
                                    <option value="">-- Seleziona categoria --</option>

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('category_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-12 col-md-6">
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

                            @if ($isEditing && $subcategoryId && !$image)
                                @php
                                    $current = $subcategories->firstWhere('id', $subcategoryId);
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
                                                wire:click="removeImage({{ $subcategoryId }})"
                                                onclick="confirm('Rimuovere l\'immagine attuale?') || event.stopImmediatePropagation()">
                                                Rimuovi immagine
                                            </button>
                                        </div>
                                    </div>
                                @endif
                            @endif

                            <div class="col-12">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="is_active"
                                        role="switch" id="is_active">

                                    <label class="form-check-label" for="is_active">
                                        Visibile sul sito
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ $isEditing ? 'Aggiorna sottocategoria' : 'Aggiungi sottocategoria' }}
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

        {{-- Tabella sottocategorie --}}
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">

                    <div class="mb-4">
                        <h2 class="h4 mb-1 underline-thin">
                            Sottocategorie esistenti
                        </h2>

                        <p class="text-muted mb-0">
                            Elenco delle sottocategorie create e collegate alle categorie principali.
                        </p>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Nome</th>
                                    <th>Slug</th>
                                    <th>Categoria</th>
                                    <th>Immagine</th>
                                    <th>Visibile</th>
                                    <th class="text-end">Azioni</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($subcategories as $sub)
                                    <tr>
                                        <td class="fw-semibold">
                                            {{ $sub->name }}
                                        </td>

                                        <td>
                                            <span class="text-muted">
                                                {{ $sub->slug }}
                                            </span>
                                        </td>

                                        <td>
                                            @if ($sub->category)
                                                <span class="badge bg-light text-dark border">
                                                    {{ $sub->category->name }}
                                                </span>
                                            @else
                                                <span class="text-muted">—</span>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($sub->image)
                                                <div class="d-flex align-items-center gap-3 flex-wrap">
                                                    <img src="{{ asset('img/' . $sub->image) }}?v={{ $sub->updated_at->timestamp }}"
                                                        width="90" class="img-thumbnail">

                                                    <button class="btn btn-outline-danger btn-sm"
                                                        wire:click="removeImage({{ $sub->id }})"
                                                        onclick="confirm('Eliminare solo l\'immagine?') || event.stopImmediatePropagation()">
                                                        Rimuovi
                                                    </button>
                                                </div>
                                            @else
                                                <span class="text-muted">Nessuna immagine</span>
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
                                            <div class="d-flex justify-content-end gap-2">
                                                <button wire:click="edit({{ $sub->id }})"
                                                    class="btn btn-sm btn-warning">
                                                    Modifica
                                                </button>

                                                <button wire:click="delete({{ $sub->id }})"
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
