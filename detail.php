<?php 
  include 'koneksi.php';
?>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Pasien
            </div>
        
            <div class="card-body">
            <form action="<?=base_url();?>surat.php" method="POST">
                <?php  
                    if (isset ($_GET['id'])) {
                            $id = $_GET['id'];
                            $qOpenSquare = "SELECT * FROM skhbn WHERE id='$id' ";
                            $openSquare = mysqli_query($openDb, $qOpenSquare);
                            while ($row= mysqli_fetch_assoc($openSquare) ) {
                    ?>  
            <p class="card-text">
                <label for=""><b> Nama:</b></label>
                <?php echo $row['nama']; ?></p>
            <p class="card-text">
                <label for=""><b> TTL:</b></label>
                <?php echo $row['ttl']; ?></p>
            <p class="card-text">
                <label for=""><b> Jenis Kelamin:</b></label>
                <?php echo $row['jk']; ?></p>    
            <p class="card-text">
                <label for=""><b> Alamat:</b></label>
                <?php echo $row['alamat']; ?></p>    
            <p class="card-text">
                <label for=""><b> Keperluan:</b></label>
                <?php echo $row['keperluan']; ?></p>
            <p class="card-text">
                <label for=""><b> Tanggal:</b></label>
                <?php echo $row['tanggal']; ?></p>
            <td colspan=3><input type="submit" name="btnPrint" value="Print"/></td>
            <a href="<?=base_url();?>pasien" class="btn btn-primary">Kembali</a>
            </form>
            <?php
                           }
                        }
                      ?>
        </div>
        </div>
        </div>
    </div>
    </div>