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
                <label for=""><b> Pekerjaan:</b></label>
                <?= $pasien['pekerjaan'];?></p>
            <p class="card-text">
                <label for=""><b> Jabatan:</b></label>
                <?= $pasien['jabatan'];?></p>
            <p class="card-text">
                <label for=""><b> Alamat:</b></label>
            <?= $pasien['alamat'];?></p>    
            <p class="card-text">
                <label for=""><b> Keperluan:</b></label>
            <?= $pasien['keperluan'];?></p>
            <p class="card-text">
                <label for=""><b> Hari:</b></label>
            <?= $pasien['hari'];?></p>
            <p class="card-text">
                <label for=""><b> Tanggal:</b></label>
            <?= $pasien['tanggal'];?></p> 
            <p class="card-text">
                <label for=""><b> Jam:</b></label>
            <?= $pasien['jam'];?></p>
            <p class="card-text">
                <label for=""><b> Waktu:</b></label>
            <?= $pasien['created_at'];?></p>
            
            <a href="<?=base_url();?>pasien" class="btn btn-primary">Kembali</a>
        </div>
        </div>
        </div>
    </div>
</div>