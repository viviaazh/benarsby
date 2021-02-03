<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card-header">
                Form Tambah Data Pasien
            </div>
            <div class="card-body">
                <?php if(validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors() ?>
                </div>
                <?php } ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="ttl">TTL</label>
                        <input type="text" class="form-control" id="ttl" name="ttl">
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jk" name="jk">
                    </div>
                    <div class="form-group">
                        <table for="pekerjaan">Pekerjaan</table>
                        <select class="form-control" id="pekerjaan" name="pekerjaan">
                            <?php foreach($pekerjaan as $key): ?>
                                <option 
                                value="<?= $key ?>"
                                selected><?= $key ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nohp">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="keperluan">Keperluan</label>
                        <input type="text" class="form-control" id="keperluan" name="keperluan">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="2021-01-01">
                    </div>
                    <div class="form-group">
                        <label for="jam">Jam</label>
                        <input type="time" class="form-control" id="jam" name="jam" value="08:15:00">
                    </div>
                    <button type="Submit" name="submit" class="btn btn-primary float-right"> Submit </button>
                    <a href="<?=base_url();?>pasien" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>