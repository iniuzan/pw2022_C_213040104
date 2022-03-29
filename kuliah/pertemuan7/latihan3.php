<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>

<?php if(isset($_POST["submit"])): ?>
<h1>Halo, Selamat datang <?= $_POST["nama"] ?></h1>
<?php endif; ?>

<body>
    <form action="latihan4.php" method="POST">
        Masukkan Nama anda
        <input type="text" name=nama>
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>

</html>