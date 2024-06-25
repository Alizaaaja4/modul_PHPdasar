<?php

// array -> sebuah variabel yang dapat memiliki banyak nilai
// 1. cara lama
$hari = array("Senin", "Selasa", "Rabu");

// 2. cara baru
$bulan = ["januari", "februari", "maret"];

// elemen pada array boleh memiliki tipe data yang berbeda
$campur = ["seblak", "pop ice", 2, true];


// Menampilkan array di layar
// => var_dump() & print_r ()
// var_dump($hari);
// echo "<br>";
// print_r ($bulan);
// echo "<br>"; echo "<br>";

// Jika ingin menampilkan 1 elemen pada array
// echo $campur[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis"; 
echo "<br>";
var_dump($hari);
?>