@extends('layouts.auth')

@section('page_title','Login Mahasiswa')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{url('/mahasiswa/login')}}"><b>E-learning</b> System</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg"><b>Login Mahasiswa</b></p>

            <form role="form" method="POST" action="{{ url('/mahasiswa/login') }}">
                {{ csrf_field() }}
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="NIM" name="nim">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-default btn-block btn-flat">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>
@endsection