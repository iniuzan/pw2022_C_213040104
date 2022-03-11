<?php
// Implementasi coding dari video di YouTube Channel Web Programming Unpas pada playlist PHP 
//array
//variabel yang memiliki banyak nilai 
$hari1 = "senin";
$hari2 = "selasa";

//membuat array
//dengan cara lama
$hari = array("Senin","Selasa","Rabu");
//cara baru
$bulan = ["Januari", "Februari", "Maret"];
$myArray = [123, "Fauzan", true];


//mencetak array menggunakan var_dump() dan print_r()
//method ini tidak dianjurkan untuk menampilkan ke user, tetapi hanya untuk developer saat proses debugging saja

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

//menampilkan 1 elemen pada array
echo $myArray[1];
echo "<br>";
echo $bulan[1];
echo "<br>";
echo "<hr>";

//menambahkan elemen baru pada array
var_dump($hari);
echo "<br>";
$hari []="kamis";
var_dump($hari);


?>