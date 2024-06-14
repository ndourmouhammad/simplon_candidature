<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CandidatureController extends Controller

{
     /**
     * Affiche les détails d'une candidature spécifique.
     *
     * @param  int  $id ID de la candidature à afficher
     * @return \Illuminate\View\View
     */
    public function affiche($id)
    {
        // Récupérer la candidature depuis la base de données
        $candidature = Candidature::findOrFail($id);

        // Retourner la vue 'candidatures.detail' avec les détails de la candidature
        return view('candidatures.detail', compact('candidature'));
    }
    // Méthode pour afficher le formulaire d'ajout d'une nouvelle candidature
    public function ajouter_candidature()
    {
        // Retourner la vue 'candidatures.ajouter'
        return view('candidatures.ajouter');
    }

    // Méthode pour traiter la soumission du formulaire d'ajout d'une nouvelle candidature
    public function ajouter_candidature_traitement(Request $request)
{
    // Validation des données du formulaire
    $request->validate([
        'biographie' => 'required|string',
        'motivation' => 'required|string',
        'user_id' => 'required|integer|exists:users,id',
        'cohorte_id' => 'required|integer|exists:cohortes,id',
        'cv_professionnel' => 'required|file|mimes:pdf,doc,docx|max:2048',
    ]);

    // Gestion du fichier CV professionnel
    $cv_professionnel_path = $request->file('cv_professionnel')->store('cvs', 'public'); // Stocke le fichier dans le dossier 'storage/app/public/cvs'
    
    // Création d'une nouvelle instance de Candidature
    $candidature = new Candidature();

    // Attribution des valeurs du formulaire aux attributs de Candidature
    $candidature->biographie = $request->biographie;
    $candidature->motivation = $request->motivation;
    $candidature->user_id = $request->user_id;
    $candidature->cohorte_id = $request->cohorte_id;
    $candidature->cv_professionnel = $cv_professionnel_path; // Assignation du chemin du fichier CV

    // Sauvegarde de la candidature dans la base de données
    $candidature->save();

    // Redirection vers la vue détaillée de la candidature avec un message de succès
    return redirect()->route('detail_candidature', ['id' => $candidature->id])->with('status', 'La candidature a bien été ajoutée avec succès.');
}
// Méthode pour afficher le formulaire de modification d'une candidature
public function edit($id)
{
    $candidature = Candidature::with('user')->findOrFail($id);
    return view('candidatures.edit', compact('candidature'));
}

// Méthode pour traiter la soumission du formulaire de modification d'une candidature
public function update(Request $request, $id)
{
    // Validation des données
    $request->validate([
        'statut' => 'required|string|in:en attente,approuvée,rejeté',
    ]);

    // Récupération de la candidature
    $candidature = Candidature::findOrFail($id);
    $candidature->statut = $request->statut;

    // Sauvegarde de la candidature mise à jour
    $candidature->save();

    // Redirection avec un message de succès
    return redirect()->route('detail_candidature', ['id' => $candidature->id])->with('status', 'Le statut de la candidature a été mis à jour avec succès.');
}
}

