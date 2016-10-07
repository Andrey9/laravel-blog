@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
            <h1>{{$article->title}}<a href="{{url('/articles/'.$article->id.'/edit')}}" class="pull-right"><span class="glyphicon glyphicon-edit"></span></a></h1>
            <p>{{$article->published_at}}</p>
            <p>{{$article->excerpt}}</p>
            <p>{{$article->body}}</p>
            <a href="{{url('/articles')}}"> << Back </a>
        </div>
    </div>
@stop