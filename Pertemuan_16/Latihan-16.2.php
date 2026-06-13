<?php
echo "<h3>2. Simulasi Error Session (Headers Already Sent)</h3>";

// Sengaja memicu error (Materi PPT Hal. 3)
// Kita ngeluarin output string/teks ke browser duluan sebelum session_start()
echo "Hallo... Teks ini yang bakal memicu error session di bawah.<br>";

// Ini bakal memicu Warning di browser karena posisinya salah
session_start();

$_SESSION['user'] = "Mahasiswa_Praktek";
echo "Session berhasil dibuat: " . $_SESSION['user'];
?>