<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    public function run(): void
    {
        $subcategories = [
            'Finestre' => [
                'PVC',
                'Alluminio',
                'Legno e alluminio',
                'Legno',
            ],
            'Persiane' => [
                'Ferro + combinato',
                'Alluminio lamelle orientabili',
            ],
            'Avvolgibili' => [
                'PVC',
                'Alluminio',
            ],
            'Portoni blindati' => [
                'Bunker CE CL 3',
                'Artigianali',
            ],
            'Controtelai monoblocco termici' => [
                'Con cassonetto ispezione inferiore',
                'Cassonetto ispezione frontale',
                'Controtelaio classico',
            ],
        ];

        foreach ($subcategories as $categoryName => $subs) {
            $category = Category::where('name', $categoryName)->first();

            if (!$category) continue;

            foreach ($subs as $name) {
                Subcategory::create([
                    'category_id' => $category->id,
                    'name' => $name,
                    'slug' => Str::slug($name),
                    'image' => null,
                ]);
            }
        }
    }
}
