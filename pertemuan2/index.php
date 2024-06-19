<?php 
// Pertemuan 2 = PHP Dasar
// 1. Sintax PHP
// 2. Standar Output (echo, print, print_r, var_dump)
echo "Saya siap belajat PHP dasar<br>"; 
print "Saya asisten daskom laboratoty <br>";
print_r("Saya seorang software developer <br>");
var_dump("Saya seorang anggota divisi MLC <br>");

// 3. Variabel dan tipe data
$nama = "Aliza";

echo "saya sedang latihan PHP $nama <br> <br>";

// 4. Operator
// [+] operator aritmatika -> +, -, /, %, *
$angka1= 4;
$angka2=5;
$angkaTotal;
$angkaTotal = $angka1 * $angka2;
echo $angkaTotal; 
echo "<br>";
echo 8 + 2; echo "<br>";

// [+] operator penggabung string -> .
$namaDepan = " Daskom";
$namaBelakang = "Laboratory";
echo $namaDepan . " " . $namaBelakang; echo "<br>";

// [+] operator assigment -> =, +=, *=, /=, %=, .=
$x = 6;
$x += 10;
echo $x; echo "<br>";

// [+] operator perbandingan -> <, >, >=, <=, ==, !=
var_dump (1 < 8); echo "<br>";

// [+] identitas -> ===, !==
var_dump(1 ==="1"); echo "<br>";

// [+] logika -> &&, ||. |
var_dump($x < 20 && $x % 2 == 0);


// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 2</title>
</head>
<body>
    <h1>Semangat belajar <?php echo $nama; ?></h1>
    <p><?php echo "ini adalah paragraph"?></p>
</body>
</html>