@extends('layouts.main')


@section('content')

    {{--标题--}}
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" style="font-size: 16px; padding-left: 42%"
                   href="{{ url('page/index') }}">我的账号</a>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    {{--标题--}}

    <div>
        {{--<img class="mb-10" style="width: 100%" src="/storage/img/header.png">--}}

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>


            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="/storage/img/header.png">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <img src="/storage/img/header.png">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="/storage/img/header.png">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>

    <div>

        <br>

        <div class="col-xs-6 col-md-6 col-sm-6 mb-10 ">
            <a href="{{ url('page/aboutMe') }}">
                <center>
                    <button class="btn btn-default my-account-menu" style="font-size: 16px" type="button">关于我</button>
                </center>
            </a>
        </div>

        <div class="col-xs-6 col-md-6 col-sm-6 mb-10">
            <a href="{{ url('page/myOrders') }}">
                <center>
                    <button class="btn btn-primary my-account-menu" style="font-size: 16px" type="button">购买记录</button>
                </center>
            </a>
        </div>

        <div class="col-xs-6 col-md-6 col-sm-6 mb-10 ">
            <a href="{{ url('page/integration') }}">
                <center>
                    <button class="btn btn-success my-account-menu" style="font-size: 16px" type="button">我的积分</button>
                </center>
            </a>
        </div>

        <div class="col-xs-6 col-md-6 col-sm-6 mb-10">
            <a href="{{ url('page/degree') }}">
                <center>
                    <button class="btn btn-warning my-account-menu" style="font-size: 16px" type="button">验光度数</button>
                </center>
            </a>
        </div>

        {{--<div class="col-xs-6 col-md-6 col-sm-6 mb-10 ">--}}
        {{--<center>--}}
        {{--<button class="btn btn-info my-account-menu" type="button">XXX</button>--}}
        {{--</center>--}}
        {{--</div>--}}

        {{--<div class="col-xs-6 col-md-6 col-sm-6 mb-10">--}}

        {{--<center>--}}
        {{--<button class="btn btn-danger my-account-menu" type="button">XXX</button>--}}
        {{--</center>--}}
        {{--</div>--}}

    </div>





@endsection