<?php
session_start();
// if (!isset($_SESSION['login'])){
//     header("Location: login.php");
//     exit;
// }
require 'functions.php';
//ambil data pada URL

$id = $_GET['id'];


$f = query("SELECT * FROM film WHERE id = $id")[0];

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Detail Film</title>
    <div class="container">
        <h1>Detail Film</h1>

<body>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="assets/img/<?= $f["thumbnail"];?>""  class=" img-fluid rounded-start" alt="">
            </div>
            <div class="col-md-5">
                <div class="card-body">
                    <h3 class="card-title"><?= $f["judul_film"] ?></h3>
                    <p class="card-text"><?="Genre: ". $f["genre"] ?></p>
                    <p class="card-text"><?= "Tahun Rilis: ". $f["tahun_rilis"] ?></p>
                    <p class="card-text"><?= "Sutradara: ". $f["sutradara"] ?></p>
                    <p class="card-text"><?= "Penerbit: ". $f["penerbit"] ?></p>

                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Sinopsis</h4>
            <p class="card-text"><?= $f['sinopsis'] ?></p>
        </div>
    </div>
    <a href="index.php" class="mb-2 mt-3 btn btn-danger">Kembali</a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</head>