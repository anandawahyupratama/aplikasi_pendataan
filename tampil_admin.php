<?php

include "koneksi.php";

?>
<h2 align="center">DATA ADMIN</h2>
<hr>
<h3><a href="pendaftaran.php">Pendaftaran</a> | <a href="tampil_admin.php">Admin</a> | <a href="login.php">Logout</a></h3>
<br>
<br>
<hr>
<a href="admin.php" align="center" ><h3>+ TAMBAH ADMIN</h3></a>
<br>
<br>
</br>
<table border="1" width="80%" align="center">
	<tr>
		<td align="center">Nomer</td>
		<td align="center">Nama</td>
		<td align="center">Tanggal</td>
		<td align="center">Informasi</td>
		<td align="center">Opsi</td>
	</tr>
	<?php


		$tampil = mysqli_query($mysqli, "select * from admin");
		$no = 1;
		while ($hasil = mysqli_fetch_array($tampil)){
	?>
	<tr>
		<td align="center"><?php echo $no++; ?></td>
		<td align="center"><?php echo $hasil['nama']; ?></td>
		<td align="center"><?php echo $hasil['tanggal']; ?></td>
		<td align="center"><?php echo $hasil['informasi']; ?></td>
		<td>
			<a href="edit_admin.php?id=<?php echo $hasil['id'];?>">edit</a>
			<a href="hapus.php?hapus&id=<? echo $hasil['id'];?>">hapus</a>
		</td>
	</tr>
	<?php
		}
	?>
</table>
