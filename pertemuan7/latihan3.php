<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) || 
    !isset($_GET["harga"]) ||
    !isset($_GET["alamat"]) ||
    !isset($_GET["status"])
    ){
    // redirect
    header("Location: latihan2.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kost</title>
</head>
<body>
    
<ul>
    <li><img src="img/<?= $_GET["image"]; ?>" alt=""></li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["harga"]; ?></li>
    <li><?= $_GET["alamat"]; ?></li>
    <li><?= $_GET["status"]; ?></li>
</ul>

<a href="latihan2.php">Kembali</a>

</body>
</html>