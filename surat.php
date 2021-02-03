<?php
// session_start();
// include "kone.php";
// membaca data dari form
// function acceptData(){
//     $nama = $this->input->post('nama');
//     $jk = $this->input->post('jk');
//     $ttl = $this->input->post('ttl');
//     $alamat = $this->input->post('alamat');
//     $jam = $this->input->post('jam');
//     $tanggal = $this->input->post('tanggal');

// }

$nama ->$_GET['nama'];
$jk ->$_GET['jk'];
$ttl ->$_GET['ttl'];
$alamat ->$_GET['alamat'];
$jam ->$_GET['jam'];
$tanggal ->$_GET['tanggal'];
// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents("skbn.rtf");
// isi dokumen dinyatakan dalam bentuk string
$document = str_replace("#NAMA", $skhbn['nama'], $document);
$document = str_replace("#JK", $skhbn['jk'], $document);
$document = str_replace("#TTL", $skhbn['ttl'], $document);
$document = str_replace("#ALAMAT", $skhbn['alamat'], $document);
$document = str_replace("#JAM", $skhbn['jam'], $document);
$document = str_replace("#TANGGAL", $skhbn['tanggal'], $document);
// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=suratIjin.doc");
header("Content-length: ".strlen($document));
echo $document;
?>