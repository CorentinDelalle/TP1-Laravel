@extends('layouts.app')
@section('content')

@include('partials.nav')
<div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one">
                    @lang('lang.my_blog')
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
                                        <li>{{$forumPost->title}}</li>
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






@endsection