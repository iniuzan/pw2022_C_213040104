<?php 
session_start();
if (!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
require 'functions.php';

//cek apakah tombol submit sudah ditekan / belum
if ( isset($_POST['submit']) ){


    //cek apakah data berhasil di tambahkan atau tidak
    
    if( tambah($_POST) > 0 ){
        echo "
        <script>
        alert('DATA BERHASIL DITAMBAHKAN!');
        document.location.href = 'admin.php'
        </script>
        ";
    } else{
        echo "
        <script>
        alert('DATA GAGAL DITAMBAHKAN!');
        document.location.href = 'admin.php'
        </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Data Film</title>
</head>

<body>
    <div class="container">
        <h1 class=" h3 text-center">Tambah Data Film</h1>
        <div class="row mt-3 d-flex justify-content-center ">
            <div class="col-4 text-center">
                <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="judul_film" class="sr-only form-label">Judul Film</label>
                        <input type="text" class="form-control" name="judul_film" id="judul_film"
                            placeholder="Masukkan Judul Film">
                    </div>

                    <div class="mb-3">
                        <label for="sinopis">Sinopsis</label>
                        <textarea class="form-control" name="sinopsis" id="sinopsis" style="height: 100px"
                            placeholder="Masukkan Sinopsis Film"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="thumbnail" class="form-label">Thumbnail</label>
                        <img src="assets/img/" class="img-thumbnaul" id="img-preview" style="display: none;" alt="">
                        <input type="file" class="form-control" name="thumbnail" id="thumbnail" required
                            onchange="previewImage()">
                    </div>
                    <div class=" mb-3">
                        <label for="genre" class="form-label">Genre</label>
                        <input type="text" class="form-control" name="genre" id="genre" required
                            placeholder="Masukkan Genre Film">
                    </div>

                    <div class="mb-3">
                        <label for="tahun_rilis" class="form-label">Tahun Rilis</label>
                        <input type="text" class="form-control" name="tahun_rilis" id="tahun_rilis"
                            placeholder="Masukkan Tahun Rilis Film" required>
                    </div>

                    <div class="mb-3">
                        <label for="sutradara" class="form-label">Sutradara</label>
                        <input type="text" class="form-control" name="sutradara" id="sutradara"
                            placeholder="Masukkan nama sutradara Film" required>
                    </div>
                    <div class="mb-3">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" id="penerbit"
                            placeholder="Masukkan nama penerbit Film" required>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Tambah Data</button>

                </form>

                <a href="admin.php" class="btn btn-primary mt-3 mb-4">Kembali ke Daftar
                    Film</a>

            </div>
        </div>



        </form>

    </div>
    </div>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="js/script.js"></script>

</body>

</html>