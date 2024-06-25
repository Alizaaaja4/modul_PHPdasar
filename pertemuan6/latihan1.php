<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        :root{
            background-color: black;
        }
        .kotak {
            width: 60px;
            height: 60px;
            background-color: #BADA55;
            text-align: center;
            line-height: 60px;
            margin: 30px;
            float: left;
            transition: transform 1s, border-radius 1s, box-shadow 1s; /* Transition juga pada box-shadow */
        }

        .kotak:hover {
            transform: rotate(180deg);
            border-radius: 50%;
            box-shadow: 0 0 10px 5px red; /* Menggunakan box-shadow untuk menambahkan bayangan */
        }
        .clear {
            clear: both;
        }

    </style>
</head>
<body>

<?php

$angka = [[1,2,3],[4,5,6],[7,8,9]];

?>

<?php foreach ( $angka as $num ) : ?>
    <?php foreach ( $num as $a ) : ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>

</body>
</html>