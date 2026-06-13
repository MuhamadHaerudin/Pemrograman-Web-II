<?php
// SOLUSI (Materi PPT Hal. 4): Pastikan sebelum perintah session_start() tidak ada perintah echo atau HTML apapun!
session_start(); 

// Bikin session dulu sampai aman, baru kita tampilin HTML atau teks bebas di bawahnya
$_SESSION['user'] = "Mahasiswa_Praktek";

echo "<h3>3. Solusi Penanganan Error Session yang Benar</h3>";
echo "Status: <b>Aman / Tidak Error</b><br>";
echo "Session berhasil dijalankan. Isi session user: " . $_SESSION['user'] . "<br><br>";
echo "Karena fungsi <code>session_start();</code> ditaruh di baris paling atas (Baris 3), maka error tidak akan muncul lagi.";
?>