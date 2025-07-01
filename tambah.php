<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk Baru</title>
    <style>
        body {
            background: linear-gradient(to right, #ffe6ec, #ffd6f0);
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
            box-shadow: 0 6px 25px rgba(255, 105, 180, 0.2);
        }

        h2 {
            text-align: center;
            color: #d63384;
            margin-bottom: 30px;
        }

        form label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #555;
        }

        form input[type="text"],
        form input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ffcce6;
            border-radius: 10px;
            margin-bottom: 20px;
            background-color: #fffafc;
        }

        form button {
            background-color: #ff69b4;
            color: white;
            border: none;
            padding: 12px 20px;
            font-weight: bold;
            border-radius: 10px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #e0559e;
        }

        .back {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #d63384;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Produk Baru</h2>
        <form action="proses_tambah.php" method="post">
            <label for="nama_produk">Nama Produk:</label>
            <input type="text" name="nama_produk" id="nama_produk" required>

            <label for="harga">Harga (contoh: 15000):</label>
            <input type="number" name="harga" id="harga" required>

            <label for="stok">Stok:</label>
            <input type="number" name="stok" id="stok" required>

            <button type="submit">Simpan Produk</button>
        </form>
        <a class="back" href="index.php">← Kembali ke daftar produk</a>
    </div>
</body>
</html>