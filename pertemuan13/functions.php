<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data) {
	global $conn;
	//ambil data dari tiap elemen dalam form
	$nama = htmlspecialchars($data["nama"]);
	$npm = htmlspecialchars($data["npm"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);

	//upload gambar
	$gambar = upload();
	if ( !$gambar ) {
		return false;
	}

	//query insert data
	$query = "INSERT INTO mahasiswa
				VALUES
				('', '$nama', '$npm', '$email', '$jurusan',
					'$gambar') "; 
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFIle = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	//cek apakah tidak ada gambar yang di upload
	if( $error === 4) {
		echo "
			<script>
				alert('Pilih gambar terlebih dahulu!');
			</script> ";
		return false;
	}

	//cek apakah yang di upload adalah gambar
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower (end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('Yang anda upload bukan gambar!');
			</script> ";
		return false;
	} 

	//cek jika ukuran terlalu besar
	if( $ukuranFIle > 1000000 ) {
		echo "<script>
				alert('Ukuran gambar terlalu besar!');
			</script> ";
		return false;
	}


	// lolos pengecekan, gambar siap di upload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/'. $namaFileBaru);
	return $namaFileBaru ;
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data){
	global $conn;

	$id = $data["id"];
	//ambil data dari tiap elemen dalam form
	$nama = htmlspecialchars($data["nama"]);
	$npm = htmlspecialchars($data["npm"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);

	//cek apakah user pilih gambar baru atau tidak
	 if ( $_FILES['gambar']['error'] === 4 ) {
	 	$gambar = $gambarLama; 
	 } else {
		$gambar = upload();
	 }


	//query insert data
	$query = "UPDATE mahasiswa SET
				nama = '$nama',
				npm = '$npm',
				email = '$email',
				jurusan = '$jurusan',
				gambar = '$gambar'
			WHERE id = $id
			";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);

}

function cari($keyword) {
	$query = "SELECT * FROM mahasiswa
			WHERE
			nama LIKE '%$keyword%' OR
			npm LIKE '%$keyword%' OR
			jurusan LIKE '%$keyword%'
		";
	return query($query);
}

?>