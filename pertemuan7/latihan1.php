<?php 
//SUPERGLOBAL
//Variable
//merupakan array associative

//$_GET
$warga = [
	[
		"nama" => "Moh. Taufiqur rahman",
		"alamat" => "Sana tengah",
		"hobi" => "Dengerin Musik",
		"email" => "taufiq@uim.ac.id",
		"gambar" => "2.jpeg"
	],
	[	
		"nama" => "Khoirul anam",
		"alamat" => "Larangan Badung",
		"hobi" => "Ngoding",
		"email" => "anam@uim.ac.id",
		"gambar" => "3.jpg"
	]
];


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>GET</title>
 </head>
 <body>
 <h1>Data Warga</h1>
 <ul>
 	<?php foreach ($warga as $wrg) :?>
 		<li>
 			<a href="latihan2.php?nama=<?= $wrg["nama"] ; ?>&alamat= <?= $wrg["alamat"] ; ?>&hobi=<?= $wrg ["hobi"] ; ?>&email=<?= $wrg["email"] ; ?>&gambar=<?=$wrg["gambar"] ; ?>">
 			<?= $wrg["nama"];  ?></a>
 		</li>

 	<?php endforeach; ?>
 </ul>


 	
 </body>
 </html>