<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Pasien
            </div>
        <div class="card-body">
            
            <p class="card-text">
                <label for=""><b> Username:</b></label>
                <?= $user['username'];?></p>
            <p class="card-text">
                <label for=""><b> Nama:</b></label>
                <?= $user['nama'];?></p>    
            <p class="card-text">
                <label for=""><b> TTL:</b></label>
                <?= $user['ttl'];?></p>
            <p class="card-text">
                <label for=""><b> Alamat:</b></label>
                <?= $user['alamat'];?></p>
            <p class="card-text">
                <label for=""><b> Password:</b></label>
            <?= $user['password'];?></p>   
            
            <a href="<?=base_url();?>calon" class="btn btn-primary">Kembali</a>
        </div>
        </div>
        </div>
    </div>
</div>