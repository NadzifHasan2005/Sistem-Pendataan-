<?php
// File ini berisi LOGIC untuk membangun query filter
// Variabel $conn harus sudah ada (dari koneksi.php yang di-include duluan)

$where = [];

// Filter Search (Nama Barang + Kategori)
if (isset($_POST['pencarian_barang']) && $_POST['pencarian_barang'] != '') {
    $pencarian_barang = mysqli_real_escape_string($conn, $_POST['pencarian_barang']);
    $where[] = "CONCAT(nama_barang, ' ', kategori) LIKE '%$pencarian_barang%'";
}

// Filter Kategori (dropdown)
if (isset($_POST['filter_kategori']) && $_POST['filter_kategori'] != '') {
    $filter_kategori = mysqli_real_escape_string($conn, $_POST['filter_kategori']);
    $where[] = "kategori = '$filter_kategori'";
}

// Gabungkan semua kondisi jadi satu query final
$sql = "SELECT * FROM barang";
if (count($where) > 0) {
    $sql .= " WHERE " . implode(" AND ", $where);
}

$query = mysqli_query($conn, $sql);
$jumlah_data = mysqli_num_rows($query);

// Kalau hasil filter kosong, alert + tampilkan semua data
if ($jumlah_data == 0 && count($where) > 0) {
    echo "<script>alert('Data tidak ditemukan!');</script>";
    $query = mysqli_query($conn, "SELECT * FROM barang");
}
?>