<div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    @if ($errors->has('title'))
        <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
    @endif
</div>
<div class="form-group {{ $errors->has('excerpt') ? ' has-error' : '' }}">
    {!! Form::label('excerpt', 'Excerpt:') !!}
    {!! Form::text('excerpt', null, ['class' => 'form-control']) !!}
    @if ($errors->has('excerpt'))
        <span class="help-block">
            <strong>{{ $errors->first('excerpt') }}</strong>
        </span>
    @endif
</div>
<div class="form-group {{ $errors->has('body') ? ' has-error' : '' }}">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control','id'=>'editor1','rows'=>'5']) !!}
    @if ($errors->has('body'))
        <span class="help-block">
            <strong>{{ $errors->first('body') }}</strong>
        </span>
    @endif
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>
</div>
<div class="form-group {{ $errors->has('published_at') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Published at:') !!}
    {!! Form::input('datetime-local', 'published_at', date('Y-m-d\TH:i:s'), ['class' => 'form-control']) !!}
    @if ($errors->has('published_at'))
        <span class="help-block">
            <strong>{{ $errors->first('published_at') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-success form-control']) !!}
</div>

@section('script')
    <script src="{{URL::asset('vendor/ckeditor/ckeditor.js')}}"></script>
@stop