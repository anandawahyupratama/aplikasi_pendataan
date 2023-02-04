<?php

	include "koneksi.php";

	$tampil = mysqli_query($mysqli,"select * from admin");
	$no = 1;
	while ($hasil = mysqli_fetch_array($tampil)){

	}

?>
<h2>LATIHAN EDIT DATA DARI DATABASES</h2>
<form method="POST" action="proses_edit_admin.php">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="hidden" name="no" value="<?php echo $hasil['no'];?>">
				<input type="text" name="nama" value="<?php echo $hasil['nama']; ?>"> 
			</td>
		</tr>
		<tr>
			<td>tanggal event</td>
			<td><input type="date" name="tanggal" value="<?php echo $hasil['tanggal'];?>"></td>
		</tr>
		<tr>
			<td>Informasi</td>
			<td><input type="text" name="informasi" value="<?php echo $hasil['informasi']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Edit" name="kirim"></td>
		</tr>
	</table>
</form>