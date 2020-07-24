<?php 
//array
// variabel yang dapat memiliki banyak nilai
//elemen pada array boleh memelliki tipe data yang berbeda
//pasangan antara key dan value
//key-nya adalah indeks, yang dimulau dari 0

//membuat array cara lama
$hari = array("Senin", "Selasa", "Rabu");
//cara baru
$bulan=["Januari", "Februari", "Maret"];
$angka=[123, "Tulisan", false];

// menampilkan Array
//var_dump(), print_r

// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array
// echo $angka[0];
// echo "<br>";
// echo $hari[1];

//menambahkan elemen baru pada array
var_dump($hari);
$hari[]="Kamis";
$hari[]="Jum'at";
echo "<br>";
var_dump($hari);

 ?>