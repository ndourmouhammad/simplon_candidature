<?php

namespace App\Http\Controllers;

use App\Models\Cohorte;
use App\Models\Competence;
use App\Models\Referentiel;
use Illuminate\Http\Request;

class CohorteController extends Controller
{
    //lister les formations
    public function listeFormations()
    {
        $cohortes = Cohorte::with(['referentiel.competences'])->get();
        $referentiels = Referentiel::with('competences')->get();
        $competences = Competence::all();
        
        return view('formations.formation', compact('cohortes', 'referentiels', 'competences'));
    }

    public function detailFormation($id)
    {
        $cohorte = Cohorte::with(['referentiel.competences'])->findOrFail($id);
        $referentiels = Referentiel::with('competences')->get();
        $competences = Competence::all();
        return view('formations.detail', compact('cohorte', 'referentiels', 'competences'));
    }
    
}
