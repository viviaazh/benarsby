<?php if ($this->session->flashdata('flash-data') != null) { ?>
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?= $this->session->flashdata('flash-data'); ?>
    </div>
<?php } ?>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="">Admin</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <!-- <a class="dropdown-item" href="login.php">Login</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div> -->
                    <a class="dropdown-item" href="<?= base_url(); ?>login/logout">Logout</a>
                    <!-- <a class="" href="login.html">Logout</a> -->
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                        <a class="nav-link" href="home">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">SKHBN</div>
                        <a class="nav-link" href="pasien">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Data Pasien
                        </a>
                        <a class="nav-link" href="skhbn">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Data SKHBN
                        </a>
                        <a class="nav-link" href="calon">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data User
                            </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin BNNK SBY
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <!-- <h1 class="mt-4">Data SKHBN</h1> -->
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data SKHBN</li>
                    </ol>
                    <!-- <div class="card mb-4"> -->
                    <div class="row">
                        <div class="col-md-6">
                            <form action="" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Cari Data SKHBN" name="keyword">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Cari</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <a href="<?= base_url(); ?>skhbn" class="btn btn-primary">All</a>

                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                    <!-- </div> -->
                    <div class="card mb-4">
                        <!-- <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Pasien
                            </div> -->
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="tableuser" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>TTL</th>
                                            <th>Alamat</th>
                                            <th>Keperluan</th>
                                            <th>Hari</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($sk as $skhbn) { ?>
                                        <tbody>
                                            <tr>
                                                <th><?= $skhbn['nama']; ?></th>
                                                <td><?= $skhbn['jk']; ?></td>
                                                <td><?= $skhbn['ttl']; ?></td>
                                                <td><?= $skhbn['alamat']; ?></td>
                                                <td><?= $skhbn['keperluan']; ?></td>
                                                <td><?= $skhbn['hari']; ?></td>
                                                <td><?= $skhbn['tanggal']; ?></td>
                                                <td><?= $skhbn['jam']; ?></td>

                                                <td><a href="<?= base_url(); ?>print_skhbn/cetak/<?= $skhbn['id_pasien']; ?>" class="badge badge-primary float-right">Cetak</a></td>
                                            </tr>

                                        </tbody>
                                    <?php } ?>
                                </table>
                            </div>


                        </div>
                    </div>

                </div>
            </main>