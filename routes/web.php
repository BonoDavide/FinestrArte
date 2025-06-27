<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Middleware\AdminMiddleware;

// Route::get('/', function () {
//     return view('welcome');
// });

// home
Route::get('/', [PublicController::class, 'home'])->name('home');
// chi siamo
Route::get('/chi-siamo', [PublicController::class, 'about'])->name('about');
// prodotti
Route::get('/prodotti', [PublicController::class, 'products'])->name('products');
// servizi
Route::get('/servizi', [PublicController::class, 'services'])->name('services');
// progetti
Route::get('/progetti', [PublicController::class, 'projects'])->name('projects');
// contatti
Route::get('/contatti', [PublicController::class, 'contact'])->name('contact');

// admin
Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});
