<!DOCTYPE html>
<html>
@include('mahasiswa.layout.header_script')

<body class="hold-transition skin-black-light sidebar-mini fixed">


<div class="wrapper">

    @include('mahasiswa.layout.header')


    @include('mahasiswa.layout.nav')


    <div class="content-wrapper">

        @yield('content')

    </div>

    @include('mahasiswa.layout.footer')

</div>

@include('mahasiswa.layout.footer_script')
</body>
</html>
