@extends('layouts.main')


@section('content')


    {{--标题--}}
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" style="font-size: 16px; padding-left: 42%"
                   href="{{ url('page/index') }}">我的信息</a>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    {{--标题--}}



    <form class="form" action="{{ url('/api/userEdit')}}">
        <div class="form-group">
            <label for="exampleInputEmail1">姓名：</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">手机号：</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $user->phone }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">邮箱：</label>
            <input type="email" class="form-control" id="exampleInputEmail1" value="{{ $user->email }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">邮编：</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $user->zip_code }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">注册时间：</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $user->created_at }}" disabled>
        </div>

    </form>

    <br>


    <a href="{{ url('page/index') }}">
        <button class="btn btn-block">返回</button>
    </a>


@endsection