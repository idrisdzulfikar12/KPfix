               <!-- /.navbar-top-links -->

               <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                                <li>
                <a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="<?= base_url('Admin/pengaduan') ?>"><i class="fa fa-bar-chart-o fa-fw"></i> Form Pengaduan</a>
            </li>
            <li>
                <a href="<?= base_url('Admin/jadwal_kunjungan') ?>"><i class="fa fa-calendar fa-fw"></i> Jadwal Kunjungan</a>
            </li>
            <li>
                <a href="<?= base_url('berita') ?>"><i class="fa fa-edit fa-fw"></i> Berita</a>
            </li>
            <li>
                <a href="<?= base_url('kontak') ?>"><i class="fa fa-phone fa-fw"></i> Kontak</a>
            </li>
                        </ul>
                        <div class="logout-section">
            <a href="<?= base_url('login/logout') ?>" class="btn btn-danger btn-block">
                <i class="fa fa-sign-out"></i> Logout
            </a>
        </div>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"><?= $title ?></h1>