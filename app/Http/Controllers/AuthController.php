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
            return redirect()->intended('dashboard');
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
            'nom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->intended('dashboard');
    }

    // // Gère la déconnexion
    // public function deconnexion()
    // {
    //     Auth::logout();
    //     return redirect('/connexion');
    // }
}
