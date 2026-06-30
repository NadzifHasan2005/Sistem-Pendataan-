<?php
include 'koneksi.php';
include 'filter.php';
require_once 'vendor/autoload.php';

$pdf = new TCPDF();
$pdf->SetCreator('Sistem Data Barang');
$pdf->SetTitle('Data Barang - ' . date('Y-m-d'));
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 11);

$html = '<h2>Data Barang</h2>';
$html .= '<p>Tanggal Export: ' . date('d-m-Y H:i:s') . ' WIB</p>';

$html .= '<table border="1" cellpadding="5">';
$html .= '<tr style="background-color:#4CAF50; color:white;">
            <th>No</th><th>Nama Barang</th><th>Kategori</th><th>Harga</th><th>Stok</th>
          </tr>';

$no = 1;
while ($row = mysqli_fetch_assoc($query)) {
    $html .= '<tr>
                <td>' . $no++ . '</td>
                <td>' . $row['nama_barang'] . '</td>
                <td>' . $row['kategori'] . '</td>
                <td>Rp ' . number_format($row['harga'], 0, ',', '.') . '</td>
                <td>' . $row['stok'] . '</td>
              </tr>';
}
$html .= '</table>';

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('data_barang_' . date('Y-m-d') . '.pdf', 'D');
?>