<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
  

    public function show(Request $request)
    {
        $user = $request->Agent();

        // Vous pouvez personnaliser les données du profil à retourner selon vos besoins
        $profileData = [
            'nom' => $user->nom,
            'email' => $user->email,
            // Ajoutez d'autres champs de profil ici
        ];

        return response()->json($profileData);
    }
}
