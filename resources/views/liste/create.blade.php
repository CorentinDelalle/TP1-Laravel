@extends('layouts.app')
@section('title', 'Ajouter')
@section('content')

@include('partials.nav')

<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-2">
            <h1 class="display-one ">
            @lang('lang.add_student')
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
                    @lang('lang.add_form')
                    </div>
                    <div class="card-body">
                        <div class="control-group col-12">
                            <label for="nom">@lang('lang.name')</label>
                            <input type="text" id="nom" name="nom" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="adresse">@lang('lang.address')</label>
                            <input type="text" id="adresse" name="adresse" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="ville">@lang('lang.city') :</label>
                            <select name="villeId" id="villeId" class="form-control">
                            @foreach($listeVilles as $ville)
                                <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="control-group col-12">
                            <label for="phone">@lang('lang.phone')</label>
                            <input type="text" id="phone" name="phone" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="email">@lang('lang.email')</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="naissance">@lang('lang.birthday')</label>
                            <input type="text" id="naissance" name="naissance" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="@lang('lang.add')" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection