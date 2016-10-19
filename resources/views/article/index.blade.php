@extends('layouts.app')

@section('content')
    @if ($articles)
        @foreach($articles as $article)
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>{{$article->title}}</h4>
                        <p>Published {{$article->published_at->format('d.m.Y H:i:s')}} by {{$article->user->name}}</p>
                    </div>
                    <div class="panel-body">
                        <p>{{$article->excerpt}}</p>
                        <hr>
                        <a href="{{url('/articles/'.$article->id)}}">Read more...</a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <h2>No Articles</h2>
    @endif
@stop