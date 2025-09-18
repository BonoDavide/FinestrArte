<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SubcategoryIndex extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $category_id;
    public $image;
    public $is_active = true;
    public $subcategoryId;
    public $isEditing = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'category_id' => 'required|exists:categories,id',
        'image' => 'nullable|image|max:2048',
        'is_active' => 'boolean',
    ];

    public function updatedName()
    {
        $this->slug = Str::slug($this->name);
    }

    public function save()
    {
        $this->validate();

        // se sto modificando, recupero la sottocategoria corrente
        $subcategory = ($this->isEditing && $this->subcategoryId)
            ? Subcategory::findOrFail($this->subcategoryId)
            : null;

        // di default mantieni il path esistente (se c'è)
        $imagePath = $subcategory?->image;

        if ($this->image) {
            // 1) elimina sempre il vecchio file se esiste
            if ($subcategory && $subcategory->image) {
                Storage::disk('public_img')->delete($subcategory->image);
            }

            // 2) usa lo stesso nome (slug.estensione)
            $ext = $this->image->getClientOriginalExtension();
            $filename = $this->slug . '.' . $ext;

            // 3) salva su disco 'public_img' nella cartella 'sottocategorie'
            $imagePath = $this->image->storeAs('sottocategorie', $filename, 'public_img');
        }

        if ($subcategory) {
            $subcategory->update([
                'name'        => $this->name,
                'slug'        => $this->slug,
                'category_id' => $this->category_id,
                'image'       => $imagePath,
                'is_active'   => $this->is_active,
            ]);
        } else {
            Subcategory::create([
                'name'        => $this->name,
                'slug'        => $this->slug,
                'category_id' => $this->category_id,
                'image'       => $imagePath, // può restare null
                'is_active'   => $this->is_active,
            ]);
        }

        $this->resetForm();
    }

    public function edit($id)
    {
        $subcategory = Subcategory::findOrFail($id);
        $this->name = $subcategory->name;
        $this->slug = $subcategory->slug;
        $this->category_id = $subcategory->category_id;
        $this->subcategoryId = $id;
        $this->image = null;
        $this->is_active = $subcategory->is_active;
        $this->isEditing = true;
    }

    public function delete($id)
    {
        $subcategory = Subcategory::findOrFail($id);

        if ($subcategory->image) {
            Storage::disk('public_img')->delete($subcategory->image);
        }

        $subcategory->delete();
        $this->resetForm();
    }

    public function removeImage($id)
    {
        $subcategory = Subcategory::findOrFail($id);

        if ($subcategory->image) {
            Storage::disk('public_img')->delete($subcategory->image);
            $subcategory->update(['image' => null]);
        }

        if ($this->isEditing && $this->subcategoryId === $id) {
            $this->image = null;
        }
    }

    public function resetForm()
    {
        $this->reset(['name', 'slug', 'category_id', 'subcategoryId', 'isEditing', 'image', 'is_active']);
    }

    public function render()
    {
        return view('livewire.admin.subcategory-index', [
            'subcategories' => Subcategory::with('category')->orderBy('name')->get(),
            'categories' => Category::orderBy('name')->get(),
        ]);
    }
}
