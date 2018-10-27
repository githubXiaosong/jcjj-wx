@extends('layouts.main')


@section('content')




    {{--标题--}}
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" style="font-size: 16px; padding-left: 42%"
                   href="{{ url('page/index') }}">购买记录</a>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    {{--标题--}}


    <table class="table" id="tab-my-order">
        <img src="/storage/img/jifen1.png" style="width: 100%">
        <br>
        <br>

        @if(empty($orders[0]))
            您暂时没有购买记录！
        @else


            @foreach( $orders as $order )

                <div class="media">
                    <div class="media-left">

                        @if($order->product == GLASSES)
                            <img class="media-object" src="/storage/img/glasses.png" alt="..."
                                 style="margin-right: 25px; margin-left: 25px">
                        @elseif($order->product == CONTACT_LENSES)
                            <img class="media-object" src="/storage/img/contact-lenses.png" alt="..."
                                 style="margin-right: 25px; margin-left: 25px">
                        @endif
                    </div>
                    <div class="media-body well" style="padding: 14px;border-radius: 10px">
                        <h4 class="media-heading" style="float: left; margin-right: 130px">{{ $order->product }}</h4>
                        <h4 class="media-heading" style="float: right">¥{{ $order->price }}</h4>
                        <div style="clear: both"></div>
                        <small>{{ $order->shop }}</small> &nbsp; &nbsp;<small
                                style="color: gray">{{ $order->created_at }}</small>
                    </div>
                </div>






                {{--<div class="list-group">--}}
                {{--<a href="#" class="list-group-item">--}}
                {{--<h4 class="list-group-item-heading">{{ $order->created_at }}</h4>--}}
                {{--<br>--}}
                {{--<p class="list-group-item-text"><strong>产品名称:</strong>{{ $order->product }}</p>--}}
                {{--<br>--}}
                {{--<p class="list-group-item-text"><strong>购买店铺:</strong>{{ $order->shop }}</p>--}}
                {{--<br>--}}
                {{--<p class="list-group-item-text"><strong>配镜度数:</strong>{{ $order->degree }}</p>--}}
                {{--<br>--}}
                {{--<p class="list-group-item-text"><strong>价格:</strong>{{ $order->price }}</p>--}}
                {{--<br>--}}
                {{--<p class="list-group-item-text"><strong>其他:</strong>{{ $order->desc }}</p>--}}
                {{--</a>--}}
                {{--</div>--}}

            @endforeach

        @endif
    </table>

    <a href="{{ url('page/index') }}">
        <button class="btn btn-block">返回</button>
    </a>


@endsection
