<?php
include 'koneksi.php';

$id   = (int) $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM barang WHERE id=$id"));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama     = mysqli_real_escape_string($conn, $_POST['nama_barang']);
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $harga    = (int) $_POST['harga'];
    $stok     = (int) $_POST['stok'];

    $query = "UPDATE barang SET nama_barang='$nama', kategori='$kategori',
              harga=$harga, stok=$stok WHERE id=$id";

    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal update data!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h2>✏️ Edit Barang</h2>
    <div class="form-container">
        <form method="POST">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" value="<?= $data['nama_barang'] ?>" required>

            <label>Kategori</label>
            <input type="text" name="kategori" value="<?= $data['kategori'] ?>">

            <label>Harga</label>
            <input type="number" name="harga" value="<?= $data['harga'] ?>" required>

            <label>Stok</label>
            <input type="number" name="stok" value="<?= $data['stok'] ?>" required>

            <button type="submit" class="btn-update">Update</button>
            <a href="index.php" class="back-link">← Kembali</a>
        </form>
    </div>
</body>
</html>