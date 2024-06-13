<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatureController extends Controller
{
    //Méthode pour afficher la page d'accueil
    public function dashboard()
    {
        return view('dashboards.dashboard');
    }
}
