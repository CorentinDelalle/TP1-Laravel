@extends('layouts.app')
@section('title', 'Liste Étudiants')
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
  <h2>Liste des étudiants</h2>
  <p>Voici une liste de 100 étudiants</p>            
  <table class="table table-striped">

    <thead>
      <tr>
        <th>Nom</th>
        <th>Courriel</th>
        <th>Actions</th>

      </tr>
    </thead>

    <tbody>
    @forelse($listeEtudiants as $etudiant)
    <tr>
        <td>{{ $etudiant->nom }}</td>
        <td>{{ $etudiant->email }}</td>
        <td>
          <a href="{{ route('liste.show', $etudiant->id)}}" class="btn btn-info">Plus d'infos...</a>
          <a href="{{ route('liste.edit', $etudiant->id)}}" class="btn btn-warning">Mettre a jour</a>
          <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Supprimer</button>
        </td>
    </tr>

    @empty

    <tr>
      <td class="text-danger">Aucun étudiants</td>
    </tr>

    @endforelse

    </tbody>

  </table>

</div>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Effacer un étudiant</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Etes-vous certain de vouloir effacer cet étudiant ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="{{ route('liste.edit', $etudiant->id)}}" method="post">
                @csrf
                @method('delete')
            <input type="submit" class="btn btn-danger" value="Effacer">
        </form>
      </div>
    </div>
  </div>
</div>