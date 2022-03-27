<?php 
// $mahasiswa = [
//     ["Muhamad Fauzan","213040104","mfauzanabdurrach84@gmail.com", "Teknik Informatika"],
//     ["Nizar Alfattan","213040100","nizaralfattan@gmail.com", "Teknik Otomasi"],
    
// ]


// Array Associative
// sama seperti array numeric, hanya saja
//Key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
    "gambar" => "apple.png",
    "nama" => "Muhamad Fauzan",
    "npm" => "213040104",
    "email" => "mfauzanabdurrach84@gmail.com",
    "jurusan" => "Teknik Informatika"
    ],
    [
    "gambar" => "Fruit Platter.png",
    "nama" => "Nizar Alfattan",
    "npm" => "213040100",
    "email" => "nizaralfattan@gmail.com",
    "jurusan" => "Teknik Otomasi Industri",
    "tugas" => [90,80,100]
    ],

];
    echo $mahasiswa[1]["tugas"][1]
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs ):?>
    <ul>
        <li>
            <img src="./img/<?=$mhs["gambar"]; ?>" alt="">
        </li>
        <li>Nama: <?php echo $mhs["nama"] ?></li>
        <li>NPM: <?php echo $mhs["npm"] ?></li>
        <li>Email: <?php echo $mhs["email"] ?></li>
        <li>Jurusan: <?php echo $mhs["jurusan"] ?></li>
    </ul>
    <!-- urutan pada array tidak akan dipedulikan. PHP hanya peduli akan Key-nya. -->
    <?php endforeach; ?>
</body>

</html>