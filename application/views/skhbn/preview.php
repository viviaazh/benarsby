<html>
<head>
	<title>Cetak PDF</title>
</head>
<body>
<h1 style="text-align: center;">Data Siswa</h1>
<a href="<?php echo base_url("index.php/main/cetak"); ?>">Cetak Data</a><br><br>

<style>
table {
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
}
</style>

<table border="1" align="center">
<tr>
	<th>No</th>
	<th>NIS</th>
	<th>Nama</th>
	<th>Jenis Kelamin</th>
	<th>Telepon</th>
	<th>Alamat</th>
</tr>
<?php
if( ! empty($pasien)){
	$no = 1;
	foreach($pasien as $data){
		echo "<tr>";
		echo "<td>".$no."</td>";
		echo "<td>".$data->nama."</td>";
		echo "<td>".$data->ttl."</td>";
		echo "<td>".$data->jk."</td>";
		echo "<td>".$data->pekerjaan."</td>";
		echo "<td>".$data->alamat."</td>";
		echo "</tr>";
		$no++;
	}
}
?>
</table>
</body>
</html>
