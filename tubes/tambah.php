<?php 

require 'functions.php';

//cek apakah tombol submit sudah ditekan / belum
if ( isset($_POST['submit']) ){


    //cek apakah data berhasil di tambahkan atau tidak
    
    if( tambah($_POST) > 0 ){
        echo "
        <script>
        alert('DATA BERHASIL DITAMBAHKAN!');
        document.location.href = 'index.php'
        </script>
        ";
    } else{
        echo "
        <script>
        alert('DATA GAGAL DITAMBAHKAN!');
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
    <title>Tambah Data Film</title>
</head>

<body>
    <h1>Tambah Data Film</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="judul_film">Judul Film</label>
                <input type="text" name="judul_film" id="judul_film" required>
            </li>
            <li>
                <label for="thumbnail">thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail">
            </li>
            <li>
                <label for="genre">genre</label>
                <input type="text" name="genre" id="genre" required>
            </li>
            <li>
                <label for="tahun_rilis">tahun rilis</label>
                <input type="text" name="tahun_rilis" id="tahun_rilis" required>
            </li>
            <li>
                <label for="sutradara">sutradara</label>
                <input type="text" name="sutradara" id="sutradara" required>
            </li>
            <li>
                <label for="penerbit">penerbit</label>
                <input type="text" name="penerbit" id="penerbit" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>

    </form>

</body>

</html>