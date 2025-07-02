<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'slug', 'image'];

    // Relazione: ogni sottocategoria appartiene a una categoria
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relazione: ogni sottocategoria ha molti prodotti
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // Generazione automatica dello slug se non fornito
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($subcategory) {
            if (empty($subcategory->slug)) {
                $subcategory->slug = Str::slug($subcategory->name);
            }
        });
    }

    // Accessor immagine (opzionale)
    public function getImageUrlAttribute()
    {
        return $this->image
            ? asset('storage/' . $this->image)
            : asset('images/default-subcategory.jpg');
    }
}
