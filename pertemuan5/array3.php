<?php

// array numerik
$mahasiswa = [
    ["Aliza Nurfitrian", "087654321", "Teknil Nuklir", "zahra56@gmail.com"],
    ["Ghufron Adrinsyah", "047238438", "Teknil Pilot", "gaa89@gmail.com"],
    ["Dhiya isnavisa", "023487909", "Teknil Perkapalan", "dhy12@gmail.com"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>Nama: <?= $mhs[0]; ?></li>
            <li>NIM: <?= $mhs[1]; ?></li>
            <li>Jurusan: <?= $mhs[2]; ?></li>
            <li>Email: <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>