@extends('layouts.app')
@section('content')

@include('partials.nav')
<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h1 class="display-one">
                @lang('lang.article')
            </h1>
            <hr>
            <div class="row">
                <div class="col-md-8">
                    <p>
                        @lang('lang.reading_title')
                    </p>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('forum.create')}}" class="btn btn-outline-primary">
                        @lang('lang.add_post')
                    </a>
                </div>
            </div>
            <hr>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Liste des articles
                    </div>
                    <div class="card-body">
                        <ul>
                            @forelse($forumPosts as $forumPost)
                            <!--<li><a href=" route('forum.show', $forumPost->id)"> $forum->title </a></li>-->
                            <li>
                                {{$forumPost->title}} -
                                <a href="{{ route('forum.show', $forumPost->id)}}" class="btn btn-info">@lang('lang.more_infos')</a>
                                <a href="{{ route('forum.edit', $forumPost->id)}}" class="btn btn-warning">@lang('lang.update')</a>
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">@lang('lang.delete')</button>
                            </li>
                            @empty
                            <li class="text-danger">Aucun article de blog disponible</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Effacer un article</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Etes-vous certain de vouloir effacer cet article ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="{{ route('forum.destroy', $forumPost->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger" value="Effacer">
                </form>
            </div>
        </div>
    </div>
</div>






@endsection