@extends('layouts.app')
@section('title', 'Ajouter')
@section('content')
<nav class="navbar navbar-inverse bg-dark mb-4">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand text-white" href="{{ route('liste.index')}}">Étudiants de Maisonneuve</a>
    </div>
    <a href="{{ route('liste.create')}}" class="btn btn-primary">Ajouter un étudiant</a>
  </div>
</nav> 

<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-2">
            <h1 class="display-one ">
                Ajouter un étudiant
            </h1>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <form method="post">
                    @csrf
                    <div class="card-header bg-primary text-white">
                        Formulaire d'ajout
                    </div>
                    <div class="card-body">
                        <div class="control-group col-12">
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="adresse">Adresse</label>
                            <input type="text" id="adresse" name="adresse" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="ville">Ville :</label>
                            <select name="villeId" id="villeId" class="form-control">
                            @foreach($listeVilles as $ville)
                                <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="control-group col-12">
                            <label for="phone">Téléphone</label>
                            <input type="text" id="phone" name="phone" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="email">Courriel</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="naissance">Date de naissance</label>
                            <input type="text" id="naissance" name="naissance" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Ajouter" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection