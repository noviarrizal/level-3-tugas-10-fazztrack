<?php
require 'functions.php';

if (isset($_POST["tambah"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			  </script>";
    } else {
        echo "<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			  </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Produk</title>
    <style>
        ul li {
            list-style: none;
        }
    </style>
</head>

<body>
    <h1>Tambah Data Produk</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama_produk">Nama Produk : </label>
                <input type="text" name="nama_produk" id="nama_produk">
            </li>
            <li>
                <label for="keterangan">Keterangan : </label>
                <input type="text" name="keterangan" id="keterangan">
            </li>
            <li>
                <label for="harga">Harga : </label>
                <input type="number" name="harga" id="harga">
            </li>
            <li>
                <label for="jumlah">Jumlah : </label>
                <input type="number" name="jumlah" id="jumlah">
            </li>
            <li>
                <button type="submit" name="tambah">Tambah Data!</button>
            </li>
        </ul>
    </form>
</body>

</html>