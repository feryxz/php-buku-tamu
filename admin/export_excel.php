<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=export_excel.xls");
?>

<h3>Data Tamu</h3>

<table border="1" cellpadding="5">
	<tr>
		<th>Tanggal / Waktu</th>
		<th>Nama Lengkap</th>
		<th>Alamat</th>
		<th>Asal Sekolah</th>
		<th>No. Telp</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "db/connect.php";

	// Buat query untuk menampilkan semua data siswa
	$sql = $link->query("SELECT * FROM tb_buku");

	$no = 1; // Untuk penomoran tabel, di awal set dengan 1
	while($data = $sql->fetch_assoc()){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".date("d/m/Y H:i:s", strtotime($data['tanggal']))."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['alamat']."</td>";
		echo "<td>".$data['asal']."</td>";
		echo "<td>".$data['notelp']."</td>";
		echo "</tr>";

		$no++; // Tambah 1 setiap kali looping
	}
	?>
</table>
