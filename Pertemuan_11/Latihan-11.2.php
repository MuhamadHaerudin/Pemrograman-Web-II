<?php
// 1. Buat koneksi dan simpan ke variabel $con
$con = mysqli_connect("localhost", "root", "");

$dbname = "lat_dbase";

// 2. Sertakan $con di dalam fungsi mysqli_query
$cek = mysqli_query($con, "CREATE DATABASE $dbname") 
       or die("Couldn't Create Database: $dbname. " . mysqli_error($con));

if($cek){
    echo "Database $dbname berhasil dibuat";
}
?>