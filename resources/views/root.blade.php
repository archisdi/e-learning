<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/gif" href="{{asset('/img/icon.png')}}"/>
    <title>E-Learning</title>
    <link rel="stylesheet" href="{{elixir('/css/min.css')}}">

    {{--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>--}}
    {{--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
    {{--<![endif]-->--}}
</head>


<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
    <div class="lockscreen-logo">
        <h2><b>E-learning System</b></h2>
    </div>

    <div>
        <a href="{{route('mahasiswa.login')}}" class="btn btn-default btn-block btn-sm btn-flat">Login Mahasiswa</a>
        <a href="{{route('dosen.login')}}" class="btn btn-default btn-block btn-sm btn-flat">Login Dosen</a>
        <a href="{{route('admin.login')}}" class="btn btn-default btn-block btn-sm btn-flat">Login Admin</a>
    </div>
    <!-- /.lockscreen-item -->
    <br>
    <div class="lockscreen-footer text-center">
        <strong>Copyright &copy; 2016 <a href="http://archisdiningrat.net">AAI</a></strong>

    </div>
</div>
<!-- /.center -->

<script src="{{elixir('/js/min.js')}}"></script>

</body>

</html>
