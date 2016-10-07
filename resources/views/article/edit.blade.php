@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
            {!! Form::model($article, ['method' => 'PATCH', 'url' => '/articles/'.$article->id])!!}
                @include('article.form',['submitButtonText' => 'Update article'])
            {!! Form::close() !!}
        </div>
    </div>
@stop