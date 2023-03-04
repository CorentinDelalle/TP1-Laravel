@extends('layouts.app')
@section('title', 'Etudiant')
@section('content')

@include('partials.nav')

<div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">{{ $etudiant->nom }}</h5>
            <p class="text-muted mb-1">@lang('lang.student')</p>
          </div>
        </div>

      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">@lang('lang.name')</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $etudiant->nom }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">@lang('lang.birthday')</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $etudiant->naissance }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">@lang('lang.email')</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $etudiant->email }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">@lang('lang.phone')</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $etudiant->phone }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">@lang('lang.address')</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $etudiant->adresse }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">@lang('lang.city')</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $etudiant->etudiantHasVille->nom }}</p>
              </div>
            </div>
          </div>
        </div>