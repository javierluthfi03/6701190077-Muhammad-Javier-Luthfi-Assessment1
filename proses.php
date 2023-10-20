<?php
$angka1 = (double)$_POST["angka1"];
$angka2 = (double)$_POST["angka2"];
$operator = $_POST["operator"];

if ($operator === "+") {
    $hasil = $angka1 + $angka2;
} elseif ($operator === "-") {
    $hasil = $angka1 - $angka2;
} elseif ($operator === "*") {
    $hasil = $angka1 * $angka2;
} elseif ($operator === "/") {
    $hasil = $angka1 / $angka2;
} 

echo $hasil;
?>