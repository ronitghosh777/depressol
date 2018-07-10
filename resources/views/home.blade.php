@extends('layout')

@section('content')
        <br><br>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-1 col-md-9 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            <form class="form-vertical ajax" role="form" method="get" action="{{ route('store') }}">
                <div class="form-group{{ $errors->has('depression')?' has-error':''}}">
                    <textarea class="form-control" rows="8" name="depression" id="depression" placeholder="Throw your depressions in the box..."  ></textarea>
                    @if($errors->has('depression'))
                        <span class="help-block">{{$errors->first('depression')}}</span>
                    @endif
                </div>
                <div class="form-group id ={{ $errors->has('name')?' has-error':''}}">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name (Optional)">
                    @if($errors->has('name'))
                        <span class="help-block">{{$errors->first('name')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" id="myButton" data-loading-text="Throwing..." class="btn btn-primary btn-lg" autocomplete="off">
                        Throw
                    </button>

                    <script type="text/javascript">
                        $(document).ready(function(){
                            $("#myButton").click(function(){
                                $(this).button('loading');
                            });
                        });
                    </script>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>

    <hr width="92%">
    <br>

        <div class="row scroll posts" id="content">
            <div class="col-lg-9 col-lg-offset-1 col-md-10 col-lg-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                @foreach($posts as $post)
                    <div class="panel panel-default ag" id="{{$post->id}}">
                        <div class="panel-heading postst ">{{ $post->name }}</div>
                        <div class="panel-body poststyle">
                            {!! nl2br(e($post->depression)) !!}
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item" ></li>
                            <li class="list-group-item">
                                <button class="btn btn-info btn-xs option1 lc{{$post->id}}" data-idl="l{{$post->id}}" onclick="this.blur();" data-toggle="button" name="options" id="option1" autocomplete="off">
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                </button>
                                <span class = "poststyle"> {{ $post->like }} </span>
                                <button class="btn btn-success btn-xs optionx dc{{$post->id}}" data-idd="d{{$post->id}}" onclick="this.blur();" data-toggle="button" name="options" id="option1" autocomplete="off">
                                    <span class="glyphicon glyphicon-thumbs-down"></span>
                                </button>
                                <span class = "poststyle"> {{ $post->dislike }} </span>
                            </li>
                        </ul>
                    </div>
                    <br>
                @endforeach
                    {!! $posts->render()!!}
            </div>
        </div>
@endsection
