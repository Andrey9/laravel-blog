{!! Form::open(['url' => '/comment']) !!}
<div class="form-group">
    {!! Form::textarea('body',null,['class' => 'form-control', 'placeholder' => 'Leave a comment...','rows' => '3']) !!}
    {!! Form::hidden('article_id',$article->id) !!}
</div>
<div class="form-group">
    {!! Form::submit('Comment',['class' => 'form-control btn btn-success']) !!}
</div>
{!! Form::close() !!}