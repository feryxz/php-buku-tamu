<?php ob_start(); ?>
<html>
<head>
  <title>Cetak PDF</title>

   <style>
   table {border-collapse:collapse; table-layout:fixed;width: 630px;}
   table td {word-wrap:break-word;width: 20%;}
   </style>
</head>
<body>

<h1 style="text-align: center;">Data Buku Tamu</h1>
<table border="1" width="100%">
<tr>
  <th>Tanggal / Waktu</th>
    <th>Nama Lengkap</th>
    <th>Alamat</th>
    <th>Asal Sekolah</th>
    <th>No. Telp</th>
</tr>
<?php
// Load file koneksi.php
$link = mysqli_connect("localhost", "root", "", "db_bukutamu") or die(mysqli_error($link));

$query = "SELECT * FROM tb_buku"; // Tampilkan semua data gambar
$sql = mysqli_query($link, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
        echo "<tr>";
        echo "<td>".date("d/m/Y H:i:s", strtotime($data['tanggal']))."</td>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['alamat']."</td>";
        echo "<td>".$data['asal']."</td>";
        echo "<td>".$data['notelp']."</td>";
        echo "</tr>";
    }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>

</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

require_once('../vendor/html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('BukuTamu.pdf', 'D');
?>
