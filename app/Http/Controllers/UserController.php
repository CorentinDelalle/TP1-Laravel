<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Etudiant;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required|email|exists:etudiants,email',
            'password' => 'required|min:6|max:20'
        ], [
            'email.exists' => 'L\'adresse courriel n\'existe pas dans la liste d\'étudiants'

        ]);

        $user = new User;
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->etudiant_id = Etudiant::getEtudiantId($request);
        $user->save();

        return redirect()->intended('/');
    }
}
