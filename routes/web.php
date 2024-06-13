<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view ('welcome');
});
Route::get('/connexion', [AuthController::class, 'Connexion'])->name('auth.connexion');
Route::post('/traitement_connexion', [AuthController::class, 'auth.traitement_connexion'])->name('auth.traitement_connexion');
Route::get('/auth/inscription', [AuthController::class, 'Inscription'])->name('auth.inscription');
Route::post('/auth/traitement_inscription', [AuthController::class, 'traitement_inscription'])->name('auth.traitement_inscription');
