@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
            {!! Form::open(['url' => '/articles']) !!}
                @include('article.form',['submitButtonText' => 'Create article'])
            {!! Form::close() !!}
        </div>
    </div>
@stop