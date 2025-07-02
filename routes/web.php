<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminContactController;

// Route::get('/', function () {
//     return view('welcome');
// });

// home
Route::get('/', [PublicController::class, 'home'])->name('home');
// chi siamo
Route::get('/chi-siamo', [PublicController::class, 'about'])->name('about');
// servizi
Route::get('/servizi', [PublicController::class, 'services'])->name('services');
// progetti
Route::get('/progetti', [PublicController::class, 'projects'])->name('projects');
// contatti
Route::get('/contatti', [PublicController::class, 'contact'])->name('contact');

// admin
Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->group(function () {
    // dashboard admin
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // contatti ricevuti
    Route::get('/contatti', [AdminContactController::class, 'index'])->name('admin.contacts.index');
});

// categorie
Route::get('/prodotti', [ProductController::class, 'index'])->name('prodotti.index');
// sottocategorie o prodotti diretti (se la categoria non ha sottocategorie)
Route::get('/prodotti/{categoria:slug}', [ProductController::class, 'showCategoria'])->name('prodotti.categoria');
// prodotti 
Route::get('/prodotti/{categoria:slug}/{sottocategoria:slug}', [ProductController::class, 'showSottocategoria'])->name('prodotti.sottocategoria');