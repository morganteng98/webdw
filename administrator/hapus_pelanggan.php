<?php 
	$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();

	$koneksi->query("DELETE FROM pelanggan WHERE id_pelanggan='$_GET[id]'");

	echo "<script>alert('Produk berhasil dihapus');</script>";
	echo "<script>location='index.php?halaman=produk';</script>";
 ?>