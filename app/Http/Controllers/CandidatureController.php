<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cohorte;
use App\Models\Candidature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CandidatureController extends Controller

{


    //lister les candidats

    public function listeCandidats()
    {
        $candidats = User::where('role', 'candidat')->paginate(10);
        return view('dashboard.candidats.candidats', compact('candidats'));
    }

    //Afficher les détails d'un candidat
    public function detailCandidat($id)
    {
        $candidat = User::findOrFail($id);
        return view('dashboard.candidats.detail', compact('candidat'));
    }

    // Supprimer un candidat de la plateforme
    public function supprimerCandidat($id)
    {
        $candidat = User::findOrFail($id);
        $candidat->delete();

        return redirect()->back()->with('success', 'Candidat supprimée avec succès');
    }


    //Méthode pour afficher la page d'accueil
    public function dashboard()
    {
        $nombreCandidats = User::where('role', 'candidat')->count();
        $nombreFormations = Cohorte::count();
        $nombreCandidatures = Candidature::count();
        return view('dashboards.dashboard', compact('nombreCandidats', 'nombreFormations', 'nombreCandidatures'));
    }

    public function candidatures()
    {
        $candidatures = Candidature::with('user', 'cohorte')->get();
        return view('dashboard.candidatures.candidature', compact('candidatures'));
    }


    /**
     * Affiche les détails d'une candidature spécifique.
     *
     * @param  int  $id ID de la candidature à afficher
     * @return \Illuminate\View\View
     */
    public function affiche($id)
    {
        // Récupérer la candidature depuis la base de données
        $candidature = Candidature::with('user', 'cohorte')->findOrFail($id);

        // Retourner la vue 'candidatures.detail' avec les détails de la candidature
        return view('candidatures.detail', compact('candidature'));
    }
    // Méthode pour afficher le formulaire d'ajout d'une nouvelle candidature
    public function ajouter_candidature($cohorte_id)
    {
        // Retourner la vue 'candidatures.ajouter'
        return view('candidatures.ajouter', ['cohorte_id' => $cohorte_id]);

     
    }

    // Méthode pour traiter la soumission du formulaire d'ajout d'une nouvelle candidature
    
    // Méthode pour traiter la soumission du formulaire d'ajout d'une nouvelle candidature
    public function ajouter_candidature_traitement(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'biographie' => 'required|string',
            'motivation' => 'required|string',
            'cohorte_id' => 'required|integer|exists:cohortes,id',
            'cv_professionnel' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Gestion du fichier CV professionnel
        $cv_professionnel_path = $request->file('cv_professionnel')->store('cvs', 'public');

        // Création d'une nouvelle instance de Candidature
        $candidature = new Candidature();
        $candidature->biographie = $request->biographie;
        $candidature->motivation = $request->motivation;
        $candidature->user_id = Auth::id(); // Récupération de l'ID de l'utilisateur connecté
        $candidature->cohorte_id = $request->cohorte_id;
        $candidature->cv_professionnel = $cv_professionnel_path;

        // Sauvegarde de la candidature dans la base de données
        $candidature->save();

        // Redirection vers la vue détaillée de la candidature avec un message de succès
        return redirect()->route('detail_candidature', ['id' => $candidature->id])->with('status', 'La candidature a bien été ajoutée avec succès.');
    }



    // Méthode pour afficher le formulaire de modification d'une candidature
    public function edit($id)
    {
        $candidature = Candidature::with(['user',])->findOrFail($id);
        return view('candidatures.edit', compact('candidature'));
    }

    // Méthode pour traiter la soumission du formulaire de modification d'une candidature
    public function update(Request $request, $id)
    {
        // Validation des données
        $request->validate([
            'statut' => 'required|string|in:en attente,accepté,rejeté',
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
