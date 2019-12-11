<?php 
	$ambil = $koneksi->query("SELECT * FROM suplier WHERE id_suplier='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
	
	$koneksi->query("DELETE FROM suplier WHERE id_suplier='$_GET[id]'");

	echo "<script>alert('supplier sudah terhapus');</script>";
	
	echo "<script>location='index.php?halaman=supplier';</script>";
 ?>