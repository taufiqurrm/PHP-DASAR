<?php 
// Date
// untuk menampilkan tanggal dengan format tertentu
// 	echo date("l, d-M-Y");

// Time
// UNIX Timmestamp / EPOCH timw
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();

//MENGHITUNG 30 HARI KEDEPAN  DARI SEKARANG
// echo date ("d M Y", time()+60*60*24*30);


//mktime
//membuat sendiri detik
//mktime(0,0,0,0,0,0)
//jam, menit, detik, bulan, tanggal, tahun
echo date("l, d M Y", mktime(0,0,0,3,6,2002));

//strtotime
// echo date("l", strtotime("3 December 1999"));

 ?>