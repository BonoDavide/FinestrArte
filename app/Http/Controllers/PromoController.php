<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function korus50()
    {
        return view('promozioni.korus-50');
    }
}
