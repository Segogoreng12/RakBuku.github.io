<?php 
require  'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

if( isset($_POST["cari"]) ) {
	$mahasiswa = cari($_POST["keyword"]);

}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>halaman admin</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Rak Buku Pribadi</h1>
<p>
<a href="tambah.php">tambah data buku</a>
<br><br>

<form action="" method="post">
	
	<input type="text" name="keyword" size="30" autofocus
	placeholder="masukkan keyword pencarian.." autocomplete="off">
	<button type="submit" name="cari">cari</button>


</form></p>
<br>
<table border="1" cellpadding="10" cellspacing="0">
	
	<tr>
		<th>no.</th>
		<th>aksi</th>
		<th>gambar</th>
		<th>nama penulis</th>
		<th>harga</th>
		<th>tahun terbit</th>
		<th>judul buku</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach( $mahasiswa as $row ) : ?>

	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
			return confirm('yakin?');">hapus</a>
		</td>
		<td><img src="gambar/<?= $row["gambar"]; ?>" width="50"></td>
		<td><?= $row["nrp"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["email"]; ?></td>
		<td><?= $row["jurusan"]; ?></td>
	</tr>
	<?php $i++; ?>
<?php endforeach; ?>
</table>
</body>
</html>