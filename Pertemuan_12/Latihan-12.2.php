<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "lat_dbase");

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// query delete
$sql = "DELETE FROM tbl_mhs WHERE LastName='Prabowo'";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: " . mysqli_error($conn);
}

// tutup koneksi
mysqli_close($conn);
?>