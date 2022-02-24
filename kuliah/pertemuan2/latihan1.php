<?php

// VARIABEL
// Sebagai tempat menyimpan nilai

//Nilai: Angka (integer), tulisan (string), boolean (true/false)


// Nama Bebas, Gaboleh ada spasi
//boleh ada angka tapi tidak di awal ($3roda)

$nama = 'Fauzan';
echo $nama;


echo "<hr>";

// Operator
// Operator aritmatika
// +,-,*,/,% (modulo/modulus/sisa bagi)

echo 1 + 1;
echo "<br>";
echo 10*10;
echo "<br>";

echo 1+2*3-4; //kukabataku

echo "<br>";
echo "<hr>";

//operator perbandingan
// <, >, <=, >=, ==, !=

echo 1 < 2;
echo "<br>";
echo 10 < 5;
echo "<br>";

echo 10 == "10";

echo "<hr>";
// identitas
// ===, !==
// untuk memeriksa nilai beserta tipe datanya.

echo 10 === "10";


echo "<hr>";

//operator increment decrement
//Penambahan / Pengurangan 1

// ++, -- 

$x = 10;
$x++;
echo $x;

$y = 10;
$y--;


//concat, penggabung string
//.
$namadepan = "Fauzan ";
$namabelakang = "Abdul Rochman";


//kita bisa satukan dengan concat
echo "<br>";
echo $namadepan.$namabelakang;
//atau 
echo "<br>";
echo $namadepan."".$namabelakang;


?>