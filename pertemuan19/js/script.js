//ambil dulu elemen2 yang dibuthkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

//tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function() {
	
	//buat objek ajax
	var xhr = new XMLHttpRequest();

	//ce kesiapan ajax
	xhr.onreadystatechange = function() {
		if(xhr.readyState == 4 && xhr.status == 200) {
			container.innerHTML = xhr.responseText;
		}
	}

	//ekseekusi ajax
	xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
	xhr.send();



});