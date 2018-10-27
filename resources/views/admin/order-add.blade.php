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

    <form class="layui-form" action="{{ url('admin/api/orderAdd') }}" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="layui-form-item">
            <label for="L_user_id" class="layui-form-label">
                <span class="x-red">*</span>用户
            </label>

            <div class="layui-input-inline">
                <select name="user_id" id="L_sex" lay-verify="user_id" class="layui-input">
                    @foreach( $users as $user )
                        <option value="{{ $user->id }}"> {{ $user->name }} </option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="layui-form-item">
            <label for="L_shop" class="layui-form-label">
                <span class="x-red">*</span>店面名称
            </label>
            <div class="layui-input-inline  {{ $errors->has('shop') ? 'error-input' : '' }}">
                <input type="text" id="L_shop" name="shop" required=""
                       autocomplete="off" class="layui-input" value="{{ old('shop') }}" autofocus>
            </div>
            @if ($errors->has('shop'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('shop') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_product" class="layui-form-label">
                <span class="x-red">*</span>产品名称
            </label>
            <div class="layui-input-inline">
                <select name="product"  lay-verify="product" class="layui-input">

                    <option value="{{ GLASSES }}"> {{ GLASSES }} </option>
                    <option value="{{ CONTACT_LENSES }}"> {{ CONTACT_LENSES }} </option>

                </select>
            </div>
        </div>

        <div class="layui-form-item">
            <label for="L_degree" class="layui-form-label">
                <span class="x-red">*</span>眼镜度数
            </label>
            <div class="layui-input-inline  {{ $errors->has('degree') ? 'error-input' : '' }}">
                <input type="number" id="L_degree" name="degree" required=""
                       autocomplete="off" class="layui-input" value="{{ old('degree') }}" autofocus>
            </div>
            @if ($errors->has('degree'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('degree') }}</strong>
                </span>
            @endif
        </div>


        <div class="layui-form-item">
            <label for="L_price" class="layui-form-label">
                <span class="x-red">*</span>价格
            </label>
            <div class="layui-input-inline  {{ $errors->has('price') ? 'error-input' : '' }}">
                <input type="number" id="L_price" name="price" required=""
                       autocomplete="off" class="layui-input" value="{{ old('price') }}" autofocus>
            </div>
            @if ($errors->has('price'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
            @endif
        </div>

        <div class="layui-form-item">
            <label for="L_desc" class="layui-form-label">
                <span class="x-red">*</span>备注
            </label>
            <div class="layui-input-inline  {{ $errors->has('desc') ? 'error-input' : '' }}">
                <input type="text" id="L_desc" name="desc" required=""
                       autocomplete="off" class="layui-input" value="{{ old('desc') }}" autofocus>
            </div>
            @if ($errors->has('desc'))
                <span class="help-block error-text">
                    <strong>{{ $errors->first('desc') }}</strong>
                </span>
            @endif
        </div>


        <div class="layui-form-item">
            <label for="L_repass" class="layui-form-label">
            </label>
            <button type="submit" class="layui-btn" lay-filter="add" lay-submit="">
                增加
            </button>
        </div>


    </form>
</div>
<script>


</script>

</body>

</html>