<?php
//Pertemuan 5 - Array
//Array adalah variable yang bisa menampung atau menyimpan banyak nilai sekaligus

$hari = "senin";
$hari1 = "selasa";

$bulan1 = "Januari";
$bulan2 = "Februari";

$mahasiswa1 = "Fauzan";
$mahasiswa140 = "Abdul";


//membuat array
//cara baru > php v5
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"];

//cara lama
$bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni");

//elemen array pada bahasa PHP bisa berisi nilai yang memiliki perbedaan tipe data
$myArr = [10, "Fauzan", true];

//mencetak array
//mencetak 1 elemen dalam array menggunakan index
//dimulai dari 0
echo "$hari[4]";
echo "<br>";
echo "$bulan[3]";
echo "<br>";
echo "$myArr[0]";
echo "<hr>";
// mencetak dengan menggunakan var_dump() atau print_r()
//bukan untuk user
var_dump($hari);
echo "<br>";


//cetak secara rekursif
print_r($bulan);
echo "<hr>";

//mencetak semua isi array menggunakan looping
//for
for ($i = 0; $i < 4; $i++ ){
    echo $hari[$i];
    echo "<br>";
}
echo"<hr>";
//for with count
for ($i = 0; $i < count($hari); $i++ ){
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";
//foreach
foreach($bulan as $b){
    echo $b;
    echo "<br>";
    $b++;
}
echo "<hr>";

foreach ($bulan as $key => $value) {
    echo "Key: $key - Value: $value";
    echo"<br>";
}


// -> arrow
// => arrow

//manipulasi array
//menambah elemen baru di akhir array

$bulan[6] = "Juli";

//PHP secara otomatis menambahkan elemen pada array dengan command kurung siku saja
$bulan[] = "Agustus";
print_r($bulan);

?>