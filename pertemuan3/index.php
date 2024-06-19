<?php
// Perulangan
// 1. For loop
for($i =0; $i <= 10; $i++){
    echo "Daskom Laboratory"; echo "<br>";
}
// 2. while loop
$x =1;
while($x < 5) {
    echo "aliza aliza <br>";
$x++;
}
// 3. do while loop
$y = 0;
do {
    echo "#LoopingForever <br>";

$y++;
}while($y < 10)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 3</title>
    <style>
        .warna-baris-ganjil {
            background-color: yellow;
        }
        .warna-baris-genap {
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 
            for ($i = 1; $i <= 5; $i++ ){
                if ($i % 2 == 1) {
                    echo '<tr class="warna-baris-ganjil">';
                } else {
                    echo '<tr class="warna-baris-genap">';
                }
                for($j = 1; $j <= 5; $j++){
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
