<?php
$mahasiswa = [
      [
        "nama" => "Muhamad Fauzan Abdul Rochman",
        "npm" => "213040104",
        "email" => "mfauzanabdurrach84@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "Fauzan.JPG"
      ],
      [
        "nama" => "Klosingan singh",
        "npm" => "213040186",
        "email" => "klosingh@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "klos.jpeg"
      ],
      [
        "nama"=> "Agung Purnama Rahmat",
        "npm" =>"213040084",
        "email" => "agungmamez@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "Agung.JPG"
      ],
      [ 
        "nama"=> "Putra Rizqi",
        "npm" =>"213040090",
        "email" => "putriz@gmail.com",
        "jurusan" => "Teknik kimia",
        "gambar" => "Putra.JPG"
      ],
];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>

  <div class="container">
    <h1>Daftar mahasiswa</h1>
    
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <?php $no = 1;foreach($mahasiswa as $mhs){ ?>
        <tbody>
            <tr>
            <th scope="row"><?php echo $no++; ?></th>
            <td>
              <img src="./img/<?= $mhs["gambar"]?>"; width="100px" class="rounded-circle">
            </td>
            <td><?php echo $mhs["nama"]; ?></td>
            <td>
                <a href="" class="btn badge bg-warning">edit</a>
                <a href="" class="btn badge bg-danger">delete</a>
                <a href="./kuliah_latihan3.php?nama=<?= $mhs["nama"];?>&npm=<?=$mhs["npm"];?>&email=<?=$mhs["email"];?>&jurusan=<?=$mhs["jurusan"] ?>&gambar=<?=$mhs["gambar"]?> " class="btn badge bg-info">detail</a>
            </td>
            </tr>
            <?php } ?>
    </table>

  </div>
          </tbody>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>