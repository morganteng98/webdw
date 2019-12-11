<h2>Tambah Data</h2>

	<form method="post" enctype="multipart/form-data">
		<div class="form-group" style="display: none">
			<label>ID</label>
			<input type="text" class="form-control" name="id_suplier">		
		</div>

		<div class="form-group">
			<label>Nama</label>
			<input type="text" class="form-control" name="nama_suplier">		
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<input type="text" class="form-control" name="alamat_suplier">		
		</div>
		<div class="form-group">
			<label>No Telepon</label>
			<input type="text" class="form-control" name="notelp_suplier">		
		</div>
		
		<button class="btn btn-primary" name="save">Simpan</button>			

	</form>
	<?php 
		if (isset($_POST['save'])) {
			$id_suplier = $_POST['id_suplier'];
		    $nama_suplier = $_POST['nama_suplier'];
		    $alamat_suplier = $_POST['alamat_suplier'];
		     $notelp_suplier = $_POST['notelp_suplier'];

			
			$koneksi->query("INSERT INTO suplier (id_suplier,nama_suplier,alamat_suplier,notelp_suplier) VALUES('$id_suplier','$nama_suplier','$alamat_suplier','$notelp_suplier');");

				echo "<div class='alert alert-info'> Data berhasil ditambahkan!</div>";
				echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=supplier'>";
		}
	?>