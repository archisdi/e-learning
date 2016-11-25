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

            <li class="{{Request::is('admin/data/matakuliah') || Request::is('admin/data/matakuliah/*') ? 'active':''}}">
                <a href="{{'/admin/data/matakuliah'}}">
                    <i class="fa fa-book"></i> <span>Matakuliah</span>
                </a>
            </li>

            <li class="{{Request::is('admin/data/kelas') || Request::is('admin/data/kelas/*') ? 'active':''}}">
                <a href="{{'/admin/data/kelas'}}">
                    <i class="fa fa-university"></i> <span>Kelas</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>