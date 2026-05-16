<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "lat_dbase";

// koneksi ke database (mysqli)
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// cek koneksi
if (!$connection) {
    die("Tidak dapat terhubung dengan database: " . mysqli_connect_error());
}

echo "Koneksi berhasil!";
?>