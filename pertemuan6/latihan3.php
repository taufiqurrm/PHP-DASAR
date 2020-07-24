<?php 
// $mahasiswa=[
// 	["Taufiq", "2018020100035", 
// 	"Teknik Informatika", "taufiq@uim.ac.id"],
// 	["2018020100036", "Ayla", 
// 	"Farmasi", "ayla@uim.ac.id"]
// ];


//Array Associative
//definisnya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat sendiri

$warga = [
	[
		"Nama" => "Moh. Taufiqur rahman",
		"Alamat" => "Sana tengah Pasean",
		"Hobi" => "Dengerin Musik",
		"email" => "taufiq@uim.ac.id",
		"gambar" => "2.jpeg"
	],
	[	
		"Nama" => "Khoirul anam",
		"Alamat" => "Larangan Badung",
		"Hobi" => "Ngoding",
		"email" => "anam@uim.ac.id",
		"gambar" => "3.jpg"
	]
];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Web Desa</title>
 </head>
 <body>
 	<h1>Daftar Penduduk</h1>

 	<?php foreach ($warga as $wrg) : ?>
 	<ul>
 		<li>
 			<img src="img/<?= $wrg["gambar"];  ?>">
 		</li>
 		<li>Nama : <?= $wrg["Nama"] ?></li>
 		<li>Alamat : <?= $wrg["Alamat"] ?></li>
 		<li>Hobi : <?= $wrg["Hobi"] ?></li>
 		<li>Email : <?= $wrg["email"] ?></li>
 	</ul>
 <?php endforeach; ?>

 </body>
 </html>