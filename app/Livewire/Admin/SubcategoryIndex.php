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

        $imagePath = null;

        if ($this->image) {
            $filename = $this->slug . '.' . $this->image->getClientOriginalExtension();
            $imagePath = $this->image->storeAs('img/sottocategorie', $filename, 'public');
        }

        if ($this->isEditing && $this->subcategoryId) {
            $subcategory = Subcategory::findOrFail($this->subcategoryId);

            if ($this->image && $subcategory->image) {
                Storage::disk('public')->delete($subcategory->image);
            }

            $subcategory->update([
                'name' => $this->name,
                'slug' => $this->slug,
                'category_id' => $this->category_id,
                'image' => $imagePath ?? $subcategory->image,
                'is_active' => $this->is_active,
            ]);
        } else {
            Subcategory::create([
                'name' => $this->name,
                'slug' => $this->slug,
                'category_id' => $this->category_id,
                'image' => $imagePath,
                'is_active' => $this->is_active,
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
            Storage::disk('public')->delete($subcategory->image);
        }

        $subcategory->delete();
        $this->resetForm();
    }

    public function removeImage($id)
    {
        $subcategory = Subcategory::findOrFail($id);

        if ($subcategory->image) {
            Storage::disk('public')->delete($subcategory->image);
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
