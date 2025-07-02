<?php

namespace App\Models;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcategory_id',
        'name',
        'description',
        'image',
        'specs',
    ];

    protected $casts = [
        'specs' => 'array', // così puoi usare $product->specs come array associativo
    ];

    // Relazione: ogni prodotto appartiene a una sottocategoria
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    // Accessor per immagine (comodo nel Blade)
    public function getImageUrlAttribute()
    {
        return $this->image
            ? asset('storage/' . $this->image)
            : asset('images/default-product.jpg');
    }
}
