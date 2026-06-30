<?php 
include 'koneksi.php';
include 'filter.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Barang</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h2>📦 Data Barang</h2>

    <div class="top-bar">
        <a href="tambah.php" class="btn btn-tambah">+ Tambah Barang</a>
    </div>

    <form action="index.php" method="POST">
        <div class="top-bar">
            <input type="search" placeholder="Search..." name="pencarian_barang" class="btn-search"
                value="<?= isset($_POST['pencarian_barang']) ? htmlspecialchars($_POST['pencarian_barang']) : '' ?>">
            <input type="submit" name="pencarian" value="Search" class="btn btn-tambah">
            <a href="index.php" class="btn btn-update">Reset</a> 
            <a href="export_excel.php" class="btn btn-excel">Export Excel 📁</a>
            <a href="export_pdf.php" class="btn btn-pdf">Export PDF 🗃️</a>
        </div>

        <table>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th class="th-filter">
                    Kategori | 
                    <select name="filter_kategori" class="select-arrow-only" onchange="this.form.submit()">
                        <option value="">▼</option>
                        <?php
                        $kategori_list = mysqli_query($conn, "SELECT DISTINCT kategori FROM barang");
                        while ($k = mysqli_fetch_assoc($kategori_list)) {
                            $selected = (isset($_POST['filter_kategori']) && $_POST['filter_kategori'] == $k['kategori']) ? 'selected' : '';
                            echo "<option value='{$k['kategori']}' $selected>{$k['kategori']}</option>";
                        }
                        ?>
                    </select>
                </th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($query)) {
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nama_barang'] ?></td>
                <td><?= $row['kategori'] ?></td>
                <td>Rp <?= number_format($row['harga'], 0, ',', '.') ?></td>
                <td><?= $row['stok'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-edit">Edit</a>
                    <a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-hapus"
                    onclick="return confirm('Yakin hapus barang ini?')">Hapus</a>
                </td>
            </tr>
            <?php 
            } 
            ?>
        </table>
    </form>

</body>
</html>