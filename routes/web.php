<?php

use App\Models\Referentiel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CohorteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\ReferentielController;



// Routes universelles
Route::get('/', [ReferentielController::class, 'accueil'])->name('accueil');
Route::get('/formations', [CohorteController::class, 'listeFormations'])->name('formations');
Route::get('/formations/{id}', [CohorteController::class, 'detailFormation'])->name('detail-formation')->where('id', '[0-9]+');

// Authentification
Route::get('/inscription', [AuthController::class, 'Inscription'])->name('auth.inscription');
Route::post('/traitement-inscription', [AuthController::class, 'traitement_inscription'])->name('auth.traitement.inscription');
Route::get('/connexion', [AuthController::class, 'Connexion'])->name('login');
Route::post('/traitement-connexion', [AuthController::class, 'traitement_connexion'])->name('auth.traitement_connexion');
Route::get('/deconnexion', [AuthController::class, 'deconnexion'])->name('auth.deconnexion');


Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');


// Personnels
Route::middleware('App\Http\Middleware\CheckRole:personnel')->group(function () {
Route::get('/dashboard', [CandidatureController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/candidats', [CandidatureController::class, 'listeCandidats'])->name('candidats')->middleware('auth');
Route::get('/candidats/{id}', [CandidatureController::class, 'detailCandidat'])->name('detail-candidat')->where('id', '[0-9]+')->middleware('auth');
Route::get('/supprimer-candidat/{id}', [CandidatureController::class, 'supprimerCandidat'])->name('supprimer-candidat')->middleware('auth');
Route::get('/formations-personnel', [CohorteController::class, 'formations'])->name('formations-personnel')->middleware('auth');
Route::get('/formations-personnel/{id}', [CohorteController::class, 'detailFormationPersonnel'])->name('detail-formation-personnel')->where('id', '[0-9]+')->middleware('auth');
Route::get('/form-ajout-formation', [CohorteController::class, 'ajoutFormationForm'])->name('ajoutFormationForm')->middleware('auth');
Route::post('/ajout-formation', [CohorteController::class, 'ajoutFormation'])->name('ajout-formation')->middleware('auth');
Route::get('/form-modifier-formation/{id}', [CohorteController::class, 'modifierFormationForm'])->name('modifierFormationForm')->middleware('auth');
Route::post('/modifier-formation/{id}', [CohorteController::class, 'modifierFormation'])->name('modifier-formation')->middleware('auth');
Route::get('/supprimer-formation/{id}', [CohorteController::class, 'supprimerFormation'])->name('supprimer-formation')->middleware('auth');
});








