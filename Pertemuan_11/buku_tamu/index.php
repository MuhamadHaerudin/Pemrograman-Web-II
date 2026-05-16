<?php
include "../config/database.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku Tamu</title>
</head>
<body>

<h2>Data Buku Tamu</h2>

<a href="form.php">+ Tambah Data</a>
<br><br>

<?php
$limit = 5;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

$query = mysqli_query($conn, "SELECT * FROM buku_tamu ORDER BY id DESC LIMIT $start, $limit");

while ($row = mysqli_fetch_assoc($query)) {
    echo "<b>$row[nama]</b> ($row[email])<br>";
    echo "$row[pesan]<br>";
    echo "<hr>";
}

// pagination
$total_result = mysqli_query($conn, "SELECT COUNT(*) as total FROM buku_tamu");
$total_row = mysqli_fetch_assoc($total_result);
$total_data = $total_row['total'];

$total_page = ceil($total_data / $limit);

echo "<br>Halaman: ";
for ($i = 1; $i <= $total_page; $i++) {
    echo "<a href='?page=$i'>$i</a> ";
}
?>

</body>
</html>