<?php
// 1. Tambahkan huruf 'i' pada mysqli_connect
$con = mysqli_connect("localhost","root","");

if (!$con)
  {
  // 2. Gunakan mysqli_connect_error() untuk pesan kesalahan
  die('Could not connect: ' . mysqli_connect_error());
  }

// 3. Tambahkan variabel $con sebagai parameter pertama
mysqli_select_db($con, "lat_dbase");

// 4. Tambahkan variabel $con di setiap mysqli_query
mysqli_query($con, "INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES ('Karina', 'Suwandi', '29')");

mysqli_query($con, "INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES ('Glenn', 'Gandari', '32')");

// 5. Tutup koneksi dengan mysqli_close
mysqli_close($con);

echo "Data berhasil ditambahkan!";
?>