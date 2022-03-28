<?php
// Cek apakah data ada di $_GET
if (!isset($_GET["nama"])||
    !isset($_GET["nrp"])||
    !isset($_GET["email"])||
    !isset($_GET["jurusan"])
    ){
    //redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>
    <h1>Detail Mahasiswa</h1>
    <ul>
        <li>
            <img src="./img/<?= $_GET["gambar"]?>" alt="" width="200px">
        </li>
        <li><?= $_GET ["nama"] ?></li>
        <li><?= $_GET ["npm"] ?></li>
        <li><?= $_GET ["email"] ?></li>
        <li><?= $_GET ["jurusan"] ?></li>
        <li><a href="latihan1.php">kembali</a></li>

    </ul>
</body>

</html>