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
    <link rel="stylesheet" href="/css/my.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="/lib/admin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/lib/admin/js/xadmin.js"></script>
    <script type="text/javascript" src="/js/my.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="x-body">


    <script>
        @if (session('suc_msg'))
        Toast('{{ session('suc_msg') }}', 2000);
        @endif
    </script>

    <form class="layui-form" action="{{ url('admin/api/userAdd') }}" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="layui-form-item">
            <label for="L_name" class="layui-form-label">
                <span class="x-red">*</span>姓名
            </label>
            <div class="layui-input-inline  {{ $errors->has('name') ? 'error-input' : '' }}">
                <input type="text" id="L_name" name="name" required=""
                       autocomplete="off" class="layui-input" value="{{ old('name') }}" autofocus>
            </div>
            @if ($errors->has('name'))
            <span class="help-block error-text">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_phone" class="layui-form-label">
                <span class="x-red">*</span>手机号
            </label>
            <div class="layui-input-inline  {{ $errors->has('phone') ? 'error-input' : '' }}">
                <input type="text" id="L_phone" name="phone" required=""
                       autocomplete="off" class="layui-input" value="{{ old('phone') }}" autofocus>
            </div>
            @if ($errors->has('phone'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_age" class="layui-form-label">
                <span class="x-red">*</span>年龄
            </label>
            <div class="layui-input-inline  {{ $errors->has('age') ? 'error-input' : '' }}">
                <input type="number" id="L_age" name="age" required=""
                       autocomplete="off" class="layui-input" value="{{ old('age') }}" autofocus>
            </div>
            @if ($errors->has('age'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('age') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_integration" class="layui-form-label">
                <span class="x-red">*</span>积分
            </label>
            <div class="layui-input-inline  {{ $errors->has('integration') ? 'error-input' : '' }}">
                <input type="number" id="L_integration" name="integration" required=""
                       autocomplete="off" class="layui-input" value="{{ old('integration') }}" autofocus>
            </div>
            @if ($errors->has('integration'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('integration') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_address" class="layui-form-label">
                <span class="x-red">*</span>住址
            </label>
            <div class="layui-input-inline  {{ $errors->has('address') ? 'error-input' : '' }}">
                <input type="text" id="L_address" name="address" required=""
                       autocomplete="off" class="layui-input" value="{{ old('address') }}" autofocus>
            </div>
            @if ($errors->has('address'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_email" class="layui-form-label">
                <span class="x-red">*</span>邮箱
            </label>
            <div class="layui-input-inline  {{ $errors->has('email') ? 'error-input' : '' }}">
                <input type="email" id="L_email" name="email" required=""
                       autocomplete="off" class="layui-input" value="{{ old('email') }}" autofocus>
            </div>
            @if ($errors->has('email'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_email" class="layui-form-label">
                <span class="x-red">*</span>邮编
            </label>
            <div class="layui-input-inline  {{ $errors->has('zip_code') ? 'error-input' : '' }}">
                <input type="number" id="L_zipcode" name="zip_code" required=""
                       autocomplete="off" class="layui-input" value="{{ old('zip_code') }}" autofocus>
            </div>
            @if ($errors->has('zip_code'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('zip_code') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_sex" class="layui-form-label">
                <span class="x-red">*</span>性别
            </label>

            <div class="layui-input-inline">
                <select name="sex" id="L_sex" lay-verify="sex" class="layui-input">
                    <option value="1">男</option>
                    <option value="0">女</option>
                </select>
            </div>
        </div>



        <div class="layui-form-item">
            <label for="L_degree" class="layui-form-label">
                 球镜(左)
            </label>
            <div class="layui-input-inline  {{ $errors->has('qiujing_l') ? 'error-input' : '' }}">
                <input type="text" id="L_degree" name="qiujing_l"
                       autocomplete="off" class="layui-input" value="{{ old('qiujing_l') }}" autofocus>
            </div>
            @if ($errors->has('qiujing_l'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('qiujing_l') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_degree" class="layui-form-label">
                 球镜(右)
            </label>
            <div class="layui-input-inline  {{ $errors->has('qiujing_r') ? 'error-input' : '' }}">
                <input type="text" id="L_degree" name="qiujing_r"
                       autocomplete="off" class="layui-input" value="{{ old('qiujing_r') }}" autofocus>
            </div>
            @if ($errors->has('qiujing_r'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('qiujing_r') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_degree" class="layui-form-label">
                 柱镜(左)
            </label>
            <div class="layui-input-inline  {{ $errors->has('zhujing_l') ? 'error-input' : '' }}">
                <input type="text" id="L_degree" name="zhujing_l"
                       autocomplete="off" class="layui-input" value="{{ old('zhujing_l') }}" autofocus>
            </div>
            @if ($errors->has('zhujing_l'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('zhujing_l') }}</strong>
                </span>
            @endif
        </div>


        <div class="layui-form-item">
            <label for="L_degree" class="layui-form-label">
                柱镜(右)
            </label>
            <div class="layui-input-inline  {{ $errors->has('zhujing_r') ? 'error-input' : '' }}">
                <input type="text" id="L_degree" name="zhujing_r"
                       autocomplete="off" class="layui-input" value="{{ old('zhujing_r') }}" autofocus>
            </div>
            @if ($errors->has('zhujing_r'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('zhujing_r') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_degree" class="layui-form-label">
                下加光(左)
            </label>
            <div class="layui-input-inline  {{ $errors->has('xiajiaguang_l') ? 'error-input' : '' }}">
                <input type="text" id="L_degree" name="xiajiaguang_l"
                       autocomplete="off" class="layui-input" value="{{ old('xiajiaguang_l') }}" autofocus>
            </div>
            @if ($errors->has('xiajiaguang_l'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('xiajiaguang_l') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_degree" class="layui-form-label">
                 下加光(右)
            </label>
            <div class="layui-input-inline  {{ $errors->has('xiajiaguang_r') ? 'error-input' : '' }}">
                <input type="text" id="L_degree" name="xiajiaguang_r"
                       autocomplete="off" class="layui-input" value="{{ old('xiajiaguang_r') }}" autofocus>
            </div>
            @if ($errors->has('xiajiaguang_r'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('xiajiaguang_r') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_degree" class="layui-form-label">
                 瞳距远用(左)
            </label>
            <div class="layui-input-inline  {{ $errors->has('tongyuan_l') ? 'error-input' : '' }}">
                <input type="text" id="L_degree" name="tongyuan_l"
                       autocomplete="off" class="layui-input" value="{{ old('tongyuan_l') }}" autofocus>
            </div>
            @if ($errors->has('tongyuan_l'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('tongyuan_l') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_degree" class="layui-form-label">
                瞳距远用(右)
            </label>
            <div class="layui-input-inline  {{ $errors->has('tongyuan_r') ? 'error-input' : '' }}">
                <input type="text" id="L_degree" name="tongyuan_r"
                       autocomplete="off" class="layui-input" value="{{ old('tongyuan_r') }}" autofocus>
            </div>
            @if ($errors->has('tongyuan_r'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('tongyuan_r') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_degree" class="layui-form-label">
                瞳距近用(左)
            </label>
            <div class="layui-input-inline  {{ $errors->has('tongjin_l') ? 'error-input' : '' }}">
                <input type="text" id="L_degree" name="tongjin_l"
                       autocomplete="off" class="layui-input" value="{{ old('tongjin_l') }}" autofocus>
            </div>
            @if ($errors->has('tongjin_l'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('tongjin_l') }}</strong>
                </span>
            @endif
        </div>


        <div class="layui-form-item">
            <label for="L_degree" class="layui-form-label">
                 瞳距近用(右)
            </label>
            <div class="layui-input-inline  {{ $errors->has('tongjin_r') ? 'error-input' : '' }}">
                <input type="text" id="L_degree" name="tongjin_r"
                       autocomplete="off" class="layui-input" value="{{ old('tongjin_r') }}" autofocus>
            </div>
            @if ($errors->has('tongjin_r'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('tongjin_r') }}</strong>
                </span>
            @endif
        </div>






        <div class="layui-form-item">
            <label for="L_repass" class="layui-form-label">
            </label>
            <button type="submit" class="layui-btn" lay-filter="add" lay-submit="">
                增加
            </button>

            <a href="{{ url('admin/page/userList') }}" class="layui-btn">
                返回
            </a>
        </div>


    </form>
</div>
<script>


</script>

</body>

</html>