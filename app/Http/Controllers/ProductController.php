<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    public function index()
    {
        $categorie = Category::orderBy('name')->get();

        return view('prodotti.index', compact('categorie'));
    }

    public function showCategoria($categoria)
    {
        // Cerco la categoria dal DB (404 se non trovata)
        $categoriaModel = Category::where('slug', $categoria)->firstOrFail();

        // Costruisco il path della vista statica
        $view = "prodotti.static.{$categoria}.index";

        if (View::exists($view)) {
            // Carico le sottocategorie e metto 'PVC' in cima se presente
            $sottocategorie = $categoriaModel->subcategories()
                ->get()
                ->sortBy(function ($sub) {
                    return strtolower($sub->name) === 'pvc' ? 0 : 1;
                });

            return view($view, [
                'categoria' => $categoriaModel,
                'sottocategorie' => $sottocategorie,
            ]);
        }

        // Fallback generico se la categoria non ha una view personalizzata
        if (View::exists("prodotti.static.categoria")) {
            return view("prodotti.static.categoria", [
                'categoria' => $categoriaModel,
                'sottocategorie' => $categoriaModel->subcategories,
            ]);
        }

        abort(404);
    }

    public function showSottocategoria($categoria, $sottocategoria)
    {
        $view = "prodotti.static.{$categoria}.{$sottocategoria}";

        if (!View::exists($view)) {
            abort(404);
        }

        return view($view, [
            'categoria' => ucfirst($categoria),
            'sottocategoria' => ucfirst($sottocategoria),
        ]);
    }

    public function showScheda($categoria, $sottocategoria, $prodotto)
    {
        $path = public_path("pdf/prodotti/{$categoria}/{$sottocategoria}/{$prodotto}.pdf");

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path);
    }
}
