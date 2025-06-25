<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

// Route::get('/', function () {
//     return view('welcome');
// });

// home
Route::get('/', [PublicController::class, 'home'])->name('home');