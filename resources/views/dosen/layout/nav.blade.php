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
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>