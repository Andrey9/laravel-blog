@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
            @if ($articles)
                @foreach($articles as $article)
                    <div class="article col-lg-4">
                        <h2>{{$article->title}}</h2>
                        <p>{{$article->published_at}}</p>
                        <p>{{$article->excerpt}}</p>
                        <a href="{{url('/articles/'.$article->id)}}">Read more...</a>
                    </div>
                @endforeach
            @else
                <h2>No Articles</h2>
            @endif
        </div>
    </div>
@stop