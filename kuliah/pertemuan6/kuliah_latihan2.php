<?php 
//Array Associative
//Array yang indexnya string
$mahasiswa = [
    [
        "nama" => "Muhamad Fauzan Abdul Rochman",
        "npm" => "213040104",
        "email" => "mfauzanabdurrach84@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Nizar Alfattan",
        "npm" => "21304078",
        "email" => "nizaralfattan@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama"=> "Adam Maulana",
        "npm" =>"213040086",
        "email" => "adammaulana@gmail.com",
        "jurusan" => "Teknik Industri"]
];

// var_dump($mahasiswa [0]["nama"])
?>

<?php foreach ($mahasiswa as $mhs) { ?>

    <ul>
        <li>Nama: <?php echo $mhs["nama"]; ?> </li>
        <li>NPM: <?php echo $mhs["npm"]; ?> </li>
        <li>E-Mail: <?php echo $mhs ["email"]; ?></li>
        <li>Jurusan <?php echo $mhs ["jurusan"]; ?></li>
    </ul>
    
<?php } ?>

<hr>

<?php foreach ($mahasiswa as $mhs) { ?>
<ul>
    <?php foreach($mhs as $key => $value) { ?>
        <li><?php echo $key;  ?><?php echo $value; ?></li>
    <?php } ?>
</ul>

<?php } ?>