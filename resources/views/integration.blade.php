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




    <div class="list-group" style="color: white;font-size: 14px;">

        <img class="mb-10" style="width: 100%" src="/storage/img/jifen1.png">


        <div style="margin: 8%">

            <div style="margin-left: 5%;margin-top: 7%;padding: 5px;position: absolute; width: 100%; ">
                卡号:{{ $user->member_no}}
            </div>

            <div style="margin-top: 40%;padding: 5px;position: absolute; width: 100% ">


                <p style="right: 0px; float: left">
                    余额:{{ $user->integration }} ¥
                </p>

                <p style="left: 0px;float: right;margin-right:16% ">
                    到期时间:{{ substr($user->member_card_end_at,0,10)  }}
                </p>
                <div style="clear: both"></div>


            </div>

            <img class="mb-10" style="; border-radius: 10px; width: 100%;   "
                 src="/storage/img/jifen2.jpg">

        </div>


    </div>



    <a href="{{ url('page/index') }}">
        <button class="btn btn-block">返回</button>
    </a>


@endsection