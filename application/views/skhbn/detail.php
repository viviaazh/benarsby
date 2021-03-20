<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Pasien
            </div>
        <div class="card-body">
            <h5 class="card-title"><?=$pasien['nama'];?></h5>
            <p class="card-text">
                <label for=""><b> TTL:</b></label>
                <?= $pasien['ttl'];?></p>
            <p class="card-text">
                <label for=""><b> Jenis Kelamin:</b></label>
                <?= $pasien['jk'];?></p>    
            <p class="card-text">
                <label for=""><b> Alamat:</b></label>
            <?= $pasien['alamat'];?></p>    
            <p class="card-text">
                <label for=""><b> Keperluan:</b></label>
            <?= $pasien['keperluan'];?></p>
            <a href="<?=base_url();?>skhbn" class="btn btn-primary">Kembali</a>
            <a href="<?= base_url(); ?>skhbn/cetak/<?= $pasien['id_pasien']; ?>" class="btn btn-primary">Print</a>
        </div>
        </div>
        </div>
    </div>
</div>