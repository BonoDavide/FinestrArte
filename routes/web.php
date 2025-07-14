<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminContactController;
use App\Http\Middleware\AdminMiddleware;

// home
Route::get('/', [PublicController::class, 'home'])->name('home');

// pagine statiche pubbliche
Route::get('/chi-siamo', [PublicController::class, 'about'])->name('about');
Route::get('/servizi', [PublicController::class, 'services'])->name('services');
Route::get('/progetti', [PublicController::class, 'projects'])->name('projects');
Route::get('/contatti', [PublicController::class, 'contact'])->name('contact');

// area admin
Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/contatti', [AdminContactController::class, 'index'])->name('admin.contacts.index');
});

// sezione prodotti con struttura dinamica + contenuti statici
Route::get('/prodotti', [ProductController::class, 'index'])->name('prodotti.index');
Route::get('/prodotti/{categoria}', [ProductController::class, 'showCategoria'])->name('prodotti.categoria');
Route::get('/prodotti/{categoria}/{sottocategoria}', [ProductController::class, 'showSottocategoria'])->name('prodotti.sottocategoria');
