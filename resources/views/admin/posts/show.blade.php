@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5">{{ $article->title }}</h1>
        <div class="lead"> {{ $article->content }}</div>
    </div>
@endsection