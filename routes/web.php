<?php

use App\Http\Controllers\CandidatureController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/candidats', [CandidatureController::class, 'listeCandidats'])->name('candidats');