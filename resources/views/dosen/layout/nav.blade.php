<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <ul class="sidebar-menu">
            <li class="header">NAVIGASI</li>
            <li class="{{Request::is('dosen/home') ? 'active':''}}">
                <a href="{{'/dosen/home'}}">
                    <i class="fa fa-home"></i> <span>Beranda</span>
                </a>
            </li>

            <li class="{{Request::is('dosen/materi') || Request::is('dosen/materi/*') ? 'active':''}}">
                <a href="{{'/dosen/materi'}}">
                    <i class="fa fa-book"></i> <span>Materi</span>
                </a>
            </li>

            <li class="{{Request::is('dosen/kuis') || Request::is('dosen/kuis/*') ? 'active':''}}">
                <a href="{{'/dosen/kuis'}}">
                    <i class="fa fa-list"></i> <span>Kuis</span>
                </a>
            </li>

            <li class="{{Request::is('dosen/nilai') || Request::is('dosen/nilai/*') ? 'active':''}}">
                <a href="{{'/dosen/nilai'}}">
                    <i class="fa fa-check"></i> <span>Nilai</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>