<?php 
require 'functions.php';

if (isset ($_POST['register'])){


    if(registrasi($_POST)>0){
        echo "
        <script>
        alert('user baru berhasil ditambahkan')
        </script>
        ";
    } else {
        echo mysqli_error($conn);
        echo "
        <script>
        alert('user baru gagal ditambahkan')
        </script>
        ";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Halaman Registrasi</title>
</head>

<body>
    <div class="container-fluid">
        <div class="h3 text-center">Halaman Registrasi Admin</div>
        <div class="container-fluid mt-5">

            <form action="" method="POST" class="login-email">
                <div class="mb-3 text-center mt-4">
                    <label for="username" class="visually-hidden">Username:</label>
                    <input type="text" name="username" id="username" class="form-control"
                        placeholder="Masukkan Username Baru">
                </div>
                <div class="mb-3 text-center mt-4">
                    <label for="password" class="visually-hidden">Password:</label>
                    <input type="password" name="password" id="password" class="form-control"
                        placeholder="Masukkan Password">
                </div>
                <div class="mb-3 text-center mt-4">
                    <label for="confirmation" class="visually-hidden">Konfirmasi Password:</label>
                    <input type="password" name="confirmation" id="confirmation" class="form-control"
                        placeholder="Konfirmasi Password">
                </div>
                <div class="text-center">
                    <button type="submit" name="register" class="btn btn-primary">Register</button>
                </div>
                <br>
                <div class="text-center">

                    <a href="login.php" class="btn btn-warning" role="button">Login</a>
                </div>


            </form>
        </div>

    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>


</html>