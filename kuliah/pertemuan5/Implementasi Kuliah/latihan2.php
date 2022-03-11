<?php
//array multidimensi
//array di dalam array

$mahasiswa = [
    ["Muhamad Fauzan", "213040104", "mfauzanabdurrach84@gmail.com","Teknik Informatika"],
    ["Agung Purnama Rahmat", "213040084", "agungmamez@gmail.com", [1,[2],3] ,"Teknik Informatika"]
];


echo $mahasiswa[1][3][1][0]; //2

echo "<hr>"
?>
