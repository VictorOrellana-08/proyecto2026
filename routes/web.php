<?php

use App\Http\Controllers\productoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/producto', [productoController::class, 'index'])->name('producto.index');
    Route::get('/producto/create', [productoController::class, 'create'])->name('producto.create');
    Route::post('/producto', [productoController::class, 'store'])->name('producto.store');
});

require __DIR__.'/auth.php';
