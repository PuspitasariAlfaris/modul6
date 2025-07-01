<?php
include 'koneksi_toko.php';
$result = $conn->query("SELECT * FROM produk");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk TokoLucu</title>
    <style>
        body {
            background: linear-gradient(to right, #ffe6ec, #ffd6f0);
            font-family: 'Poppins', sans-serif;
            padding: 40px;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: #fff0f5;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 6px 25px rgba(255, 105, 180, 0.2);
        }

        h1 {
            text-align: center;
            color: #d63384;
            margin-bottom: 30px;
        }

        .tambah {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 18px;
            background-color: #ff69b4;
            color: white;
            font-weight: bold;
            border-radius: 10px;
            text-decoration: none;
        }

        .tambah:hover {
            background-color: #e0559e;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fffafc;
            border: 2px solid #ffb6d5;
        }

        th, td {
            border: 1px solid #ffc2dc;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #ff4d94;
            color: white;
            font-size: 16px;
        }

        td {
            font-size: 15px;
        }

        tr:hover td {
            background-color: #ffe6ef;
        }

        a.aksi {
            color: #d63384;
            text-decoration: none;
            font-weight: bold;
            margin: 0 5px;
        }

        a.aksi:hover {
            text-decoration: underline;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Produk TokoLucu</h1>
        <a href="tambah.php" class="tambah">Tambah Produk Baru</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id_produk'] ?></td>
                <td><?= htmlspecialchars($row['nama_produk']) ?></td>
                <td>Rp<?= number_format($row['harga'], 0, ',', '.') ?></td>
                <td><?= $row['stok'] ?></td>
                <td>
                    <a class="aksi" href="edit.php?id=<?= $row['id_produk'] ?>">Edit</a> |
                    <a class="aksi" href="hapus.php?id=<?= $row['id_produk'] ?>" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
        <div class="footer">
            &copy; <?= date('Y') ?> TokoLucu
        </div>
    </div>
</body>
</html>