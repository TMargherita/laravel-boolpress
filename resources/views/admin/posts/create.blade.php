@extends('layouts.app')


@section('content')
<div class="container justify-content-center">    
    <h1 class="mt-5">A new Daily Post</h1>
    
    <form action="{{route("admin.posts.store")}}" method="POST">
        @csrf
        @method("POST")
        
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Metti qui il titolo" value="{{old("title")}}">

            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="content">Testo del Post</label>
            <input type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content" placeholder="Scrivi il tuo post" value="{{old("content")}}">

            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="user_id">Autore</label>

            <input type="text" class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id" placeholder="Scritto da" value="{{old("user_id")}}">

            @error('user_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection