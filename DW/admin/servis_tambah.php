<h2>Tambah Data</h2>

	<form method="post" enctype="multipart/form-data">
		<div class="form-group" style="display: none">
			<label>ID</label>
			<input type="text" class="form-control" name="id_servis">		
		</div>

		<div class="form-group">
			<label>Nama</label>
			<input type="text" class="form-control" name="nama_jasa">		
		</div>
		<div class="form-group">
			<label>Keterangan</label>
			<input type="text" class="form-control" name="keterangan">		
		</div>
		<div class="form-group">
			<label>Harga Jasa</label>
			<input type="number" class="form-control" name="harga_jasa">		
		</div>
		<div class="form-group">
			<label>Jenis Jasa</label>
			<input type="text" class="form-control" name="jasa">		
		</div>
		
		<button class="btn btn-primary" name="save">Simpan</button>			

	</form>
	<?php 
		if (isset($_POST['save'])) {
			$id_servis = $_POST['id_servis'];
		    $nama_jasa = $_POST['nama_jasa'];
		    $keterangan = $_POST['keterangan'];
		     $harga_jasa = $_POST['harga_jasa'];
		     $jasa = $_POST['jasa'];
			
			$koneksi->query("INSERT INTO servis (id_servis,nama_jasa,keterangan,harga_jasa,jasa) VALUES('$id_servis','$nama_jasa','$keterangan','$harga_jasa','$jasa');");

				echo "<div class='alert alert-info'> Data berhasil ditambahkan!</div>";
				echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=servis'>";
		}
	?>