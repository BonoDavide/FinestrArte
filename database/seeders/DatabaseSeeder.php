<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ✅ Avvia i seeder di categorie e sottocategorie
        $this->call([
            CategorySeeder::class,
            SubcategorySeeder::class,
        ]);
    }
}
