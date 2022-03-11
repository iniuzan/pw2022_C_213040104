<?php
$mahasiswa = [
    ["Muhamad Fauzan", "213040104", "Teknik Informatika", "mfauzanabdurrach84@gmail.com" ],
    ["Budi Doremi", "213040180", "Teknik Kimia", "Doremifasolasido.budi@gmail.com"],
    ["Alfa edison", "223040010", "Teknik pertambangan", "alfaedison@gmail.com"]
    ]
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

    <!-- cara manual -->
    <h1>Daftar Mahasiswa</h1>
    
    <ul>
        <li>Muhamad Fauzan</li>
        <li>213040104</li>
        <li>Teknik Informatika</li>
        <li>mfauzanabdurrach84@gmail.com</li>
    </ul>

    <!-- Menggunakan foreach PHP -->
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) :?>
    <ul>
        <li>Nama: <?= $mhs[0]?></li>
        <li>NPM: <?= $mhs[1]?></li>
        <li>Prodi: <?= $mhs[2]?></li>
        <li>Email: <?= $mhs[3]?></li>
    </ul>
<?php endforeach; ?>

</body>
</html>