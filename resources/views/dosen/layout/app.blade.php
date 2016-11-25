<!DOCTYPE html>
<html>
@include('dosen.layout.header_script')

<body class="hold-transition skin-blue sidebar-mini fixed">


<div class="wrapper">

    @include('dosen.layout.header')


    @include('dosen.layout.nav')


    <div class="content-wrapper">

        @yield('content')

    </div>

    @include('dosen.layout.footer')

</div>

@include('dosen.layout.footer_script')
</body>
</html>
