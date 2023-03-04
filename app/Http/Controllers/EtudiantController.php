<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listeEtudiants = Etudiant::all();
        return view('liste.index', ['listeEtudiants'=>$listeEtudiants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listeVilles = Ville::all();
        return view('liste.create', ['listeVilles'=>$listeVilles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            //insert -> lastid  => select where lastId
            $nouvelEtudiant = Etudiant::create([
                'nom' => $request->nom,
                'adresse'  => $request->adresse,
                'villeId' => $request->villeId,
                'phone' => $request->phone,
                'email' => $request->email,
                'naissance' => $request->naissance,
            ]);

            return redirect(route('liste.show', $nouvelEtudiant->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        $listeVilles = Ville::all();
        return view('liste.show', ['etudiant' => $etudiant,
                                   'listeVilles'=>$listeVilles]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        $listeVilles = Ville::all();
        return view('liste.edit', ['etudiant' => $etudiant, 'listeVilles'=>$listeVilles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $etudiant->update([
            'nom' => $request->nom,
            'adresse'  => $request->adresse,
            'phone' => $request->phone,
            'email' => $request->email,
            'naissance' => $request->naissance,
            'ville' => $request->villeId,
        ]);

        return redirect(route('liste.show', $etudiant->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();

        return redirect(route('liste.index'));
    }


}
