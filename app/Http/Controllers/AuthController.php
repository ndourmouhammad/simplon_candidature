<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Affiche le formulaire de connexion
    public function Connexion()
    {
        return view('auth.connexion');
    }

    // Gère la connexion
    public function traitement_connexion(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('auth.index');
        }

        return redirect()->back()->withErrors([
            'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
        ]);
    }

    // Affiche le formulaire d'inscription
    public function Inscription()
    {
        return view('auth.inscription');
    }

    // Gère l'inscription
    public function traitement_inscription(Request $request)
    {
        $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'telephone' => 'nullable|string|max:20|unique:users',
            'date_naissance' => 'required|date',
            'adresse' => 'nullable|string|max:255',
            'cv_professionnel' => 'required|string|max:255',
        ]);

        User::create([
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telephone' => $request->telephone,
            'date_naissance' => $request->date_naissance,
            'adresse' => $request->adresse,
            'role' => 'candidat',
            'cv_professionnel' => $request->cv_professionnel,
        ]);

        return redirect(route('auth.connexion'))->with('success', 'Inscription réussie');
    }

    // Gère la déconnexion
    public function deconnexion()
    {
        Auth::logout();
        return redirect()->route('auth.connexion');
    }

    // Affiche la page d'accueil après connexion
    public function Index()
    {
        return view('auth.index');
    }
}
