<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CandidatureController extends Controller
{
    //lister les candidats

    public function listeCandidats()
    {
        $candidats = User::paginate(10);
        return view('dashboard/candidats/candidats', compact('candidats'));
        
    }
}
