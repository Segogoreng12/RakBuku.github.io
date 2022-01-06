<?php 
require 'functions.php';

if (isset($_POST["submit"]) ) {

  if( tambah($_POST) > 0 ) {
  	echo "
  	<script>
    	alert('data berhasil ditambahkan');
    	document.location.href = 'index.php';
  	</script>
  	";
  }else{
    echo "
  	<script>
    	alert('data gagal ditambahkan');
    	document.location.href = 'index.php';
  	</script>
  	";
  }
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>tambah data buku</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>tambah data buku</h1>

<form action="" method="post" enctype="multipart/form-data">
	<ul>
		<li>
			<label for="nrp">harga:</label>
			<input type="text" name="nrp" id="nrp">
		</li>
		<li>
			<label for="nama">nama penulis :</label>
			<input type="text" name="nama" id="nama">
		</li>
		<li>
			<label for="email">tahun terbit :</label>
			<input type="text" name="email" id="email">
		</li>
		<li>
			<label for="jurusan">judul buku :</label>
			<input type="text" name="jurusan" id="jurusan">
		</li>
		<li>
			<label for="gambar">gambar :</label>
			<input type="file" name="gambar" id="gambar">
		</li>
		<li>
			<button type="submit" name="submit">tambah data</button>
		</li>
	</ul>
	
</form>
<a href="index.php">kembali ke halaman</a>
</body>
</html>