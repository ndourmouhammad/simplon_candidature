<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\CohorteController;


Route::get('/dashboard', [CandidatureController::class, 'dashboard'])->name('dashboard');



Route::get('/candidats', [CandidatureController::class, 'listeCandidats'])->name('candidats');
Route::get('/candidats/{id}', [CandidatureController::class, 'detailCandidat'])->name('detail-candidat')->where('id', '[0-9]+');
Route::get('/supprimer-candidat/{id}', [CandidatureController::class, 'supprimerCandidat'])->name('supprimer-candidat');


// candidat
Route::get('/formations', [CohorteController::class, 'listeFormations'])->name('formations');
Route::get('/formations/{id}', [CohorteController::class, 'detailFormation'])->name('detail-formation')->where('id', '[0-9]+');


// Dashboard personnel
Route::get('/formations-personnel', [CohorteController::class, 'formations'])->name('formations-personnel');
Route::get('/formations-personnel/{id}', [CohorteController::class, 'detailFormationPersonnel'])->name('detail-formation-personnel')->where('id', '[0-9]+');
Route::get('/form-ajout-formation', [CohorteController::class, 'ajoutFormationForm'])->name('ajoutFormationForm');
Route::post('/ajout-formation', [CohorteController::class, 'ajoutFormation'])->name('ajout-formation');

// Routes d'affichage des candidatures
Route::get('/candidature/{id}', [CandidatureController::class, 'affiche'])->name('detail_candidature');
// Route d'affichage du formulaire d'ajout de candidature
Route::get('/ajouter/candidature', [CandidatureController::class, 'ajouter_candidature'])->name('ajouter_candidature');
//Route pour traiter l'ajout d'une candidature
Route::post('/ajouter/traitement', [CandidatureController::class, 'ajouter_candidature_traitement'])->name('ajouter_candidature_traitement');