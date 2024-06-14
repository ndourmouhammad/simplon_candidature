<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\AuthController;

Route::get('/auth/connexion', [AuthController::class, 'Connexion'])->name('auth.connexion');
Route::post('/auth/connexion', [AuthController::class, 'traitement_connexion'])->name('auth.traitement_connexion');

Route::get('/auth/inscription', [AuthController::class, 'Inscription'])->name('inscription');
Route::post('/auth/inscription', [AuthController::class, 'traitement_inscription'])->name('auth.traitement_inscription');
Route::post('/deconnexion', [AuthController::class, 'deconnexion'])->name('deconnexion');
Route::get('/auth/index', function () {
    return view('auth.index');
})->name('auth.index')->middleware('auth');
