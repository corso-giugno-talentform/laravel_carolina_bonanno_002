<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/contattaci', [PageController::class, 'contacts'])->name('contacts');
Route::get('/{article}', [PageController::class, 'article'])->name('article');
