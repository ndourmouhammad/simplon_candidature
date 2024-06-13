<?php

namespace App\Http\Controllers;

use App\Models\Referentiel;
use Illuminate\Http\Request;

class ReferentielController extends Controller
{
    public function accueil(){
        $referentiels = Referentiel::paginate(6);
        return view('formations.accueil', compact('referentiels'));
    }    

    public function formations(){
        $formations = Referentiel::all();
        return view('formations.accueil', compact('formations'));
    }

    public function creation(){
        return view('formations.creation');
    }

    public function sauvegarde(Request $request)
    {
        $request->validate([
            'libelle' => 'required|max:255',
            'description' => 'required',
            'type' => 'required'
        ]);

        Referentiel::create($request->all());
        return redirect()->back()->with('success', 'Referentiel ajouté avec succès');
    }

    public function modifier($id)
    {
        $referentiel = Referentiel::findOrFail($id);
        return view('referentiels.formations', compact('referentiel'));
    }

    public function enregistrer(Request $request, $id)
    {
        $request->validate([
            'libelle' => 'required|max:255',
            'description' => 'required',
            'type' => 'required'
        ]);

        $referentiel = Referentiel::findOrFail($id);
        $referentiel->update($request->all());
        return redirect()->back()->with('success', 'Referentiel modifié avec succès');
    }

    public function supprimer($id)
    {
        $referentiel = Referentiel::findOrFail($id);
        $referentiel->delete();
        return redirect()->route('formations.accueil')->with('success', 'Referentiel supprimé avec succès');
    }
}