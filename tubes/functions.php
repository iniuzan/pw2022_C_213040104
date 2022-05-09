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

    $judul_film = htmlspecialchars($data['judul_film']);
    $genre = htmlspecialchars($data['genre']);
    $tahun_rilis = htmlspecialchars($data['tahun_rilis']);
    $sutradara = htmlspecialchars($data['sutradara']);
    $penerbit = htmlspecialchars($data['penerbit']);

    //upload gambar
    $thumbnail = upload();
    if ( !$thumbnail ){
        return false;
    }
    //query insert data

    $query = "INSERT INTO film
            VALUES
            ('','$judul_film','$thumbnail','$genre','$tahun_rilis','$sutradara','$penerbit')";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES['thumbnail']['name'];
    $ukuranFile = $_FILES['thumbnail']['size'];
    $error = $_FILES['thumbnail']['error'];
    $tmpName = $_FILES['thumbnail']['tmp_name'];


    //cek apakah tidak ada gambar yang diupload
    if ($error ===4 ){
        echo "
        <script>
        alert('TIDAK ADA GAMBAR YANG DIUPLOAD!');
        </script>
        ";
        return false;
    }

    //cek apa yang diupload (Verifikasi)
    $validPicExt = ['jpg','jpeg','png'];
    $picExt = explode('.',$namaFile);
    $picExt = strtolower(end($picExt));

    if (!in_array($picExt,$validPicExt)){
        echo "
        <script>
        alert('YANG ANDA UPLOAD BUKAN GAMBAR!');
        </script>
        ";
    }

    //cek ukuran gambar
    if ($ukuranFile > 10000000 ){
        echo "
        <script>
        alert('UKURAN GAMBAR TERLALU BESAR!');
        </script>
        ";
        return false;

    }

    //lolos pengecekan, gambar ready to upload
    //generate nama file baru
    $namaFileBaru = uniqid();
    $namaFileBaru.= '.';
    $namaFileBaru.= $picExt;
    // var_dump($namaFileBaru);


    move_uploaded_file($tmpName,'assets/img/'.$namaFileBaru);
    return $namaFileBaru;
}

function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM film WHERE id = $id");

    return mysqli_affected_rows($conn);
    
}

function ubah($data){
    global $conn;

    $id = $data['id'];
    $judul_film = htmlspecialchars($data['judul_film']) ;
    $thumbnailLama = htmlspecialchars($data['thumbnailLama']);

    //cek apakah user pilih gambar baru atau tidak
    if ($_FILES['thumbnail']['error'] ===4){
        $thumbnail = $thumbnailLama;
    } else{
        $thumbnail = upload();
    }
    
    $genre = htmlspecialchars($data['genre']);
    $tahun_rilis = htmlspecialchars($data['tahun_rilis']);
    $sutradara = htmlspecialchars($data['sutradara']);
    $penerbit = htmlspecialchars($data['penerbit']);
    
    
    // query Update data

    $query = "UPDATE film SET 
                judul_film = '$judul_film',
                thumbnail = '$thumbnail',
                genre = '$genre',
                tahun_rilis = '$tahun_rilis',
                sutradara = '$sutradara',
                penerbit = '$penerbit'
            WHERE id = $id;
                ";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM film
        WHERE
        judul_film LIKE '%$keyword%' OR
        genre LIKE '%$keyword%' OR
        tahun_rilis LIKE '%$keyword%' OR
        sutradara LIKE '%$keyword%' OR
        penerbit LIKE '%$keyword%'
    ";
    return query($query);
}

function registrasi($data){
    global $conn;

    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn,$data['password']);
    $confirmation = mysqli_real_escape_string($conn,$data['confirmation']);


    //cek username udah ada atau belum

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    
    if(mysqli_fetch_assoc($result)){
        echo "
        <script>
        alert('Username sudah terdaftar!');
        </script>
        ";
        return false;
    }

    //Konfirmasi password
    if ($password !== $confirmation){
        echo "
        <script>
        alert('Konfirmasi Password Tidak Sesuai');
        </script>
        ";
        return false;
    }


    //password encrypting
    $password = password_hash($password,PASSWORD_DEFAULT);



    //jika password sama, tambahkan user ke DB
    mysqli_query($conn,"INSERT INTO user VALUES ('', '$username', '$password')");

    return mysqli_affected_rows($conn);

}

?>