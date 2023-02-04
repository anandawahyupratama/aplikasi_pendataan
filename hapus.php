<?php
// Tombol Hapus ditekan
include "koneksi.php"
if(isset($_GET['hapus'];)){
	$id= $_GET['id'];
	$hapus = mysql_query($mysqli,"DELETE FROM admin WHERE id='id");
	if($hapus){
		header("location:index.php");
	}else{
		echo"<script>alert('Maaf, data tersebut masih terhubung degan data yang lain');
		</script>";
	}
}
?>