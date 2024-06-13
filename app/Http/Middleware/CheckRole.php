<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $role)
    {
        $user = Auth::user();

        if ($user && $user->role === $role) {
            return $next($request);
        }

        // Redirige l'utilisateur vers une page d'erreur ou autre en cas de non autorisation
        return redirect()->route('accueil')->with('error', 'Vous n\'avez pas les permissions nécessaires pour accéder à cette ressource.');
    }
}
