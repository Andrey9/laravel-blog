@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container ">
            @if (!Auth::guest())
                @if (Auth::user()->can('manage',$article))
                    <div class="control-buttons pull-right">
                        {!! Form::open(['method' => 'DELETE', 'url' => '/articles/'.$article->id]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-remove"></span>',['class'=>'btn btn-danger','type'=>'submit']) !!}

                        {!! Form::close() !!}
                        <a href="{{url('/articles/'.$article->id.'/edit')}}" class="btn btn-warning">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                    </div>
                @endif
            @endif

            <h1>{{$article->title}}</h1>
            <p>Published {{$article->published_at->format('d.m.Y H:i:s')}} by {{$article->user->name}}</p>
            <p>{{$article->excerpt}}</p>
            <p>{!! $article->body !!}</p>
        </div>
    </div>
    @include('comments.allComments')
@stop