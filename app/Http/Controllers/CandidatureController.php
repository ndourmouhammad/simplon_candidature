<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidature;
use Illuminate\Http\Request;

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
        return view('dashboards.dashboard');
    }


     // Méthode pour afficher la detail des candidatures
     public function affiche($id)
     {
         // Récupérer tous les candidatures de la base de données
         $candidature = Candidature::with('user')->findOrFail($id);

 
         // Retourner la vue 'candidatures.detail' avec les candidatures récupérés
         return view('candidatures.detail',compact('candidature'));
     }

     // Méthode pour afficher le formulaire d'ajout d'un nouvel candidature
    public function ajouter_candidature()
    {
        // Retourner la vue 'candidatures.ajouter'
        return view('candidatures.ajouter');
    }

    // CandidatureController.php
    // Méthode pour traiter la soumission du formulaire d'ajout d'une nouvelle candidature
    public function ajouter_candidature_traitement(Request $request)
    {
        // Validation des données
        $request->validate([
            'biographie' => 'required|string',
            'motivation' => 'required|string',
            'user_id' => 'required|integer', // Assurez-vous de valider user_id si nécessaire
            'cohorte_id' => 'required|integer', // Assurez-vous de valider cohorte_id si nécessaire
        ]);

        // Créer une nouvelle instance de Candidature
        $candidature = new Candidature();

        // Assigner les valeurs du formulaire aux attributs de Candidature
        $candidature->biographie = $request->biographie;
        $candidature->motivation = $request->motivation;
        $candidature->user_id = $request->user_id; // Assigner user_id depuis le formulaire
        $candidature->cohorte_id = $request->cohorte_id; // Assigner cohorte_id depuis le formulaire

        // Sauvegarder la candidature dans la base de données
        $candidature->save();

        // Rediriger vers la detail des candidatures avec un message de succès
        return redirect()->route('detail_candidature')->with('status', 'La candidature a bien été ajoutée avec succès.');
    

}

}
