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
            <li class="{{Request::is('mahasiswa/materi') || Request::is('mahasiswa/materi/*') ? 'active':''}}">
                <a href="{{'/mahasiswa/materi'}}">
                    <i class="fa fa-book"></i> <span>Materi</span>
                </a>
            </li>
            <li class="{{Request::is('mahasiswa/kuis') || Request::is('mahasiswa/kuis/*') ? 'active':''}}">
                <a href="{{'/mahasiswa/kuis'}}">
                    <i class="fa fa-list"></i> <span>Kuis</span>
                </a>
            </li>
            <li class="{{Request::is('mahasiswa/nilai') || Request::is('mahasiswa/nilai/*') ? 'active':''}}">
                <a href="{{'/mahasiswa/nilai'}}">
                    <i class="fa fa-check"></i> <span>Nilai</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>