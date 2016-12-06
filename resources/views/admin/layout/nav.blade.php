<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <ul class="sidebar-menu">
            <li class="header">NAVIGASI</li>
            <li class="{{Request::is('admin/home') ? 'active':''}}">
                <a href="{{'/admin/home'}}">
                    <i class="fa fa-home"></i> <span>Beranda</span>
                </a>
            </li>

            <li class="{{Request::is('admin/data/mahasiswa') || Request::is('admin/data/mahasiswa/*') ? 'active':''}}">
                <a href="{{'/admin/data/mahasiswa'}}">
                    <i class="fa fa-user"></i> <span>Mahasiswa</span>
                </a>
            </li>

            <li class="{{Request::is('admin/data/dosen') || Request::is('admin/data/dosen/*') ? 'active':''}}">
                <a href="{{'/admin/data/dosen'}}">
                    <i class="fa fa-user-o"></i> <span>Dosen</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>