<?php

use App\Http\Controllers\CandidatureController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Routes d'affichage des candidatures
Route::get('/candidature/{id}', [CandidatureController::class, 'affiche'])->name('detail_candidature');
// Route d'affichage du formulaire d'ajout de candidature
Route::get('/ajouter/candidature', [CandidatureController::class, 'ajouter_candidature'])->name('ajouter_candidature');
//Route pour traiter l'ajout d'une candidature
Route::post('/ajouter/traitement', [CandidatureController::class, 'ajouter_candidature_traitement'])->name('ajouter_candidature_traitement');
// web.php (ou routes/web.php)
Route::get('/candidature/{id}/edit', [CandidatureController::class, 'edit'])->name('candidature.edit');
Route::post('/candidature/{id}/update', [CandidatureController::class, 'update'])->name('candidature.update');
