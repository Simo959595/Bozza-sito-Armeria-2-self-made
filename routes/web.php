<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
// ROTTA PER HOMEPAGE
Route::get('/', [PublicController::class, 'home'])->name('homepage');
// ROTTA PER CARDS
Route::get('/card', [PublicController::class, 'card'])->name('card');
Route::get('/dettagli', [PublicController::class, 'dettagli'])->name('dettagli');
// ROTTE PER CONTATTI
Route::get('/contatti', [PublicController::class, 'contatti'])->name('contatti');
Route::post('/contatti/invio', [PublicController::class, 'contactSubmit'])->name('invio.contatti');