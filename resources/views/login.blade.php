<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>登录</title>


    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.css" rel="stylesheet">
    <link href="/css/my.css" rel="stylesheet" type="text/css">


    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.js"></script>

    <script src="/js/my.js"></script>


</head>
<body>


<script>
    @if (session('err_msg'))
            Toast('{{
                session('err_msg')
            }}');
    @endif
</script>

<div class="row" style=" padding: 10%; margin-top: 40%">
    <center>
        <h2>登录</h2>

        <form action="{{ url('api/login') }}" method="post">

            {{ csrf_field() }}
            <div class="input-group" style="width: 90%; margin-top: 10%">
                <span class="input-group-addon" id="basic-addon1">手机号</span>
                <input id="phone" type="text" name="phone" class="form-control" placeholder="请输入手机号"
                       aria-describedby="basic-addon1">
            </div>
            <div class="input-group" style="width: 90%; margin-top: 5%">
                <span class="input-group-addon" id="basic-addon1">验证码</span>
                <input type="text" name="check_code" class="form-control" placeholder="请输入验证码"
                       aria-describedby="basic-addon1">
            </div>


            <div class="input-group" style="width: 90%; margin-top: 5%">
                <button type="button" id="bnt_get_check_code" class="btn  btn-primary" style="width: 100%; " disabled>获取验证码</button>
                <button type="submit" id="btn_login" class="btn  btn-primary" style="width: 100%; margin-top: 5%">登录</button>
            </div>


        </form>
    </center>
</div>

</body>

</html>

<script>



    $('#phone').on('input',function () {
        var phone = $('#phone').val();
        if(phone.length != 11){
            $('#bnt_get_check_code').attr('disabled',true);
        }else {
            $('#bnt_get_check_code').attr('disabled',false);
        }
    });


    $('#bnt_get_check_code').click(function () {
        var phone = $('#phone').val();
        $.post("/api/sendCheckCode",
            {'phone': phone},
            function (dat, status) {
                if (dat.status == 0) {
                    Toast('发送成功');
                    $('#bnt_get_check_code').attr('disabled',true);
                } else if (dat.status == 1){
                    Toast('发送失败 手机号未在门店注册');
                }

            }
        );
    });



</script>


