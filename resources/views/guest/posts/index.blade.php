@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="my-4"> My Blog </h1>
            @foreach($articles as $article)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text">{{ $article->content }}</p>
                    <a href="{{ route('posts.show', $article->slug) }}" class="btn btn-primary">Read More</a>
                </div>
                <div class="card-footer text-muted">
                    {{ $article->user->name }}
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>