<?php 

// Koneksi ke database
// Masukkan function mysqli_connect ke variabel koneksi
$conn = mysqli_connect("localhost","root","","pw2022_c_213040104");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>