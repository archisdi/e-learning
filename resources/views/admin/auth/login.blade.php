@extends('layouts.auth')

@section('page_title','Login Admin')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{url('/admin/login')}}"><b>E-learning</b> System</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg"><b>Login Admin</b></p>

            <form role="form" method="POST" action="{{ url('/admin/login') }}">
                {{ csrf_field() }}
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-success btn-block btn-flat">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>
@endsection