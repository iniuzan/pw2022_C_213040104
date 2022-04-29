<?php 

$conn = mysqli_connect('localhost','root','','tubes_pw2022_c_213040104');

// Cek Koneksi antara Website dengan database berhasil atau tidak.


// if ( $conn == true ){
//     echo "<h1>Connection Success!</h1>";
// }else{
//     echo "<h1>Connection Failed!</h1>";
//     exit();
// }

//ambil data dari tabel film

function query ($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


?>