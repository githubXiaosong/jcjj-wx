<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.0</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi"/>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/lib/admin/css/font.css">
    <link rel="stylesheet" href="/lib/admin/css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="/lib/admin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/lib/admin/js/xadmin.js"></script>
    <script src="/js/my.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>

<body>
<div class="x-nav">
      <span class="layui-breadcrumb">
        <a href="">首页</a>
        <a href="">用户</a>
        <a>
            <cite>修改用户</cite></a>
      </span>
    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"
       href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:30px">ဂ</i></a>
</div>


<div class="x-body">


    <form class="layui-form" action="{{ url('admin/api/userEdit') }}" method="post">

        <input type="hidden" name="user_id" value="{{ $user->id }}">
        {{ csrf_field() }}


        <div class="layui-form-item">
            <label for="L_email" class="layui-form-label">
                <span class="x-red">*</span>用户名
            </label>

            <div class="layui-input-inline">
                <input type="text" id="name" name="name" lay-verify="name" value="{{ $user->name }}"
                       autocomplete="off" class="layui-input" disabled>
            </div>
        </div>

        <div class="layui-form-item">
            <label for="L_degree" class="layui-form-label">
                <span class="x-red">*</span>验光度数
            </label>

            <div class="layui-input-inline">
                <input type="number" id="degree" name="degree" lay-verify="degree" value="{{ $user->degree }}"
                       autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label for="L_integration" class="layui-form-label">
                <span class="x-red">*</span>积分
            </label>

            <div class="layui-input-inline">
                <input type="number" id="integration" name="integration" lay-verify="integration"
                       value="{{ $user->integration }}"
                       autocomplete="off" class="layui-input">
            </div>
        </div>


        <div class="layui-form-item">
            <label for="L_repass" class="layui-form-label">
            </label>
            <button class="layui-btn" lay-filter="add" lay-submit="">
                修改
            </button>
            <a href="{{ url('admin/page/userList') }}" class="layui-btn">
                返回
            </a>
        </div>


    </form>
</div>

<script>


    //以表单形式提交参数
    function submit_as_form(url, data_name, data_value) {
        var form = '<form id="tmp_for_submit_form" method="post" action=" ' + url + ' " >' +
            '<input type="hidden" name="' + data_name + '" value=" ' + data_value + ' ">' +
            '{{ csrf_field() }}' +
            '</form>';
        $('body').append(form);
        $('#tmp_for_submit_form').submit();
    }


    layui.use('laydate', function () {
        var laydate = layui.laydate;

        //执行一个laydate实例
        laydate.render({
            elem: '#start' //指定元素
        });

        //执行一个laydate实例
        laydate.render({
            elem: '#end' //指定元素
        });
    });


    @if (session('err_msg'))
    Toast('{{ session('err_msg') }}', 2000);
    @endif


    @if (session('suc_msg'))
    Toast('{{ session('suc_msg') }}', 2000);
    @endif


</script>

</body>

</html>
