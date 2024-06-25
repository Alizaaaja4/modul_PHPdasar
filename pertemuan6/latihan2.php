<?php

// Array numerik
// $mahasiswa = [
//     ["Alza Nurfahni", "0987654321", "fahri45@gmail.com", "Teknik Nuklir"],
//     ["Ghufron Adrinsyah", "047238438", "gaa89@gmail.com", "Teknik Pilot"],
//     ["Dhiya isnavisa", "023487909", "dhy12@gmail.com", "Teknik Perkapalan"],
// ];

// Array Assciative
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "gambar" => "gambar1.jpg",
        "nama" => "Alfatika Nurman", 
        "nrp" => "098765432",
        "email" => "atika098@gmail.com",
        "jurusan" => "S1 Teknik Kehutanan",
        "nilai" => [80, 68, 48]
    ],
    [
        "gambar" => "gambar2.jpg",
        "nama" => "Deanisa Iyasihaka", 
        "nrp" => "0238756238",
        "email" => "deyua897@gmail.com",
        "jurusan" => "S1 Teknik Kebidanan",
        "nilai" => [90, 78, 88]
    ],
];

// echo $mahasiswa[1]["nilai"][1];

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

    <?php foreach ( $mahasiswa as $data ) : ?>
        <ul>
            <li>
                <img src="img/<?= $data['gambar']; ?>" alt="">
            </li>
            <li>Nama: <?= $data["nama"]; ?></li>
            <li>NIM: <?= $data["nrp"]; ?></li>
            <li>Email: <?= $data["email"]; ?></li>
            <li>Jurusan: <?= $data["jurusan"]; ?></li>
            <li>Nilai:
                <ul>
                    <?php foreach ($data["nilai"] as $hasil) : ?>
                        <li><?= $hasil; ?></li>
                    <?php endforeach; ?>
                </ul>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>
