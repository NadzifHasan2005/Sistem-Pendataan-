<?php
    include 'koneksi.php';

    $id = (int) $_GET['id'];
    $hapus = mysqli_query($conn, "DELETE FROM barang WHERE id=$id");

    if ($hapus) {
        echo "<script>
            alert('Data berhasil dihapus!');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Gagal menghapus data!');
            window.location.href = 'index.php';
        </script>";
    }
?>