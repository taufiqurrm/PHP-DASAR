<?php 

$mahasiswa = [
	["Moh. Taufiqur rahman", "2018020100035","Teknik Informatika", "taufiq@uim.ac.id"],
	["Ayla", "2018050200036","Farmasi", "ayla@uim.ac.id"],
	["Fian", "2018050200037","Kedokteran", "fian@uim.ac.id"]
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
 			<li>Nama : <?= $mhs[0]; ?></li>
 			<li>NIM : <?= $mhs[1]; ?></li>
 			<li>Jurusan : <?= $mhs[2]; ?></li>
 			<li>Email : <?= $mhs[3]; ?></li>
 		</ul>
 	 <?php endforeach ?>
 </body>
 </html>