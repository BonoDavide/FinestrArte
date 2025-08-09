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
    public $is_active = true;

    protected $rules = [
        'name' => 'required|string|max:255',
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

        $imagePath = null;

        if ($this->image) {
            $filename = $this->slug . '.' . $this->image->getClientOriginalExtension();
            $imagePath = $this->image->storeAs('img/categorie', $filename, 'public');
        }

        if ($this->isEditing && $this->categoryId) {
            $category = Category::findOrFail($this->categoryId);

            if ($this->image && $category->image) {
                Storage::disk('public')->delete($category->image);
            }

            $category->update([
                'name' => $this->name,
                'slug' => $this->slug,
                'image' => $imagePath ?? $category->image,
                'is_active' => $this->is_active,
            ]);
        } else {
            Category::create([
                'name' => $this->name,
                'slug' => $this->slug,
                'image' => $imagePath,
                'is_active' => $this->is_active,
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
        $this->is_active = $category->is_active;
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

    public function removeImage($id)
    {
        $category = Category::findOrFail($id);

        if ($category->image) {
            Storage::disk('public')->delete($category->image);
            $category->update(['image' => null]);
        }

        // opzionale: resetto l’anteprima nel form se sto modificando proprio questa categoria
        if ($this->isEditing && $this->categoryId === $id) {
            $this->image = null;
        }
    }

    public function resetForm()
    {
        $this->reset(['name', 'slug', 'image', 'categoryId', 'isEditing', 'is_active']);
    }

    public function render()
    {
        return view('livewire.admin.category-index', [
            'categories' => Category::orderBy('name')->get(),
        ]);
    }
}
