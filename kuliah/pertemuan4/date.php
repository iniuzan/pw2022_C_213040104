<?php
    //function
    // Date
    // Untuk menampilkan tanggal dengan format tertentu
    echo date("l, d-M-Y");
    echo "<br>";
    echo date("j, d-M-Y");
    echo "<br>";
    echo "<hr>";
    
    //Time
    time();
    echo time();
    // Time pada PHP itu bersifat unik, yaitu menggunakan UNIX Timestamp
    //yaitu detik yang sudah berlalu sejak 1 januari 1970
    echo "<br>";
    echo "<hr>";
    
    echo date("l",time()+60*60*24*100);
    echo "<br>"; // 100 hari ke depan
    echo date("l",time()-60*60*24*100);// 100 hari ke belakang
    echo "<br>";
    echo "<hr>";
    
    
    
    // mktime (membuat sendiri detik dari 1 1 1970 s.d waktu yang diinginkan)
    //mktime
    //jam, menit , detik, bulan, tanggal, tahun,
    // Menebak hari lahir dengan PHP
    echo mktime(0,0,0,3,11,2003);
    echo "<br>";
    echo date("l", mktime(0,0,0,3,11,2003));
    echo "<br>";
    echo "<hr>";

    //strtotime
    //akan menghasilkan detik dari 11 maret 2003 hingga sekarang
    echo strtotime("11 mar 2003");
    //akan menghasilkan hari yang dari fungsi strtotime
    echo date ("l", strtotime("11 mar 2003"));

?>