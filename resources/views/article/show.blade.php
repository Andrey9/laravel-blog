@extends('layouts.app')

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                @if (!Auth::guest())
                    @if (Auth::user()->can('manage',$article))
                        <div class="control-buttons pull-right">
                            {!! Form::open(['method' => 'DELETE', 'url' => '/articles/'.$article->id]) !!}
                                {!! Form::button('<span class="glyphicon glyphicon-remove"></span>',['class' => 'button','type'=>'submit']) !!}
                            {!! Form::close() !!}
                            {!! Form::open(['method' => 'GET', 'url' => '/articles/'.$article->id.'/edit']) !!}
                                {!! Form::button('<span class="glyphicon glyphicon-edit"></span>',['class' => 'button','type' => 'submit']) !!}
                            {!! Form::close() !!}
                        </div>
                    @endif
                @endif
                <h1>{{$article->title}}</h1>
                <p>Published {{$article->published_at->format('d.m.Y H:i:s')}} by {{$article->user->name}}</p>
            </div>
            <div class="panel-body">
                <p>{{$article->excerpt}}</p>
                <hr>
                <p>{!! $article->body !!}</p>
            </div>
        </div>

        @include('comments.allComments')
    </div>

@stop