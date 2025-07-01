<?php
include 'koneksi_toko.php';

$id = $_GET['id'];
$data = $conn->query("SELECT * FROM produk WHERE id_produk = $id")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <style>
        body {
            background: linear-gradient(to right, #ffe6ec, #ffd6e0);
            font-family: 'Poppins', sans-serif;
            padding: 40px;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #fff0f5;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 6px 20px rgba(255, 105, 180, 0.2);
        }

        h1 {
            color: #d63384;
            text-align: center;
            font-size: 26px;
            margin-bottom: 25px;
        }

        form label {
            font-weight: bold;
            display: block;
            margin-top: 12px;
            color: #d63384;
        }

        form input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ffc2dc;
            border-radius: 8px;
            margin-top: 6px;
            background-color: #fff8fb;
        }

        button {
            background-color: #ff69b4;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            margin-top: 20px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #e0559e;
        }

        .kembali {
            display: inline-block;
            margin-top: 15px;
            color: #d63384;
            text-decoration: none;
            font-weight: bold;
        }

        .kembali:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Produk</h1>
        <form action="proses_edit.php" method="post">
            <input type="hidden" name="id_produk" value="<?= $data['id_produk'] ?>">

            <label for="nama">Nama Produk</label>
            <input type="text" name="nama_produk" id="nama" value="<?= htmlspecialchars($data['nama_produk']) ?>" required>

            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" value="<?= $data['harga'] ?>" required>

            <label for="stok">Stok</label>
            <input type="number" name="stok" id="stok" value="<?= $data['stok'] ?>" required>

            <button type="submit">Simpan Perubahan</button>
        </form>

        <a href="index.php" class="kembali">← Kembali ke Daftar Produk</a>
    </div>
</body>
</html>