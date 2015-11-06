@extends('app')
@section('content')
  @foreach($articles as $article)
    <article class="format-image group">
      <h2 class = "post-title pad">
       <a href="/index.php/articles/{{ $article->id }}">{{$article->title}}</a>
       </h2>
       <ul class="post-meta pad group">
           <li><i class="fa fa-clock-o"></i>{{ $article->published_at}}</li>
        @if($article->tags)
        @foreach($article->tags as $tag)
            <li><i class="fa fa-tag"></i>{{ $tag->name }}</li>
        @endforeach
       @endif
       </ul>
       <div class="post-inner">
         <div class="post-deco">
            <div class="hex hex-small">
               <div class="hex-inner"><i class="fa"></i></div>
               <div class="corner-1"></div>
               <div class="corner-2"></div>
            </div>
         </div>
         <div class="post-content pad">
            <div class="enty custome">
              {{$article->intro}}
            </div>
            <a class="more-link-custom" href="/index.php/articles/{{$article->id}}"><span><i>更多</i></span></a>
         </div>
         
       </div>
      <hr>
    </article>
  @endforeach
@endsection