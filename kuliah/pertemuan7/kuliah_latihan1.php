<?php 

//superglobals
//variabel milik PHP yang bisa kita gunakan. Bentuknya array
// $_GET
// $_POST
// $_SERVER
// $_GET["nama"] = "Fauzan";
// $_GET["email"] = "mfauzanabdurrach84@gmail.com";

// var_dump($_GET);
// var_dump($_POST);

if (isset($_GET["nama"])){
    $nama = $_GET["nama"];
} else{
    $nama = "unknown!";
}

?>

<h1>Hello <?= $nama ?></h1>
<ul>
    <li>
        <a href="kuliah_latihan1.php?nama=oten">Oten</a>
    </li>
    <li>
        <a href="kuliah_latihan1.php?nama=uzan">uzan</a>
    </li>
</ul>