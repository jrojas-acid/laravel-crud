<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;


Route::get('/', [PersonasController::class, 'index'])->name('personas.index');
Route::get('/create', [PersonasController::class, 'create'])->name('personas.create');
Route::post('/store', [PersonasController::class, 'store'])->name('personas.store');
Route::get('/edit/{id}', [PersonasController::class, 'edit'])->name('personas.edit');
Route::get('/show/{id}', [PersonasController::class, 'show'])->name('personas.show');
Route::put('/update/{id}', [PersonasController::class, 'update'])->name('personas.update');
Route::delete('/destroy/{id}', [PersonasController::class, 'destroy'])->name('personas.destroy');