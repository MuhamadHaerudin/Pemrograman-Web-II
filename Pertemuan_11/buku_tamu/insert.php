<?php
include "../config/database.php";

$nama  = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO buku_tamu (nama, email, pesan)
VALUES ('$nama', '$email', '$pesan')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>