<?php
// Contoh script pengkondisian yang tidak memunculkan Warning sesuai slide
$a = 10;
if ($a < 0) echo "Nilai A negatif";
else header("Location: test.php");
?>