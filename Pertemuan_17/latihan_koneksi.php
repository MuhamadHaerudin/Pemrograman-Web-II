<?php
// Perbaikan menggunakan mysqli_connect() agar kompatibel dengan PHP versi baru
$host = "localhost";
$user = "root";
$pass = "";

$koneksi = mysqli_connect($host, $user, $pass);

if (!$koneksi) {
    echo "Koneksi ke MySQL Gagal: " . mysqli_connect_error();
} else {
    echo "Koneksi ke MySQL Berhasil!";
}
?>