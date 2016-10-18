<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('excerpt', 'Excerpt:') !!}
    {!! Form::text('excerpt', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control','id'=>'editor1']) !!}
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>
</div>
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::input('datetime-local', 'published_at', date('Y-m-d\TH:i:s'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-success form-control']) !!}
</div>

@section('script')
    <script src="{{URL::asset('vendor/ckeditor/ckeditor.js')}}"></script>
@stop