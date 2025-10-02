<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function korus50()
    {
        $p = config('site.promotions.korus_50');
        $active = ($p['enabled'] ?? false) && now()->lte(\Illuminate\Support\Carbon::parse($p['ends_at']));
        abort_unless($active, 404);

        return view('promozioni.korus-50');
    }
}
