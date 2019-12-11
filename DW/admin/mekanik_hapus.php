<?php 
	$ambil = $koneksi->query("SELECT * FROM mekanik WHERE id_mekanik='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
	
	$koneksi->query("DELETE FROM mekanik WHERE id_mekanik='$_GET[id]'");

	echo "<script>alert('mekanik sudah terhapus');</script>";
	echo "<script>location='index.php?halaman=mekanik';</script>";
 ?>