<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>久川睛匠</title>


    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.css" rel="stylesheet">
    <link href="/css/my.css" rel="stylesheet" type="text/css">


    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.js"></script>

    <script src="/js/my.js"></script>


</head>
<body>

@include('layouts.header')

<div class=" mb-35"  style="min-height: 600px" >
    @yield('content')
</div>

@include('layouts.footer')

</body>

</html>


