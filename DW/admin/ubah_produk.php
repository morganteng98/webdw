<center><h2>ubah produk</h2></center>
<?php
	$ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
	$pecah=$ambil->fetch_assoc();

	echo "<pre>";
	print_r($pecah);
	echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Produk</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_produk']?>">
	</div>
	<div class="form-group">
		<label>Jenis Produk</label>
		
		<select type="text" name="jenis" class="form-control" value="<?php echo $pecah['jenis_produk']?>">
				<option>--Pilih Jenis Produk--</option>
				<option value="aki">Gitar</option>
				<option value="aki">Keyboard</option>
				<option value="aki">drum</option>
				<option value="aki">Biola</option>
				<option value="aki">Sound System</option>
				
			</select>
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
				deskripsi='$_POST[deskripsi]' WHERE id_produk='$_GET[id]'");
		}
		else
		{
			$koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',
				jenis_produk='$_POST[jenis]',stok='$_POST[stok]',
				deskripsi='$_POST[deskripsi]' WHERE id_produk='$_GET[id]'");
		}
		echo "<script>alert('data produk telah di ubah')</script>";
		echo "<script>location='index.php?halaman=produk';</script>";
	}
?>

















