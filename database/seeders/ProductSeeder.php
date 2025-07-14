<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $pvcSubcategory = Subcategory::where('name', 'PVC')->first();

        if ($pvcSubcategory) {
            Product::create([
                'subcategory_id' => $pvcSubcategory->id,
                'name' => 'Schüco CT 70 Classic',
                'description' => 'Sistema in PVC a 5 camere con profilo minimal da 70 mm, alte prestazioni di isolamento termico e acustico.',
                'image' => 'prodotti/finestre/pvc/schuco-ct-70-classic.jpg',
                'specs' => [
                    'Sistema' => 'Profilo PVC 5 camere',
                    'Profondità telaio' => '70 mm',
                    'Spessore vetro' => '6–40 mm',
                    'Isolamento termico' => 'Uf = 1,2–1,5 W/(m²K)',
                    'Isolamento acustico' => 'Fino a 46 dB',
                    'Resistenza all’effrazione' => 'Classe RC 2',
                    'Tenuta all’aria' => 'Classe 4',
                    'Resistenza alla pioggia' => 'Classe 9A',
                    'Resistenza al vento' => 'Classe C5 / B5',
                    'Guarnizioni' => 'Doppie guarnizioni in EPDM',
                    'Rinforzi' => 'Acciaio zincato',
                ],
            ]);
        }
    }
}
