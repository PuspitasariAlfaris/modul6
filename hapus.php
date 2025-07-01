<?php
include 'koneksi_toko.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $sql = "DELETE FROM produk WHERE id_produk = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Gagal menghapus produk: " . $conn->error;
    }
} else {
    echo "ID produk tidak ditemukan.";
}