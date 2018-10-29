@extends('layouts.main')


@section('content')


    {{--标题--}}
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" style="font-size: 16px; padding-left: 42%"
                   href="{{ url('page/index') }}">我的积分</a>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    {{--标题--}}




    <div class="list-group" style="margin: 0">

        <img class="mb-10" style="width: 100%" src="/storage/img/jifen1.png">


        <img class="mb-10" style="; border-radius: 10px; width: 80%;  margin-left: 10%; " src="/storage/img/jifen2.jpg">


        <div class="jumbotron">

            <p style="margin-top: -18%; font-size: 5px;color: white;margin-left: 13%">当前积分:{{ $user->integration }}
                分</p>
        </div>
    </div>



    <a href="{{ url('page/index') }}">
        <button class="btn btn-block">返回</button>
    </a>


@endsection