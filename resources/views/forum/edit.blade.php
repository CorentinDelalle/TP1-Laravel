@extends('layouts.app')
@section('content')

@include('partials.nav')

<div class="container">
  <div class="row">
    <div class="col-12 text-center mt-2">
      <h1 class="display-one ">
        Modifier votre article
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
              <label for="title">Titre</label>
              <input type="text" id="title" name="title" class="form-control" value="{{$forumPost->title}}">
            </div>
            <div class="control-group col-12">
              <label for="body">Message</label>
              <textarea name="body" id="body" class="form-control">{{ $forumPost->body}}</textarea>
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