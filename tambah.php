<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama     = mysqli_real_escape_string($conn, $_POST['nama_barang']);
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $harga    = (int) $_POST['harga'];
    $stok     = (int) $_POST['stok'];

    $query = "INSERT INTO barang (nama_barang, kategori, harga, stok)
        VALUES ('$nama', '$kategori', $harga, $stok)";

    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal menambah data!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h2>➕ Tambah Barang</h2>
    <div class="form-container">
        <form method="POST">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" required>

            <label>Kategori</label>
            <input type="text" name="kategori">

            <label>Harga</label>
            <input type="number" name="harga" required>

            <label>Stok</label>
            <input type="number" name="stok" required>

            <button type="submit" class="btn-simpan">Simpan</button>
            <a href="index.php" class="back-link">← Kembali</a>
        </form>
    </div>
</body>
</html>