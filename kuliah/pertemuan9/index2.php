<?php 
// Koneksi ke database
$conn = mysqli_connect("localhost","root","","pw2022_c_213040104");

//ambil data dari tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");


//ambil data (Fetch) mahasiswa dari $result
// mysqli_fetch_row() //mengembalikan numeric array
// mysqli_fetch_assoc() //mengembalikan associative array
// mysqli_fetch_array() //mengembalikan numeric atau associative array tapi double. mending pake associative
// mysqli_fetch_object()



// while($mhs = mysqli_fetch_assoc($result)){
//     var_dump($mhs);
// }


// if (!$result){
//     echo mysqli_error($conn);
// }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php while( $row = mysqli_fetch_assoc($result) ) :?>
        <tr>
            <td><?=$i?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td><img src="./img/<?= $row["gambar"]; ?>  " alt="" width="90"></td>
            <td><?= $row["nrp"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
        </tr>
        <?php $i ++; ?>
        <?php endwhile ;?>
    </table>
</body>

</html>