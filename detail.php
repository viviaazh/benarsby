<?php
session_start();
include "kone.php";

?>
<div class="container-fluid">
                        <h1 class="mt-4">Tabel User</h1>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Data User RESIK</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php
                                        $openDb = mysqli_connect("localhost", "root", "", "benarsby");
                                        $result = mysqli_query($openDb, "SELECT * FROM skhbn");
                                    ?>
                                    <form action="surat.php" method="POST">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>TTL</th>
                                                <th>Alamat</th>
                                                <th>Keperluan</th>
                                                <th>Tanggal</th>
                                                <th>Jam</th>
                                            </tr>
                                                <?php $x=1; ?>
                                                <?php while($row=mysqli_fetch_assoc($result)):?>
                                            </thead>        
                                            <tr>
                                                <td><?php echo $row["nama"]; ?></td>
                                                <td><?php echo $row["jk"]; ?></td>
                                                <td><?php echo $row["ttl"]; ?></td>
                                                <td><?php echo $row["alamat"]; ?></td>
                                                <td><?php echo $row["keperluan"]; ?></td>
                                                <td><?php echo $row["tanggal"]; ?></td>
                                                <td><?php echo $row["jam"]; ?></td>
                                            </tr>
                                            </tr>
   <td colspan=3><input type="submit" value="Print"/></td>
  </tr>
                                                <?php $x++ ?>
                                                <?php endwhile; ?>
                                    </table>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>