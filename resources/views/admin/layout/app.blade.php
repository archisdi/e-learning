<!DOCTYPE html>
<html>
@include('admin.layout.header_script')

<body class="hold-transition skin-green-light sidebar-mini fixed">


<div class="wrapper">

    @include('admin.layout.header')


    @include('admin.layout.nav')


    <div class="content-wrapper">

        @yield('content')

    </div>

    @include('admin.layout.footer')

</div>

@include('admin.layout.footer_script')
</body>
</html>
