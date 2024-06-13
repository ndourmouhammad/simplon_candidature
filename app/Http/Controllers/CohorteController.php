<?php

namespace App\Http\Controllers;

use App\Models\Cohorte;
use App\Models\Competence;
use App\Models\Referentiel;
use Illuminate\Http\Request;

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

    // Détails formation pour candidats
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
}
