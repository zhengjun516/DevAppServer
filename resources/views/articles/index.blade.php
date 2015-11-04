@extends('app')
@section('content')
  @foreach($articles as $article)
      <h1><a href="/articles/{{ $article->id }}">{{$article->title}}</a></h1>
      <p>{{$article->intro}}</p>
      <hr>
  @endforeach
@endsection