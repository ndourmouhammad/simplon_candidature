<?php

namespace App\Http\Controllers;

use App\Notifications\ContactFormSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        $details = [
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        Notification::route('mail', 'your_email@example.com')
                    ->notify(new ContactFormSubmitted($details));

        return back()->with('success', 'Votre message a été envoyé avec succès.');
    }
}
