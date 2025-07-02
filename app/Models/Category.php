<?php

namespace App\Models;

use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image'];

    // Relazione: una categoria ha molte sottocategorie
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    // Generazione automatica dello slug se non fornito
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            if (empty($category->slug)) {
                $category->slug = Str::slug($category->name);
            }
        });
    }

    // Accessor per immagine (facoltativo)
    public function getImageUrlAttribute()
    {
        return $this->image
            ? asset('storage/' . $this->image)
            : asset('images/default-category.jpg');
    }
}
