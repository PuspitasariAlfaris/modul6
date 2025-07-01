<?php
include 'koneksi_toko.php';

$nama = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$sql = "INSERT INTO produk (nama_produk, harga, stok) VALUES ('$nama', '$harga', '$stok')";
$conn->query($sql);
header("Location: index.php");
exit();