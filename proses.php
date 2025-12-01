<?php
include "database.php";

$db = new Database();

$data = [
    "nim"    => $_POST['nim'],
    "nama"   => $_POST['nama'],
    "alamat" => $_POST['alamat']
];

$db->insert("mahasiswa", $data);

echo "<h3>Data berhasil disimpan!</h3>";
echo "<a href='index.php'>Kembali</a>";
?>
