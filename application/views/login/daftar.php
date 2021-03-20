<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6 mx-auto">
                <!-- form card login -->
                <div class="card rounded-8">
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-primary alert-dismissable" role="alert">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="card-header">
                        <h3 class="mb-0">Daftar</h3>
                    </div>
                    <div class="card-body">
                        <form class="form" action="<?php echo base_url('daftar'); ?>" method="post" enctype="multipart/form-data" id="formLogin">
                            <div class="form-group">
                                <label for="uname1">Nama</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="nama" id="nama" required="" placeholder="Nama Lengkap">
                                <div class="invalid-feedback">Oops, you missed this one.</div>
                            </div>
                            <div class="form-group">
                                <label for="uname1">Tempat Tanggal Lahir</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="ttl" id="nama" required="" placeholder="Tempat Tanggal Lahir">
                                <div class="invalid-feedback">Oops, you missed this one.</div>
                            </div>
                            <div class="form-group">
                                <label for="uname1">Alamat</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="alamat" id="nama" required="" placeholder="Alamat">
                                <div class="invalid-feedback">Oops, you missed this one.</div>
                            </div>
                            <div class="form-group">
                                <label for="uname1">Username</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="username" required="" placeholder="Username">
                                <div class="invalid-feedback">Oops, you missed this one.</div>
                                <span style="color: red">
                                    <?php echo form_error('username'); ?>
                                </span>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control form-control-lg rounded0" name="password" required="" placeholder="Password">
                                <div class="invalid-feedback">Enter your password too!</div>
                            </div>
                            <!-- <div class="alert alert-info" role="alert">
                                <?php
                                if (isset($pesan)) {
                                    echo $pesan;
                                } else {
                                    echo "Masukkan username dan password anda";
                                }
                                ?>
                            </div> -->
                            <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Daftar</button>
                            <b>Sudah Punya Akun ? Silahkan <a href="<?php echo base_url('login') ?>">Login</a></b>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>