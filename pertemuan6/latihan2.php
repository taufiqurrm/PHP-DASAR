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

$mahasiswa = [
	[	
		"nama" => "Taufiq",
		"npm" => "2018020100035",
		"email" => "taufiq@uim.ac.id",
		"jurusan" => "Teknik Informatika",
		"gambar" => "1.jpg"
	],
	[	
		"nama" => "Ayla",
		"npm" => "2018020100037",
		"email" => "ayla@uim.ac.id",
		"jurusan" => "Farmasi",
		"gambar" => "2.jpeg"
	]
];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>

 	<?php foreach ($mahasiswa as $mhs) : ?>
 	<ul>
 		<li>
 			<img src="img/<?= $mhs["gambar"];  ?>">
 		</li>
 		<li>Nama : <?= $mhs["nama"] ?></li>
 		<li>NPM : <?= $mhs["npm"] ?></li>
 		<li>Jurusan : <?= $mhs["jurusan"] ?></li>
 		<li>Email : <?= $mhs["email"] ?></li>
 	</ul>
 <?php endforeach; ?>

 </body>
 </html>