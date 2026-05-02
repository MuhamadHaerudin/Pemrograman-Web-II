<?php
// 1. Koneksi ke server MySQL
$con = mysqli_connect("localhost", "root", "");

// 2. Mengaktifkan database (Wajib menyertakan variabel $con)
mysqli_select_db($con, "lat_dbase"); 

// 3. Membuat struktur tabel
$sql = "CREATE TABLE tbl_mhs (
    mhsID int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(mhsID),
    FirstName varchar(15),
    LastName varchar(15),
    Age int
)";

// Jalankan query pembuatan tabel
mysqli_query($con, $sql);

// 4. Input data awal (Gunakan mysqli_query dengan variabel $con)
$input = mysqli_query($con, "INSERT INTO tbl_mhs(FirstName, LastName, Age) 
          VALUES('Anjar', 'Prabowo', 25)");

if ($input) {
    echo "Tabel berhasil dibuat dan data berhasil dimasukkan.";
} else {
    echo "Error: " . mysqli_error($con);
}
?>