<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
// Lezione form
Route::get('/contattaci', [PageController::class, 'contacts'])->name('contacts');
// Io devo rendere i dati e mandarli al server attraverso una request: 
Route::post('/invio-form', [PageController::class, 'send'])->name('send');
Route::get('/{article}', [PageController::class, 'article'])->name('article');
