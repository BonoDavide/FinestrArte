<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CategoryIndex extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $image;
    public $categoryId;
    public $isEditing = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'image' => 'nullable|image|max:2048', // max 2MB
    ];

    public function updatedName()
    {
        $this->slug = Str::slug($this->name);
    }

    public function save()
    {
        $this->validate();

        $imagePath = null;

        if ($this->image) {
            $filename = $this->slug . '.' . $this->image->getClientOriginalExtension();
            $imagePath = $this->image->storeAs('img/categorie', $filename, 'public');
        }

        if ($this->isEditing && $this->categoryId) {
            $category = Category::findOrFail($this->categoryId);

            // elimina immagine precedente se viene caricata una nuova
            if ($this->image && $category->image) {
                Storage::disk('public')->delete($category->image);
            }

            $category->update([
                'name' => $this->name,
                'slug' => $this->slug,
                'image' => $imagePath ?? $category->image,
            ]);
        } else {
            Category::create([
                'name' => $this->name,
                'slug' => $this->slug,
                'image' => $imagePath,
            ]);
        }

        $this->resetForm();
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->categoryId = $id;
        $this->image = null;
        $this->isEditing = true;
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);

        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }

        $category->delete();
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->reset(['name', 'slug', 'image', 'categoryId', 'isEditing']);
    }

    public function render()
    {
        return view('livewire.admin.category-index', [
            'categories' => Category::orderBy('name')->get(),
        ]);
    }
}
