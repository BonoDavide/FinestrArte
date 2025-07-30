<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subcategory extends Model
{
    protected $fillable = ['category_id', 'name', 'slug', 'image', 'is_active'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
