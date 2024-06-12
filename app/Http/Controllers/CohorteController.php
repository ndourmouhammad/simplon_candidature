<?php

namespace App\Http\Controllers;

use App\Models\Cohorte;
use Illuminate\Http\Request;

class CohorteController extends Controller
{
 

    public function cohortes(){
        $cohortes = cohorte::all();
        return view('cohortes.accueil', compact('cohortes'));
    }

    public function creation(){
        return view('cohortes.creation');
    }

    public function sauvegarde(Request $request)
    {
        $request->validate([
            'libelle' => 'required|max:255',
            'description' => 'required',
            'date_debut' => 'required',            
            'date_fin' => 'required|max:255',
            'lieu_formation' => 'required',
            'nombre_participants' => 'required',
            'referentiel_id' => 'required'
        ]);

        Cohorte::create($request->all());
        return redirect()->back()->with('success', 'cohorte ajouté avec succès');
    }

    public function modifier($id)
    {
        $cohorte = Cohorte::findOrFail($id);
        return view('cohortes.cohortes', compact('cohorte'));
    }

    public function enregistrer(Request $request, $id)
    {
        $request->validate([
            'libelle' => 'required|max:255',
            'description' => 'required',
            'date_debut' => 'required',            
            'date_fin' => 'required|max:255',
            'lieu_formation' => 'required',
            'nombre_participants' => 'required',
            'referentiel_id' => 'required'
        ]);

        $cohorte = Cohorte::findOrFail($id);
        $cohorte->update($request->all());
        return redirect()->back()->with('success', 'cohorte modifié avec succès');
    }

    public function supprimer($id)
    {
        $cohorte = Cohorte::findOrFail($id);
        $cohorte->delete();
        return redirect()->route('cohortes.accueil')->with('success', 'cohorte supprimé avec succès');
    }
}
