<?php 
	$ambil = $koneksi->query("SELECT * FROM servis WHERE id_servis='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
	
	$koneksi->query("DELETE FROM servis WHERE id_servis='$_GET[id]'");

	echo "<script>alert('supplier sudah terhapus');</script>";
	
	echo "<script>location='index.php?halaman=servis';</script>";
 ?>