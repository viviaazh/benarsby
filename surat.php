<?php
  include "koneksi.php";

  if(isset($_POST["submit"])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $keperluan = $_POST['keperluan'];
  }

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