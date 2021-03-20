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
	  			<!-- <th class="short">#</th> -->
	  			<th class="normal">First Name</th>
	  			<th class="normal">Last Name</th>
	  			<th class="normal">Username</th>
	  		</tr>
			<?php  if( ! empty($pasien)){
	  		foreach ($pasien as $data){
	  		  echo "<td>".$data->nama."</td>";
				echo "<td>".$data->ttl."</td>";
				echo "<td>".$data->jk."</td>";
			}
		}
			?>
</table>
</body>
</html>
