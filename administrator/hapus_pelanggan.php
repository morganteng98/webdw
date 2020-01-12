<?php 
	$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
	$fotoproduk = $pecah['foto_produk'];
	if (file_exists("../foto/$fotoproduk"))
	{
		unlink("../foto/$fotoproduk");
	}

	$koneksi->query("DELETE FROM pelanggan WHERE id_pelanggan='$_GET[id]'");

	echo "<script>alert('Produk berhasil dihapus');</script>";
	echo "<script>location='index.php?halaman=produk';</script>";
 ?>