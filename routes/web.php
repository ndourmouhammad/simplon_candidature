<?php



use App\Models\Referentiel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CohorteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\ReferentielController;




Route::get('/', [ReferentielController::class, 'accueil'])->name('accueil');


Route::controller(CohorteController::class)->group(function () {
    Route::get('/cohortes', 'listeFormations')->name('formations');
    Route::get('/cohortes/{id}', 'detailFormation')->name('detail-formation')->where('id', '[0-9]+');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/inscription', 'Inscription')->name('auth.inscription');
    Route::post('/traitement-inscription', 'traitement_inscription')->name('auth.traitement.inscription');
    Route::get('/connexion', 'Connexion')->name('login');
    Route::post('/traitement-connexion', 'traitement_connexion')->name('auth.traitement_connexion');
    Route::get('/deconnexion', 'deconnexion')->name('auth.deconnexion');
});


Route::controller(CandidatureController::class)->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/candidature/{id}', 'affiche')->name('detail_candidature');
        Route::get('/ajouter/candidature/{cohorte_id}', 'ajouter_candidature')->name('ajouter_candidature');
        Route::post('/ajouter/traitement', 'ajouter_candidature_traitement')->name('ajouter_candidature_traitement');
        Route::get('/candidatures-historiques', 'historiques')->name('candidatures-historique');
    });
});


Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');

// Personnels
Route::middleware(['auth', 'App\Http\Middleware\CheckRole:personnel'])->group(function () {

    Route::controller(CandidatureController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/candidats', 'listeCandidats')->name('candidats');
        Route::get('/candidats/{id}', 'detailCandidat')->name('detail-candidat')->where('id', '[0-9]+');
        Route::get('/supprimer-candidat/{id}', 'supprimerCandidat')->name('supprimer-candidat');
        Route::get('/candidatures-personnel', 'candidatures')->name('candidatures-personnel');
        Route::get('/candidature/{id}/edit', 'edit')->name('candidature.edit');
        Route::post('/candidature/{id}/update', 'update')->name('candidature.update');
        Route::get('/supprimer-candidature/{id}', 'supprimerCandidature')->name('supprimer-candidature');
    });

    Route::controller(CohorteController::class)->group(function () {
        Route::get('/formations-personnel', 'formations')->name('formations-personnel');
        Route::get('/formations-personnel/{id}', 'detailFormationPersonnel')->name('detail-formation-personnel')->where('id', '[0-9]+');
        Route::get('/form-ajout-formation', 'ajoutFormationForm')->name('ajoutFormationForm');
        Route::post('/ajout-formation', 'ajoutFormation')->name('ajout-formation');
        Route::get('/form-modifier-formation/{id}', 'modifierFormationForm')->name('modifierFormationForm');
        Route::post('/modifier-formation/{id}', 'modifierFormation')->name('modifier-formation');
        Route::get('/supprimer-formation/{id}', 'supprimerFormation')->name('supprimer-formation');
        Route::get('/formations/{id}/candidatures', 'candidatures')->name('candidature.formation');
    });
});
