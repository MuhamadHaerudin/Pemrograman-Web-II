<?php
echo "<h3>1. Simulasi Error Handling (Tanpa Database)</h3>";

// Kita bikin variabel penanda, ceritanya query-nya gagal/salah ketik (Materi PPT)
$query_status_sukses = false; 

if (!$query_status_sukses) {
    // Praktek Error Handling: Menggunakan die() untuk menghentikan program saat ada error
    die("<b>Warning:</b> mysqli_fetch_array(): supplied argument is not a valid MySQL result resource. <br><br>
         <i>[Pesan Error Ini Berhasil Ditangkap Menggunakan Fungsi die() Sesuai Materi PPT]</i>");
}

// Kode di bawah ini otomatis gak bakal jalan karena program udah mati duluan di atas
echo "Kalimat ini gak akan pernah muncul di browser.";
?>