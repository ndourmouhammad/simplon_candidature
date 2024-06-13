<?php

use App\Models\Referentiel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CohorteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReferentielController;

Route::get('/', [ReferentielController::class, 'accueil'])->name('accueil');




Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');



