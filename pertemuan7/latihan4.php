<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>

<?php
if(isset($_POST["submit"])) : ?>
    <h1>Hallo, selamat datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>

<!-- untuk action="" dia akan mengirim data ke diri sendiri -->
<form action="" method="post">
    masukkan nama:
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim</button>
</form>

</body>
</html>