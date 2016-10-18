<div class="row">
    <div class="container">
        @if (Auth::guest())
            <h4>Only authorized users can leave a comments</h4>
        @else
            @include('comments.form')
        @endif
        @if (count($article->comments))
            <h4>Comments</h4>
            @foreach($article->comments as $comment)
                <hr>
                @if (!Auth::guest())
                    @if (Auth::user()->can('delete',$comment)|| Auth::user()->can('manage',$article))
                        <div class="control-buttons pull-right">
                            {!! Form::open(['method' => 'DELETE', 'url' => '/comment/'.$comment->id]) !!}
                                {!! Form::button('<span class="glyphicon glyphicon-remove"></span>', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}
                            {!! Form::close() !!}
                        </div>
                    @endif
                @endif
                <h4>{{$comment->body}}</h4>
                <p>Published {{$comment->published_at->format('d.m.Y H:i:s')}} by {{$comment->user->name}}</p>

            @endforeach
        @else
            <h4>No comments</h4>
        @endif
    </div>
</div>