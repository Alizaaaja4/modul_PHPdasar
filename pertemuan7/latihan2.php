<?php
// SUPERGLOBALS
// variable global milik PHP
// merupakan array associative

// $_GET
// cara penulisan ke-1
// $_GET["nama"] = "Aliza Nurfitrian M";
// $_GET["kelas"] = "TT-45-03";

// cara penulisan ke-2
// ke link url ketikan ...php?(key)=(value)
// example: ...php?nama=Aliza Nurfitrian

$barang = [
    [
        "image" => "img1.jpg",
        "nama" => "Kost Bumi Lestari",
        "harga" => "Rp. 10.000.000/thn",
        "alamat" => "Jln. Sukpar",
        "status" => "Sisa 2 kamar kosong"
    ],
    [
        "image" => "img2.jpg",
        "nama" => "Kost Permatasari",
        "harga" => "Rp. 12.000.000/thn",
        "alamat" => "Jln. Sukbir",
        "status" => "Sisa 5 kamar kosong"
    ],
    [
        "image" => "img3.jpg",
        "nama" => "Kost Residance",
        "harga" => "Rp. 8.000.000/6bln",
        "alamat" => "Jln. Sukbar",
        "status" => "Sisa 1 kamar kosong"
    ],
    [
        "image" => "img4.jpg",
        "nama" => "Kost Parahiyangan",
        "harga" => "Rp. 11.580.000/thn",
        "alamat" => "Jln. Sukpar",
        "status" => "Sisa 3 kamar kosong"
    ],
    [
        "image" => "img5.jpg",
        "nama" => "Kost Olive",
        "harga" => "Rp. 10.500.000/thn",
        "alamat" => "Jln. Sukbir",
        "status" => "Sisa 8 kamar kosong"
    ]
];

// var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoKostsan (GET)</title>
</head>
<body>
    <h1>Welcome Dashboard GoKostsan</h1>

    <?php foreach ($barang as $data) : ?>
        <li>
            <a href="latihan3.php?nama=<?= $data["nama"]; ?>&harga=<?= $data["harga"]; ?>&alamat=<?= $data["alamat"]; ?>&status=<?= $data["status"]; ?>&image=<?= $data["image"]; ?>"><?= $data["nama"]; ?></a>    
        </li>
    <?php endforeach; ?>
</body>
</html>
