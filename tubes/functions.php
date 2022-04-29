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

function tambah($data){
    global $conn;

    $judul_film = htmlspecialchars($data['judul_film']) ;
    $thumbnail = htmlspecialchars($data['thumbnail']);
    $genre = htmlspecialchars($data['genre']);
    $tahun_rilis = htmlspecialchars($data['tahun_rilis']);
    $sutradara = htmlspecialchars($data['sutradara']);
    $penerbit = htmlspecialchars($data['penerbit']);

    //query insert data

    $query = "INSERT INTO film
            VALUES
            ('','$judul_film','$thumbnail','$genre','$tahun_rilis','$sutradara','$penerbit')";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM film WHERE id = $id");

    return mysqli_affected_rows($conn);
    
}


?>