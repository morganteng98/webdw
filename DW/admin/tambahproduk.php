<h2>Tambah Produk</h2>

	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Nama Produk</label>
			<input type="text" class="form-control" name="nama">		
		</div>
		<div class="form-group">
			<label>Jenis Produk</label>
			<select type="text" class="form-control" name="jenis">
				<option>--Belum Memilih Produk--</option>
				<option value="alat_musik">Alat Musik</option>
				<option value="sparepart">Sparepart</option>
				<option value="asesoris">Asesoris</option>
				<option value="eletronik">Eletronik</option>
			</select>
		</div>
		<div class="form-group">
			<label>Stok</label>
			<input type="number" class="form-control" name="stok">
					
		</div>
		<div class="form-group">
			<label>Foto Produk</label>
			<input type="file" class="form-control" name="foto">		
		</div>
		<div class="form-group">
			<label>Deskripsi</label>
			<textarea class="form-control" name="deskripsi" rows="10"></textarea>		
		</div>
		<div class="form-group">
			<label>Harga (Rp)</label>
			<input type="number" class="form-control" name="harga">		
		</div>
		<button class="btn btn-primary" name="save">Simpan</button>			

	</form>
	<?php 
		if (isset($_POST ['save'])) {

			$nama = $_FILES['foto']['name'];
			$lokasi = $_FILES['foto']['tmp_name'];
			move_uploaded_file ($lokasi, "../foto/".$nama);
			$koneksi->query("INSERT INTO produk 
				(nama_produk,jenis_produk,stok,foto_produk,deskripsi,harga_produk)
				VALUES('$_POST[nama]','$_POST[jenis]','$_POST[stok]','$nama','$_POST[deskripsi]','$_POST[harga]')");

				echo "<div class='alert alert-info'> Data Tersimpan</div>";
				echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";

		}
	?>