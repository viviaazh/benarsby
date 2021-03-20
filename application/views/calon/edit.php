<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
                Form Edit Data
            </div>
            <div class="card-body">
            <?php if (validation_errors()):?>
            <div class="alert alert-danger" role="alert">
            <?=validation_errors()?>
            </div>
            <?php endif;?>
                <form action="" method="post">
                <input type="hidden" name="id_pasien" value="<?=$user['id'];?>">
                <div class="form-group">
                    <label form="username">Username</label>
                    <input type="text" 
                    class="form-control" 
                    id="username" 
                    name="username"
                    value="<?= $user['username'];?>">
                </div>
                <div class="form-group">
                    <label form="nama">Nama</label>
                    <input type="text" 
                    class="form-control" 
                    id="nama" 
                    name="nama"
                    value="<?= $user['nama'];?>">
                </div>
                <div class="form-group">
                    <label form="ttl">TTL</label>
                    <input type="text" 
                    class="form-control" 
                    id="ttl" 
                    name="ttl"
                    value="<?= $user['ttl'];?>">
                </div>
                <div class="form-group">
                    <label form="alamat">Alamat</label>
                    <input type="text" 
                    class="form-control" 
                    id="alamat" 
                    name="alamat"
                    value="<?= $user['alamat'];?>">
                </div>
                    <button type="Submit" name="edit" class="btn btn-primary float-right"> Edit </button>
                    <a href="<?=base_url();?>calon" class="btn btn-primary">Kembali</a>
                </form>
                </div>
            </div>
        </div>
    </div>
 </div>