<?php
include 'koneksi.php';
include 'filter.php';

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=data_barang_" . date('Y-m-d') . ".xls");
?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Stok</th>
    </tr>
    <?php
    $no = 1;
    while ($row = mysqli_fetch_assoc($query)) {
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $row['nama_barang'] . "</td>";
        echo "<td>" . $row['kategori'] . "</td>";
        echo "<td>" . $row['harga'] . "</td>";
        echo "<td>" . $row['stok'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>