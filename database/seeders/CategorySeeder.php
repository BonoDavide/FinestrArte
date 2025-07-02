<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Finestre',
            'Grate in ferro',
            'Persiane',
            'Avvolgibili',
            'Zanzariere',
            'Porte da interno',
            'Portoni blindati',
            'Controtelai monoblocco termici',
            'Pergole Alupergo',
            'Tende Tecnotenda',
            'Vetrate panoramiche',
        ];

        foreach ($categories as $name) {
            Category::create([
                'name' => $name,
                'slug' => Str::slug($name),
                'image' => null,
            ]);
        }
    }
}
