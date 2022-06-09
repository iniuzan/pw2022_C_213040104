<?php
session_start(); 

//cek cookie
if (isset($_COOKIE['login'])){
    if($_COOKIE['login'] == 'true'){
        $_SESSION['login'] == true;
    }
}

if (isset($_SESSION['login'])){
    header("Location: admin.php");
    exit;
}

require 'functions.php';


if (isset($_POST['login'])){


    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");

    //cek username

    if (mysqli_num_rows($result) === 1){
        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])){
            //set session
            $_SESSION['login'] = true;

            //cek remember me
            if (isset($_POST['remember'])){
                // buat cookie
                setcookie('login','true',time() + 60);
            }
            

            header("Location:admin.php");
            exit;
        }
    }

    $error = true;

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Halaman Login</title>
</head>

<body>
    <div class="container-fluid">
        <h1 class="h3 text-center">Halaman Login</h1>
        <div class="container-fluid mt-5">
            <?php if (isset($error)): ?>
            <p class="text-center" style="color:red; font-style:italic ; margin:auto;">Username / Password salah!</p>
            <?php endif; ?>

            <form action="" method="POST" class="login-email">
                <div class="mb-3 text-center mt-4">
                    <label for="username" class="visually-hidden">Username:</label>
                    <div>
                        <input type="text" name="username" id="username" placeholder="Masukkan Username"
                            autocomplete="off">
                    </div>
                </div>
                <div class="mb-3 text-center mt-4"><label for="password" class="visually-hidden">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Masukkan Password"
                        autocomplete="off">
                </div>

                <div class="mb-3 text-center mt-4">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember me:</label>
                </div>
                <div class="mb-3 text-center mt-4">
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                </div>

            </form>
        </div>
    </div>


    <!-- <h3>Belum menjadi Admin?</h3>
    <p>Klik <a href="registrasi.php" class="btn btn-success" role="button">Disini</a></p> -->

    <!-- <a href="index.php" class="btn btn-danger" role="button">Kembali</a> -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>