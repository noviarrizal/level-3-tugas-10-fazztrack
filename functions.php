<?php
$conn = mysqli_connect("localhost", "root", "", "fazztrack");


function query($sql)
{
    global $conn;
    $result = mysqli_query($conn, $sql);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "delete from produk where id = $id");

    return mysqli_affected_rows($conn);
}


function tambah($data)
{
    global $conn;

    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $keterangan = htmlspecialchars($data["keterangan"]);
    $harga = htmlspecialchars($data["harga"]);
    $jumlah = htmlspecialchars($data["jumlah"]);

    $sql = "INSERT INTO produk
				VALUES
			('', '$nama_produk', '$keterangan', '$harga', '$jumlah')";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $keterangan = htmlspecialchars($data["keterangan"]);
    $harga = htmlspecialchars($data["harga"]);
    $jumlah = htmlspecialchars($data["jumlah"]);

    $sql = "UPDATE produk SET
				nama_produk = '$nama_produk',
				keterangan = '$keterangan',
				harga = '$harga',
				jumlah = '$jumlah'
			WHERE
				id = $id
			";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}
