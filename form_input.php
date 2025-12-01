<?php 
/**
 * Program memanfaatkan Program 10.2 membuat form inpputan sederhana
 */

include "form.php";

echo "<html><head><title>Mahasiswa</title></head><body>";
$form = new Form ("proses.php", "Input data");
$form->addField ("txtNIM", "NIM");
$form->addField ("txtNama", "Nama Mahasiswa");
$form->addField ("txtAlamat", "Alamat");
echo "<h3>Silahkan isi form berikut ini: </h3>";
$form->displayForm();
echo "</body></html>";
?>