<?php 

//variable scope / lingkup variabel
// $x = 10;

// function tampilX(){
//     global $x; //cari variabel X diluar function
//     echo $x;
// }

// tampilX();

?>

<?php
//superglobal
//variabel global milik PHPyang merupakan Array Associative
// var_dump($_GET);
// echo "<br>";
// var_dump($_POST);
// echo "<br>";
// echo "<br>";
// var_dump($_SERVER);
// echo "<br>";
// echo "<br>";
// echo $_SERVER["SERVER_NAME"]
?>

<?php 
// $_GET["nama"] = "Muhamad Fauzan";
// $_GET["nrp"] = "213040104";

// var_dump($_GET);

//kita bisa mengirimkan data menggunakan url

?>

<?php 
// tulis di url misalkan latihan1.php?nama=Muhamad%20Fauzan&nrp=213040104
// var_dump($_GET) 

?>

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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET </title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs) :?>
        <li>
            <a
                href="latihan2.php?nama= <?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"] ?>&email=<?= $mhs["email"] ?>&jurusan=<?= $mhs["jurusan"] ?>&gambar=<?= $mhs["gambar"] ?>"><?= $mhs["nama"] ?></a>
        </li>
        <?php endforeach;?>
    </ul>

</body>

</html>