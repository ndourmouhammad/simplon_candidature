<?php

namespace App\Http\Controllers;

use App\Models\Cohorte;
use App\Models\Competence;
use App\Models\Referentiel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CohorteController extends Controller
{

    //lister les formations pour candidats

    

    public function listeFormations()
    {
        $cohortes = Cohorte::with(['referentiel.competences'])->get(); 
    $referentiels = Referentiel::with('competences')->get();
    $competences = Competence::all();


        return view('formations.formation', compact('cohortes', 'referentiels', 'competences'));
    }
    // Méthode pour effectuer la recherche de cohorte
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Vérifier si l'utilisateur est connecté et son rôle
        if (Auth::check()) {
            $role = Auth::user()->role;

            // Si l'utilisateur a pour rôle "candidat" ou n'a pas de rôle défini, rediriger vers "formations.formation"
            if ($role === 'candidat' || !$role) {
                $cohortes = Cohorte::whereHas('referentiel', function ($q) use ($query) {
                    $q->where('libelle', 'like', "%$query%");
                })->orWhere('description', 'like', "%$query%")
                    ->get();

                return view('formations.formation', compact('cohortes'));
            }

            // Si l'utilisateur a pour rôle "personnel", rediriger vers "dashboard.formations.formations"
            if ($role === 'personnel') {
                $cohortes = Cohorte::whereHas('referentiel', function ($q) use ($query) {
                    $q->where('libelle', 'like', "%$query%");
                })->orWhere('description', 'like', "%$query%")
                    ->get();

                return view('dashboard.formations.formations', compact('cohortes'));
            }
        }

        // Si l'utilisateur n'est pas connecté ou n'a pas de rôle défini, effectuer la recherche sans condition de rôle spécifique
        $cohortes = Cohorte::whereHas('referentiel', function ($q) use ($query) {
            $q->where('libelle', 'like', "%$query%");
        })->orWhere('description', 'like', "%$query%")
            ->get();

        return view('formations.formation', compact('cohortes'));
    }
    


    public function detailFormation($id)
    {
        $cohorte = Cohorte::with(['referentiel.competences'])->findOrFail($id);
        $referentiels = Referentiel::with('competences')->get();
        $competences = Competence::all();
        return view('formations.detail', compact('cohorte', 'referentiels', 'competences'));
    }


    //lister les formations pour personnels
    public function formations()
    {
        $cohortes = Cohorte::with(['referentiel.competences'])->get();
        $referentiels = Referentiel::with('competences')->get();
        $competences = Competence::all();

        return view('dashboard.formations.formations', compact('cohortes', 'referentiels', 'competences'));
    }

    // Détails formation pour personnels

    public function detailFormationPersonnel($id)
    {
        $cohorte = Cohorte::with(['referentiel.competences'])->findOrFail($id);
        $referentiels = Referentiel::with('competences')->get();
        $competences = Competence::all();
        return view('dashboard.formations.detail', compact('cohorte', 'referentiels', 'competences'));
    }

    // Afficher le formulaire d'ajout pour une formation


    public function ajoutFormationForm()
    {
        $cohortes = Cohorte::all();
        $referentiels = Referentiel::all();
        $competences = Competence::all();
        return view('dashboard.formations.ajout', compact('cohortes', 'referentiels', 'competences'));
    }



    // traitement du formulaire de formation
    public function ajoutFormation(Request $request)
    {
        $request->validate([
            'libelle' => 'required|string|max:255',
            'promo' => 'required|integer',
            'description' => 'required|string',
            'competences' => 'required|array',
            'competences.*' => 'exists:competences,id',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'date_decision' => 'required|date',
            'date_limite' => 'required|date',
            'duree' => 'required|integer',
            'nombre_participants' => 'required|integer',
            'lieu_formation' => 'required|string|max:255',
            'referentiel_id' => 'required|exists:referentiels,id',
        ]);

        $cohorte = new Cohorte();
        $cohorte->libelle = $request->libelle;
        $cohorte->promo = $request->promo;
        $cohorte->description = $request->description;
        $cohorte->date_debut = $request->date_debut;
        $cohorte->date_fin = $request->date_fin;
        $cohorte->date_limite = $request->date_limite;
        $cohorte->date_decision = $request->date_decision;
        $cohorte->duree = $request->duree;
        $cohorte->nombre_participants = $request->nombre_participants;
        $cohorte->lieu_formation = $request->lieu_formation;
        $cohorte->referentiel_id = $request->referentiel_id;
        $cohorte->save();

        $cohorte->competences()->attach($request->competences);

        return redirect()->route('formations-personnel')->with('success', 'Cohorte créée avec succès.');
    }

    public function modifierFormationForm($id)
    {
        $cohorte = Cohorte::findOrFail($id);
        $referentiels = Referentiel::all();
        $competences = Competence::all();
        $selectedCompetences = $cohorte->competences->pluck('id')->toArray();
        return view('dashboard.formations.edit', compact('cohorte', 'referentiels', 'competences', 'selectedCompetences'));
    }

    public function modifierFormation(Request $request, $id)
    {
        $request->validate([
            'libelle' => 'required|string|max:255',
            'promo' => 'required|integer',
            'description' => 'required|string',
            'competences' => 'required|array',
            'competences.*' => 'exists:competences,id',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'date_decision' => 'required|date',
            'date_limite' => 'required|date',
            'duree' => 'required|integer',
            'nombre_participants' => 'required|integer',
            'lieu_formation' => 'required|string|max:255',
            'referentiel_id' => 'required|exists:referentiels,id',
        ]);

        $cohorte = Cohorte::findOrFail($id);
        $cohorte->libelle = $request->libelle;
        $cohorte->promo = $request->promo;
        $cohorte->description = $request->description;
        $cohorte->date_debut = $request->date_debut;
        $cohorte->date_fin = $request->date_fin;
        $cohorte->date_limite = $request->date_limite;
        $cohorte->date_decision = $request->date_decision;
        $cohorte->duree = $request->duree;
        $cohorte->nombre_participants = $request->nombre_participants;
        $cohorte->lieu_formation = $request->lieu_formation;
        $cohorte->referentiel_id = $request->referentiel_id;
        $cohorte->save();

        $cohorte->competences()->sync($request->competences);

        return redirect()->route('formations-personnel')->with('success', 'Cohorte mise à jour avec succès.');
    }

    // Supprimer une formation
    public function supprimerFormation($id)
{
    $cohorte = Cohorte::findOrFail($id);
    $cohorte->competences()->detach();
    $cohorte->delete();

    return redirect()->route('formations-personnel')->with('success', 'Formation supprimée avec succès.');
}

public function candidatures($id)
{
    // Récupérer la cohorte par son ID
    $cohorte = Cohorte::findOrFail($id);

    // Récupérer les candidatures liées à cette cohorte
    $candidatures = $cohorte->candidatures()->with('user')->get();

    // Retourner la vue avec les données nécessaires
    return view('dashboard.formations.candidatures', compact('cohorte', 'candidatures'));
}

}

    


