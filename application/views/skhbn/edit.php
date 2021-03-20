<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Pasien
            </div>
        <div class="card-body">
        <form action="<?=base_url();?>surat.php" method="POST">
            
            <p class="card-text">
                <label for=""><b> Nama:</b></label>
                <?= $skhbn['nama'];?></p>
            <p class="card-text">
                <label for=""><b> TTL:</b></label>
                <?= $skhbn['ttl'];?></p>
            <p class="card-text">
                <label for=""><b> Jenis Kelamin:</b></label>
                <?= $skhbn['jk'];?></p> 
            <p class="card-text">
                <label for=""><b> Alamat:</b></label>
            <?= $skhbn['alamat'];?></p>    
            <p class="card-text">
                <label for=""><b> Keperluan:</b></label>
            <?= $skhbn['keperluan'];?></p>
            <p class="card-text">
                <label for=""><b> Hari:</b></label>
                <?php echo $row['hari']; ?></p>
            <p class="card-text">
                <label for=""><b> Tanggal:</b></label>
            <?= $skhbn['tanggal'];?></p>
            <p class="card-text">
                <label for=""><b> Jam:</b></label>
            <?= $skhbn['jam'];?></p>
            <td colspan=3><input type="submit" name="btnPrint" value="Print"/></td>
            </form>
        </div>
        </div>
        </div>
    </div>
</div>