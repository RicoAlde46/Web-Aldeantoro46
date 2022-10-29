<?php
//Date
//Untuk Menampilakan tanggal dengan format tertentu
echo date("l,");
echo date("d ");
echo date(" m ");
echo date(" y ");

echo date("l, d-M-Y ");


//Time
//UNIX TimeStamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970

echo date("g:i a ");
echo time();
echo date(" l,d M Y ", time() - 60 * 60 * 24 * 100);

//mktime
//membuat sendiri detik
//mktime(0,0,0,0,0,0)
//jam, menit, detik, bulan, tanggal, tahun
echo date(" l,d M Y ", mktime(0, 0, 0, 6, 4, 2001));


//strtotime 
echo date(" l,d M Y ", strtotime("5 juni 2001"));
