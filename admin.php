<!DOCTYPE html>
<html>
<head>
	<title>Admin
	</title>
</head>
<body bgcolor="#B0C4DE">
		<p>Selamat Datang Di Halaman Admin | SMK Luqman Al Hakim Kudus
		<br>
		<form action="tampil_admin.php" method="post">
		<fieldset>
			<legend>pendaftaran</legend>

			<table >
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
				</tr>
	
				<tr>
					<td>Tanggal </td>
					<td>:</td>
					<td><input type="date" name="tanggal">
				</tr>
		
				<tr>
					<td>Informasi</td>
					<td>:</td>
					<td><textarea name="informasi" placeholder="Masukkan Alamat"></textarea></td>
				</tr>

				<td><input type="submit" value="Daftar"></td>
			</table>
		</fieldset>
	</form>
	<br>
	<br>
	<hr>
	<div>Copyright &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
</body>
</html>