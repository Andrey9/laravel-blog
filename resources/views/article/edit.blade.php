@extends('layouts.app')

@section('content')
    <div>

        {!! Form::model($article, ['method' => 'PATCH', 'url' => '/articles/'.$article->id])!!}
        @include('article.form',['submitButtonText' => 'Update article'])
        {!! Form::close() !!}
    </div>
@stop