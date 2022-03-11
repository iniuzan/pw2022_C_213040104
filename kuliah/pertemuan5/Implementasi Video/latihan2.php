<?php
//pengulangan pada array
//for / foreach

$angka = [3,2,15,20,11,77,89,80,99];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .box {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin:3px;
            float:left;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <!-- Kita bisa menggunakan for loop untuk menampilkan isi array -->
    <!-- dibuat Menggunakan For Loop Biasa -->
    <?php for ($i = 0; $i < 7; $i++) { ?>
    <div class = "box"> <?php echo $angka[$i]; ?> </div>
    <?php } ?>

    <div class="clear"></div>
    <!-- dibuat menggunakan method Count  -->
    <!-- atau juga bisa menggunakan methode count untuk menentukan nilai maksimal perulangan -->
    <?php for ($i = 0; $i < count($angka); $i++) { ?>
    <div class = "box"> <?php echo $angka[$i] ?> </div>
    <?php } ?>


    <div class="clear"></div>
    <!-- dibuat menggunakan foreach -->
    <?php foreach($angka as $a) {?>
        <div class = "box" ><?php echo $a; ?></div>
    <?php } ?>

    <div class="clear"></div>

<?php foreach ($angka as $a) : ?>
    <div class="box"><?php echo $a ?></div>
<?php endforeach;?>


</body>
</html>