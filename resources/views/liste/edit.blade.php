@extends('layouts.app')
@section('title', 'Édition étudiant')
@section('content')

@include('partials.nav')

<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-2">
            <h1 class="display-one ">
            @lang('lang.update_student')
            </h1>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <form method="post">
                    @csrf
                    @method('put')
                    <div class="card-header bg-primary text-white">
                    @lang('lang.form')
                    </div>
                    <div class="card-body">

                    <div class="control-group col-12">
                            <label for="nom">@lang('lang.name')</label>
                            <input type="text" id="nom" name="nom" class="form-control" value="{{ $etudiant->nom}}">
                        </div>
                        <div class="control-group col-12">
                            <label for="adresse">@lang('lang.adress')</label>
                            <input type="text" id="adresse" name="adresse" class="form-control" value="{{ $etudiant->adresse}}">
                        </div>
                        <div class="control-group col-12">
                            <label for="ville">@lang('lang.city') :</label>
                            <select name="villeId" id="villeId" class="form-control">
                                <option value="{{ $etudiant->etudiantHasVille->id }}">{{ $etudiant->etudiantHasVille->nom }}</option>
                            @foreach($listeVilles as $ville)
                                <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="control-group col-12">
                            <label for="phone">@lang('lang.phone')</label>
                            <input type="text" id="phone" name="phone" class="form-control" value="{{ $etudiant->phone}}">
                        </div>
                        <div class="control-group col-12">
                            <label for="email">@lang('lang.email')</label>
                            <input type="text" id="email" name="email" class="form-control" value="{{ $etudiant->email}}">
                        </div>
                        <div class="control-group col-12">
                            <label for="naissance">@lang('lang.birthday')</label>
                            <input type="text" id="naissance" name="naissance" class="form-control" value="{{ $etudiant->naissance}}">
                        </div>

                    </div>
                    <div class="card-footer">
                        <input type="submit" value="@lang('lang.save')" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection