@extends('layouts.main')


@section('content')

    {{--标题--}}
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" style="font-size: 16px; padding-left: 42%"
                   href="{{ url('page/index') }}">验光度数</a>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    {{--标题--}}


    <div style="padding: 10px">
        <table class="table" id="tab-my-order">
            <tr>
                <th></th>
                <th>右眼</th>
                <th>左眼</th>
            </tr>
            <tr>
                <th> 球镜</th>
                <th>{{ $user->qiujing_r }}</th>
                <th>{{ $user->qiujing_l }}</th>
            </tr>

            <tr>
                <th>柱镜</th>
                <th>{{ $user->zhujing_r }}</th>
                <th>{{ $user->zhujing_l }}</th>
            </tr>

            <tr>
                <th>下加光</th>
                <th>{{ $user->xiajiaguang_r }}</th>
                <th>{{ $user->xiajiaguang_l }}</th>
            </tr>

            <tr>
                <th>瞳距远用</th>
                <th>{{ $user->tongyuan_r }}</th>
                <th>{{ $user->tongyuan_l }}</th>
            </tr>


            <tr>
                <th>瞳距近用</th>
                <th>{{ $user->tongjin_r }}</th>
                <th>{{ $user->tongjin_l }}</th>
            </tr>
        </table>
    </div>
    <a href="{{ url('page/index') }}">
        <button class="btn btn-block">返回</button>
    </a>


@endsection