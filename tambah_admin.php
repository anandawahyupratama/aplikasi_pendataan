<html>
<head>
	<title>tambah event</title>
</head>
<body>
<h2>|selamat datang di halaman pendaftaran|</h2>
<hr>

<fieldset>
	<legend>tambah event</legend>
	<form action="proses_edit_admin.php" method="POST">
		<table>
			<tr>
				<td>Nama event:</td>
				<td><input type="text" name="nama" placeholder="masukkan event...." required></td>
			</tr>
			<tr>
				<td>tanggal event:</td>
				<td><input type="date" name="tanggal" title="masukkan tanggal" required></td>
			</tr>
			<tr>
				<td>informasi event:</td>
				<td><textarea name="informasi" style="width:645px; height:275px;" placeholder="masukkan informasi ..."></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="simpan"></td>
			</tr>
		</table>
	</form>
</fieldset>
	<br>
	<hr>
	<p>Copyright &copy; 2023 | SMK Luqman Al Hakim Kudus</p>
</body>
</html>