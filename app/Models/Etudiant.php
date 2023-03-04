<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;


    protected $fillable = [
        'nom',
        'adresse',
        'phone',
        'email',
        'naissance',
        'villeId'

    ];

    public function etudiantHasVille()
    {
        return $this->hasOne('App\Models\Ville', 'id', 'villeId');
    }

    public function etudiantHasUser()
    {
        return $this->hasOne(User::class);
    }

    public static function getEtudiantId($request)
    {
        $email = $request->input('email');
        $etudiant = Etudiant::where('email', $email)->first();
        if ($etudiant) {
            $etudiantId = $etudiant->id;
            return $etudiantId;
        }
    }
}
