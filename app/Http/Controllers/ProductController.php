<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    public function index()
    {
        // Mostra solo le categorie attive
        $categorie = Category::where('is_active', true)
            ->orderBy('name')
            ->get();

        return view('prodotti.index', compact('categorie'));
    }

    public function showCategoria($categoria)
    {
        // Carica solo la categoria attiva
        $categoriaModel = Category::where('slug', $categoria)
            ->where('is_active', true)
            ->firstOrFail();

        $view = "prodotti.static.{$categoria}.index";

        if (View::exists($view)) {
            // Carica solo sottocategorie attive
            $sottocategorie = $categoriaModel->subcategories()
                ->where('is_active', true)
                ->get()
                ->sortBy(function ($sub) {
                    return strtolower($sub->name) === 'pvc' ? 0 : 1;
                });

            return view($view, [
                'categoria' => $categoriaModel,
                'sottocategorie' => $sottocategorie,
            ]);
        }

        if (View::exists("prodotti.static.categoria")) {
            return view("prodotti.static.categoria", [
                'categoria' => $categoriaModel,
                'sottocategorie' => $categoriaModel->subcategories()->where('is_active', true)->get(),
            ]);
        }

        abort(404);
    }

    public function showSottocategoria($categoria, $sottocategoria)
    {
        // Recupera il modello della categoria attiva
        $categoriaModel = Category::where('slug', $categoria)
            ->where('is_active', true)
            ->firstOrFail();

        $view = "prodotti.static.{$categoria}.{$sottocategoria}";

        if (!View::exists($view)) {
            abort(404);
        }

        return view($view, [
            'categoria' => $categoriaModel,
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
