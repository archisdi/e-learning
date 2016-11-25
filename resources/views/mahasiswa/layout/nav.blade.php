<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <ul class="sidebar-menu">
            <li class="header">NAVIGASI</li>
            <li class="{{Request::is('mahasiswa/home') ? 'active':''}}">
                <a href="{{'/mahasiswa/home'}}">
                    <i class="fa fa-home"></i> <span>Beranda</span>
                </a>
            </li>
            {{--<li class="{{Request::is('mahasiswa/registrasi') || Request::is('mahasiswa/registrasi/*') ? 'active':''}}">--}}
                {{--<a href="{{'/mahasiswa/registrasi'}}">--}}
                    {{--<i class="fa fa-list"></i> <span>Registrasi</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="{{Request::is('mahasiswa/jadwal') || Request::is('mahasiswa/jadwal/*') ? 'active':''}}">--}}
                {{--<a href="{{'/mahasiswa/jadwal'}}">--}}
                    {{--<i class="fa fa-calendar"></i> <span>Jadwal</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="{{Request::is('mahasiswa/kehadiran') || Request::is('mahasiswa/kehadiran/*') ? 'active':''}}">--}}
                {{--<a href="{{'/mahasiswa/kehadiran'}}">--}}
                    {{--<i class="fa fa-check"></i> <span>Kehadiran</span>--}}
                {{--</a>--}}
            {{--</li>--}}
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>