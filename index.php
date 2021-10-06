<?php
require 'functions.php';
$produk = query("SELECT * FROM produk");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Produk</title>
</head>
<body>

<h1>Halaman Data Produk</h1>

<a href="tambah.php">Tambah Data Produk</a>
<br><br>

<table border="1" cellspacing="0" cellpadding="5">
	<tr>
		<th>#</th>
		<th>Nama Produk</th>
		<th>Keterangan</th>
		<th>Harga</th>
		<th>Jumlah</th>
		<th>Aksi</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach( $produk as $row ) { ?>
	<tr>
		<td><?= $i; ?></td>
		<td><?= $row["nama_produk"]; ?></td>
		<td><?= $row["keterangan"]; ?></td>
		<td><?= $row["harga"]; ?></td>
		<td><?= $row["jumlah"]; ?></td>
        <td><a href="ubah.php?id=<?php echo $row["id"]; ?>">ubah</a> | <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin?')">hapus</a></td>
	</tr>
	<?php $i++; ?>
	<?php } ?>
</table>


</body>
</html>