<?php 
// 1. Simpan koneksi ke variabel $con
$con = mysqli_connect("localhost", "root", ""); 

// 2. mysqli_db_query sudah tidak ada, ganti dengan dua tahap ini:
mysqli_select_db($con, "lat_dbase"); 
$hasil = mysqli_query($con, "select * from tbl_mhs"); 

// 3. Gunakan mysqli_fetch_row
while($data = mysqli_fetch_row($hasil)) 
{
    // Menampilkan data berdasarkan urutan kolom (0, 1, 2)
    echo "$data[0] $data[1] $data[2]<br>"; 
}

// 4. Tutup koneksi
mysqli_close($con);
?>