<?php 
// A. Funtion -> date ();
// untuk menampilkan tanggal dengan format tertentu
    echo date("l, d-M-Y");
    echo "<br>";

// B. Funtion -> time();
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak tahun januari 1970
    echo time();
    echo "<br>";

// Pratice Gabung Function
    echo date ("l, d-M-Y", time()-60*60*24+126);
    echo "<br>";

// C. Funtion -> mktime
// membuuuat sendiri detik
// mktimw(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun

    echo date("l", mktime(0,0,0,3,24,2004));
    echo "<br>";
// D. Funtion -> strtoyime
    echo date ("l", strtotime("24 March 2004"));


?>