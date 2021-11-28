<aside class="main-sidebar sidebar-light-success elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-te\xt font-weight-light">UNIZAR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="/admin/dashboard" class="nav-link {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/assesment" class="nav-link {{ Request::is('admin/assesment*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>Assesment Mandiri
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/konselor" class="nav-link {{ Request::is('admin/konselor*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-md"></i>
                        <p>Konselor
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/mahasiswa" class="nav-link {{ Request::is('admin/mahasiswa*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>Mahasiswa
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/bioetik" class="nav-link {{ Request::is('admin/bioetik*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file-medical-alt"></i>
                        <p>Lapor Bioetik
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/rekam_medik"
                        class="nav-link {{ Request::is('admin/rekam_medik*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file-medical"></i>
                        <p>Rekam Medik
                        </p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="/admin/history_assesment"
                        class="nav-link {{ Request::is('admin/history_assesment*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-history"></i>
                        <p>History Assesment
                        </p>
                    </a>
                </li> --}}

                <li class="nav-item">
                    <a href="/admin/kritik_saran"
                        class="nav-link {{ Request::is('admin/kritik_saran*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>Kritik & Saran
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/konsultasi"
                        class="nav-link {{ Request::is('admin/konsultasi*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-hand-holding-heart"></i>
                        <p>Konsultasi
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/artikel"
                        class="nav-link {{ Request::is('admin/artikel*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Artikel
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
