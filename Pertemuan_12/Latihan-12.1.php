<?php
$conn = mysqli_connect("localhost", "root", "", "lat_dbase");

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// query update
$sql = "UPDATE tbl_mhs 
        SET Age = 36 
        WHERE FirstName = 'Karina' AND LastName = 'Suwandi'";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil diupdate";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>