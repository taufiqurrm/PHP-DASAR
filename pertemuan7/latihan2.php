<?php 
//cek apakah tidak ada data di $_GET
	if( !isset($_GET["nama"]) ||
		!isset($_GET["alamat"]) ||
		!isset($_GET["hobi"]) ||
		!isset($_GET["email"])||
		!isset($_GET["gambar"])){
		header("location: latihan1.php");
		exit();	
		}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Mahasiswa</title>
</head>
<body>

<ul>
	<li><img src="img/<?= $_GET["gambar"]; ?>"></li>
	<li><?= $_GET["nama"]; ?></li>
	<li><?= $_GET["alamat"]; ?></li>
	<li><?= $_GET["hobi"]; ?></li>
	<li><?= $_GET["email"]; ?></li>
</ul>

<a href="latihan1.php">Kembali ke Dashboard</a>

</body>
</html>