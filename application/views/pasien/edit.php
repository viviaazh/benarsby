<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
                Form Edit Pasien
            </div>
            <div class="card-body">
            <?php if (validation_errors()):?>
            <div class="alert alert-danger" role="alert">
            <?=validation_errors()?>
            </div>
            <?php endif;?>
                <form action="" method="post">
                <input type="hidden" name="id_pasien" value="<?=$pasien['id_pasien'];?>">
                <div class="form-group">
                    <label form="nama">Nama</label>
                    <input type="text" 
                    class="form-control" 
                    id="nama" 
                    name="nama"
                    value="<?= $pasien['nama'];?>">
                </div>
                <div class="form-group">
                    <label form="ttl">TTL</label>
                    <input type="text" 
                    class="form-control" 
                    id="ttl" 
                    name="ttl"
                    value="<?= $pasien['ttl'];?>">
                </div>
                <div class="form-group">
                    <label form="jk">Jenis Kelamin</label>
                    <input type="text" 
                    class="form-control" 
                    id="jk" 
                    name="jk"
                    value="<?= $pasien['jk'];?>">
                </div>
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <select class="form-control" id="pekerjaan" name="pekerjaan">
                        <?php foreach($pekerjaan as $key): ?>
                            <?php if($key == $pasien['pekerjaan']) : ?>
                                <option value="<?= $key ?>"selected><?= $key ?></option>
                            <?php else :?>
                                <option value="<?= $key ?>"><?= $key ?></option>    
                        <?php endif; ?>
`                     <?php endforeach; ?>  
                    </select>
                </div>
                <div class="form-group">
                    <label form="jabatan">Jabatan</label>
                    <input type="text" 
                    class="form-control" 
                    id="jabatan" 
                    name="jabatan"
                    value="<?= $pasien['jabatan'];?>">
                </div>
                <div class="form-group">
                    <label form="alamat">Alamat</label>
                    <input type="text" 
                    class="form-control" 
                    id="alamat" 
                    name="alamat"
                    value="<?= $pasien['alamat'];?>">
                </div>
                <div class="form-group">
                    <label form="keperluan">Keperluan</label>
                    <input type="text" 
                    class="form-control" 
                    id="keperluan" 
                    name="keperluan"
                    value="<?= $pasien['keperluan'];?>">
                </div>
                <div class="form-group">
                    <label form="hari">Hari</label>
                    <input type="text" 
                    class="form-control" 
                    id="hari" 
                    name="hari"
                    value="<?= $pasien['hari'];?>">
                </div>
                <div class="form-group">
                    <label form="tanggal">Tanggal</label>
                    <input type="date" 
                    class="form-control" 
                    id="tanggal" 
                    name="tanggal"
                    value="<?= $pasien['tanggal'];?>">
                </div>
                <div class="form-group">
                    <label form="jam">Jam</label>
                    <input type="time" 
                    class="form-control" 
                    id="jam" 
                    name="jam"
                    value="<?= $pasien['jam'];?>">
                </div>
                <div class="form-group">
                    <label form="created_at">Waktu</label>
                    <input type="date" 
                    class="form-control" 
                    id="created_at" 
                    name="created_at"
                    value="<?= $pasien['created_at'];?>">
                </div>
                    <button type="Submit" name="edit" class="btn btn-primary float-right"> Edit </button>
                    <a href="<?=base_url();?>pasien" class="btn btn-primary">Kembali</a>
                </form>
                </div>
            </div>
        </div>
    </div>
 </div>