<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


// Authentification
Route::get('/inscription', [AuthController::class, 'Inscription'])->name('auth.inscription');
Route::post('/traitement-inscription', [AuthController::class, 'traitement_inscription'])->name('auth.traitement.inscription');
Route::get('/connexion', [AuthController::class, 'Connexion'])->name('auth.connexion');
Route::post('/traitement-connexion', [AuthController::class, 'traitement_connexion'])->name('auth.traitement_connexion');
Route::get('/deconnexion', [AuthController::class, 'deconnexion'])->name('auth.deconnexion');

