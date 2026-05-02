<?php
$con = mysqli_connect("localhost", "root", "");

mysqli_select_db($con, "lat_dbase"); 

$sql = "CREATE TABLE tbl_mhs (
    mhsID int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(mhsID),
    FirstName varchar(15),
    LastName varchar(15),
    Age int
)";

mysqli_query($con, $sql);

$input = mysqli_query($con, "INSERT INTO tbl_mhs(FirstName, LastName, Age) 
          VALUES('Anjar', 'Prabowo', 25)");

if ($input) {
    echo "Tabel berhasil dibuat dan data berhasil dimasukkan.";
} else {
    echo "Error: " . mysqli_error($con);
}
?>
