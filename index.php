<?php
include "form.php";

echo "<h2>Tambah Data Mahasiswa</h2>";

$form = new Form("proses.php", "Simpan");
$form->addField("nim", "NIM");
$form->addField("nama", "Nama");
$form->addField("alamat", "Alamat");

$form->displayForm();
?>
