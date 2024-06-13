<?php

namespace App\Http\Controllers;

use App\Models\User;
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

}
