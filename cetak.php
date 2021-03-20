<?php

require 'vendor/autoload.php';

$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('skhpn.docx');

$templateProcessor->setValues([
    'name' => $skhbn-> nama,
    'gender' => $skhbn -> jk,
    'birth' => $skhbn -> ttl,
    'address' => $skhbn -> alamat,
    'requirement' => $skhbn -> keperluan
]);

header("Content-Disposition: attachment; filename=skhpn.docx");

$templateProcessor->saveAs('php://output');