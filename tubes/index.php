<?php 
require 'functions.php';
$film = query("SELECT * FROM film");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galva Media</title>
</head>

<body>
    <h1>Daftar Film</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Judul Film</th>
            <th>Thumbnail</th>
            <th>Genre</th>
            <th>Tahun Rilis</th>
            <th>Sutradara</th>
            <th>Penerbit</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($film as $row):?>

        <tr>
            <td><?= $i ?></td>
            <td><?= $row['judul_film'] ?></td>
            <td><img src="./img/<?= $row['thumbnail'] ?>" width="140px" alt="">
            </td>
            <td><?= $row['genre'] ?></td>
            <td><?= $row['tahun_rilis'] ?></td>
            <td><?= $row['sutradara'] ?></td>
            <td><?= $row['penerbit'] ?></td>
            <td>
                <a href="#">Ubah</a> |
                <a href="#">Hapus</a> |
                <a href="#">Detail</a>
            </td>
        </tr>
        <?php $i++ ;?>
        <?php endforeach; ?>

    </table>
</body>

</html>