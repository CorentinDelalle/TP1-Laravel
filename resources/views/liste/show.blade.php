@extends('layouts.app')
@section('title', 'Etudiant')
@section('content')
<nav class="navbar navbar-inverse bg-dark mb-4">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand text-white" href="{{ route('liste.index')}}">Étudiants de Maisonneuve</a>
    </div>
    <a href="{{ route('liste.create')}}" class="btn btn-primary">Ajouter un étudiant</a>
  </div>
</nav> 

<div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">{{ $etudiant->nom }}</h5>
            <p class="text-muted mb-1">Étudiant</p>
          </div>
        </div>

      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nom</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $etudiant->nom }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date de naissance</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $etudiant->naissance }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $etudiant->email }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $etudiant->phone }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Adresse</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $etudiant->adresse }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Ville</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $etudiant->etudiantHasVille->nom }}</p>
              </div>
            </div>
          </div>
        </div>