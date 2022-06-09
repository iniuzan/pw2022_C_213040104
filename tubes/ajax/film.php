<?php 
require '../functions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM film
WHERE
judul_film LIKE '%$keyword%' OR
genre LIKE '%$keyword%' OR
tahun_rilis LIKE '%$keyword%' OR
sutradara LIKE '%$keyword%' OR
penerbit LIKE '%$keyword%'
";
$film = query($query)



?>

<table border="1" cellpadding="10" cellspacing="0" class="table">
    <tr>
        <th>No</th>
        <th>Judul Film</th>
        <th>Thumbnail</th>
        <th>Aksi</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($film as $row):?>

    <tr>
        <td><?= $i ?></td>
        <td><?= $row['judul_film'] ?></td>
        <td><img src="./assets/img/<?= $row['thumbnail'] ?>" width="140px" alt="">
        </td>
        <td>
            <a href="ubah.php?id=<?=$row['id'];?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');" class="btn btn-danger"><i
                    class="bi bi-trash-fill"></i></a>
            <a href="detail.php?id=<?=$row['id']?>" class="btn btn-info center"><i
                    class="bi bi-info-square-fill"></i></a>
        </td>
    </tr>
    <?php $i++ ;?>
    <?php endforeach; ?>

</table>