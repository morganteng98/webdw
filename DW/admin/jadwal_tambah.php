<h2>Tambah Data</h2>

	<form method="post" enctype="multipart/form-data">
		<div class="form-group" style="display: none">
			<label>No</label>
			<input type="text" class="form-control" name="id_jadwal">		
		</div>

		<div class="form-group">
			<label>Hari</label>
			<input type="text" class="form-control" name="hari">		
		</div>
		<div class="form-group">
			<label>Jadwal</label>
			<input type="text" class="form-control" name="jam_kerja">		
		</div>
		
		<button class="btn btn-primary" name="save">Simpan</button>			

	</form>
	<?php 
		if (isset($_POST['save'])) {
			$id_jadwal = $_POST['id_jadwal'];
		    $hari = $_POST['hari'];
		    $jam_kerja = $_POST['jam_kerja'];
			
			$koneksi->query("INSERT INTO jadwal (id_jadwal,hari,jam_kerja) VALUES('$id_jadwal','$hari','$jam_kerja');");

				echo "<div class='alert alert-info'> Data berhasil ditambahkan!</div>";
				echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=jadwal'>";
		}
	?>