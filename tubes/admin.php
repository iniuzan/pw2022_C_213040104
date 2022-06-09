<?php 
session_start();
if (!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
require 'functions.php';
$film = query("SELECT * FROM film ORDER BY id DESC");

//ketika tombol cari ditekan
if (isset($_POST['cari'])){
    $film = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Galva Media</title>
</head>

<body>
    <div class="container">
        <h1>Daftar Film</h1>
        <a href="tambah.php" class="btn btn-primary">Tambah Data Film</a>
        <form action="" method="POST" class="mt-4">
            <div class="input-group mb-3">
                <input class="form-control" type="text" id="keyword" name="keyword" size="30" autofocus
                    placeholder="Masukkan Keyword Pencarian" autocomplete="off">
                <button type="submit" name="cari" id="tombol-cari" class="btn btn-primary">Cari!</button>
            </div>

        </form>
        <div id="kontainer">
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
                        <a href="ubah.php?id=<?=$row['id'];?>" class="btn btn-warning"><i
                                class="bi bi-pencil-square"></i></a>
                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');"
                            class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                        <a href="detail.php?id=<?=$row['id']?>" class="btn btn-info center"><i
                                class="bi bi-info-square-fill"></i></a>
                    </td>
                </tr>
                <?php $i++ ;?>
                <?php endforeach; ?>

            </table>
        </div>

    </div>

    <br>






    <div class="text-center mb-5">

        <a href="./logout.php" class='btn btn-danger'>Logout!</a>
    </div>


    <!-- Own JS -->
    <script src="ajax/script.js"></script>
</body>

</html>