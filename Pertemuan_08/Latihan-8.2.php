<html>
<head>
    <title>Contoh Penggunaan UDF</title>
</head>
<body>

<form method="post">
    Masukkan Bilangan Pertama : <br>
    <input type="text" name="A" size="10"><br>
    Masukkan Bilangan Kedua : <br>
    <input type="text" name="B" size="10"><br>
    <input type="submit" name="hitung" value="hitung">
</form>

<?php
// Menggunakan pengecekan isset agar hasil hanya muncul saat tombol diklik
if (isset($_POST['hitung'])) {
    
    // Mengambil nilai input dari form [cite: 55, 56]
    $A = $_POST["A"];
    $B = $_POST["B"];

    // Definisi Fungsi UDF sesuai modul [cite: 57, 61, 66, 71]
    function jumlah($A, $B) {
        $jumlahbil = $A + $B;
        return $jumlahbil;
    }

    function kurang($A, $B) {
        $kurangbil = $A - $B;
        return $kurangbil;
    }

    function kali($A, $B) {
        $kalibil = $A * $B;
        return $kalibil;
    }

    function bagi($A, $B) {
        // Proteksi tambahan agar tidak error jika pembagi adalah 0
        if ($B == 0) return 0;
        $bagibil = $A / $B;
        return $bagibil;
    }

    // Menampilkan output sesuai format Latihan 2 [cite: 78, 81, 84, 90, 95, 101]
    echo "<br>";
    echo "Bilangan Pertama : $A <br>";
    echo "Bilangan Kedua : $B <br><br>";

    echo "Hasil Penjumlahan 2 buah bilangan <br>";
    printf("Penjumlahan antara : %d + %d = %d", $A, $B, jumlah($A, $B));
    echo "<br><br>";

    echo "Hasil Pengurangan 2 buah bilangan <br>";
    printf("Pengurangan antara : %d - %d = %d", $A, $B, kurang($A, $B));
    echo "<br><br>";

    echo "Hasil Perkalian 2 buah bilangan <br>";
    printf("Perkalian antara : %d * %d = %d", $A, $B, kali($A, $B));
    echo "<br><br>";

    echo "Hasil Pembagian 2 buah bilangan <br>";
    if ($B == 0) {
        echo "Pembagian tidak dapat dilakukan (Pembagi Nol)";
    } else {
        printf("Pembagian antara : %d / %d = %d", $A, $B, bagi($A, $B));
    }
    echo "<br><br>";
}
?>

</body>
</html>
