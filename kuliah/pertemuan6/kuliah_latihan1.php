<?php
//Array Numeric
//Array yang index-nya berasosiasi / berpasangan dengan Angka
$mahasiswa = [
    
    ["Muhamad Fauzan Abdul Rochman", "213040104", "mfauzanabdurrach84@gmail.com", "Teknik Informatika"],
    ["Nizar Alfattan", "21304078", "nizaralfattan@gmail.com", "Teknik Informatika"],
    ["Adam Maulana", "213040086", "adammaulana@gmail.com", "Teknik Industri"]
];

// var_dump($mahasiswa[1][3])

?>

<?php foreach ($mahasiswa as $mhs) { ?>

<ul>
    <li>Nama: <?php echo $mhs[0]; ?> </li>
    <li>NPM: <?php echo $mhs[1]; ?> </li>
    <li>E-Mail: <?php echo $mhs [2]; ?></li>
    <li>Jurusan <?php echo $mhs [3]; ?></li>
</ul>

<?php } ?>


