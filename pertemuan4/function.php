<?php 
function salam($waktu, $nama){
	return "Selamat $waktu, $nama";
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan Function</title>
 </head>
 <body>
 	<h1><?= salam("Pagi", "Kebo!"); ?></h1>
 </body>
 </html>