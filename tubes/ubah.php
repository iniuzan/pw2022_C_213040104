<?php 
session_start();
if (!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
require 'functions.php';

//ambil data pada url

$id = $_GET['id'];

//query data film berdasarkan id
$f = query("SELECT * FROM film WHERE id = $id")[0];

//cek apakah tombol submit sudah ditekan / belum
if ( isset($_POST['submit']) ){
    

    //cek apakah data berhasil di ubah atau tidak
    
    if( ubah($_POST) > 0 ){
        echo "
        <script>
        alert('DATA BERHASIL DIUBAH!');
        document.location.href = 'index.php'
        </script>
        ";
    } else{
        echo "
        <script>
        alert('DATA GAGAL DIUBAH!');
        document.location.href = 'index.php'
        </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Film</title>
</head>

<body>
    <h1>Ubah Data Film</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$f['id']?>">
        <input type="hidden" name="thumbnailLama" value="<?=$f['thumbnail']?>">
        <ul>
            <li>
                <label for="judul_film">Judul Film</label>
                <input type="text" name="judul_film" id="judul_film" required value="<?= $f["judul_film"] ?>">
            </li>
            <li>
                <label for="thumbnail">Thumbnail</label> <br>
                <img src="assets/img/<?=$f['thumbnail']?>" width="40px"> <br>
                <input type="file" name="thumbnail" id="thumbnail">
            </li>
            <li>
                <label for="genre">Genre</label>
                <input type="text" name="genre" id="genre" required value="<?= $f["genre"] ?>">
            </li>
            <li>
                <label for="tahun_rilis">Tahun Rilis</label>
                <input type="text" name="tahun_rilis" id="tahun_rilis" required value="<?= $f["tahun_rilis"] ?>">
            </li>
            <li>
                <label for="sutradara">Sutradara</label>
                <input type="text" name="sutradara" id="sutradara" required value="<?= $f["sutradara"] ?>">
            </li>
            <li>
                <label for="penerbit">Penerbit</label>
                <input type="text" name="penerbit" id="penerbit" required value="<?= $f["penerbit"] ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>

    </form>

</body>

</html>