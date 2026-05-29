<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

echo "<h2>Data Mahasiswa</h2>";
echo "NIM : " . $nim . "<br>";
echo "Nama : " . $nama . "<br>";
echo "Jurusan : " . $jurusan . "<br>";
echo "Alamat : " . $alamat . "<br>";
echo "No. Telp : " . $telp;

?>