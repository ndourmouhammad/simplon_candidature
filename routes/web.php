<?php

use App\Models\Referentiel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CohorteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReferentielController;

Route::get('/', [ReferentielController::class, 'accueil'])->name('accueil');
Route::get('/referentiels', [ReferentielController::class, 'formations'])->name('formations');
Route::get('/referentiels/detail/{id}', [ReferentielController::class, 'detail'])->name('detail')->where('id', '[0-9]+');
Route::get('/referentiels/creation', [ReferentielController::class, 'creation'])->name('creation');
Route::post('/referentiels/sauvegarde', [ReferentielController::class, 'sauvegarde'])->name('sauvegarde');
Route::get('referentiels/modifier/{id}', [ReferentielController::class, 'modifier'])->name('modifier')->where('id', '[0-9]+');
Route::post('referentiels/{id}/enregistrer', [ReferentielController::class, 'enregistrer'])->name('enregistrer');
Route::get('referentiels/supprimer/{id}', [ReferentielController::class, 'supprimer'])->name('supprimer')->where('id', '[0-9]+');

Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');



Route::get('/cohortes', [CohorteController::class, 'cohortes'])->name('cohortes');
Route::get('/cohortes/detail/{id}', [CohorteController::class, 'detail'])->name('detail')->where('id', '[0-9]+');
Route::get('/cohortes/creation', [CohorteController::class, 'creation'])->name('creation');
Route::post('/cohortes/sauvegarde', [CohorteController::class, 'sauvegarde'])->name('sauvegarde');
Route::get('cohortes/modifier/{id}', [CohorteController::class, 'modifier'])->name('modifier')->where('id', '[0-9]+');
Route::post('cohortes/{id}/enregistrer', [CohorteController::class, 'enregistrer'])->name('enregistrer');
Route::get('cohortes/supprimer/{id}', [CohorteController::class, 'supprimer'])->name('supprimer')->where('id', '[0-9]+');