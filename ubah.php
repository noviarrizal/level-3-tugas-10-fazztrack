<?php
require 'functions.php';

$id = $_GET["id"];
$ubah = query("SELECT * FROM produk WHERE id = $id")[0];


if (isset($_POST["ubah"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			  </script>";
    } else {
        echo "<script>
				alert('data gagal diubah!');
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
        /* ul li { list-style: none; } */
    </style>
</head>

<body>
    <h1>Tambah Data Produk</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $ubah["id"]; ?>">
        <ul>
            <li>
                <label for="nama_produk">Nama Produk : </label>
                <input type="text" name="nama_produk" id="nama_produk" value="<?php echo $ubah["nama_produk"]; ?>">
            </li>
            <li>
                <label for="keterangan">Keterangan : </label>
                <input type="text" name="keterangan" id="keterangan" value="<?php echo $ubah["keterangan"]; ?>">
            </li>
            <li>
                <label for="harga">Harga : </label>
                <input type="number" name="harga" id="harga" value="<?php echo $ubah["harga"]; ?>">
            </li>
            <li>
                <label for="jumlah">jumlah : </label>
                <input type="number" name="jumlah" id="jumlah" value="<?php echo $ubah["jumlah"]; ?>">
            </li>
            <li>
                <button type="submit" name="ubah">Ubah Data!</button>
            </li>
        </ul>
    </form>
</body>

</html>