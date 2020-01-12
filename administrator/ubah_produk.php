<center><h2>ubah produk</h2></center>
<?php
	$ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
	$pecah=$ambil->fetch_assoc();


?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Produk</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_produk']?>" required="required">
	</div>
	<div class="form-group">
		<label>Jenis Produk</label>
				<select type="text" name="jenis" class="form-control" value="<?php echo $pecah['jenis_produk']?>" required="required">
				<option value="">--Belum Memilih Produk--</option>
				<option value="alat_musik">Alat Musik</option>
				<option value="sparepart">Sparepart</option>
				<option value="asesoris">Asesoris</option>
				<option value="eletronik">Elektronik</option>
				
			</select>

<!-- kategori
ALAT MUSIK : GITAR DRUM DLL
SPAREPART : GITAR DRUM DLL (SENAR GTR)
ASESORIS : CEKELANE GITAAR, PICK , STIK DRAM
ELEKTRINIK : sOUND


 -->

	</div>
	<div class="form-group">
		<label>Stok</label>
		<input type="number" name="stok" class="form-control" value="<?php echo $pecah['stok']?>">
	</div>
	<div class="form-group">
		<img src="../foto/<?php echo $pecah['foto_produk']?>" width="200px">
	</div>
	<div class="form-group">
		<label>Ganti Foto</label>
		<input type="file" name="foto" class="form-control">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea name="deskripsi" class="form-control" rows="10">
		<?php echo $pecah['deskripsi']; ?>
		</textarea>
	</div>
	<div class="form-group">
		<label>harga</label>
		<input type="number" name="harga" class="form-control" value="<?php echo $pecah['harga_produk']?>">
	</div>
	<button class="btn btn-primary" name="ubah">UBAH</button>
</form>


<?php 
	if (isset($_POST['ubah']))
	{
		$namafoto=$_FILES['foto']['name'];
		$lokasifoto = $_FILES['foto']['tmp_name'];
		//mengubah foto
		if (!empty($lokasifoto)) 
		{
			move_uploaded_file($lokasifoto, "../foto/$namafoto");

			$koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',
				jenis_produk='$_POST[jenis]',stok='$_POST[stok]',foto_produk='$namafoto',
				deskripsi='$_POST[deskripsi]',
				harga_produk='$_POST[harga]' WHERE id_produk='$_GET[id]'");
		}
		else
		{
			$koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',
				jenis_produk='$_POST[jenis]',stok='$_POST[stok]',
				deskripsi='$_POST[deskripsi]',
				harga_produk='$_POST[harga]' WHERE id_produk='$_GET[id]'");
		}
		echo "<script>alert('Data Produk telah di ubah')</script>";
		echo "<script>location='index.php?halaman=produk';</script>";
	}
?>

















