<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    public function index()
    {
        return view('prodotti.index');
    }

    public function showCategoria($categoria)
    {
        // Controllo se esiste la index della categoria
        $view = "prodotti.static.{$categoria}.index";

        if (View::exists($view)) {
            return view($view, ['categoria' => ucfirst($categoria)]);
        }

        // Fallback generico se vuoi
        if (View::exists("prodotti.static.categoria")) {
            return view("prodotti.static.categoria", ['categoria' => ucfirst($categoria)]);
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
