<?php
// membaca data dari form
// function acceptData(){
//     $nama = $this->input->post('nama');
//     $jk = $this->input->post('jk');
//     $ttl = $this->input->post('ttl');
//     $alamat = $this->input->post('alamat');
//     $jam = $this->input->post('jam');
//     $tanggal = $this->input->post('tanggal');

// }
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$jam = $_POST['jam'];
$tanggal = $_POST['tanggal'];
// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents("skbn.rtf");
// isi dokumen dinyatakan dalam bentuk string
$document = str_replace("#NAMA", $nama, $document);
$document = str_replace("#JK", $jk, $document);
$document = str_replace("#TTL", $ttl, $document);
$document = str_replace("#ALAMAT", $alamat, $document);
$document = str_replace("#JAM", $jam, $document);
$document = str_replace("#TANGGAL", $tanggal, $document);
// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=suratIjin.doc");
header("Content-length: ".strlen($document));
echo $document;
?>