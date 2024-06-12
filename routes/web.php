<?php

use App\Http\Controllers\CandidatureController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/candidats', [CandidatureController::class, 'listeCandidats'])->name('candidats');
Route::get('/candidats/{id}', [CandidatureController::class, 'detailCandidat'])->name('detail-candidat')->where('id', '[0-9]+');
Route::get('/supprimer-candidat/{id}', [CandidatureController::class, 'supprimerCandidat'])->name('supprimer-candidat');