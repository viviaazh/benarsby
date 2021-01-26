<div class="container" style="margin-top:20px">
    <div class="col-md-12">
        <h1 style="text-align: center; margin-bottom:30px">Data Pasien</h1>
    </div>
    <table class="table table-striped table-bordered" id="List_mhs">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>TTL</th>
                <th>Jenis Kelamin</th>
                <th>NO HP</th>
                <th>Pekerjaan</th>
                <th>Alamat</th>
                <th>Keperluan</th>
                <th>Tanggal</th>
                <th>Jam</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no=1;
                foreach ($pasien as $ps){ ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $ps->nama; ?></td>
                    <td><?= $ps->ttl; ?></td>
                    <td><?= $ps->jk; ?></td>
                    <td><?= $ps->nohp; ?></td>
                    <td><?= $ps->pekerjaan; ?></td>
                    <td><?= $ps->alamat; ?></td>
                    <td><?= $ps->keperluan; ?></td>
                    <td><?= $ps->tanggal; ?></td>
                    <td><?= $ps->jam; ?></td>
                </tr>
                <?php } ?>
        </tbody>
    </table>
</div>