@extends('layout')


@section('content')
    <br>
    <div class="row scroll">
        <div class="col-lg-9 col-lg-offset-1 col-md-10 col-lg-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            @foreach($posts as $post)
                <div class="panel panel-default" id="{{$post->id}}">
                    <div class="panel-heading poststyle ">{{ $post->name }}</div>
                    <div class="panel-body poststyle">
                        {!! nl2br(e($post->depression)) !!}
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"></li>
                        <li class="list-group-item">
                            <button class="btn btn-info btn-xs option1 lc{{$post->id}}" data-idl="l{{$post->id}}" onclick="this.blur();" data-toggle="button" name="options" id="option1" autocomplete="off">
                                <span class="glyphicon glyphicon-thumbs-up"></span>
                            </button>
                            <span class = "poststyle">&nbsp;{{ $post->like }}&nbsp;</span>
                            <button class="btn btn-success btn-xs optionx dc{{$post->id}}" data-idd="d{{$post->id}}" onclick="this.blur();" data-toggle="button" name="options" id="option1" autocomplete="off">
                                <span class="glyphicon glyphicon-thumbs-down"></span>
                            </button>
                            <span class = "poststyle">&nbsp;{{ $post->dislike }}&nbsp;</span>
                        </li>
                    </ul>
                </div>
                <br>
            @endforeach
                {!! $posts->render()!!}
        </div>
    </div>
@endsection