<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Pagina iniziale: tutte le categorie
    public function index()
    {
        $categories = Category::with('subcategories')->get();

        return view('prodotti.index', compact('categories'));
    }

    // Pagina categoria: mostra sottocategorie o direttamente i prodotti
    public function showCategoria(Category $categoria)
    {
        $sottocategorie = $categoria->subcategories->sortBy(function ($s) {
            return $s->name === 'PVC' ? 0 : 1;
        });

        if ($sottocategorie->isEmpty()) {
            return view('prodotti.prodotti', [
                'categoria' => $categoria,
                'products' => $categoria->products ?? [],
            ]);
        }

        return view('prodotti.categoria', [
            'categoria' => $categoria,
            'sottocategorie' => $sottocategorie,
        ]);
    }

    // Pagina sottocategoria: mostra i prodotti
    public function showSottocategoria(Category $categoria, Subcategory $sottocategoria)
    {
        // Assicura che la sottocategoria appartenga alla categoria
        abort_unless($sottocategoria->category_id === $categoria->id, 404);

        $products = $sottocategoria->products;

        return view('prodotti.prodotti', [
            'categoria' => $categoria,
            'sottocategoria' => $sottocategoria,
            'products' => $products,
        ]);
    }
}
