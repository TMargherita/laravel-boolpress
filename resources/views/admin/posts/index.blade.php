@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Slug</th>
            <th scope="col">User</th>
            <th scope="col">Contenuto</th>
            <th>Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{$article->title}}</td>
                <td>{{$article->slug}}</td>
                <td>{{$article->contenuto}}</td>
                <td><a href="{{route('admin.posts.show', $article->slug)}}">View</a></td>  
                <td>Edit</td>
                <td><a href="{{route('admin.posts.create')}}">Add</a></td>
                <td>Delete</td>
              </tr>
            @endforeach
         
        </tbody>
      </table>
</div>
@endsection